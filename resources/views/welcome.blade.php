<x-guest-layout>


    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="text-center">
                    <h1>ABSENSI</h1>
                    <p>SMK PARIWISATA TRIATMA JAYA</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
                        @csrf

                        <!-- NIK -->
                        <div>
                            <x-input-label for="email" :value="__('Silahkan Masukan NIK anda')" />
                            <x-text-input id="email" class="block w-full mt-1" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-center w-full">
                            <x-primary-button type="submit"
                                class="items-center justify-center w-full">ABSEN</x-primary-button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
