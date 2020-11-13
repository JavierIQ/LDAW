
<div class="card mb-3">
   
    <div class="card-body">
        <h5 class="card-title">Lista de solicitudes</h5>
        <p class="card-text">Todas las solicitudes se encuentran aqui</p>
  
  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Edición</th>
          <th scope="col">Versión</th>
          <th scope="col">Aceptar</th>
          <th scope="col">Rechazar</th>
        </tr>
      </thead>
      <tbody>
          @foreach($titles as $title)
          <tr>
              <td>{{$title->name}}</td>
              <td>{{$title->edition}}</td>
              <td>{{$title->version}}</td>
              <td>
                  <a href="{{ url('administrador/aceptar/'.$title->id) }}" class="btn btn-sm" style = "background-color: green">Aceptar</a> 
              </td>
              <td>
                <a href="{{ url('administrador/rechazar/'.$title->id) }}"  class="btn btn-sm btn-danger">Rechazar</a>    
            </td>
          </tr>
          @endforeach
  
      </tbody>
    </table>
    </div>
  </div>