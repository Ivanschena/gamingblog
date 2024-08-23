<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
use App\Models\Game;
use Illuminate\Http\Request;


class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //!protegge tutti i metodi (bisogna inserire nel controller.php il blocco di codice qui sotto)
        // $this->middleware('auth')->only('create'); //! protegge solo un metodo 
        $this->middleware('auth')->except('index', 'show'); //! eccetto quel metodo show è un esempio
        /* 
        use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends \Illuminate\Routing\Controller
{
    use AuthorizesRequests;
}
        */

    }

    public function create()
    {
        return view('game.create');
    }
    public function store(GameRequest $request)
    {
        /* $game = new Game();
        $game->title = $request->title;
        $game->producer = $request->producer;
        $game->price = $request->price;
        $game->description = $request->description;
        $game->save(); */
        //QUI SOTTO LA FRECCETTONA PERCHE' L?ARRAY CHIAVE VALORE 
        /* $game =  */
        if (!$request->file('cover')) {
            $img = 'default/default.png';
        } else {
            $img = $request->file('cover')->store('public/covers');
        }
        Game::create([
            'title' => $request->title,
            'producer' => $request->producer,
            'price' => $request->price,
            'description' => $request->description,
            'cover' => $img,
        ]);
        return redirect(route('homepage'))->with('gameCreated', 'Videogame ricevuto!');
    }
    public function index()
    {
        $games = Game::all();
        return view('game.index', compact('games'));
    }
}
