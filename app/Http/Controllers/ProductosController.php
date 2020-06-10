<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function mostrar(){
        return view('mostrar');
    }

    public function crear(Request $request){

        $request->validate([
            'nombre' => 'required|max:256',
            'descripcion' => 'required',
            'precio' => 'required|min:0',
            'stock' => 'required|min:0',
        ]);

        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');
        $stock = $request->input('stock');

        $producto = new Producto();
        $producto->setNombre($nombre);
        $producto->setDescripcion($descripcion);
        $producto->setPrecio($precio);
        $producto->setStock($stock);
        $producto->save();

        return view('productoCreado', ['producto' => $producto]);
    }

    public function lista(){
        $productos = Producto::all();
        return view('lista', ['productos' => $productos]);
    }
}
