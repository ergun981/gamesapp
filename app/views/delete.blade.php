@extends('layout')

@section('content')
    <div class="page-header">
        <h1>{{ $game->title }} Silinecek<small> Emin misiniz?</small></h1>
    </div>
    <form action="{{ action('GamesController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="game" value="{{ $game->id }}" />
        <input type="submit" class="btn btn-danger" value="Evet" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-default">Hayır, yapma!</a>
    </form>
@stop
