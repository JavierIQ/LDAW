<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Title;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){
        $titles = DB::select("SELECT * FROM titles where estatus = 'aceptado'");
        return view('administrador',['titles'=> $titles,'layout' => 'index']);
    }
}
