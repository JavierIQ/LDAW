<div class = 'container-fluid'>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title" style="text-align: center;font-size:25px">{{$game->name}}</h5>

            <div class="form-group">
                <label >Consola: </label>
                <p style="font-weight:bold">{{$game->console}}</p>
              </div>

              <div class="form-group">
                <label >Detalles: </label>
                <p style="font-weight:bold">{{$game->detail}}</p>
              </div>

              
              

              <input type = "submit" class="btn btn-info" value = "Intercambiar">


              <br><br><br>
              <label style="text-align:center;font-size:25px" >Comentarios: </label>
              <div class="form-group">
                
                @foreach($reviews as $review)
                    @if($review->idTitle == $game->id)
                        @foreach($users as $user)
                            @if($user->id == $review->idUsuario)
                                <p style="">{{$user->name}} :</p>
                            @endif

                           
                   
                        @endforeach
                        
                        <p style="font-weight:bold">{{$review->detail}}</p>

                       
                            @if($review->idUsuario == $userId)
                                <a href="destroy/{{$review->id}}" class="btn btn-sm btn-danger" >Eliminar</a> 
                            @endif

                    @endif

                    
                @endforeach
                
              </div>

              <form  action ="{{url('juegos/comentar')}}" method="put">
                @csrf
                  <div class="form-group">
                    <label >Comentario</label>
                    <textarea name = "detail" type="text" class="form-control"  placeholder="Escribe tu comentario"></textarea>
                  </div>

                  <input type = "text" name='idTitulo' style="display: none" value = "{{$game->id}}">

                
                  <input type = "submit" class="btn btn-info" value = "Comentar">
              </form>

        </div>
    </div>
</div>