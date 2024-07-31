<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function indexView()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    public function createView()
    {
        return view('albums.create');
    }

    public function editView($id)
    {
        $album = Album::findOrFail($id);
        return view('albums.edit', compact('album'));
    }

    public function index()
    {
        return Album::with('tracks')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Album::create($request->all());
        return redirect()->route('albums.index');
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

        return redirect()->route('albums.index');
    }

    public function destroy($id)
    {
        Album::findOrFail($id)->delete();
        return redirect()->route('albums.index');
    }
}
