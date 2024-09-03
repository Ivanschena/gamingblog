<div class="card" style="width: 18rem;">
    <img src="{{ Storage::url($game->cover) }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $game->title }}</h5>
        <p class="card-text">{{ $game->producer }}</p>
        <p class="card-text">Inserito da: {{ $game->user->name ?? 'Autore Sconosciuto' }}</p>
        <p class="card-text">Prezzo:{{ $game->price }}</p>
        <p class="card-text">{{ $game->description }}</p>
        @foreach ($game->consoles as $console)
        <p class="card-text">Compatibilità:{{ $console->name }}</p>
        @endforeach
        
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
    </div>
</div>
