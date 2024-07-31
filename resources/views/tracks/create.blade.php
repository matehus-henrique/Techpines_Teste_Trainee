@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar faixa ao álbum</h1>
    <form action="{{ route('tracks.store') }}" method="POST">
        @csrf
        <input type="hidden" name="album_id" value="{{ $albumId }}">
        <div class="form-group">
            <label for="name">Nome da faixa</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar faixa</button>
    </form>
</div>
@endsection
