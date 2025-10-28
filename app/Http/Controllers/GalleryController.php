<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display the gallery page with all active images.
     */
    public function index()
    {
        $images = GalleryImage::active()->ordered()->get();
        
        return view('gallery', compact('images'));
    }
}