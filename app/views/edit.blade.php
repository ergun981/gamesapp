@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Oyun Düzenle<small> Devam et, tamamlandı olarak işaretle!</small></h1>
    </div>

    <form action="{{ action('GamesController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $game->id }}">

        <div class="form-group">
            <label for="title">Adı</label>
            <input type="text" class="form-control" name="title" value="{{ $game->title }}" />
        </div>
        <div class="form-group">
            <label for="publisher">Yayıncısı</label>
            <input type="text" class="form-control" name="publisher" value="{{ $game->publisher }}" />
        </div>
        <div class="checkbox">
            <label for="complete">
                <input type="checkbox" name="complete" {{ $game->complete ? 'checked' : '' }} /> Tamamlandı mı?
            </label>
        </div>
        <input type="submit" value="Kaydet" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">İptal</a>
    </form>
@stop

