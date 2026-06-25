<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto - Panel Restaurante</title>

    <!-- Habilitar Tailwind CSS y Javascript compilados mediante Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 flex flex-col min-h-screen">

    <!-- BARRA DE NAVEGACIÓN -->
    <header class="bg-white shadow border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-xl font-bold text-green-700">La Alacena</a>
                
                <div class="flex items-center gap-4">
                    <span class="text-gray-700 font-semibold">
                        Hola, {{ auth()->user()->name }}
                    </span>
                    <a href="{{ route('productos.index') }}" class="text-sm bg-gray-200 text-gray-755 px-3 py-2 rounded hover:bg-gray-300 transition">
                        Volver al catálogo
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- CABECERA DE LA PÁGINA -->
    <section class="bg-gradient-to-r from-green-700 to-green-500 text-white py-12">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h1 class="text-4xl font-bold">Panel del Restaurante</h1>
            <p class="mt-3 text-lg opacity-90">Crea ofertas atractivas y ayuda a reducir el desperdicio de comida en Arequipa.</p>
        </div>
    </section>

    <!-- FORMULARIO DE INGRESO (CON SOPORTE DE VALIDACIÓN JAVASCRIPT) -->
    <main class="flex-grow py-10 px-4">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-8 border border-gray-100">
            
            <h2 class="text-2xl font-bold text-green-700 mb-6">
                Agregar Producto
            </h2>

            <form id="productForm" method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Campo: Nombre del producto -->
                <div class="mb-4">
                    <label for="nombre" class="block mb-1 font-semibold text-gray-700 text-sm">
                        Nombre del producto
                    </label>
                    <input
                        type="text"
                        name="nombre"
                        id="nombre"
                        placeholder="Ej. Bolsa sorpresa de panes variados"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                        required>
                    <span class="error-msg text-red-650 text-xs mt-1 hidden" id="error-nombre"></span>
                </div>

                <!-- Campo: Descripción -->
                <div class="mb-4">
                    <label for="descripcion" class="block mb-1 font-semibold text-gray-700 text-sm">
                        Descripción
                    </label>
                    <textarea
                        name="descripcion"
                        id="descripcion"
                        rows="4"
                        placeholder="Describe el contenido, alérgenos y hora sugerida de recojo..."
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                        required></textarea>
                    <span class="error-msg text-red-650 text-xs mt-1 hidden" id="error-descripcion"></span>
                </div>

                <!-- Campos en paralelo: Precio y Stock -->
                <div class="grid md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <label for="precio" class="block mb-1 font-semibold text-gray-700 text-sm">
                            Precio (S/)
                        </label>
                        <input
                            type="number"
                            step="0.01"
                            name="precio"
                            id="precio"
                            placeholder="0.00"
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                            required>
                        <span class="error-msg text-red-650 text-xs mt-1 hidden" id="error-precio"></span>
                    </div>

                    <!-- Campo: Imagen -->
                    <div class="mb-6">
                        <label for="imagen" class="block mb-1 font-semibold text-gray-700 text-sm">
                             Imagen del producto
                        </label>
                        <input
                          type="file"
                          name="imagen"
                          id="imagen"
                          accept="image/*"
                          class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none">

                         <span class="text-gray-500 text-xs">Formatos permitidos: JPG, PNG, JPE.</span>
                    </div>

                    <div>
                        <label for="stock" class="block mb-1 font-semibold text-gray-700 text-sm">
                            Stock
                        </label>
                        <input
                            type="number"
                            name="stock"
                            id="stock"
                            placeholder="1"
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                            required>
                        <span class="error-msg text-red-650 text-xs mt-1 hidden" id="error-stock"></span>
                    </div>
                </div>

                <!-- Botones de Acción -->
                <div class="flex gap-4">
                    <a href="{{ route('productos.index') }}" class="w-1/3 text-center bg-gray-200 text-gray-700 py-3 rounded-lg hover:bg-gray-300 transition font-semibold">
                        Cancelar
                    </a>
                    <button
                        type="submit"
                        class="w-2/3 bg-green-700 hover:bg-green-800 text-white py-3 rounded-lg font-semibold transition shadow-sm">
                        Guardar Producto
                    </button>
                </div>

            </form>
        </div>
    </main>

    <!-- Cargar script de validación dinámica en JS -->
    <script src="{{ asset('js/validation.js') }}"></script>

    <!-- FOOTER -->
    @include('layouts.footer')

</body>
</html>