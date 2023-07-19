<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //READ
        // return Producto::all(); para mostrar todos los productos en general
         return Producto::where('estado', 'A')->paginate(10);

        //  $productos = Producto::where('estado', 'A')->get();
        // return $productos;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoRequest $request)
    {
        //CREATE 
        Producto::create($request->all());
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //UPDATE
        Producto::findOrFail($request->id)
        ->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //DELETE
       $producto = Producto::findOrFail($producto->id);
       $producto->estado = 'I';
       $producto->save();
        // ->delete para eliminar de la bd

        // Producto::findOrFail($producto->id)
        // ->update(['estado' => 'I']);




    }
}
