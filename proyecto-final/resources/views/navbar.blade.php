<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/administrador')}}">Pro Gamers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active"  href="{{url('/administrador')}}">Títulos <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="{{url('/administrador/create')}}">Crear Títulos</a>
            <a class="nav-item nav-link " href="{{url('/administrador/solicitudes')}}">Solicitudes de títulos</a>
            <a class="nav-item nav-link " href="{{url('/')}}">Cerrar sesión</a>

        </div>
    </div>
</nav>