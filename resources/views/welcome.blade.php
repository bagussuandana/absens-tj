<x-guest-layout>
    <div class="text-center">
        <h1>ABSENSI</h1>
        <h3>SMK PARIWISATA TRIATMA JAYA</h3>
    </div>
    <div class="flex justify-center flex-col gap-4 my-6 items-center text-center">
        <p>Silahkan absen dengan menekan tombol</p>
        <a href="{{ route('nis-login') }}" class="w-full flex">
            <x-primary-button class="w-full flex justify-center">Masuk</x-primary-button>
        </a>
    </div>
</x-guest-layout>
