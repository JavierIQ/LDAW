
<div class="card mb-3">
     <div class="card-body">
        <h5 class="card-title">Lista de mis Juegos</h5>
  
  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Consola</th>
          <th scope="col">Detalle</th>
          <th scope="col">Editar</th>
          <th scope="col">Borrar</th>
        </tr>
      </thead>
      <tbody>
          @foreach($games as $game)
          <tr>
              <td>{{$game->name}}</td>
              <td>{{$game->console}}</td>
              <td>{{$game->detail}}</td>
              <td>
                  <a href="{{ url('misjuegos/edit/'.$game->id) }}" class="btn btn-sm btn-warning">Editar</a> 
              </td>
              <td>
                <a href="misjuegos/destroy/{{$game->id}}" class="btn btn-sm btn-danger">Borrar</a>    
            </td>
          </tr>
          @endforeach
  
      </tbody>
    </table>
    </div>
  </div>