<?php

use App\Http\Controllers\DatosController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/prueba', function () {
    $blog = new Blog;
    
    /*$blog->titulo = 'POSGREsql';
    $blog->apuntes = ['apunte tema 3','apunte tema 3','apunte tema 3'];
    $blog->referencias = ['esta es la referencia 3','eta es la referencia 3','eta es la referencia 3'];
    $blog->save();*/

    $blog1 = Blog::All();
                 

    return $blog1;

});

Route::get('/datos', [DatosController::class, 'index']);
Route::get('/crear', [DatosController::class, 'crear']);
Route::post('/crear', [DatosController::class, 'enviar']);
