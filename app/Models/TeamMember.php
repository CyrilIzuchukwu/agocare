<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    public const GROUPS = [
        'leadership' => 'Founder / CEO / President',
        'board' => 'Board of Directors',
        'executive' => 'Executive Team',
        'volunteer' => 'Volunteers',
    ];

    protected $fillable = [
        'name', 'position', 'group', 'bio', 'image',
        'show_on_homepage', 'is_published', 'sort_order',
    ];

    protected $casts = [
        'show_on_homepage' => 'boolean',
        'is_published' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    public function getGroupLabelAttribute(): string
    {
        return self::GROUPS[$this->group] ?? ucfirst($this->group);
    }
}
