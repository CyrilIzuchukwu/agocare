<?php

use App\Models\TeamMember;
use App\Models\User;
use App\Models\VolunteerApplication;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function validVolunteerApplication(array $overrides = []): array
{
    return array_merge([
        'first_name' => 'Ada',
        'last_name' => 'Okafor',
        'email' => 'ada@example.com',
        'phone' => '+2348012345678',
        'location' => 'Awka, Anambra',
        'occupation' => 'Teacher',
        'area' => 'Education & Tutoring',
        'work_mode' => 'Hybrid',
        'availability' => 'Saturdays and weekday evenings',
        'hours_per_week' => 6,
        'skills' => 'Teaching, mentoring and event coordination',
        'experience' => 'Two years of community tutoring.',
        'motivation' => 'I want to use my teaching experience to support children and help create more inclusive learning opportunities.',
        'message' => 'I want to use my teaching experience to support children and help create more inclusive learning opportunities.',
        'website' => '',
    ], $overrides);
}

it('accepts a valid public volunteer application', function () {
    $this->post(route('volunteer.apply'), validVolunteerApplication())
        ->assertRedirect(route('volunteer').'#volunteer-form')
        ->assertSessionHas('success');

    $application = VolunteerApplication::first();
    expect($application)->not->toBeNull()
        ->and($application->status)->toBe('pending')
        ->and($application->reference)->toStartWith('AGO-VOL-');
});

it('validates required volunteer application details', function () {
    $this->post(route('volunteer.apply'), [])
        ->assertSessionHasErrors(['first_name', 'last_name', 'email', 'phone']);
});

it('protects volunteer applications from guests', function () {
    $application = VolunteerApplication::create(array_merge(
        validVolunteerApplication(),
        ['reference' => 'AGO-VOL-TEST01', 'status' => 'pending']
    ));

    $this->get(route('admin.volunteer-applications.show', $application))->assertRedirect();
});

it('allows an admin to accept and convert an applicant to a draft volunteer', function () {
    $admin = User::factory()->create();
    $admin->forceFill(['role' => 'admin'])->save();
    $application = VolunteerApplication::create(array_merge(
        validVolunteerApplication(),
        ['reference' => 'AGO-VOL-TEST02', 'status' => 'pending']
    ));

    $this->actingAs($admin)
        ->patch(route('admin.volunteer-applications.update', $application), [
            'status' => 'accepted',
            'admin_notes' => 'Good fit after review.',
        ])->assertRedirect();

    $this->actingAs($admin)
        ->post(route('admin.volunteer-applications.add-to-team', $application))
        ->assertRedirect();

    $application->refresh();
    $member = TeamMember::find($application->team_member_id);
    expect($application->status)->toBe('accepted')
        ->and($member)->not->toBeNull()
        ->and($member->group)->toBe('volunteer')
        ->and($member->is_published)->toBeFalse()
        ->and($member->show_on_homepage)->toBeFalse();
});
