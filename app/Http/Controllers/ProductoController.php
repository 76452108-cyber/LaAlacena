<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar productos del usuario autenticado
    public function index()
    {
        $productos = Producto::where('user_id', auth()->id())->get();

        return view('restaurante.indexproductos', compact('productos'));
    }

    // Mostrar formulario
    public function create()
    {
        $productos = Producto::where('user_id', auth()->id())->get();

        return view('restaurante.restaurante', compact('productos'));
    }

    // Guardar producto
    public function store(Request $request)
    {
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'user_id' => auth()->id(),
        ]);

        return redirect('/restaurante');
    }

    // Eliminar producto
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        // Seguridad: solo puede eliminar sus propios productos
        if ($producto->user_id != auth()->id()) {
            abort(403);
        }

        $producto->delete();

        return redirect('/restaurante');
    }
}