<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SeoSetting extends Model
{
  protected $table = 'seo_settings';

  protected $fillable = [
    'meta_title',
    'meta_description',
    'meta_keywords',
    'robots',
    'canonical_url',
    'og_title',
    'og_description',
    'og_image',
    'og_type',
    'twitter_card',
    'twitter_title',
    'twitter_description',
    'twitter_image',
    'twitter_site',
    'schema_type',
    'schema_name',
    'schema_url',
    'schema_logo',
    'google_analytics_id',
    'google_tag_manager_id',
    'google_site_verification',
    'facebook_pixel_id',
  ];

  /**
   * Get the singleton SEO settings, cached for performance.
   */
  public static function getCached(): self
  {
    return Cache::rememberForever('seo_settings', function () {
      return static::first() ?? new static();
    });
  }

  /**
   * Clear the SEO settings cache.
   */
  public static function clearCache(): void
  {
    Cache::forget('seo_settings');
  }
}
