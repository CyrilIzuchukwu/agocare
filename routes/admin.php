<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SeoSettingsController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TeamMemberController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
  ->name('admin.')
  ->middleware('auth', 'can:access-admin-dashboard')
  ->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('team', TeamMemberController::class)
      ->except('show')
      ->parameters(['team' => 'teamMember']);


    Route::prefix('profile')
      ->name('profile.')
      ->controller(ProfileController::class)
      ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::patch('/', 'update')->name('update');
        Route::patch('/password', 'updatePassword')->name('password');
      });

    // Settings Management
    Route::prefix('settings')
      ->name('settings.')
      ->controller(SettingsController::class)
      ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update', 'update')->name('update');
        Route::post('/maintenance', 'toggleMaintenance')->name('maintenance');
      });

    // Blog Management
    Route::prefix('blog')
      ->name('blog.')
      ->controller(BlogController::class)
      ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{post}/edit', 'edit')->name('edit');
        Route::patch('/{post}', 'update')->name('update');
        Route::delete('/{post}', 'destroy')->name('destroy');
      });

    // SEO Settings
    Route::prefix('seo')
      ->name('seo.')
      ->controller(SeoSettingsController::class)
      ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update', 'update')->name('update');
      });
  });
