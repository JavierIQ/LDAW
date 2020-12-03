<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

    |Route::get('/', function () {
        return view('welcome');
    });
*/

Route::get('/administrador',"App\Http\Controllers\TitleController@index");
Route::get('/administrador/edit/{id}',"App\Http\Controllers\TitleController@edit");
Route::get('/administrador/show',"App\Http\Controllers\TitleController@show");
Route::get('/administrador/create',"App\Http\Controllers\TitleController@create");
Route::get('/administrador/store',"App\Http\Controllers\TitleController@store");
Route::get('/administrador/update/{id}',"App\Http\Controllers\TitleController@update");
Route::get('/administrador/destroy/{id}',"App\Http\Controllers\TitleController@destroy");
Route::get('/administrador/solicitudes',"App\Http\Controllers\TitleController@solicitudes");
Route::get('/administrador/aceptar/{id}',"App\Http\Controllers\TitleController@aceptar");
Route::get('/administrador/rechazar/{id}',"App\Http\Controllers\TitleController@rechazar");


Route::get('/juegos',"App\Http\Controllers\GameController@index");
Route::get('/juegos/visualizar/{id}',"App\Http\Controllers\GameController@visualizar");
Route::get('/juegos/screen/{id}',"App\Http\Controllers\GameController@screen");
Route::get('/juegos/screen/destroy/{id}',"App\Http\Controllers\GameController@destroyComentario");
Route::get('/juegos/comentar',"App\Http\Controllers\GameController@comentar");

Route::get('/crearOferta',"App\Http\Controllers\GameController@crearOferta");
Route::get('/ofertas',"App\Http\Controllers\GameController@visualizarOfertas");

Route::get('/publicaciones',"App\Http\Controllers\GameController@publicaciones");
Route::get('/crearjuegos',"App\Http\Controllers\GameController@createjuegos");
Route::get('/crear',"App\Http\Controllers\GameController@create");
Route::get('/misjuegos',"App\Http\Controllers\GameController@misjuegos");
Route::get('/publicaciones/solicitud',"App\Http\Controllers\GameController@store");
Route::get('/misjuegos/update/{id}',"App\Http\Controllers\GameController@updateJuegos");
Route::get('/misjuegos/destroy/{id}',"App\Http\Controllers\GameController@destroyJuegos");
Route::get('/misjuegos/edit/{id}',"App\Http\Controllers\GameController@editJuegos");

Route::get('/',"App\Http\Controllers\MainController@index");
Route::get('/login',"App\Http\Controllers\MainController@login");



Auth::routes();

Route::get('/admin',[App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/user',[App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('user');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
