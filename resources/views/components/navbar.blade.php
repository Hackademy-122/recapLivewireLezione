<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homePage')}}">Recap h122</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('album_create')}}">Inserisci nuovo album</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @auth
                Ciao, {{Auth::user()->name}}!
              @else
                Ciao,Accedi!
              @endauth
              {{-- @auth
                {{Auth::user()->name}}
              @endauth
              @guest
                Ciao,accedi!    
              @endguest --}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @guest
                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              @else
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" >Logout</a></li>
                <form action="{{route('logout')}}" method="POST" id="form-logout">@csrf</form>
              @endguest
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>