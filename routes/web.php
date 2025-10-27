<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/quienes-somos', 'about');
Route::view('/mision-vision', 'mission');
Route::view('/valores', 'values');
Route::view('/servicios', 'services');
Route::view('/contacto', 'contact');
