<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
  protected $fillable = [
    'title',
    'slug',
    'category',
    'featured_image',
    'body',
    'author',
    'status',
  ];

  public static function generateSlug(string $title): string
  {
    $slug = Str::slug($title);
    $count = static::where('slug', 'like', $slug . '%')->count();
    return $count ? $slug . '-' . ($count + 1) : $slug;
  }

  public function getExcerptAttribute(): string
  {
    return Str::limit(strip_tags($this->body), 160);
  }

  public function scopePublished($query)
  {
    return $query->where('status', 'published');
  }
}
