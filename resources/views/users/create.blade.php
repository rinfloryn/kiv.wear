<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Tambah User</h2>
    </x-slot>

    <div class="p-6">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <input type="text" name="name" placeholder="Nama" class="w-full p-2 mb-3 border">
            <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-3 border">
            <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-3 border">

            <button class="px-4 py-2 text-white bg-green-600 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
