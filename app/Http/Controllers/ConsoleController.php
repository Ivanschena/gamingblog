<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consoles = Console::all();
        return view('console.index', compact('consoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('console.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Console::create(
            [
                'name' => $request->name,
                'brand' => $request->brand,
                'description' => $request->description,
                'logo' => $request->file('logo')->store('public/logos'),

            ]
        );
        return redirect()->route('console.index')->with('consoleCreated', 'Hai inserito correttamente una console');
    }

    /**
     * Display the specified resource.
     */
    public function show(Console $console)
    {
        return view('console.show', compact('console'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Console $console)
    {
        return view('console.edit', compact('console'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Console $console)
    {
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

        $console->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
            'logo' => $request->file('logo') ? $request->file('logo')->store('public/logos')  : $console->logo,
        ]);

        return redirect()->route('console.index')->with('consoleUpdated', "la console $console->name è stata aggiornata");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Console $console)
    {
        $console->delete();
        return redirect()->route('console.index')->with('consoleDeleted', "Hai correttamente eliminato $console->name");
    }
}
