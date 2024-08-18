<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function create()
    {
        return view('game.create');
    }
    public function store(Request $request)
    {
        /* $game = new Game();
        $game->title = $request->title;
        $game->producer = $request->producer;
        $game->price = $request->price;
        $game->description = $request->description;
        $game->save(); */
        //QUI SOTTO LA FRECCETTONA PERCHE' L?ARRAY CHIAVE VALORE 
        /* $game =  */
        Game::create([
            'title' => $request->title,
            'producer' => $request->producer,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return redirect(route('homepage'))->with('gameCreated', 'Videogame ricevuto!');
    }
    public function index (){
        $games = Game::all();
        return view ('game.index',compact('games'));
    }
}
