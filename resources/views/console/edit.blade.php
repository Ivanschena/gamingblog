<x-layout>
    <div class="container my-5">
        <div class="row">

            <h3>Modifica una console</h3>

        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('console.update', $console)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome console.</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$console->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand" value="{{$console->brand}}">
                    </div>
                    <div class="mb-3">
                        <label for="actualLogo" class="form-label">Logo Attuale</label>
                        <img src="{{Storage::url($console->logo)}}" alt="" class="img-fluid">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control">
                            {{$console->description}}
                        </textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Invia Modifica</button>
                </form>
            </div>
        </div>
    </div>





</x-layout>
