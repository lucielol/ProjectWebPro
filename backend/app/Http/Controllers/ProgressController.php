<?php

namespace App\Http\Controllers;

use App\Models\ProgressModel;
use Illuminate\Http\Request;


class ProgressController extends Controller
{
    /**
     * Display a listing of the resource for client
     */
    public function progress()
    {
        $progress = ProgressModel::all()->map(function ($item) {
            return collect($item)->except('id');
        });

        return response()->json($progress);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progress = ProgressModel::all();

        return response()->json($progress);
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
        $request->validate([
            'title' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
        ]);

        $progress = new ProgressModel();
        $progress->title = $request->title;
        $progress->percentage = $request->percentage;
        $progress->save();

        return response()->json($progress, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $progress = ProgressModel::findOrFail($id);
        return response()->json($progress);
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
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
        ]);

        $progress = ProgressModel::findOrFail($id);
        $progress->title = $request->title;
        $progress->percentage = $request->percentage;
        $progress->save();

        return response()->json($progress);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
