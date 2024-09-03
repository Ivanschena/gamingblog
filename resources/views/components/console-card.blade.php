<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ Storage::url($console->logo) }}" class="img-fluid rounded-start" alt="{{ $console->name }}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $console->name }}</h5>
                <p class="card-text"><small class="text-body-secondary">Brand: {{ $console->brand }}</small></p>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-12 d-flex">
            <a href="{{ route('console.show', $console) }}" class="btn text-primary">scopri di più</a>
            {{-- //!Va di pari passo con la @guest autorizzando i pulsanti crud solo per il loggato--}}
            {{-- //!Se l'utente è loggato e l'id che già è uguale a quello dello user allora visualizza --}}
            @if (Auth::user() && $console->user_id == Auth::user()->id)
                <a href="{{ route('console.edit', $console) }}" class="btn text-warning">Modificala</a>
                <form action="{{ route('console.destroy', $console) }}" method="post">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-link text-danger text-decoration-none">Elimina</button>
                </form>
            @endif
        </div>
    </div>
</div>
