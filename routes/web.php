<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/prueba', function () {
    $blog = new Blog;
    /*
    $blog->titulo = 'apunte 2';
    $blog->apuntes = ['este es el apunte 2.1','este es el apunte 2.2','este es el apunte 2.3'];
    $blog->referencias = ['esta es la referencia 2.1','eta es la referencia 2.2','eta es la referencia 2.3'];
    $blog->save();*/

    $blog1 = Blog::where('titulo', 'apunte 1')
                 ->first();
    
    $blog1->titulo = 'laravel 11';
    $blog1->save();

    return $blog1;

});
