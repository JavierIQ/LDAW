<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //

    public function index(){
        $usuarios = Usuario::all();
        return view('usuario',['usuarios'=> $usuarios,'layout' => 'index']);
    }

    public function create(){
        $usuarios = Usuario::all();
        return view('usuario',['usuarios'=> $usuarios,'layout' => 'create']);
    }

    public function store(Request $request){
        $usuario = new Usuario();
        $usuario ->firstName = $request->input('firstName');
        $usuario ->secondName = $request->input('secondName');
        $usuario ->age ="0";
        $usuario ->speciality = $request->input('speciality');
        $usuario ->save();
        return redirect('/');

    }


    public function show(){
        $usuarios = Usuario::all();
        return view('usuario',['usuarios'=> $usuarios,'layout' => 'show']);
    }

    public function edit($id){
        $usuario = Usuario::find($id);
        $usuarios = Usuario::all();
        return view('usuario',['$usuarios'=>$usuarios,'$usuario'=>$usuario,'layout'=>'edit']);
    }

    public function update(Request $request , $id){
        $usuario = Usuario::find($id);
        $usuario ->firstName = $request->input('firstName');
        $usuario ->secondName = $request->input('secondName');
        $usuario ->age = $request->input('age');
        $usuario ->speciality = $request->input('speciality');
        $usuario ->save();
        return redirect('/');
    }

    public function destroy($id){
        $usuario = Usuario::find($id);
        $usuario-> delete();
        echo "borrar";
        //return redirect('/');
    }


    
}
