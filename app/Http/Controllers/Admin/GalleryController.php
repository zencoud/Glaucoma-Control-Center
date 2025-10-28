<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GalleryController extends Controller
{
    private $imageManager;

    public function __construct()
    {
        $this->imageManager = new ImageManager(new Driver());
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = GalleryImage::ordered()->get();
        return view('admin.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // 10MB max
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $imageFile = $request->file('image');
        $originalName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $imageFile->getClientOriginalExtension();
        $filename = Str::slug($originalName) . '_' . time() . '.' . $extension;
        $thumbnailFilename = Str::slug($originalName) . '_thumb_' . time() . '.' . $extension;

        // Store original image
        $imagePath = $imageFile->storeAs('gallery', $filename, 'public');

        // Create thumbnail
        $thumbnailPath = $this->createThumbnail($imageFile, $thumbnailFilename);

        GalleryImage::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            'thumbnail_path' => $thumbnailPath,
            'is_active' => $request->boolean('is_active', true),
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Imagen agregada exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GalleryImage $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GalleryImage $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'is_active' => $request->boolean('is_active', true),
            'sort_order' => $request->sort_order ?? 0,
        ];

        // Handle new image upload
        if ($request->hasFile('image')) {
            // Delete old files
            Storage::disk('public')->delete($gallery->image_path);
            Storage::disk('public')->delete($gallery->thumbnail_path);

            $imageFile = $request->file('image');
            $originalName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $imageFile->getClientOriginalExtension();
            $filename = Str::slug($originalName) . '_' . time() . '.' . $extension;
            $thumbnailFilename = Str::slug($originalName) . '_thumb_' . time() . '.' . $extension;

            // Store new image
            $imagePath = $imageFile->storeAs('gallery', $filename, 'public');
            $thumbnailPath = $this->createThumbnail($imageFile, $thumbnailFilename);

            $data['image_path'] = $imagePath;
            $data['thumbnail_path'] = $thumbnailPath;
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Imagen actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GalleryImage $gallery)
    {
        // Delete files from storage
        Storage::disk('public')->delete($gallery->image_path);
        Storage::disk('public')->delete($gallery->thumbnail_path);

        $gallery->delete();

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Imagen eliminada exitosamente.');
    }

    /**
     * Update the order of gallery images
     */
    public function updateOrder(Request $request)
    {
        $request->validate([
            'order' => 'required|array',
            'order.*.id' => 'required|integer|exists:gallery_images,id',
            'order.*.sort_order' => 'required|integer|min:0',
        ]);

        foreach ($request->order as $item) {
            GalleryImage::where('id', $item['id'])
                ->update(['sort_order' => $item['sort_order']]);
        }

        return response()->json(['success' => true]);
    }

    /**
     * Create thumbnail from uploaded image
     */
    private function createThumbnail($imageFile, $thumbnailFilename)
    {
        $thumbnailPath = 'gallery/' . $thumbnailFilename;
        
        $image = $this->imageManager->read($imageFile);
        
        // Redimensionar manteniendo proporción y recortando para hacer cuadrada
        $image->cover(300, 300);
        
        Storage::disk('public')->put($thumbnailPath, $image->encode());
        
        return $thumbnailPath;
    }
}