<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Inserisci un videogame</h2>
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="p-5 shadow-lg col-12 col-md-8">
                <form action="{{ route('game.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del videogame</label>
                        <input type="text"
                            class="form-control @error('title') is-invalid
                            
                        @enderror"
                            id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <label for="producer" class="form-label">Produttore del videogame</label>
                        <input type="text"
                            class="form-control @error('producer') is-invalid
                            
                        @enderror"
                            id="producer" name="producer" value="{{ old('producer') }}">
                        @error('producer')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="price" class="form-label">Prezzo del videogame</label>
                        <input type="number"
                            class="form-control @error('price') is-invalid
                            
                        @enderror"
                            id="price" name="price">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="cover" class="form-label">Cover del videogame</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                        @error('cover')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="6">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Inseriscilo</button>
                </form>
            </div>
        </div>
    </div>
    {{-- <audio src="https://res.cloudinary.com/dlb3jof8w/video/upload/v1581412825/codepen/playstation_intro.mp3"
        id="startupSound"></audio>
    <button id="playScene">Begin Nostalgia</button>
    <div class="slide" data-time="7">
        <div class="screen screen-1">
            <div class="title">SONY</div>
            <div>
                <div class="logo"></div>
            </div>

            <div class="subtitle">
                COMPUTER <br>
                <span>ENTERTAINMENT</span>
            </div>
        </div>
    </div>

    <div class="slide">
        <div class="screen screen-2">
            <div class="logo">
                <img width="220"
                    src="https://res.cloudinary.com/dlb3jof8w/image/upload/v1581414060/codepen/ps-clipart-logo-3.png"
                    alt="">
            </div>

            <div class="title">
                PlayStation<span>tm</span>
            </div>

            <div class="subtitle">
                Licensed by <br>
                Sony Computer Entertainment America <br> <br>

                SCEA<span>tm</span>
            </div>
        </div>
    </div> --}}
</x-layout>
