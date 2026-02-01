<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $fillable = [
        'nama',
        'nama_website',
        'komentar',
        'rate',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'rate' => 'integer'
    ];

    // Scope untuk testimoni aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk urutan berdasarkan rating tertinggi
    public function scopeTopRated($query)
    {
        return $query->orderBy('rate', 'desc');
    }
}
