<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use App\Models\Title;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        $titles = DB::select("SELECT * FROM titles");
        return view('juegos',['titles'=> $titles,'layout' => 'index']);
    }

    public function visualizar($id){
        $title = Title::find($id);
        $titles = Title::all();
        return view('juegos',['titles'=>$titles,'title'=>$title,'layout'=>'visualizar']);
    }
}
