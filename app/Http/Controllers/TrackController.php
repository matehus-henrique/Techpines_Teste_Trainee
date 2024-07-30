<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;

class TrackController extends Controller
{
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

        return Track::create($request->all());
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

        return $track;
    }

    public function destroy($id)
    {
        Track::findOrFail($id)->delete();

        return response()->noContent();
    }
}
