@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar álbum</h1>
    <form action="{{ route('albums.update', $album->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome do álbum</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $album->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
