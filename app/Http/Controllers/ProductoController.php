<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar productos
    public function index()
    {
        $productos = Producto::all();

        return view('restaurante.indexproductos', compact('productos'));
    }

    // Mostrar formulario
    public function create()
    {
        return view('restaurante.restaurante');
    }

    // Guardar producto
    public function store(Request $request)
    {
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'stock' => $request->stock,
        ]);

        return redirect()->route('productos.index');
    }
    //eliminar producto
    public function destroy($id){
    $producto = Producto::findOrFail($id);
    $producto->delete();
    return redirect()->route('productos.index');
    }
}   