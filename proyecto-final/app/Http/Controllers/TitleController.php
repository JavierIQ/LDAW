<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index(){
        $titles = DB::select("SELECT * FROM titles where estatus = 'aceptado'");
        return view('administrador',['titles'=> $titles,'layout' => 'index']);
    }

    public function create(){
        $titles = Title::all();
        return view('administrador',['titles'=> $titles,'layout' => 'create']);
    }

    public function store(Request $request){
        $title = new Title();
        $title ->name = $request->input('name');
        $title ->edition = $request->input('edition');
        $title ->estatus ="aceptado";
        $title ->version = $request->input('version');
        $title ->save();
        return redirect('/administrador');

    }


    public function show(){
        $titles = Title::all();
        return view('administrador',['titles'=> $titles,'layout' => 'show']);
    }

    public function edit($id){
        $title = Title::find($id);
        $titles = Title::all();
        return view('administrador',['titles'=>$titles,'title'=>$title,'layout'=>'edit']);
    }

    public function update(Request $request , $id){
        $title = Title::find($id);
        $title ->name = $request->input('name');
        $title ->edition = $request->input('edition');
        $title ->estatus ="aceptado";
        $title ->version = $request->input('version');
        $title ->save();
        return redirect('/administrador');
    }

    public function destroy($id){
        $title = Title::find($id);
        $title-> delete();
        return redirect('/administrador');
    }

    public function solicitudes(){
        $titles = DB::select("SELECT * FROM titles where estatus = 'enproceso'");
        return view('administrador',['titles'=> $titles,'layout' => 'solicitudes']);
    }
    public function aceptar($id){
        $title = Title::find($id);
        $title ->estatus ="aceptado";
        $title ->save();
        return redirect('/administrador/solicitudes');
    }

    public function rechazar($id){
        $title = Title::find($id);
        $title ->estatus ="rechazado";
        $title ->save();
        return redirect('/administrador/solicitudes');
    }


}
