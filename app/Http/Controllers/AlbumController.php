<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        return Album::with('tracks')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return Album::create($request->all());
    }

    public function show($id)
    {
        return Album::with('tracks')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $album = Album::findOrFail($id);
        $album->update($request->all());

        return $album;
    }

    public function destroy($id)
    {
        Album::findOrFail($id)->delete();

        return response()->noContent();
    }
}
