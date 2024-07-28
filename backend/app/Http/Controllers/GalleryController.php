<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryModel;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource for client.
     */
    public function gallery()
    {
        $response = [];
        foreach (GalleryModel::all() as $value) {
            $response[] = [
                'img' => asset("storage/image/gallery/{$value->img}"),
                'alt' => $value->alt
            ];
        }
        return response()->json($response);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = [];
        foreach (GalleryModel::all() as $value) {
            $response[] = [
                'id' => $value->id,
                'img' => asset("storage/image/gallery/{$value->img}"),
                'alt' => $value->alt
            ];
        }
        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery = GalleryModel::findOrFail($id);
        return response()->json(['success' => true, 'data' => $gallery]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        try {
            // $gallery = GalleryModel::findOrFail($id);

            // // Cek jika ada file yang diunggah
            // if ($request->hasFile('img')) {
            //     // Hapus file lama jika ada
            //     if ($gallery->img) {
            //         Storage::disk('public')->delete('images/gallery/' . $gallery->image);
            //     }

            //     // Simpan file baru
            //     $file = $request->file('img');
            //     $path = $file->store('images/gallery', 'public');
            //     $validated['img'] = basename($path);
            // }

            // // Perbarui data
            // $gallery->update($validated);

            return response()->json([
                'success' => true,
                'message' => 'Gallery updated successfully',
                'data' => $request->all()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update gallery: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
