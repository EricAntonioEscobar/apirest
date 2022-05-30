<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $articulos = Articulo::all();
        return view('crud',compact('articulos'));
    }
}
