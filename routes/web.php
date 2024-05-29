<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CentralController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TinyMCEController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TourArticleController;
use App\Http\Controllers\TourCategoryController;

// MAIN PAGE
Route::get('/', [CentralController::class, 'index'])->name('central');
Route::get('/login', [AuthController::class, 'LoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'authLogin'])->name('login');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'authRegister'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// AUTH ADMIN PAGE
Route::middleware(['isuser'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
    Route::post('/artikels/{slug}/comments/reply', [KomenController::class, 'reply'])->name('komens.reply');
    Route::post('/upload', [TinyMCEController::class, 'upload'])->name('upload');
    
    Route::resource('artikels', ArtikelController::class)->except(['index', 'show']);

    Route::resource('gallery', GalleryController::class)->except(['index', 'show']);
    Route::resource('tours', TourController::class)->except(['index', 'show']);
    Route::resource('tourarticles', TourArticleController::class)->parameters([
        'tourarticles' => 'slug'
    ])->except(['index', 'show']);
    Route::resource('tourcategories', TourCategoryController::class)->parameters([
        'tourcategories' => 'slug'
    ])->except(['index', 'show']);
    Route::resource('categories', CategoryController::class)->except([ 'show']);
    // Route::resource('categories', CategoryController::class)->except(['index', 'show']);

    Route::get('tourcategories', [TourCategoryController::class, 'index'])->name('tourcategories.index');

});

// CRUD PAGE
Route::get('artikels', [ArtikelController::class, 'index'])->name('artikels.index');
Route::get('artikels/{artikel}', [ArtikelController::class, 'show'])->name('artikels.show');

Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('gallery/{gallery}', [GalleryController::class, 'show'])->name('gallery.show');

Route::get('tours', [TourController::class, 'index'])->name('tours.index');
Route::get('tours/{tour}', [TourController::class, 'show'])->name('tours.show');

Route::get('tourarticles', [TourArticleController::class, 'index'])->name('tourarticles.index');
Route::get('tourarticles/{slug}', [TourArticleController::class, 'show'])->name('tourarticles.show');

Route::get('tourcategories/{slug}', [TourCategoryController::class, 'show'])->name('tourcategories.show');

// Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

// Side-Page
Route::get('about', [CentralController::class, 'about'])->name('central.about');
Route::get('tour-policies', [CentralController::class, 'policies'])->name('central.policies');
Route::get('partner', [CentralController::class, 'partner'])->name('central.partner');
Route::get('tips', [CentralController::class, 'tips'])->name('central.tips');
Route::get('deals', [CentralController::class, 'deals'])->name('central.deals');
Route::get('review', [CentralController::class, 'review'])->name('central.review');


Route::post('/artikels/{slug}/komens', [KomenController::class, 'store'])->name('komens.store');
Route::get('/pencarian', [CentralController::class, 'search'])->name('pencarian');