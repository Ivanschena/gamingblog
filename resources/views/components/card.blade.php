<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($game->cover)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $game->title }}</h5>
        <p class="card-text">{{ $game->producer }}</p>
        <p class="card-text">Prezzo:{{ $game->price }}</p>
        <p class="card-text">{{ $game->description }}</p>
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
    </div>
</div>