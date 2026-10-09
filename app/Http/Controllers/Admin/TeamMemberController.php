<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class TeamMemberController extends Controller
{
    public function index()
    {
        $members = TeamMember::ordered()->get()->groupBy('group');

        return view('admin.team.index', compact('members'), ['pageTitle' => 'Team Members']);
    }

    public function create()
    {
        return view('admin.team.form', [
            'member' => new TeamMember(),
            'groups' => TeamMember::GROUPS,
            'pageTitle' => 'Add Team Member',
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['image'] = $this->storeImage($request);
        $data['show_on_homepage'] = $request->boolean('show_on_homepage');
        $data['is_published'] = $request->boolean('is_published');
        TeamMember::create($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member added successfully.');
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team.form', [
            'member' => $teamMember,
            'groups' => TeamMember::GROUPS,
            'pageTitle' => 'Edit Team Member',
        ]);
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $data = $this->validated($request);
        $data['show_on_homepage'] = $request->boolean('show_on_homepage');
        $data['is_published'] = $request->boolean('is_published');

        if ($request->hasFile('image')) {
            $oldImage = $teamMember->image;
            $data['image'] = $this->storeImage($request);
            $this->deleteImage($oldImage);
        }

        $teamMember->update($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(TeamMember $teamMember)
    {
        $this->deleteImage($teamMember->image);
        $teamMember->delete();

        return redirect()->route('admin.team.index')->with('success', 'Team member deleted successfully.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'position' => ['required', 'string', 'max:150'],
            'group' => ['required', Rule::in(array_keys(TeamMember::GROUPS))],
            'bio' => ['nullable', 'string', 'max:5000'],
            'image' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:3072'],
            'sort_order' => ['required', 'integer', 'min:0', 'max:9999'],
        ]);
    }

    private function storeImage(Request $request): ?string
    {
        if (! $request->hasFile('image')) {
            return null;
        }

        $image = $request->file('image');
        return $image->storeAs('team', Str::uuid().'.'.$image->getClientOriginalExtension(), 'public');
    }

    private function deleteImage(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
