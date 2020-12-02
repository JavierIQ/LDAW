<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/home')}}">Pro Gamers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active"  href="{{url('/juegos')}}">Juegos<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="{{url('/juegos')}}">Ofertas</a>
            <a class="nav-item nav-link " href="{{url('/publicaciones')}}">Solicitar título</a>
            <a class="nav-item nav-link " href="{{url('/crear')}}">Crear juegos</a>
            <a class="nav-item nav-link " href="{{url('/misjuegos')}}">Mis juegos</a>
            <a class="nav-item nav-link "href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Cerrar sesión') }}</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
    </div>
</nav>