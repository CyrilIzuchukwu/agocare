<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckMaintenanceMode
{
  /**
   * Handle an incoming request.
   *
   * Bypass maintenance mode for:
   * - Authenticated admins (role = 'admin')
   * - The login / logout / password routes
   * - All /admin routes
   */
  public function handle(Request $request, Closure $next): Response
  {
    // Always allow admin routes and auth routes through
    if ($request->is('admin*') || $request->is('login') || $request->is('logout') || $request->is('password*')) {
      return $next($request);
    }

    // Authenticated admins bypass maintenance
    if (Auth::check() && Auth::user()->role === 'admin') {
      return $next($request);
    }

    // Check maintenance mode from DB (cached for performance)
    $settings = Setting::first();

    if ($settings && $settings->maintenance_mode) {
      return response()->view('maintenance', [
        'message' => $settings->maintenance_message
          ?: 'We are currently performing scheduled maintenance. We will be back shortly.',
        'siteName' => $settings->site_name ?? 'AGO Care Foundation',
      ], 503);
    }

    return $next($request);
  }
}
