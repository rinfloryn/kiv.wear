<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-blue-900 text-center">
            DAFTAR PRODUK
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto px-6">

            {{-- ALERT SUCCESS --}}
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            {{-- BUTTON TAMBAH --}}
            <div class="flex justify-end mb-4">
                <a href="{{ route('produk.create') }}"
                   class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                    + Tambah Produk
                </a>
            </div>

            {{-- TABLE --}}
            <div class="overflow-x-auto bg-white shadow rounded-lg">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-blue-100 text-blue-900">
                        <tr>
                            <th class="p-3">No</th>
                            <th class="p-3">Nama Produk</th>
                            <th class="p-3">Harga</th>
                            <th class="p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produks as $produk)
                            <tr class="border-t">
                                <td class="p-3">{{ $loop->iteration }}</td>
                                <td class="p-3">{{ $produk->nama_produk }}</td>
                                <td class="p-3">Rp {{ number_format($produk->harga) }}</td>
                                <td class="p-3 flex gap-2">

                                    <a href="{{ route('produk.edit', $produk->id) }}"
   class="px-4 py-1.5 border border-blue-600 text-blue-600 bg-white rounded-lg
          hover:bg-blue-600 hover:text-white transition duration-200">
    Edit
</a>

                                    <form action="{{ route('produk.destroy', $produk->id) }}"
      method="POST"
      onsubmit="return confirm('Yakin hapus produk?')">
    @csrf
    @method('DELETE')

    <button
        class="px-4 py-1.5 border border-red-600 text-red-600 bg-white rounded-lg
               hover:bg-red-600 hover:text-white transition duration-200">
        Hapus
    </button>
</form>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="p-4 text-center text-gray-500">
                                    Belum ada produk
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
