<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

/*Route::get('/test', function () {
    return "hola mundo";
});

Route::get('/hola/{nombre?}', function ($nombre = "Calderon") {
    return "hola $nombre conocenos: <a href='".route("nosotros")."'>nosotros</a>";
});


Route::get('/sobre-nosotros-en-la-web', function() {
    return "<h1>Todo sobre nosotros</h1>";
})->name("nosotros");


Route::get('home/{nombre?}/{apellido?}', function($nombre = "Margarita", $apellido = "Pomares") {

    $posts = ["Posts1","Posts2","Posts3","Posts4","Posts5"];
    $posts2 = null;
    //return view("home")->with("nombre",$nombre)->with("apellido",$apellido);

    return view("home",['nombre' => $nombre,'apellido' => 'Ortiz','posts' => $posts,'posts2' => $posts2]);
})->name("home");*/



Route::resource('dashboard/post', 'dashboard\PostController');

Route::post('dashboard/post/{post}/image', 'dashboard\PostController@image')->name('post.image');

Route::resource('dashboard/category', 'dashboard\CategoryController');

Route::resource('dashboard/user', 'dashboard\UserController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
