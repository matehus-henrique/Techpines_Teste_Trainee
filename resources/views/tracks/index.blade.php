@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tracks for Album {{ $albumId }}</h1>
    <a href="{{ route('tracks.create', $albumId) }}" class="btn btn-primary">Add Track</a>
    <ul>
        @foreach ($tracks as $track)
        <li>
            {{ $track->name }}
            <a href="{{ route('tracks.edit', $track->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('tracks.destroy', $track->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection
