<?php

// app/controllers/GamesController.php

class GamesController extends BaseController
{
    public function index()
    {
        // Oyunların listesini göster.
        $games = Game::all();

        return View::make('index', compact('games'));
    }

    public function create()
    {
        // Oyun oluşturma formunu göster.
        return View::make('create');
    }

    public function handleCreate()
    {
        // Oluşturma formu gönderimini işle.
        $game = new Game;
        $game->title        = Input::get('title');
        $game->publisher    = Input::get('publisher');
        $game->complete     = Input::has('complete');
        $game->save();

        return Redirect::action('GamesController@index');
    }

    public function edit(Game $game)
    {
        // Oyun düzenleme formunu göster.
        return View::make('edit', compact('game'));
    }

    public function handleEdit()
    {
        // Düzenleme formu gönderimini işle.
        $game = Game::findOrFail(Input::get('id'));
        $game->title        = Input::get('title');
        $game->publisher    = Input::get('publisher');
        $game->complete     = Input::has('complete');
        $game->save();

        return Redirect::action('GamesController@index');
    }

    public function delete(Game $game)
    {
        // Sil teyiti sayfasını göster.
        return View::make('delete', compact('game'));
    }

    public function handleDelete()
    {
        // Sil teyidini işle.
        $id = Input::get('game');
        $game = Game::findOrFail($id);
        $game->delete();

        return Redirect::action('GamesController@index');
    }
}
