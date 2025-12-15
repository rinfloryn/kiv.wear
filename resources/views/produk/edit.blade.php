<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-blue-900 text-center">
            EDIT PRODUK
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-xl mx-auto px-6 bg-white p-6 rounded-lg shadow-xl">

            {{-- PERUBAHAN 1: Tambahkan enctype untuk mendukung upload file --}}
            <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- NAMA PRODUK --}}
                <div class="mb-4">
                    <label class="block font-semibold mb-1 text-gray-700">Nama Produk</label>
                    <input type="text"
                            name="nama_produk"
                            value="{{ old('nama_produk', $produk->nama_produk) }}"
                            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                            required>
                    @error('nama_produk')<p class="text-sm text-red-500 mt-1">{{ $message }}</p>@enderror
                </div>

                {{-- HARGA --}}
                <div class="mb-4">
                    <label class="block font-semibold mb-1 text-gray-700">Harga</label>
                    <input type="number"
                            name="harga"
                            value="{{ old('harga', $produk->harga) }}"
                            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                            required>
                    @error('harga')<p class="text-sm text-red-500 mt-1">{{ $message }}</p>@enderror
                </div>

                {{-- DESKRIPSI --}}
                <div class="mb-4">
                    <label class="block font-semibold mb-1 text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi"
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                rows="4">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                    @error('deskripsi')<p class="text-sm text-red-500 mt-1">{{ $message }}</p>@enderror
                </div>

                <hr class="my-6 border-gray-200">

                {{-- PERUBAHAN 2: Tampilan Gambar Saat Ini --}}
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-3 text-blue-800">Gambar Saat Ini</h3>
                    @if ($produk->gambar)
                        {{-- Menggunakan Storage::url() untuk gambar dari storage/app/public --}}
                        <div class="mb-3 border rounded-lg p-2 max-w-[200px]">
                            <img src="{{ Storage::url($produk->gambar) }}" 
                                 alt="Gambar {{ $produk->nama_produk }}" 
                                 class="w-full h-auto object-cover rounded">
                        </div>
                        <p class="text-xs text-gray-500">Abaikan kolom di bawah jika tidak ingin mengganti gambar.</p>
                    @else
                        <p class="text-sm text-gray-500">Produk ini belum memiliki gambar.</p>
                    @endif
                </div>

                {{-- PERUBAHAN 3: Input Upload Gambar Baru --}}
                <div class="mb-6">
                    <label class="block font-semibold mb-1 text-gray-700" for="gambar">Ganti Gambar Produk</label>
                    <input type="file"
                            name="gambar"
                            id="gambar"
                            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                    @error('gambar')<p class="text-sm text-red-500 mt-1">{{ $message }}</p>@enderror
                </div>

                {{-- BUTTON --}}
                <div class="flex justify-between mt-6">
                    <a href="{{ route('produk.index') }}"
                        class="px-5 py-2 bg-gray-300 rounded-lg font-semibold hover:bg-gray-400 transition">
                        &larr; Kembali
                    </a>

                    <button type="submit"
                            class="px-5 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                        Update Produk
                    </button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>