<?php

use App\Models\TeamMember;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('shows published team members on the appropriate public pages', function () {
    $leader = TeamMember::create([
        'name' => 'AGO Foundation Leader',
        'position' => 'Founder & CEO',
        'group' => 'leadership',
        'bio' => 'Leading the foundation.',
        'show_on_homepage' => true,
        'is_published' => true,
        'sort_order' => 1,
    ]);

    TeamMember::create([
        'name' => 'AGO Foundation Secretary',
        'position' => 'Foundation Secretary',
        'group' => 'executive',
        'show_on_homepage' => true,
        'is_published' => true,
        'sort_order' => 1,
    ]);

    TeamMember::create([
        'name' => 'AGO Foundation Treasurer',
        'position' => 'Treasurer',
        'group' => 'executive',
        'show_on_homepage' => false,
        'is_published' => true,
        'sort_order' => 2,
    ]);

    $this->get(route('home'))
        ->assertOk()
        ->assertSee($leader->name)
        ->assertSee('AGO Foundation Secretary');

    $aboutResponse = $this->get(route('about'))
        ->assertOk()
        ->assertSee($leader->name)
        ->assertSee('Executive Team')
        ->assertSee('AGO Foundation Secretary')
        ->assertSee('AGO Foundation Treasurer')
        ->assertSee('"loop":true', false);

    expect(substr_count($aboutResponse->getContent(), 'AGO Foundation Secretary'))->toBeGreaterThanOrEqual(4);
});

it('does not show draft members publicly', function () {
    TeamMember::create([
        'name' => 'Unpublished Volunteer',
        'position' => 'Volunteer',
        'group' => 'volunteer',
        'show_on_homepage' => true,
        'is_published' => false,
        'sort_order' => 1,
    ]);

    $this->get(route('home'))->assertDontSee('Unpublished Volunteer');
});

it('protects team management from guests', function () {
    $this->get(route('admin.team.index'))->assertRedirect();
});
