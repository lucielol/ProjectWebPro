<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadLogo(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk jenis file logo
        ]);

        if ($request->file('logo')->isValid()) {
            $logoPath = $request->file('logo')->store('image', 'public'); // Simpan file logo di storage/public/logos

            // Ambil URL logo yang baru diunggah
            $logoUrl = asset('storage/' . $logoPath);

            return response()->json([
                'success' => true,
                'url' => $logoUrl,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid logo file.',
        ], 400);
    }
}
