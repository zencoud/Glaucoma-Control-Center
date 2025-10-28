<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class GalleryImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'thumbnail_path',
        'is_active',
        'sort_order',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Get the public URL for the image.
     */
    public function getImageUrlAttribute(): string
    {
        return Storage::url($this->image_path);
    }

    /**
     * Get the public URL for the thumbnail.
     */
    public function getThumbnailUrlAttribute(): string
    {
        return Storage::url($this->thumbnail_path);
    }

    /**
     * Scope a query to only include active images.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order images by sort_order.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }

    /**
     * Scope a query to get the latest images.
     */
    public function scopeLatest($query, $limit = null)
    {
        $query = $query->orderBy('created_at', 'desc');
        
        if ($limit) {
            return $query->limit($limit);
        }
        
        return $query;
    }
}