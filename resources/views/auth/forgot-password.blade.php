<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¿Olvidaste tu contraseña? Introduce el email con el que te registraste y te enviaremos una nueva.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between my-4">
            <x-link :href="route('login')">
                Inicia sesión
            </x-link>
            <x-link :href="route('register')">
                Crea tu cuenta
            </x-link>
        </div>
        <x-primary-button class="w-full justify-center">
            {{ __('Enviar instrucciones') }}
        </x-primary-button>
    </form>

</x-guest-layout>
