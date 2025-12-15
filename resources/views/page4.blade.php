<x-app-layout>
    <x-slot name="header">
        <div class="text-center space-y-3">
            {{-- Judul Utama --}}
            <h2 class="text-3xl md:text-4xl font-extrabold text-blue-900 drop-shadow-md animate-fadeIn">
                Koleksi Kami
            </h2>
            <p class="text-sm md:text-base text-gray-500 max-w-2xl mx-auto animate-fadeIn delay-400">
                Temukan Kiv Wear yang stylish, nyaman, dan premium. Setiap item dibuat dengan detail dan kualitas terbaik.
            </p>
        </div>
    </x-slot>

    <style>
      /* Asumsi style ini tidak ada di konfigurasi Tailwind Anda */
      .bg-cream { background-color: #f4efe0; }
    </style>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                
                <section class="bg-cream py-12">
                    <div class="max-w-7xl mx-auto px-6">
                        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-wider text-center mb-10">
                            <span class="text-gray-900">EXPLORE OUR</span>
                            <span class="text-sky-600 ml-3">COLLECTION</span>
                        </h2>

                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                                
                                {{-- Pastikan variabel $produks dikirim dari Controller --}}
                                @forelse ($produks as $product)
                                    <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
                                        <div class="h-64 bg-gray-100 relative">
                                            
                                            {{-- PERUBAHAN UTAMA: MENGGUNAKAN Storage::url() --}}
                                            {{-- Ini akan menghasilkan path yang benar dari folder storage/app/public --}}
                                            <img src="{{ Storage::url($product->gambar) }}" 
                                                 alt="{{ $product->nama_produk }}" 
                                                 class="w-full h-full object-cover">
                                            
                                            {{-- Badge Harga --}}
                                            <div class="absolute top-3 right-3 bg-sky-600 text-white text-sm font-bold px-3 py-1 rounded-full shadow-md">
                                                Rp. {{ number_format($product->harga, 0, ',', '.') }}
                                            </div>
                                        </div>
                                        
                                        <div class="p-6">
                                            <h3 class="font-bold text-xl text-gray-900 leading-snug">
                                                {{-- Membagi nama produk menjadi dua bagian untuk styling --}}
                                                {{ Str::before($product->nama_produk, ' ') }} 
                                                <span class="text-sky-600">{{ Str::after($product->nama_produk, ' ') }}</span>
                                            </h3>
                                            
                                            <p class="mt-2 text-sm text-gray-600 line-clamp-3">
                                                {{-- Menampilkan 3 baris deskripsi maksimum --}}
                                                {{ $product->deskripsi }}
                                            </p>
                                            
                                        </div>
                                    </article>
                                @empty
                                    {{-- Jika tidak ada produk yang ditemukan --}}
                                    <div class="col-span-4 text-center py-10 text-gray-500">
                                        <p class="text-xl font-semibold">Belum ada produk dalam koleksi ini.</p>
                                        <p class="mt-2">Silakan tambahkan produk baru melalui halaman admin.</p>
                                    </div>
                                @endforelse
                            </div> 
                        </div>
                    </div>
                </section>
                {{-- end section koleksi --}}

            </div>
        </div>
    </div>

    <div class="mt-16 w-full flex flex-col items-center">
        {{-- ... Kode WhatsApp section sebelumnya ... --}}
        <div class="bg-blue-50 border border-blue-200 shadow-md rounded-2xl p-10 w-full max-w-3xl">
            <h3 class="text-2xl font-extrabold text-blue-900 mb-2 text-center">
                Ingin Pesan Sekarang?
            </h3>
            <p class="text-gray-700 text-sm mb-8 text-center">
                Klik tombol di bawah untuk melakukan pemesanan langsung via WhatsApp — cepat, mudah, dan responsif!
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full mb-3 shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-blue-900">Fast Response</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full mb-3 shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-blue-900">Custom Bebas Desain</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full mb-3 shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h7m-7 4h4" />
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-blue-900">Free Konsultasi</p>
                </div>
            </div>

            <div class="flex justify-center">
                <a href="https://wa.me/6285352840964?text=Halo%20admin%2C%20saya%20ingin%20memesan%20koleksi%20Kiv%20Wear"
                    target="_blank"
                    class="flex items-center gap-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.52 3.48A11.78 11.78 0 0 0 12 0a11.78 11.78 0 0 0-8.52 3.48A11.78 11.78 0 0 0 0 12a11.67 11.67 0 0 0 1.64 6L0 24l6.28-1.63A11.89 11.89 0 0 0 12 23.78h.01c3.16 0 6.14-1.23 8.38-3.48A11.78 11.78 0 0 0 24 12a11.78 11.78 0 0 0-3.48-8.52zM12 21.37a9.42 9.42 0 0 1-4.8-1.32l-.34-.2-3.73.96 1-3.64-.22-.35A9.43 9.43 0 1 1 12 21.37zm5.21-7.07c-.28-.14-1.65-.81-1.91-.9-.26-.1-.45-.14-.63.14-.19.28-.72.9-.88 1.08-.16.19-.33.21-.61.07-.28-.14-1.18-.43-2.25-1.38-.83-.74-1.39-1.65-1.55-1.93-.16-.28-.02-.43.12-.57.13-.13.28-.33.42-.49.14-.16.19-.28.29-.47.1-.19.05-.36-.02-.5-.07-.14-.63-1.51-.86-2.07-.23-.55-.46-.47-.63-.48h-.54c-.19 0-.5.07-.76.36-.26.28-1 1-1 2.43s1.02 2.81 1.16 3.01c.14.19 2 3.04 4.86 4.26.68.29 1.21.46 1.62.59.68.21 1.29.18 1.78.11.54-.08 1.65-.67 1.88-1.32.23-.65.23-1.21.16-1.32-.07-.11-.26-.18-.54-.32z"/>
                    </svg>
                    PESAN VIA WHATSAPP
                </a>
            </div>
        </div>
    </div>

    {{-- FOOTER (Tidak ada perubahan) --}}
    <footer class="bg-blue-900 text-white py-20 mt-20">
        {{-- ... Kode Footer sebelumnya ... --}}
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
                <div>
                    <h1 class="text-4xl font-extrabold leading-tight">
                        Radiate<br>Confidence!
                    </h1>
                    <div class="mt-6">
                        <input 
                            type="email" 
                            placeholder="Enter your email for promotions"
                            class="w-full md:w-3/4 px-4 py-3 rounded-xl text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300"
                        >
                    </div>
                    <div class="mt-4 flex items-start gap-3">
                        <input type="checkbox" class="mt-1 w-4 h-4">
                        <p class="text-sm text-gray-300 leading-relaxed">
                            I agree with the 
                            <a href="#" class="underline hover:text-white">privacy policy</a>
                            and 
                            <a href="#" class="underline hover:text-white">terms of use</a>.
                        </p>
                    </div>
                    <div class="flex space-x-4 text-2xl mt-6">
                        <a href="#" class="hover:text-blue-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-blue-300"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="hover:text-blue-300"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">
                    <div>
                        <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="#" class="hover:text-white">Home</a></li>
                            <li><a href="#" class="hover:text-white">About</a></li>
                            <li><a href="#" class="hover:text-white">Collections</a></li>
                            <li><a href="#" class="hover:text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg mb-4">Support</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="#" class="hover:text-white">FAQ</a></li>
                            <li><a href="#" class="hover:text-white">Size Guide</a></li>
                            <li><a href="#" class="hover:text-white">Shipping</a></li>
                            <li><a href="#" class="hover:text-white">Terms & Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-blue-700 pt-6 text-center text-gray-400 text-sm">
                © 2025 KIV Wear. All rights reserved.
            </div>
        </div>
    </footer>

</x-app-layout>