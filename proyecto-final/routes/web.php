<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/',"App\Http\Controllers\UsuarioController@index");
Route::get('/edit/{id}',"App\Http\Controllers\UsuarioController@edit");
Route::get('/show',"App\Http\Controllers\UsuarioController@show");
Route::get('/create',"App\Http\Controllers\UsuarioController@create");
Route::get('/store',"App\Http\Controllers\UsuarioController@store");
Route::get('/update/{id}',"App\Http\Controllers\UsuarioController@update");
Route::get('/destroy/{id}',"App\Http\Controllers\UsuarioController@destroy");
Route::get('/welcome', function () {
    return view('welcome');
});


