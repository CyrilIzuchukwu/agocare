<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{
  public function index()
  {
    $settings = Setting::first() ?? new Setting();
    return view('admin.settings.index', compact('settings'));
  }

  public function update(Request $request)
  {
    $request->validate([
      'site_name'           => ['required', 'string', 'max:255'],
      'site_email'          => ['nullable', 'email', 'max:255'],
      'site_phone'          => ['nullable', 'string'],
      'site_address'        => ['nullable', 'string', 'max:255'],
      'site_fb'             => ['nullable', 'url', 'max:255'],
      'site_instagram'      => ['nullable', 'url', 'max:255'],
      'site_twitter'        => ['nullable', 'url', 'max:255'],
      'site_youtube'        => ['nullable', 'url', 'max:255'],
    ]);

    $settings = Setting::first() ?? new Setting();

    $settings->fill([
      'site_name'    => $request->site_name,
      'site_email'   => $request->site_email,
      'site_phone'   => $request->site_phone,
      'site_address' => $request->site_address,
      'site_fb'      => $request->site_fb,
      'site_instagram' => $request->site_instagram,
      'site_twitter' => $request->site_twitter,
      'site_youtube' => $request->site_youtube,
    ])->save();

    Cache::forget('site_settings');

    return redirect()->back()->with('success', 'Settings updated successfully.');
  }

  /**
   * Toggle maintenance mode on/off.
   */
  public function toggleMaintenance(Request $request)
  {
    $request->validate([
      'maintenance_message' => ['nullable', 'string', 'max:500'],
    ]);

    $settings = Setting::first() ?? new Setting();

    $newState = ! $settings->maintenance_mode;

    $settings->update([
      'maintenance_mode'    => $newState,
      'maintenance_message' => $request->maintenance_message ?? $settings->maintenance_message,
    ]);

    Cache::forget('site_settings');

    $status = $newState ? 'enabled' : 'disabled';

    return redirect()->back()->with('success', "Maintenance mode {$status} successfully.");
  }
}
