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

//imagenes
Route::post('dashboard/post/{post}/image', 'dashboard\PostController@image')->name('post.image');

Route::get('dashboard/post/image-download/{image}', 'dashboard\PostController@imageDownload')->name('post.image-download');
Route::delete('dashboard/post/image-delete/{image}', 'dashboard\PostController@imageDelete')->name('post.image-delete');

Route::post('dashboard/post/content_image', 'dashboard\PostController@contentImage');


Route::resource('dashboard/category', 'dashboard\CategoryController');

Route::resource('dashboard/user', 'dashboard\UserController');
Route::resource('dashboard/contact', 'dashboard\ContactController')->only([
    'index', 'show', 'destroy',
]);


Route::resource('dashboard/post-comment', 'dashboard\PostCommentController')->only([
    'index', 'show', 'destroy',
]);

Route::get('dashboard/post-comment/{post}/post', 'dashboard\PostCommentController@post')->name('post-comment.post');

Route::get('dashboard/post-comment/j-show/{postComment}', 'dashboard\PostCommentController@jshow');
Route::post('dashboard/post-comment/proccess/{postComment}', 'dashboard\PostCommentController@proccess');


Route::get('/', 'web\WebController@index')->name("index");
Route::get('/categories', 'web\WebController@index')->name("index");

Route::get('/detail/{id}', 'web\WebController@detail');

Route::get('/post-category/{id}', 'web\WebController@post_category');

Route::get('/contact', 'web\WebController@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
