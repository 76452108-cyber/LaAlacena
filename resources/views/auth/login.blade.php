<x-guest-layout>
    <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="mb-6 text-center">
            <h2 class="text-2xl font-semibold text-gray-900">Iniciar Sesión</h2>
            <p class="text-gray-600 mt-2">Bienvenido a La Alacena</p>
        </div>

        <!-- ERRORES -->
        @if ($errors->any())
            <div class="mb-4 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <label class="flex items-center gap-2 text-sm text-gray-600">
                    <input type="checkbox" name="remember" class="rounded border-gray-300 text-green-600 focus:ring-green-500" />
                    Recordarme
                </label>

                <a class="text-sm text-green-700 hover:text-green-900" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
            </div>

            <div class="mt-6">
                <x-primary-button class="w-full justify-center">
                    {{ __('Ingresar') }}
                </x-primary-button>
            </div>
        </form>

        <div class="mt-6 text-center text-sm text-gray-600">
            <span>¿Aún no tienes cuenta?</span>
            <a href="{{ route('register') }}" class="font-semibold text-green-700 hover:text-green-900">Crear cuenta</a>
        </div>
    </div>
</x-guest-layout>