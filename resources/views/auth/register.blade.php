<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Registrati</h2>
        </div>
    </div>
    <div class="container shadow">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{ route('register') }}" method="POST" class="p-5 shadow">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        <div id="emailHelp" class="form-text">Useremo la tua mail per cercare di fotterti alla grande
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        <div id="emailHelp" class="form-text">Useremo la tua mail per cercare di fotterti alla grande
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
