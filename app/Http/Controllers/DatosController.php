<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function index(){
        $datos = Blog::All();
        return view('datos', compact('datos'));
    }

    public function crear(){
        return view('formulario');
    }

    public function enviar(Request $request){
        $nota = new Blog();

        $nota->titulo = $request->titulo;
        $nota->apuntes = $request->apuntes;
        $nota->referencias = $request->referencias;
        $nota->save();

        return redirect('/crear');
    }
}
