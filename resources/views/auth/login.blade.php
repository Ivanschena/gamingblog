<x-layout>



    <div class="container my-5">
        <div class="row">
            <h2>Accedi</h2>
        </div>
    </div>
    <div class="container shadow">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('login')}}" method="POST" class="p-5 shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div id="emailHelp" class="form-text">Useremo la tua mail per cercare di fotterti alla grande</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Ricordami</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
