<x-layout>

    <div class="container my-5">
        <div class="row">
            <div class="h2">{{ $console->name }}</div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <p class="col-md-6">
                <img class="img-fluid my-5 rounded-5" src="{{ Storage::url($console->logo) }}" alt="">
            </p>
            <div class="col-md-6">
                <p>Brand: {{ $console->brand }}</p>
                <div class="container my-5">
                    <div class="row">
                        <p>{{ $console->description }}</p>
                    </div>
                </div>
                <a href="{{route('console.index')}}" class="btn btn-outline-warning">torna alla lista delle console</a>
            </div>
            
        </div>
        
    </div>

</x-layout>
