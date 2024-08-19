<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Inserisci un videogame</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="p-5 shadow col-12 col-md-8">
                <form action="{{route('game.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del videogame</label>
                        <input type="text" class="form-control" id="title" name="title">
                        <label for="producer" class="form-label">Produttore del videogame</label>
                        <input type="text" class="form-control" id="producer" name="producer">
                        <label for="price" class="form-label">Prezzo del videogame</label>
                        <input type="number" class="form-control" id="price" name="price">
                        <label for="cover" class="form-label">Prezzo del videogame</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="6"></textarea>
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
