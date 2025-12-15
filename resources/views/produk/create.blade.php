<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-extrabold text-blue-900 text-center">
            Tambah Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto bg-white shadow-2xl rounded-2xl p-8">

            {{-- 1. UBAH FORM: Tambahkan enctype="multipart/form-data" --}}
            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- NAMA PRODUK --}}
                <div class="mb-5">
                    <label for="nama_produk" class="block text-sm font-semibold text-blue-900 mb-1">
                        Nama Produk
                    </label>
                    <input type="text" name="nama_produk" id="nama_produk"
                        {{-- Tambahkan border merah jika ada error --}}
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 @error('nama_produk') border-red-500 @enderror"
                        placeholder="Contoh: Kaos KIV Wear"
                        value="{{ old('nama_produk') }}">
                    {{-- Tampilkan pesan error spesifik --}}
                    @error('nama_produk')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- HARGA --}}
                <div class="mb-5">
                    <label for="harga" class="block text-sm font-semibold text-blue-900 mb-1">
                        Harga (Rp)
                    </label>
                    <input type="number" name="harga" id="harga"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 @error('harga') border-red-500 @enderror"
                        placeholder="Contoh: 150000"
                        value="{{ old('harga') }}">
                    @error('harga')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- DESKRIPSI --}}
                <div class="mb-5">
                    <label for="deskripsi" class="block text-sm font-semibold text-blue-900 mb-1">
                        Deskripsi
                    </label>
                    <textarea name="deskripsi" id="deskripsi" rows="4"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 @error('deskripsi') border-red-500 @enderror"
                        placeholder="Deskripsi produk...">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- 2. UBAH INPUT GAMBAR JADI TYPE="FILE" --}}
                <div class="mb-8">
                    <label for="gambar" class="block text-sm font-semibold text-blue-900 mb-1">
                        Upload Gambar Produk
                    </label>
                    <input type="file" name="gambar" id="gambar"
                        class="w-full rounded-lg border p-2 bg-gray-50 @error('gambar') border-red-500 @enderror"
                        {{-- Tidak perlu value atau placeholder untuk type="file" --}}>
                    <p class="text-xs text-gray-500 mt-1">Format yang diizinkan: JPG, PNG, ukuran maksimal 2MB.</p>
                    @error('gambar')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- BUTTON --}}
                <div class="flex justify-end space-x-4">
                    <a href="{{ route('produk.index') }}"
                       class="px-6 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                        Batal
                    </a>

                    <button type="submit"
                            class="px-8 py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
                        Simpan Produk
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout> 