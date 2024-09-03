<x-layout>
    <div class="container">
        <div class="my-5">
            <h1>Dashboard di {{Auth::user()->name}}</h1>
        </div>
    </div>
    @if (count($consoles)>0)
    <div class="container">
        <div class="my-5">
            <h1>Tutte le tue console</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            {{-- //!Direttamente consoles dal controller --}}
            @foreach (/* Auth::user()-> */$consoles as $console)
                <div class="col-12 col-md-4">
        {{--//! In alternativa <x-console-card :console="$console"/>--}}
                    <x-console-card :console="$console"></x-console-card>
                </div>
            @endforeach
        </div>
    </div>
    @endif
    @if (Auth::user()->games->isNotEmpty())
        
    <div class="container">
        <div class="my-5">
            <h1>Tutti i tuoi videogame</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            {{-- //!Direttamente consoles dal controller --}}
            @foreach (Auth::user()->games as $game)
                <div class="col-12 col-md-4">
        {{--//! In alternativa <x-console-card :console="$console"/>--}}
                    <x-card :game="$game"></x-card>
                </div>
            @endforeach
        </div>
    </div>
    @endif
</x-layout>
