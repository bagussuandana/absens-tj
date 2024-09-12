<x-guest-layout>

    <div class="text-center">
        <h1>ABSENSI</h1>
        <h3>SMK PARIWISATA TRIATMA JAYA</h3>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('nis-login') }}" class="my-6">
        @csrf

        <!-- NIS -->
        <div>
            <x-input-label for="nis" :value="__('Silahkan masukkan NIS Anda')" />
            <x-text-input id="nis" class="block mt-1 w-full" type="text" name="nis" :value="old('nis')" required
                autofocus autocomplete="username" placeholder="5555" />
            <x-input-error :messages="$errors->get('nis')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Apakah anda admin?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Masuk') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
