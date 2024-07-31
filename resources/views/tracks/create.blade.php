@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Track to Album {{ $albumId }}</h1>
    <form action="{{ route('tracks.store') }}" method="POST">
        @csrf
        <input type="hidden" name="album_id" value="{{ $albumId }}">
        <div class="form-group">
            <label for="name">Track Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Track</button>
    </form>
</div>
@endsection
