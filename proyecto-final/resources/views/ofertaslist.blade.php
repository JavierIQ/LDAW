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
        <th scope="col">Estatus</th>
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

          <td>{{$oferta->estatus}}</td>
            
          @if($oferta->estatus == "en proceso")
            <td>
                <a href="{{ url('ofertas/aceptar/'.$oferta->id) }}" class="btn btn-sm" style = "background-color: green">Aceptar</a> 
            </td>
            <td>
              <a href="{{ url('ofertas/rechazar/'.$oferta->id) }}"  class="btn btn-sm btn-danger">Rechazar</a>    
          </td>
          @endif


        </tr>
        @endforeach

    </tbody>
  </table>
  </div>
</div>
           