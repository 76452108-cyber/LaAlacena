<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;

class ProductoController extends Controller
{
    // mostrar productos
    public function index()
    {
        $productos = Producto::where('user_id', auth()->id())->get();
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
        $rutaImagen = null;
        if ($request->hasFile('imagen')) {
            $cloudinary = new Cloudinary(env('CLOUDINARY_URL'));
            $upload = $cloudinary
                ->uploadApi()
                ->upload(
                    $request->file('imagen')->getRealPath(),
                    [
                        'folder' => 'productos'
                    ]
                );
            $rutaImagen = $upload['secure_url'];
        }
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'imagen' => $rutaImagen,
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
