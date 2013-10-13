@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Oyun Oluştur<small> ve günün birinde tamamla!</small></h1>
    </div>

    <form action="{{ action('GamesController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="title">Adı</label>
            <input type="text" class="form-control" name="title" />
        </div>
        <div class="form-group">
            <label for="publisher">Yayıncısı</label>
            <input type="text" class="form-control" name="publisher" />
        </div>
        <div class="checkbox">
            <label for="complete">
                <input type="checkbox" name="complete" /> Tamamlandı mı?
        </div>
        <input type="submit" value="Oluştur" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">İptal</a>
    </form>
@stop

