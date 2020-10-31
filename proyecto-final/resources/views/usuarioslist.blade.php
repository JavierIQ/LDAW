
<div class="card mb-3">
  <img src="https://wallpapercave.com/wp/wp3660116.jpg" class="card-img-top" style= "height:250px;width:100%" alt="...">
  <div class="card-body">
      <h5 class="card-title">Lista de titulos</h5>
      <p class="card-text">Todos los títulos se encuentran aqui</p>

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Edición</th>
        <th scope="col">Versión</th>
        <th scope="col">Editar</th>
        <th scope="col">Borrar</th>
      </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->firstName}}</td>
            <td>{{$usuario->secondName}}</td>
            <td>{{$usuario->speciality}}</td>
            <td>
                <a href="{{ url('/edit/'.$usuario->id) }}" class="btn btn-sm btn-warning">Editar</a> 
            </td>
            <td>
              <a href="destroy/{{$usuario->id}}" class="btn btn-sm btn-danger">Borrar</a>    
          </td>
        </tr>
        @endforeach

    </tbody>
  </table>
  </div>
</div>