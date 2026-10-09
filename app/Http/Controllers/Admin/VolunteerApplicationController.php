<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\VolunteerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class VolunteerApplicationController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->string('status')->toString();
        $applications = VolunteerApplication::query()
            ->when(array_key_exists($status, VolunteerApplication::STATUSES), fn ($query) => $query->where('status', $status))
            ->latest()->paginate(20)->withQueryString();
        $counts = VolunteerApplication::selectRaw('status, count(*) as total')->groupBy('status')->pluck('total', 'status');

        return view('admin.volunteer-applications.index', compact('applications', 'counts', 'status'),
            ['pageTitle' => 'Volunteer Applications']);
    }

    public function show(VolunteerApplication $volunteerApplication)
    {
        return view('admin.volunteer-applications.show', compact('volunteerApplication'),
            ['pageTitle' => 'Volunteer Application']);
    }

    public function update(Request $request, VolunteerApplication $volunteerApplication)
    {
        $data = $request->validate([
            'status' => ['required', Rule::in(array_keys(VolunteerApplication::STATUSES))],
            'admin_notes' => ['nullable', 'string', 'max:5000'],
        ]);
        $data['reviewed_at'] = now();
        $volunteerApplication->update($data);

        return back()->with('success', 'Application status updated.');
    }

    public function downloadCv(VolunteerApplication $volunteerApplication)
    {
        abort_unless($volunteerApplication->cv && Storage::disk('local')->exists($volunteerApplication->cv), 404);

        return Storage::disk('local')->download(
            $volunteerApplication->cv,
            $volunteerApplication->full_name.'-CV.'.pathinfo($volunteerApplication->cv, PATHINFO_EXTENSION)
        );
    }

    public function addToTeam(VolunteerApplication $volunteerApplication)
    {
        abort_unless($volunteerApplication->status === 'accepted', 422, 'Accept this application before adding it to the team.');

        if ($volunteerApplication->team_member_id) {
            return redirect()->route('admin.team.edit', $volunteerApplication->team_member_id)
                ->with('info', 'This applicant is already in the team list.');
        }

        $imagePath = null;
        if ($volunteerApplication->profile_photo && Storage::disk('public')->exists($volunteerApplication->profile_photo)) {
            $extension = pathinfo($volunteerApplication->profile_photo, PATHINFO_EXTENSION);
            $imagePath = 'team/'.uniqid('volunteer-', true).'.'.$extension;
            Storage::disk('public')->copy($volunteerApplication->profile_photo, $imagePath);
        }

        $member = TeamMember::create([
            'name' => $volunteerApplication->full_name,
            'position' => $volunteerApplication->area.' Volunteer',
            'group' => 'volunteer',
            'bio' => $volunteerApplication->motivation,
            'image' => $imagePath,
            'show_on_homepage' => false,
            'is_published' => false,
            'sort_order' => 0,
        ]);
        $volunteerApplication->update(['team_member_id' => $member->id]);

        return redirect()->route('admin.team.edit', $member)
            ->with('success', 'Volunteer added as a draft. Review the profile before publishing it.');
    }
}
