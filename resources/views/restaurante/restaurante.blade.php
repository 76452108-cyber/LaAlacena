<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Restaurante - La Alacena</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">

    <!-- NAVBAR -->
    <header class="bg-white shadow border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <div class="text-xl font-bold text-green-700">
                    La Alacena
                </div>

                <div class="flex items-center gap-4">

                    <span class="text-green-700 font-semibold">
                        Hola, {{ auth()->user()->name }}
                    </span>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button
                            type="submit"
                            class="bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700 transition">
                            Cerrar sesión
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </header>

    <!-- CABECERA -->
    <section class="bg-gradient-to-r from-green-700 to-green-500 text-white py-12">
        <div class="max-w-4xl mx-auto text-center">

            <h1 class="text-4xl font-bold">
                Panel del Restaurante
            </h1>

            <p class="mt-3 text-lg">
                Administra tus productos y evita el desperdicio alimentario.
            </p>

        </div>
    </section>

    <!-- BOTÓN AGREGAR PRODUCTO -->
<section class="py-8">
    <div class="max-w-4xl mx-auto text-center">

        <button
            onclick="document.getElementById('formProducto').classList.toggle('hidden')"
            class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800 transition">

            + Agregar Producto

        </button>

    </div>
</section>

<!-- FORMULARIO OCULTO -->
<section id="formProducto" class="py-4 hidden">

    <div class="max-w-3xl mx-auto bg-white shadow rounded-lg p-8">

        <h2 class="text-2xl font-bold text-green-700 mb-6">
            Agregar Producto
        </h2>

        <form method="POST" action="{{ route('productos.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-2 font-semibold">
                    Nombre del producto
                </label>

                <input
                    type="text"
                    name="nombre"
                    class="w-full border rounded px-4 py-2"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-semibold">
                    Descripción
                </label>

                <textarea
                    name="descripcion"
                    rows="4"
                    class="w-full border rounded px-4 py-2"
                    required></textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-4">

                <div>
                    <label class="block mb-2 font-semibold">
                        Precio
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="precio"
                        class="w-full border rounded px-4 py-2"
                        required>
                </div>

                <div>
                    <label class="block mb-2 font-semibold">
                        Stock
                    </label>

                    <input
                        type="number"
                        name="stock"
                        class="w-full border rounded px-4 py-2"
                        required>
                </div>

            </div>

            <button
                type="submit"
                class="mt-6 w-full bg-green-700 text-white py-3 rounded hover:bg-green-800 transition">

                Guardar Producto

            </button>

        </form>

    </div>

</section>

<!-- LISTA DE PRODUCTOS -->
<section class="pb-12">

    <div class="max-w-6xl mx-auto">

        <h2 class="text-3xl font-bold text-center mb-8 text-green-700">
            Mis Productos
        </h2>

        @if($productos->count() > 0)

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach($productos as $producto)

                    <div class="bg-white rounded-lg shadow-md p-6">

                        <h3 class="text-xl font-bold mb-2">
                            {{ $producto->nombre }}
                        </h3>

                        <p class="text-gray-600 mb-4">
                            {{ $producto->descripcion }}
                        </p>

                        <div class="space-y-1 mb-4">

                            <p>
                                <strong>Precio:</strong>
                                S/ {{ $producto->precio }}
                            </p>

                            <p>
                                <strong>Stock:</strong>
                                {{ $producto->stock }}
                            </p>

                        </div>

                        <div class="flex gap-2">

                            <a href="#"
                               class="flex-1 text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700">

                                Editar

                            </a>

                            <form action="{{ route('productos.destroy', $producto->id) }}"
                                  method="POST"
                                  class="flex-1">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700">

                                    Eliminar

                                </button>

                            </form>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="bg-white shadow rounded-lg p-8 text-center">

                <p class="text-gray-500">
                    Aún no has registrado productos.
                </p>

            </div>

        @endif

    </div>

</section>

</body>
</html>