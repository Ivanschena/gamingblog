<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;
use Illuminate\Support\Facades\Auth;


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
        $consoles = Console::all();
        return view('game.create', compact('consoles'));
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
        $game = Game::create([
            'title' => $request->title,
            'producer' => $request->producer,
            'price' => $request->price,
            'description' => $request->description,
            'cover' => $img,
            'user_id'=>Auth::user()->id
        ]);
        //!Questo sotto è il metodo consoles della migrazione pivot,nei modelli, che viene agganciato a quello che arriva dalla request
        $game->consoles()->attach($request->consoles);
        return redirect(route('homepage'))->with('gameCreated', 'Videogame ricevuto!');
    }
    public function index()
    {
        $games = Game::all();
        return view('game.index', compact('games'));
    }
}
