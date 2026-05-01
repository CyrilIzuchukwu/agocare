<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SeoSettingsController extends Controller
{
  public function index()
  {
    $seo = SeoSetting::first() ?? new SeoSetting();
    return view('admin.seo.index', compact('seo'), ['pageTitle' => 'SEO Settings']);
  }

  public function update(Request $request)
  {
    $request->validate([
      'meta_title'               => ['nullable', 'string', 'max:70'],
      'meta_description'         => ['nullable', 'string', 'max:160'],
      'meta_keywords'            => ['nullable', 'string', 'max:500'],
      'robots'                   => ['required', 'in:index, follow,noindex, nofollow,index, nofollow,noindex, follow'],
      'canonical_url'            => ['nullable', 'url', 'max:255'],
      'og_title'                 => ['nullable', 'string', 'max:95'],
      'og_description'           => ['nullable', 'string', 'max:200'],
      'og_image'                 => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
      'og_type'                  => ['required', 'in:website,article,organization'],
      'twitter_card'             => ['required', 'in:summary,summary_large_image'],
      'twitter_title'            => ['nullable', 'string', 'max:70'],
      'twitter_description'      => ['nullable', 'string', 'max:200'],
      'twitter_image'            => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
      'twitter_site'             => ['nullable', 'string', 'max:50'],
      'schema_type'              => ['nullable', 'string', 'max:50'],
      'schema_name'              => ['nullable', 'string', 'max:255'],
      'schema_url'               => ['nullable', 'url', 'max:255'],
      'schema_logo'              => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:2048'],
      'google_analytics_id'      => ['nullable', 'string', 'max:50'],
      'google_tag_manager_id'    => ['nullable', 'string', 'max:50'],
      'google_site_verification' => ['nullable', 'string', 'max:255'],
      'facebook_pixel_id'        => ['nullable', 'string', 'max:50'],
    ]);

    $seo = SeoSetting::first() ?? new SeoSetting();

    $data = $request->except(['_token', 'og_image', 'twitter_image', 'schema_logo']);

    // Handle OG image upload
    if ($request->hasFile('og_image')) {
      if ($seo->og_image) Storage::disk('public')->delete($seo->og_image);
      $data['og_image'] = $request->file('og_image')
        ->storeAs('seo', Str::uuid() . '.' . $request->file('og_image')->extension(), 'public');
    }

    // Handle Twitter image upload
    if ($request->hasFile('twitter_image')) {
      if ($seo->twitter_image) Storage::disk('public')->delete($seo->twitter_image);
      $data['twitter_image'] = $request->file('twitter_image')
        ->storeAs('seo', Str::uuid() . '.' . $request->file('twitter_image')->extension(), 'public');
    }

    // Handle Schema logo upload
    if ($request->hasFile('schema_logo')) {
      if ($seo->schema_logo) Storage::disk('public')->delete($seo->schema_logo);
      $data['schema_logo'] = $request->file('schema_logo')
        ->storeAs('seo', Str::uuid() . '.' . $request->file('schema_logo')->extension(), 'public');
    }

    $seo->fill($data)->save();

    SeoSetting::clearCache();

    return redirect()->back()->with('success', 'SEO settings updated successfully.');
  }
}
