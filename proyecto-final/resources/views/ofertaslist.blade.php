<div class="card mb-3">
   
  <div class="card-body">
      <h5 class="card-title">Ofertas</h5>

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha</th>
        <th scope="col">descripción</th>
        <th scope="col">Usuario</th>
        <th scope="col">Aceptar</th>
        <th scope="col">Rechazar</th>
      </tr>
    </thead>
    <tbody>
        @foreach($ofertas as $oferta)
        <tr>
            @foreach($games as $game)
              @if($oferta->idGame == $game->id)
                <td>{{$game->name}}</td>
              @endif
          @endforeach
           
            <td>{{$oferta->fecha}}</td>
            <td>{{$oferta->descripcion}}</td>

            @foreach($users as $user)
              @if($oferta->idUsuarioGame == $user->id)
                <td>{{$user->name}}</td>
              @endif
          @endforeach
            
          @if($oferta->estatus == "en proceso")
            <td>
                <a href="{{ url('juegos/aceptar/'.$oferta->id) }}" class="btn btn-sm" style = "background-color: green">Aceptar</a> 
            </td>
            <td>
              <a href="{{ url('juegos/rechazar/'.$oferta->id) }}"  class="btn btn-sm btn-danger">Rechazar</a>    
          </td>
          @elseif($oferta->estatus == "aceptado")
             <td>Aceptado</td>
          @elseif($oferta->estatus == "rechazado")
             <td>Rechazado</td>
          @endif


        </tr>
        @endforeach

    </tbody>
  </table>
  </div>
</div>
           