@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Álbuns</h1>
    <a href="{{ route('albums.create') }}" class="btn btn-primary">Adicionar álbum</a>
    <ul>
        @foreach ($albums as $album)
        <li>
            {{ $album->name }}
            <a href="{{ route('tracks.index', $album->id) }}" class="btn btn-secondary">Ver trilhas</a>
            <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('albums.destroy', $album->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection
