<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Porto extends Model
{
    protected $fillable = [
        'title',
        'description',
        'url',
        'laptop_image',
        'laptop_url',
        'hp_image',
        'hp_url',
        'full_image',
        'full_url',
        'is_featured',
        'is_active',
        'order'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    // Scope untuk portfolio aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk portfolio yang ditampilkan (featured)
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope untuk urutan portfolio
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }
}
