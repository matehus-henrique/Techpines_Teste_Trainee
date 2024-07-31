

@extends('layouts.app')

@section('content')
<div class="welcome-container">
    <div class="welcome-header">
        <h1>Bem vindo  Discography Manager  Tião Carreiro e Pardinho </h1>
        <p>Seu aplicativo ideal para gerenciar e organizar seus álbuns e faixas de música da dupla Tião Carreiro e Pardinho </p>
    </div>
    <div class="menu">
        <a href="{{ route('albums.index') }}" class="btn btn-primary">Ver álbuns</a>
        <a href="{{ route('albums.create') }}" class="btn btn-primary">Adicionar novo álbum</a>
        
        <a href="{{ route('tracks.index', ['id' => 1]) }}" class="btn btn-primary">Ver faixas</a>
    </div>
</div>
@endsection
