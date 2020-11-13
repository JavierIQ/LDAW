<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TitleController;

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

Route::get('/',"App\Http\Controllers\MainController@index");
Route::get('/login',"App\Http\Controllers\MainController@login");


