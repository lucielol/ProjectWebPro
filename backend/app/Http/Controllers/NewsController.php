<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource for client.
     */
    public function news()
    {
        $news = News::all()->map(function ($item) {
            return collect($item)->except('id', 'created_at', 'updated_at');
        });

        return response()->json($news);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return response()->json($news);
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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $news = News::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'News created successfully',
            'data' => $news
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $newsItem = News::where('id', $uuid)->first();

        if (!$newsItem) {
            return response()->json([
                'status' => false,
                'message' => 'News not found'
            ], 404);
        }

        return response()->json($newsItem);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'icon' => 'required|string',
        ]);

        $news = News::findOrFail($id);
        $news->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'News updated successfully',
            'data' => $news
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return response()->json([
            'success' => true,
            'message' => 'News deleted successfully'
        ]);
    }
}
