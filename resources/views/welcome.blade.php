<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
<div class="welcome-container">
    <div class="welcome-header">
        <h1>Welcome to Discography Manager</h1>
        <p>Your go-to application for managing and organizing your music albums and tracks.</p>
    </div>
    <div class="menu">
        <a href="{{ route('albums.index') }}" class="btn btn-primary">View Albums</a>
        <a href="{{ route('albums.create') }}" class="btn btn-primary">Add New Album</a>
        
        <a href="{{ route('tracks.index', ['id' => 1]) }}" class="btn btn-primary">View Tracks (Album 1)</a>
    </div>
</div>
@endsection
