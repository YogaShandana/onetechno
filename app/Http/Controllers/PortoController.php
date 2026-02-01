<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Porto;
use App\Models\Testimoni;

class PortoController extends Controller
{
    public function index()
    {
        $portos = Porto::active()->ordered()->get();
        $testimonis = Testimoni::active()->topRated()->get();
        
        return view('welcome', compact('portos', 'testimonis'));
    }
    
    public function storeTestimoni(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
            'asal' => 'required|string|max:255'
        ]);
        
        try {
            Testimoni::create([
                'nama' => $validated['nama'],
                'rate' => $validated['rating'],
                'komentar' => $validated['comment'],
                'nama_website' => $validated['asal'],
                'is_active' => false // Admin needs to approve
            ]);
            
            return response()->json([
                'success' => true,
                'message' => [
                    'id' => 'Testimoni berhasil dikirim!',
                    'en' => 'Testimonial sent successfully!'
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => [
                    'id' => 'Terjadi kesalahan saat menyimpan testimoni.',
                    'en' => 'An error occurred while saving testimonial.'
                ]
            ], 500);
        }
    }
}
