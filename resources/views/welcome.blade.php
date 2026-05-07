<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Alacena</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">

    <!-- NAVBAR -->
    <header x-data="{ open: false }" class="bg-white shadow border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="text-xl font-bold text-green-700">La Alacena</div>
                </div>

                <div class="hidden md:flex-1 md:mx-4 md:block">
                    <input type="text" placeholder="Buscar comida o restaurante..." class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-green-700">Inicio</a>
                    <a href="#" class="text-gray-700 hover:text-green-700">Explorar</a>
                    <a href="#" class="text-gray-700 hover:text-green-700">Pedidos</a>
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-green-700">Login</a>
                </nav>

                <div class="flex items-center md:hidden">
                    <button @click="open = !open" class="text-gray-700 hover:text-green-700 focus:outline-none">
                        <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg x-show="open" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="md:hidden px-4 pb-4 bg-white">
            <input type="text" placeholder="Buscar comida o restaurante..." class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>

        <div x-show="open" x-cloak class="md:hidden border-t border-gray-200 bg-white">
            <div class="px-4 py-4 space-y-3">
                <a href="#" class="block text-gray-700 hover:text-green-700">Inicio</a>
                <a href="#" class="block text-gray-700 hover:text-green-700">Explorar</a>
                <a href="#" class="block text-gray-700 hover:text-green-700">Pedidos</a>
                <a href="{{ route('login') }}" class="block text-gray-700 hover:text-green-700">Login</a>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="bg-gradient-to-r from-green-700 to-green-500 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Comida buena, a mejor precio</h1>
            <p class="text-xl md:text-2xl mb-8">Evita el desperdicio y ahorra dinero en Arequipa</p>
            <button class="bg-white text-green-700 px-8 py-3 rounded-md font-semibold hover:bg-gray-100 transition">Explorar ofertas</button>
        </div>
    </section>

    <!-- CATEGORÍAS -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="bg-green-100 text-green-800 px-6 py-3 rounded-full hover:bg-green-200 transition">🍞 Panaderías</button>
                <button class="bg-green-100 text-green-800 px-6 py-3 rounded-full hover:bg-green-200 transition">🍛 Restaurantes</button>
                <button class="bg-green-100 text-green-800 px-6 py-3 rounded-full hover:bg-green-200 transition">🥦 Supermercados</button>
                <button class="bg-green-100 text-green-800 px-6 py-3 rounded-full hover:bg-green-200 transition">🍰 Postres</button>
            </div>
        </div>
    </section>

    <!-- PRODUCTOS -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8">Ofertas disponibles</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://via.placeholder.com/300x200" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Panadería Don José</h3>
                        <p class="text-gray-600 mb-4">Bolsa sorpresa de panes</p>

                        <div class="flex justify-between items-center mb-4">
                            <span class="text-green-700 font-bold text-lg">S/ 5.00</span>
                            <span class="text-gray-500 text-sm">Stock: 5</span>
                        </div>

                        <button class="w-full bg-green-700 text-white py-2 rounded-md hover:bg-green-800 transition">Agregar</button>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://via.placeholder.com/300x200" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Restaurante Criollo</h3>
                        <p class="text-gray-600 mb-4">Menú del día</p>

                        <div class="flex justify-between items-center mb-4">
                            <span class="text-green-700 font-bold text-lg">S/ 10.00</span>
                            <span class="text-gray-500 text-sm">Stock: 3</span>
                        </div>

                        <button class="w-full bg-green-700 text-white py-2 rounded-md hover:bg-green-800 transition">Agregar</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>
</html>