<?php

use App\Http\Middleware\CheckMaintenanceMode;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
  ->withRouting(
    web: __DIR__ . '/../routes/web.php',
    commands: __DIR__ . '/../routes/console.php',
    health: '/up',
  )
  ->withMiddleware(function (Middleware $middleware): void {
    $middleware->alias([
      'redirect.if.authenticated' => RedirectIfAuthenticated::class,
      'maintenance'               => CheckMaintenanceMode::class,
    ]);

    // Apply maintenance check to all web requests
    $middleware->appendToGroup('web', CheckMaintenanceMode::class);

    // ForgeLayer webhooks come from their server, not a browser session,
    // so they can't send a CSRF token — exempt this route from CSRF checks.
    $middleware->validateCsrfTokens(except: [
        'webhooks/forgelayer',
    ]);
})
  ->withExceptions(function (Exceptions $exceptions): void {
    //
  })->create();
