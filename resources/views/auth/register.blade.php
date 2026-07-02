<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - La Alacena</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="min-h-screen flex items-center justify-center px-4">

        <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">

            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-green-700">
                    Crear Cuenta
                </h2>

                <p class="text-gray-600 mt-2">
                    Únete a La Alacena
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-4">

                @csrf

                <!-- NOMBRE -->
                <div>

                    <label class="block mb-1 text-sm font-medium text-gray-700">
                        Nombre
                    </label>

                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">

                </div>

                <!-- EMAIL -->
                <div>

                    <label class="block mb-1 text-sm font-medium text-gray-700">
                        Email
                    </label>

                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">

                </div>

                <!-- ROL -->
                <div>

                    <label class="block mb-1 text-sm font-medium text-gray-700">
                        Tipo de cuenta
                    </label>

                    <select name="rol" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">

                        <option value="cliente">Cliente</option>
                        <option value="restaurante">Restaurante</option>

                    </select>

                </div>

                <!-- PASSWORD -->
                <div>

                    <label class="block mb-1 text-sm font-medium text-gray-700">
                        Contraseña
                    </label>

                    <input type="password" name="password" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">

                </div>

                <!-- CONFIRM PASSWORD -->
                <div>

                    <label class="block mb-1 text-sm font-medium text-gray-700">
                        Confirmar Contraseña
                    </label>

                    <input type="password" name="password_confirmation" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">

                </div>

                <!-- BOTÓN -->
                <button type="submit"
                    class="w-full bg-green-700 text-white py-3 rounded-lg hover:bg-green-800 transition">

                    Registrarse

                </button>

            </form>

            <!-- LINK LOGIN -->
            <div class="mt-6 text-center">

                <a href="{{ route('login') }}" class="text-green-700 hover:text-green-800 text-sm">

                    ¿Ya tienes cuenta? Inicia sesión

                </a>

            </div>

        </div>

    </div>

</body>

</html>
