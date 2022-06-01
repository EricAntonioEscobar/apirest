<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use Psy\Command\WhereamiCommand;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return $articulos;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = Articulo::all();

        $articulo = new Articulo();
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;

        $articulo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $id = $_GET['id'] ?? 'default';
        $stock = $_GET['stock'] ?? 'default';

    if($id == TRUE || $stock == 'default'){
        $articulos = Articulo::where('id',$id)->get();
        return response()->json([
            'data'=> $articulos,
        ], 200);
      }
      if($stock == TRUE || $id == 'default'){
        $articulos = Articulo::where('stock', $stock)->get();
        return response()->json([
            'data'=> $articulos,
        ], 200);
      }
      if($stock == TRUE || $id == TRUE){
        $articulos = Articulo::where('id',$id)->where('stock',$stock)->get();
        return response()->json([
            'data'=> $articulos,
        ], 200);
      }
      if($stock == FALSE || $id == FALSE){
        $articulos = Articulo::all();
        return response()->json([
            'data'=> $articulos,
        ], 200);
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $articulo = Articulo::findOrFail($request->id);
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;

        $articulo->save();

        return $articulo;
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::destroy($id);
        return $articulo;
    }

    public function destroyAll() 
    {
        /* $articulo = Articulo::query()->delete(); */ //No reinicia ids
           $articulo = Articulo::truncate(); //reinicia ids  
        return $articulo;
    }
}
