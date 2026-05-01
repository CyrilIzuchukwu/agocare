<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/our-services', [PageController::class, 'services'])->name('services');
Route::get('/campaigns', [PageController::class, 'campaigns'])->name('campaigns');
Route::get('/ago-projects', [PageController::class, 'projects'])->name('projects');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');

// Blog
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogDetails'])->name('blog.details');


// Join Us group
Route::prefix('join-us')->name('')->group(function () {
  Route::get('/career', [PageController::class, 'career'])->name('career');
  Route::get('/apply-online', [PageController::class, 'apply'])->name('apply');
  Route::get('/volunteer', [PageController::class, 'volunteer'])->name('volunteer');
  Route::get('/donate', [PageController::class, 'donate'])->name('donate');
});


Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
