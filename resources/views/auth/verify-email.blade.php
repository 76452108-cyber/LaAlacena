<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-semibold text-gray-900">Verifica tu correo</h2>
        <p class="mt-2 text-sm text-gray-600">Antes de continuar, confirma tu correo usando el enlace que te enviamos. Si no recibiste el correo, puedes enviar uno nuevo.</p>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 rounded-lg border border-green-200 bg-green-50 p-4 text-sm text-green-700">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="space-y-4">
        <form method="POST" action="{{ route('verification.send') }}" class="w-full">
            @csrf

            <x-primary-button class="w-full justify-center">
                {{ __('Resend Verification Email') }}
            </x-primary-button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf

            <button type="submit" class="w-full text-center text-sm text-gray-600 hover:text-gray-900 rounded-md border border-gray-200 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
