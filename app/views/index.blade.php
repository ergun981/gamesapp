@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Tüm Oyunlar<small> Hepsini yakalamak lazım!</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('GamesController@create') }}" class="btn btn-primary">Oyun Oluştur</a>
        </div>
    </div>

    @if ($games->isEmpty())
        <p>Hiçbir oyun yok! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Adı</th>
                    <th>Yayıncısı</th>
                    <th>Tamamlanmış</th>
                    <th>Eylemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                <tr>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->publisher }}</td>
                    <td>{{ $game->complete ? 'Evet' : 'Hayır' }}</td>
                    <td>
                        <a href="{{ action('GamesController@edit', $game->id) }}" class="btn btn-default">Düzenle</a>
                        <a href="{{ action('GamesController@delete', $game->id) }}" class="btn btn-danger">Sil</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
