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

    <!-- FORMULARIO -->
    <section class="py-10">
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

</body>
</html>