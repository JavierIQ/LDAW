
<div class="card mb-3">
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
          @foreach($titles as $title)
          <tr>
              <td>{{$title->name}}</td>
              <td>{{$title->edition}}</td>
              <td>{{$title->version}}</td>
              <td>
                  <a href="{{ url('administrador/edit/'.$title->id) }}" class="btn btn-sm btn-warning">Editar</a> 
              </td>
              <td>
                <a href="administrador/destroy/{{$title->id}}" class="btn btn-sm btn-danger">Borrar</a>    
            </td>
          </tr>
          @endforeach
  
      </tbody>
    </table>
    </div>
  </div>