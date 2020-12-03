<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use App\Models\Reviews;
use App\Models\Title;
use App\Models\Oferta;
use Auth;
use Illuminate\Http\Request;


class GameController extends Controller
{
    public function index(){
        $titles = DB::select("SELECT * FROM titles where estatus = 'aceptado'");
        return view('juegos',['titles'=> $titles,'layout' => 'index']);
    }

    public function visualizar($id){
        $games = DB::select("SELECT * FROM game where idTitle= $id");
        return view('juegos',['games'=>$games,'layout'=>'visualizar']);
    }

    public function publicaciones(){
        $titles = DB::select("SELECT * FROM titles where estatus = 'aceptado'");
        return view('publicaciones',['titles'=> $titles,'layout' => 'publicaciones']);
    }

        public function store(Request $request){
            $title = new Title();
            $title ->name = $request->input('name');
            $title ->edition = $request->input('edition');
            $title ->estatus ="enproceso";
            $title ->version = $request->input('version');
            $title ->save();
            //return redirect('/publicaciones');
            //return redirect()->back()->withSuccess('IT WORKS!');
            return redirect()->back()->with('success', true);
        }

        public function create(){
            $titles = DB::select("SELECT * FROM titles where estatus = 'aceptado'");
            $userId = Auth::id();
            return view('publicaciones',['titles'=> $titles,'userId' => $userId,'layout' => 'create']);
        }

        public function createjuegos(Request $request){
            $game = new Game();
            $game ->name = $request->input('name');
            $game ->console = $request->input('consola');
            $game ->detail = $request->input('detail');
            $game ->idTitle = $request->input('idTitulo');
            $game ->idUsuario = $request->input('userId');
            $game ->save();
            return redirect('/misjuegos');
        }

        public function misjuegos(){
            $userId = Auth::id();
            $games = DB::select("SELECT * FROM game where idUsuario = $userId");
            return view('publicaciones',['games'=> $games,'layout' => 'misjuegos']);
        }

        public function updateJuegos(Request $request , $id){
            $game= Game::find($id);
            $game ->name = $request->input('name');
            $game ->console = $request->input('console');
            $game ->detail = $request->input('detail');
            $game ->idTitle = $request->input('idTitulo');
            $game ->save();
            return redirect('/misjuegos');
        }
        public function editJuegos($id){
            $Game = Game::find($id);
            $titleId = $Game ->idTitle;
            $titles = DB::select("SELECT * FROM titles where estatus = 'aceptado'");
            $Games = Game::all();
            return view('publicaciones',['titles'=>$titles,'tituloId'=>$titleId,'game'=>$Game,'layout'=>'edit']);
        }

        public function comentar(Request $request){
            $reviews = new Reviews();
            $reviews ->detail = $request->input('detail');
            $userId = Auth::id();
            $reviews ->idTitle = $request->input('idTitulo');
            $reviews ->idUsuario = $userId;
            $reviews ->save();
            return redirect()->back()->with('success', true);
        }
        public function screen($id){
            $Game = Game::find($id);
            $userId = Auth::id();
            $reviews = DB::select("SELECT * FROM reviews");
            $users = DB::select("SELECT * FROM users");
            return view('juegos',['game'=>$Game,'reviews'=>$reviews,'users'=>$users,'userId' => $userId,'layout'=>'screen']);
        }
        public function destroyComentario($id){
            $reviews= Reviews::find($id);
            $reviews-> delete();
            return redirect()->back()->with('success', true);
        }

        public function crearOferta(Request $request){
            $oferta = new Oferta();
            $oferta ->descripcion = $request->input('descripcion');
            $userId = Auth::id();
            $oferta ->estatus = "en proceso";
            $oferta ->idGame = $request->input('idTitulo');
            $oferta->idUsuarioGame = $request->input('idUsuario');
            $oferta ->idUsuario = $userId;
            $dt = new DateTime();
            $dt->format('Y-m-d');
            $oferta ->fecha =$dt;
            $oferta ->save();
            return redirect()->back()->with('success', true);
        }

        public function visualizarOfertas(){
            $userId = Auth::id();
            $users = DB::select("SELECT * FROM users");
            $games = DB::select("SELECT * FROM game");
            $ofertas = DB::select("SELECT * FROM ofertas where idUsuario = $userId");
            return view('juegos',['ofertas'=>$ofertas,'games'=>$games,'users'=>$users,'layout'=>'ofertas']);
        }

        
    
        public function destroyJuegos($id){
            $game= Game::find($id);
            $game-> delete();
            return redirect('/misjuegos');
        }
}
