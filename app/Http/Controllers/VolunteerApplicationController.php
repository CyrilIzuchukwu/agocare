<?php

namespace App\Http\Controllers;

use App\Models\VolunteerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class VolunteerApplicationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:80'],
            'last_name' => ['required', 'string', 'max:80'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:40'],
            'location' => ['nullable', 'string', 'max:150'],
            'occupation' => ['nullable', 'string', 'max:150'],
            'area' => ['nullable', Rule::in(VolunteerApplication::AREAS)],
            'work_mode' => ['nullable', Rule::in(['On-site', 'Remote', 'Hybrid'])],
            'availability' => ['nullable', 'string', 'max:150'],
            'hours_per_week' => ['nullable', 'integer', 'min:1', 'max:80'],
            'skills' => ['nullable', 'string', 'max:2000'],
            'experience' => ['nullable', 'string', 'max:3000'],
            'message' => ['nullable', 'string', 'max:5000'],
            'profile_photo' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:3072'],
            'cv' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
            'website' => ['nullable', 'max:0'],
        ]);

        $data['reference'] = 'AGO-VOL-'.now()->format('ymd').'-'.Str::upper(Str::random(6));
        $data['location'] = $data['location'] ?? 'Not supplied';
        $data['area'] = $data['area'] ?? 'Other';
        $data['work_mode'] = $data['work_mode'] ?? 'Flexible';
        $data['availability'] = $data['availability'] ?? 'Not supplied';
        $data['motivation'] = $data['message'] ?? 'No additional message supplied.';
        $data['profile_photo'] = $request->file('profile_photo')?->store('volunteer-applications/photos', 'public');
        $data['cv'] = $request->file('cv')?->store('volunteer-applications/cvs', 'local');
        unset($data['message'], $data['website']);

        $application = VolunteerApplication::create($data);

        return redirect()->to(route('volunteer').'#volunteer-form')->with('success',
            "Thank you! Your volunteer application ({$application->reference}) has been received."
        );
    }
}
