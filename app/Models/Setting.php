<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

  use HasFactory;

  protected $table = 'settings';

  protected $fillable = [
    'site_name',
    'site_email',
    'site_phone',
    'site_address',
    'site_fb',
    'site_instagram',
    'site_twitter',
    'site_youtube',
    'maintenance_mode',
    'maintenance_message',
  ];

  protected $casts = [
    'maintenance_mode' => 'boolean',
  ];



  /**
   * Get the latest Site settings.
   *
   * @return Setting|null
   */
  public static function getLatest(): ?Setting
  {
    return self::latest()->first();
  }
}
