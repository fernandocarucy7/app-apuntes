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
}
