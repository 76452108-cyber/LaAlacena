<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <div class="sm:flex sm:items-start sm:justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Bienvenido de nuevo</h3>
                            <p class="mt-2 text-sm text-gray-600">Aquí puedes ver un resumen rápido de tu cuenta y acceder a las funcionalidades principales.</p>
                        </div>
                        <div class="mt-4 sm:mt-0">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 transition">Explorar ofertas</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid gap-6 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h4 class="text-lg font-semibold text-gray-900">Ofertas guardadas</h4>
                    <p class="mt-2 text-sm text-gray-600">Revisa las últimas ofertas que seleccionaste en tu cuenta.</p>
                    <div class="mt-4 text-3xl font-bold text-green-700">12</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h4 class="text-lg font-semibold text-gray-900">Pedidos recientes</h4>
                    <p class="mt-2 text-sm text-gray-600">Visualiza el estado de tus pedidos y acciones pendientes.</p>
                    <div class="mt-4 text-3xl font-bold text-green-700">3</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h4 class="text-lg font-semibold text-gray-900">Notificaciones</h4>
                    <p class="mt-2 text-sm text-gray-600">Recibe alertas de nuevas donaciones, eventos y mensajes.</p>
                    <div class="mt-4 text-3xl font-bold text-green-700">7</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
