<!DOCTYPE html>
<html>
 <head>
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{url('css/style.css')}}" />
  
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>

 @include('navbarhome')

 <body>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-8">
                        @include("titlelisthome")
                    </section>
                </div>
            </div>
        </div>
    @elseif($layout == 'solicitudes')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("titleAprovelist")
                </section>
            </div>
        </div>
    </div>

    @elseif($layout == 'create')
        <div class = 'container-fluid'>

                    <div class="card mb-3">
                        <img src="https://wallpapercave.com/wp/wp3660106.jpg" style= "height:250px;width:100%;margin-top:10px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crear títulos nuevos</h5>
                <form  action ="{{url('administrador/store')}}" method="put">
                        @csrf
                        <div class="form-group">
                          <label >Nombre</label>
                          <input name = "name" type="text" class="form-control"  placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label >Versión</label>
                            <input name = "version" type="text" class="form-control"  placeholder="Version">
                          </div>

                          <div class="form-group">
                            <label >Edición</label>
                            <input name = "edition" type="text" class="form-control"  placeholder="edicion">
                          </div>
                        
                          <input type = "submit" class="btn btn-info" value = "Crear Título">
                      </form>
                        </div>
                    </div>

        </div>
    @elseif($layout == 'screen')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("screen")
                </section>
            </div>
        </div>
    </div>
    
    @elseif($layout == 'visualizar')
        <div class="card mb-3">
            <div class="card-body">
            <h5 class="card-title">Lista de juegos</h5>
        
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Consola</th>
                <th scope="col">Detalle</th>
                <th scope="col">Visualizar</th>
            </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                <tr>
                    <td>{{$game->name}}</td>
                    <td>{{$game->console}}</td>
                    <td>{{$game->detail}}</td>
                    <td>
                        <a href="{{ url('juegos/screen/'.$game->id) }}" class="btn btn-sm btn-warning">Visualizar</a> 
                    </td>
                </tr>
                @endforeach
        
            </tbody>
        </table>
        </div>
        </div>

        
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>