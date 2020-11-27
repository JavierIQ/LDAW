
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Lista de títulos de juegos</h5>
        <p class="card-text">Todos los títulos se encuentran aqui</p>
  
  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Edición</th>
          <th scope="col">Versión</th>
          <th scope="col">Juegos</th>
        </tr>
      </thead>
      <tbody>
          @foreach($titles as $title)
          <tr>
              <td>{{$title->name}}</td>
              <td>{{$title->edition}}</td>
              <td>{{$title->version}}</td>
              <td>
                  <a href="{{ url('juegos/visualizar/'.$title->id) }}" class="btn btn-sm btn-warning">Visualizar</a> 
              </td>
          </tr>
          @endforeach
  
      </tbody>
    </table>
    </div>
  </div>