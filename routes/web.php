<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SitemapController;

// Public routes
Route::view('/', 'home');
Route::view('/quienes-somos', 'about');
Route::view('/mision-vision', 'mission');
Route::view('/valores', 'values');
Route::view('/servicios', 'services');
Route::get('/contacto', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
Route::view('/aviso-de-privacidad', 'privacy');
Route::view('/breadcrumbs-demo', 'breadcrumbs-demo');
Route::get('/galeria', [GalleryController::class, 'index'])->name('gallery');

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin routes (protected by auth middleware)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('gallery', AdminGalleryController::class);
    Route::post('gallery/update-order', [AdminGalleryController::class, 'updateOrder'])->name('gallery.update-order');
});