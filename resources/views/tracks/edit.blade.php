@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Track</h1>
    <form action="{{ route('tracks.update', $track->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="album_id" value="{{ $track->album_id }}">
        <div class="form-group">
            <label for="name">Track Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $track->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Track</button>
    </form>
</div>
@endsection
