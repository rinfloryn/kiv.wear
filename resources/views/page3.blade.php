<x-app-layout>
    <x-slot name="header">
        <<div class="text-center space-y-2">
            <h2 class="text-4xl font-extrabold text-blue-900 tracking-wide">
                VISIT OUR <span class="text-sky-500">STORE</span>
            </h2>
            <p class="text-gray-600 text-lg">
                Temukan lokasi KIV WEAR dan kunjungi kami secara langsung
            </p>
        </div>
    </x-slot>


    {{-- ================= LOCATION SECTION ================= --}}
    <div class="py-16 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                {{-- MAP --}}
                <div class="w-full">
                    <iframe
                        class="w-full h-[420px] rounded-2xl shadow-xl border border-blue-100"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63381.89297855085!2d107.758!3d-7.234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68bb5a9df103cd%3A0x5027a76e35315e0!2sBayongbong%2C%20Garut!5e0!3m2!1sid!2sid!4v1701234567890">
                    </iframe>
                </div>

                {{-- STORE INFO --}}
                <div class="space-y-6">

                    <h3 class="text-3xl font-bold text-blue-900">
                        KIV WEAR Official Store
                    </h3>

                    <p class="text-gray-600 text-lg leading-relaxed">
                        Kami melayani pembuatan produk fashion custom dengan kualitas premium.
                        Datang langsung ke store kami untuk konsultasi desain dan pemesanan.
                    </p>

                    {{-- INFO LIST --}}
                    <div class="space-y-4">

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                                📍
                            </div>
                            <p class="text-gray-700">
                                Bayongbong, Garut, Jawa Barat, Indonesia
                            </p>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                                🕒
                            </div>
                            <p class="text-gray-700">
                                Senin – Sabtu : 09.00 – 17.00 WIB
                            </p>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                                📞
                            </div>
                            <p class="text-gray-700">
                                WhatsApp : 0853-5284-0964
                            </p>
                        </div>

                    </div>

                    {{-- BUTTON --}}
                    <a href="https://maps.google.com/?q=Bayongbong+Garut"
                       target="_blank"
                       class="inline-flex items-center gap-2 mt-4 px-6 py-3 
                              bg-blue-600 hover:bg-blue-700 text-white 
                              font-semibold rounded-full shadow-lg transition">

                        Lihat di Google Maps
                    </a>

                </div>

            </div>
        </div>
    </div>
    {{-- FOOTER --}}
<footer class="bg-blue-900 text-white py-20 mt-20">
    <div class="max-w-6xl mx-auto px-6">

        {{-- TOP SECTION --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">

            {{-- LEFT SIDE (Text + Form + Socials) --}}
            <div>
                <h1 class="text-4xl font-extrabold leading-tight">
                    Radiate<br>Confidence!
                </h1>

                {{-- Email Input --}}
                <div class="mt-6">
                    <input 
                        type="email" 
                        placeholder="Enter your email for promotions"
                        class="w-full md:w-3/4 px-4 py-3 rounded-xl text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300"
                    >
                </div>

                {{-- Checkbox --}}
                <div class="mt-4 flex items-start gap-3">
                    <input type="checkbox" class="mt-1 w-4 h-4">
                    <p class="text-sm text-gray-300 leading-relaxed">
                        I agree with the 
                        <a href="#" class="underline hover:text-white">privacy policy</a>
                        and 
                        <a href="#" class="underline hover:text-white">terms of use</a>.
                    </p>
                </div>

                {{-- Social Icons --}}
                <div class="flex space-x-4 text-2xl mt-6">
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-facebook"></i></a>
                </div>
            </div>

            {{-- RIGHT SIDE (Links + About) --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">

                {{-- Quick Links --}}
                <div>
                    <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white">Home</a></li>
                        <li><a href="#" class="hover:text-white">About</a></li>
                        <li><a href="#" class="hover:text-white">Collections</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>

                {{-- Support --}}
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

        {{-- BOTTOM COPYRIGHT --}}
        <div class="border-t border-blue-700 pt-6 text-center text-gray-400 text-sm">
            © 2025 KIV Wear. All rights reserved.
        </div>

    </div>
</footer>

</x-app-layout>
