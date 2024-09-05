<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsoleController extends Controller
{
    public function index()
    {
        $consoles = Console::all();
        return view('console.index', compact('consoles'));
    }
    public function create()
    {
        $games = Game::all(); //*E compatti nella view
        //!ManyToMany metodo all() e traversamento del modello
        return view('console.create', compact('games'));
    }
    public function store(Request $request)
    {
        //*Incapsuliamo in una variabile
        $console = Console::create(
            [
                'name' => $request->name,
                'brand' => $request->brand,
                'description' => $request->description,
                'logo' => $request->file('logo')->store('public/logos'),
                'user_id' => Auth::user()->id, //!Questa è la OneToMAny
                //!Valorizzato non da una request ma dall'id user
            ]
        );
        //*Colleghiamo alla Request
        $console->games()->attach($request->games);
        //!games dalla request in questo caso è il nome che abbiamo dato noi nell'input formato array[]
        //!qualunque istanza va PRIMA del RETURN
        return redirect()->route('console.index')->with('consoleCreated', 'Hai inserito correttamente una console');
    }
    public function show(Console $console)
    {
        return view('console.show', compact('console'));
    }
    public function edit(Console $console)
    {
        //*Passiamo i pacchetto alla edit
        $games = Game::all();
        return view('console.edit', compact('console','games'));
    }
    public function update(Request $request, Console $console)
    {
        $console->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
            'logo' => $request->file('logo') ? $request->file('logo')->store('public/logos')  : $console->logo,
        ]);
        //!scolleghiamo il vecchio colleghiamo il nuovo dato
        $console->games()->detach();
        $console->games()->attach($request->games);
        return redirect()->route('console.index')->with('consoleUpdated', "la console $console->name è stata aggiornata");
    }
    public function destroy(Console $console)
    {
        //*Dissociamo e cancelliamo
        $console->games()->detach();
        $console->delete();
        return redirect()->route('console.index')->with('consoleDeleted', "Hai correttamente eliminato $console->name");
    }
}

//!alternativa all'update
        /* if ($request->file('logo')) {
            $console->update([
                'name' => $request->name,
                'brand' => $request->brand,
                'description' => $request->description,
                'logo' => $request->file('logo')->store('public/logos'),
            ]);
        }
        else {
            $console->update([
                'name' => $request->name,
                'brand' => $request->brand,
                'description' => $request->description,
            ]);
        } */
