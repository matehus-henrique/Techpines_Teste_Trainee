@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar álbum</h1>
    <form action="{{ route('albums.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome do álbum</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
