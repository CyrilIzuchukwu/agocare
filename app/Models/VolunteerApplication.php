<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VolunteerApplication extends Model
{
    public const STATUSES = [
        'pending' => 'Pending',
        'reviewing' => 'Reviewing',
        'accepted' => 'Accepted',
        'rejected' => 'Rejected',
    ];

    public const AREAS = [
        'Medical Outreach', 'Education & Tutoring', 'Media & Communications',
        'Community Outreach', 'Skills & Vocational Training', 'Admin & IT Support',
        'Fundraising & Partnerships', 'Event Support', 'Other',
    ];

    protected $fillable = [
        'reference', 'first_name', 'last_name', 'email', 'phone', 'location',
        'occupation', 'area', 'work_mode', 'availability', 'hours_per_week',
        'skills', 'experience', 'motivation', 'profile_photo', 'cv', 'status',
        'admin_notes', 'reviewed_at', 'team_member_id',
    ];

    protected $casts = ['reviewed_at' => 'datetime', 'hours_per_week' => 'integer'];

    public function teamMember(): BelongsTo
    {
        return $this->belongsTo(TeamMember::class);
    }

    public function getFullNameAttribute(): string
    {
        return trim($this->first_name.' '.$this->last_name);
    }
}
