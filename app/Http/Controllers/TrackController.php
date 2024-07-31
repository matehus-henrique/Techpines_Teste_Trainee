<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;

class TrackController extends Controller
{
    public function indexView($albumId)
    {
        $tracks = Track::where('album_id', $albumId)->get();
        return view('tracks.index', compact('tracks', 'albumId'));
    }

    public function createView($albumId)
    {
        return view('tracks.create', compact('albumId'));
    }

    public function editView($id)
    {
        $track = Track::findOrFail($id);
        return view('tracks.edit', compact('track'));
    }

    public function index()
    {
        return Track::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'album_id' => 'required|exists:albums,id',
        ]);

        Track::create($request->all());
        return redirect()->route('tracks.index', $request->album_id);
    }

    public function show($id)
    {
        return Track::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'album_id' => 'required|exists:albums,id',
        ]);

        $track = Track::findOrFail($id);
        $track->update($request->all());

        return redirect()->route('tracks.index', $track->album_id);
    }

    public function destroy($id)
    {
        $track = Track::findOrFail($id);
        $track->delete();

        return redirect()->route('tracks.index', $track->album_id);
    }
}
