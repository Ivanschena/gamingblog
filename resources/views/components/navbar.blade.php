<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('game.create')}}">Inserisci un videogame</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('game.index')}}">Videogames</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('console.index')}}">Console</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('console.create')}}">Aggiungi console</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('dashboard')}}">Profilo Utente</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" href="#">Logout</a></li>
              <form action="{{route('logout')}}" method="post" id="form-logout">
                @csrf
              </form>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
          @endauth
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto ospite
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">LOGIN</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">registrati</a></li>
              </form>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cmfvt')}}">CMFVT</a>
          </li>
          @endguest
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>