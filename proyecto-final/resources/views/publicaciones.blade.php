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

    @if (session()->has('success'))
        <h1 style="text-align: center;color:green">¡Solicitud enviada!</h1>
    @endif

    @if($layout == 'publicaciones')
        <div class = 'container-fluid' style="width: 100%">

                <div class="card mb-3">
                   <div class="card-body">
                        <h5 class="card-title">Realizar solicitud de tiutlo</h5>
                <form  action ="{{url('publicaciones/solicitud')}}" method="put">
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
                        <div class="card-body">
                            <h5 class="card-title">Crear juegos nuevos</h5>
                <form  action ="{{url('crearjuegos')}}" method="put">
                        @csrf
                        <div class="form-group">
                          <label >Nombre</label>
                          <input name = "name" type="text" class="form-control"  placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label >Consola</label>
                            <input name = "consola" type="text" class="form-control"  placeholder="Consola">
                          </div>
                          
                          <div class="form-group">
                          <label >Detalles</label>
                            <textarea name = "detail" type="text" class="form-control"  placeholder="Detalles"></textarea>                          
                        </div>

                        <div class="form-group">
                            <label >Título</label>
                            <select name="idTitulo" class="form-control">

                                @foreach($titles as $title)
                                <option value="{{$title->id}}">{{$title->name}}</option>
                                @endforeach
                                
                              </select>                     
                        </div>
                        <div class="form-group" style="display: none">
                            <label >Detalles</label>
                              <input name = "userId" value= "{{$userId}}" type="text" class="form-control"  placeholder="Detalles">                       
                          </div>

                       

                          <input type = "submit" class="btn btn-info" value = "Crear Juego">
                      </form>
                        </div>
                    </div>

        </div>
    @elseif($layout == 'misjuegos')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("mygameslist")
                </section>
            </div>
        </div>
    </div>
    
    @elseif($layout == 'edit')
        <div class = 'container-fluid'>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Juego</h5>
            <form  action ="{{url('misjuegos/update/'.$game->id)}}" method="put">
                @csrf
                <div class="form-group">
                  <label >Nombre</label>
                  <input value = "{{$game->name}}" name = "name" type="text" class="form-control"  placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label >Consola</label>
                    <input value = "{{$game->console}}"  name = "console" type="text" class="form-control"  placeholder="Version">
                  </div>

                  <div class="form-group">
                    <label >Detalles</label>
                    <input value = "{{$game->detail}}"  name = "detail" type="text" class="form-control"  placeholder="edicion">
                  </div>

                  <div class="form-group">
                    <label >Título</label>
                    <select name="idTitulo" class="form-control">

                        @foreach($titles as $title)
                            @if($title->id == $tituloId)
                                <option value="{{$title->id}}" selected>{{$title->name}}</option>
                            @else 
                                <option value="{{$title->id}}">{{$title->name}}</option>
                            @endif
                        @endforeach
                        
                      </select>                     
                </div>
                
                  <input type = "submit" class="btn btn-info" value = "Editar Juego">
              </form>
                </div>
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