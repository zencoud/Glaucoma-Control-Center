<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\GalleryController;

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

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin routes (protected by auth middleware)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('gallery', AdminGalleryController::class);
    Route::post('gallery/update-order', [AdminGalleryController::class, 'updateOrder'])->name('gallery.update-order');
    
    // Contact management
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class)->only(['index', 'show', 'destroy']);
    Route::post('contacts/{contact}/resend-email', [\App\Http\Controllers\Admin\ContactController::class, 'resendEmail'])->name('contacts.resend-email');
    Route::post('contacts/{contact}/mark-processed', [\App\Http\Controllers\Admin\ContactController::class, 'markAsProcessed'])->name('contacts.mark-processed');
    
    // Settings
    Route::get('settings', [\App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings.index');
    Route::post('settings/admin-email', [\App\Http\Controllers\Admin\SettingsController::class, 'updateAdminEmail'])->name('settings.update-admin-email');
});
