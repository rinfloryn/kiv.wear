<x-app-layout>
    <x-slot name="header">
    <div class="text-center space-y-3">
        {{-- Judul Utama --}}
        <h2 class="text-3xl md:text-4xl font-extrabold text-blue-900 drop-shadow-md animate-fadeIn">
            Kontak Kami
        </h2>
        <p class="text-sm md:text-base text-gray-500 max-w-2xl mx-auto animate-fadeIn delay-400">
        Punya pertanyaan atau ingin memesan? Jangan ragu untuk menghubungi kami via WhatsApp atau email!
        </p>
    </div>
</x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-xl sm:rounded-lg">

                {{-- SECTION CONTACT --}}
                <div class="text-center mb-10">
                    <h1 class="text-3xl font-bold text-gray-900">Contact Us</h1>
                    <p class="text-gray-600 mt-2">
                        Any questions or remarks? Just write us a message!
                    </p>
                </div>

                {{-- FORM --}}
                <form class="max-w-3xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">Email</label>
                            <input type="email"
                                class="w-full px-4 py-2 border rounded-full shadow-sm focus:outline-none 
                                       focus:ring-2 focus:ring-blue-400"
                                placeholder="Enter a valid email address">
                        </div>

                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">Name</label>
                            <input type="text"
                                class="w-full px-4 py-2 border rounded-full shadow-sm focus:outline-none 
                                       focus:ring-2 focus:ring-blue-400"
                                placeholder="Enter your name">
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <button
                            class="px-10 py-2 text-white rounded-full transition
                                   bg-gradient-to-r from-blue-600 to-blue-300 hover:opacity-90">
                            SUBMIT
                        </button>
                    </div>
                </form>

                {{-- INFO SECTION --}}
                <div class="mt-16 bg-gray-100 p-10 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">

                        {{-- ABOUT KIV WEAR --}}
                        <div>
                            <div class="flex justify-center mb-4">
                                <div class="p-4 text-white rounded-full 
                                            bg-gradient-to-r from-blue-600 to-blue-300">
                                    <i class="fas fa-running text-2xl"></i>
                                </div>
                            </div>
                            <h3 class="font-semibold text-gray-800">ABOUT KIV WEAR</h3>
                            <p class="text-gray-600 mt-2">Blending premium quality with modern design, we create fashion that fits every lifestyle with comfort, confidence, and style.</p>
                        </div>

                        {{-- PHONE --}}
                        <div>
                            <div class="flex justify-center mb-4">
                                <div class="p-4 text-white rounded-full 
                                            bg-gradient-to-r from-blue-600 to-blue-300">
                                    <i class="fas fa-phone text-2xl"></i>
                                </div>
                            </div>
                            <h3 class="font-semibold text-gray-800">PHONE (WhatsApp)</h3>
                            <p class="text-gray-600 mt-2">085352840964</p>
                        </div>

                        {{-- LOCATION --}}
                        <div>
                            <div class="flex justify-center mb-4">
                                <div class="p-4 text-white rounded-full 
                                            bg-gradient-to-r from-blue-600 to-blue-300">
                                    <i class="fas fa-map-marker-alt text-2xl"></i>
                                </div>
                            </div>
                            <h3 class="font-semibold text-gray-800">OUR STORE & SOCIAL</h3>

                            <p class="text-gray-600 mt-2">
                                <span class="font-semibold">Offline Store :</span> Bayongbong, Garut
                            </p>

                            <p class="text-gray-600 mt-1">
                                <span class="font-semibold">Instagram :</span> kiv.wear
                            </p>
                        </div>

                    </div>
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
