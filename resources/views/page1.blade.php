<x-app-layout>
    <x-slot name="header">
    <div class="text-center space-y-3">
        <h2 class="text-3xl md:text-4xl font-extrabold text-blue-900 drop-shadow-md animate-fadeIn">
            Tentang <span class="text-sky-500">Kiv Wear!</span>
        </h2>
        <p class="text-sm md:text-base text-gray-500 max-w-2xl mx-auto animate-fadeIn delay-400">
            Dari usaha kecil hingga brand yang diminati, perjalanan kami penuh inovasi, kepercayaan, dan gaya modern.
        </p>
    </div>
</x-slot>


    {{-- ======================= HERO SECTION ======================= --}}
    <div class="relative w-full bg-cover bg-center py-28"
         style="background-image: url('/your-about-image.jpg');">

        {{-- Layer Blue Gradient + Glass Effect --}}
        <div class="absolute inset-0 bg-gradient-to-r from-[#0D47A1]/95 via-[#1565C0]/80 to-[#42A5F5]/50 backdrop-blur-sm"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

                {{-- LEFT TEXT --}}
                <div class="space-y-4 animate-fadeIn">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white drop-shadow-xl">
                        We Are
                    </h1>

                    <h1 class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-200 via-blue-100 to-white
                               text-transparent bg-clip-text drop-shadow-xl tracking-wide">
                        KIV WEAR.
                    </h1>

                    <p class="text-blue-100 text-lg mt-6 leading-relaxed backdrop-blur-sm bg-white/10 p-4 rounded-xl shadow-lg border border-white/10">
                        Kivwear berdiri sejak tahun 2023 dan bergerak di bidang jasa pembuatan product fashion. Brand ini didirikan digarut oleh Rizki Kansa Mahasiswa Universitas Pendidikan Indonesia.
                        <br><br>
                        Dari usaha kecil di masa sekolah hingga menjadi brand fashion yang diminati—
                        KIV WEAR tumbuh dengan kualitas, kepercayaan, dan gaya modern.
                    </p>
                </div>

                {{-- RIGHT IMAGE — NOW SLIDER --}}
<div x-data="{ current: 0, images: ['/images/owner.jpg', '/images/owner2.jpg', '/images/owner4.jpg'] }"
     x-init="
        setInterval(() => {
            current = (current + 1) % images.length;
        }, 3000);
     "
     class="relative w-full flex justify-center md:justify-end">

    <div class="relative group 
                w-96 h-96              <!-- ukuran HP lebih besar -->
                md:w-[32rem] md:h-[32rem]   <!-- ukuran desktop diperbesar -->
                rounded-3xl overflow-hidden shadow-2xl border-4 border-white/50">

        <!-- Loop Gambar -->
        <template x-for="(img, index) in images" :key="index">
            <img :src="img"
                 x-show="current === index"
                 x-transition.opacity.duration.700ms
                 class="absolute inset-0 w-full h-full object-cover">
        </template>

        <!-- Glow Effect -->
        <div class="absolute -inset-4 bg-blue-400/20 blur-3xl rounded-3xl opacity-0 
                    group-hover:opacity-100 transition duration-500"></div>
    </div>

    <!-- Navigation Buttons -->
    <div class="absolute bottom-3 flex space-x-2">
        <template x-for="(img, index) in images" :key="index">
            <div @click="current = index"
                 :class="current === index ? 'bg-white' : 'bg-white/40'"
                 class="w-3 h-3 rounded-full cursor-pointer transition"></div>
        </template>
    </div>

</div>


</div>
            </div>
        </div>
    </div>

<!-- ===================== COLLABORATION SECTION ===================== -->
<div class="bg-gray-50 py-24">
    <div class="max-w-6xl mx-auto px-6">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">

            <!-- LEFT : IMAGE -->
            <div class="relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    
                    <!-- FOTO RAPAT -->
                    <img 
                        src="{{ asset('images/rapat.jpg') }}" 
                        alt="KIV Wear Collaboration Meeting"
                        class="w-full h-[600px] object-cover"
                    >

                    <!-- OVERLAY GRADIENT -->
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent"></div>

                    <!-- BADGE -->
                    <span class="absolute top-4 left-4 bg-blue-900 text-white text-xs font-semibold px-4 py-1 rounded-full shadow">
                        Collaboration
                    </span>
                </div>

                <!-- Decorative shape -->
                <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-blue-900 rounded-3xl opacity-10"></div>
            </div>

            <!-- RIGHT : TEXT CONTENT -->
            <div class="bg-white p-10 rounded-3xl shadow-xl">

                <h2 class="text-4xl font-extrabold text-blue-900 tracking-wide">
                    Partnership & Community Collaboration
                </h2>

                <div class="mt-4 w-24 h-1 bg-blue-900 rounded-full"></div>

                <p class="text-gray-600 text-lg mt-6 leading-relaxed">
                    KIV Wear secara aktif menjalin kerja sama dengan berbagai organisasi, 
                    khususnya <span class="font-semibold text-blue-900">mahasiswa</span> 
                    dan <span class="font-semibold text-blue-900">pelajar</span>, 
                    untuk menghadirkan apparel custom yang relevan, berkualitas, dan bermakna.
                </p>

                <p class="text-gray-600 text-lg mt-4 leading-relaxed">
                    Setiap kolaborasi diawali dengan diskusi dan perencanaan yang matang, 
                    sehingga desain, bahan, dan hasil akhir dapat sesuai dengan identitas 
                    serta kebutuhan setiap organisasi.
                </p>

                <!-- Highlights -->
                <ul class="mt-6 space-y-4 text-gray-600">
                    <li class="flex items-center gap-3">
                        <span class="w-3 h-3 bg-blue-900 rounded-full"></span>
                        Apparel organisasi mahasiswa & kampus
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-3 h-3 bg-blue-900 rounded-full"></span>
                        Jersey tim berbagai cabang olahraga
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-3 h-3 bg-blue-900 rounded-full"></span>
                        Proses desain kolaboratif & profesional
                    </li>
                </ul>

                <!-- CTA -->
                <div class="mt-8">
                    <a 
                        href="https://wa.me/6285352840964" 
                        target="_blank"
                        class="inline-flex items-center gap-2 px-8 py-3 bg-blue-900 text-white font-semibold rounded-full hover:bg-blue-800 transition"
                    >
                        Ajukan Kerja Sama
                    </a>
                </div>

            </div>

        </div>

    </div>
</div>


    {{-- ======================= TESTIMONI SECTION ======================= --}}
    <div class="bg-gradient-to-b from-white to-blue-50 py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <h2 class="text-4xl font-extrabold text-blue-900 mb-4 tracking-wide">TESTIMONI</h2>
            <p class="text-gray-600 text-lg mb-12">Real feedback. Real quality.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                {{-- FOTO 1 --}}
                <div class="relative group">
                    <img src="/images/testi1.jpg"
                         class="w-full h-72 object-cover rounded-2xl shadow-xl group-hover:scale-105 duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 
                                group-hover:opacity-100 rounded-2xl transition"></div>
                </div>

                {{-- FOTO 2 --}}
                <div class="relative group">
                    <img src="/images/testi2.jpg"
                         class="w-full h-72 object-cover rounded-2xl shadow-xl group-hover:scale-105 duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 
                                group-hover:opacity-100 rounded-2xl transition"></div>
                </div>

                {{-- FOTO 3 --}}
                <div class="relative group">
                    <img src="/images/testi3.jpg"
                         class="w-full h-72 object-cover rounded-2xl shadow-xl group-hover:scale-105 duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 
                                group-hover:opacity-100 rounded-2xl transition"></div>
                </div>

            </div>

        </div>
    </div>


    {{-- ======================= CONTENT SECTION ======================= --}}
<div class="bg-white pb-16 pt-16">
    <div class="max-w-6xl mx-auto px-6 text-center">

        {{-- Vision --}}
        <h2 class="text-4xl font-extrabold text-blue-900 tracking-wide">
            Our Vision
        </h2>

        <p class="text-gray-600 text-lg mt-6 max-w-3xl mx-auto leading-relaxed">
            To become Indonesia’s leading fashion brand that delivers modern, innovative, 
            and timeless designs while maintaining uncompromised comfort and premium quality 
            for every customer.
        </p>

        {{-- Garis dekorasi --}}
        <div class="mt-6 flex justify-center">
            <span class="block w-24 h-1 bg-blue-900 rounded-full shadow-md"></span>
        </div>

        {{-- Subtext --}}
        <p class="text-gray-500 text-sm mt-6 italic">
            “We shape style, comfort, and confidence for a new generation.”
        </p>

    </div>
</div>

{{-- Why Us --}}
<div class="mt-12 text-center">

    <h2 class="text-4xl font-extrabold text-blue-900 tracking-wide">
        What Makes Us Special?
    </h2>

    <p class="text-gray-600 text-lg mt-4 max-w-2xl mx-auto leading-relaxed">
        KIV Wear hadir dengan kualitas terbaik, desain modern, dan kenyamanan premium 
        yang membuat setiap produk terasa berbeda dan lebih bernilai.
    </p>

    {{-- Garis dekorasi --}}
    <div class="mt-6 flex justify-center">
        <span class="block w-20 h-1 bg-blue-900 rounded-full shadow-md"></span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-12">

        {{-- CARD 1 --}}
        <div class="p-8 rounded-2xl bg-blue-50 shadow-sm hover:shadow-xl transition duration-300 border border-blue-100">
            <i class="fas fa-gem text-5xl text-blue-500 mb-4"></i>
            <h3 class="font-bold text-2xl text-blue-900">Premium Fabric</h3>
            <p class="text-gray-600 mt-3 leading-relaxed">
                Material berkualitas tinggi yang dipilih secara selektif untuk kenyamanan,
                daya tahan, dan pengalaman memakai yang lebih maksimal.
            </p>
        </div>

        {{-- CARD 2 --}}
        <div class="p-8 rounded-2xl bg-blue-50 shadow-sm hover:shadow-xl transition duration-300 border border-blue-100">
            <i class="fas fa-layer-group text-5xl text-blue-500 mb-4"></i>
            <h3 class="font-bold text-2xl text-blue-900">Modern Aesthetic</h3>
            <p class="text-gray-600 mt-3 leading-relaxed">
                Desain clean, minimalis, dan selalu relevan. Dibuat untuk gaya sehari-hari
                hingga momen spesial tanpa kehilangan identitas modern.
            </p>
        </div>

        {{-- CARD 3 --}}
        <div class="p-8 rounded-2xl bg-blue-50 shadow-sm hover:shadow-xl transition duration-300 border border-blue-100">
            <i class="fas fa-handshake text-5xl text-blue-500 mb-4"></i>
            <h3 class="font-bold text-2xl text-blue-900">Customer First</h3>
            <p class="text-gray-600 mt-3 leading-relaxed">
                Pelayanan cepat, ramah, dan responsif. Kami memastikan setiap pelanggan 
                mendapatkan pengalaman belanja terbaik dan hasil yang memuaskan.
            </p>
        </div>

    </div>
</div>
{{-- Stats / Achievements --}}
<div class="bg-blue-900 text-white py-20 mt-20">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-4xl font-extrabold text-center tracking-wide">
            Our Achievements
        </h2>

        <p class="text-blue-100 text-center mt-3 text-lg">
            Trusted by thousands for quality, comfort, and style.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-14 text-center">

            {{-- STAT 1 --}}
            <div class="flex flex-col items-center">
                <span class="text-5xl font-extrabold">100+</span>
                <p class="text-blue-200 mt-2 text-lg">Customer Orders</p>
            </div>

            {{-- STAT 2 --}}
            <div class="flex flex-col items-center">
                <span class="text-5xl font-extrabold">98%</span>
                <p class="text-blue-200 mt-2 text-lg">Customer Satisfaction</p>
            </div>

            {{-- STAT 3 --}}
            <div class="flex flex-col items-center">
                <span class="text-5xl font-extrabold">3 Years</span>
                <p class="text-blue-200 mt-2 text-lg">of Clothing Craftsmanship</p>
            </div>

        </div>

        {{-- Decorative line --}}
        <div class="flex justify-center mt-12">
            <span class="block w-28 h-1 bg-blue-300 rounded-full"></span>
        </div>

    </div>
</div>

<!-- ===================== FAQ / QNA SECTION ===================== -->
<div class="bg-gray-50 py-24">
    <div class="max-w-4xl mx-auto px-6">

        <!-- Title -->
        <div class="text-center">
            <h2 class="text-4xl font-extrabold text-blue-900">
                Frequently Asked Questions
            </h2>
            <p class="text-gray-600 text-lg mt-4">
                Pertanyaan yang paling sering ditanyakan sebelum order di KIV Wear
            </p>

            <div class="mt-6 flex justify-center">
                <span class="block w-20 h-1 bg-blue-900 rounded-full"></span>
            </div>
        </div>

        <!-- FAQ LIST -->
        <div class="mt-14 space-y-6">

            <!-- QNA ITEM -->
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow-md overflow-hidden">
                <button 
                    @click="open = !open"
                    class="w-full flex justify-between items-center p-6 text-left"
                >
                    <span class="font-semibold text-lg text-blue-900">
                        Apakah KIV Wear menerima pesanan custom?
                    </span>
                    <span class="text-blue-900 text-2xl" x-text="open ? '−' : '+'"></span>
                </button>

                <div x-show="open" x-transition class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Ya, KIV Wear menerima pesanan custom untuk jersey, vest, kaos, dan berbagai kebutuhan apparel organisasi, sekolah, maupun komunitas.
                </div>
            </div>

            <!-- QNA ITEM -->
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow-md overflow-hidden">
                <button 
                    @click="open = !open"
                    class="w-full flex justify-between items-center p-6 text-left"
                >
                    <span class="font-semibold text-lg text-blue-900">
                        Berapa minimal order untuk produk custom?
                    </span>
                    <span class="text-blue-900 text-2xl" x-text="open ? '−' : '+'"></span>
                </button>

                <div x-show="open" x-transition class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Minimal order menyesuaikan jenis produk. Untuk jersey dan vest custom, 
                    minimal order biasanya dimulai dari <strong>12 pcs</strong>.
                </div>
            </div>

            <!-- QNA ITEM -->
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow-md overflow-hidden">
                <button 
                    @click="open = !open"
                    class="w-full flex justify-between items-center p-6 text-left"
                >
                    <span class="font-semibold text-lg text-blue-900">
                        Berapa lama waktu produksi?
                    </span>
                    <span class="text-blue-900 text-2xl" x-text="open ? '−' : '+'"></span>
                </button>

                <div x-show="open" x-transition class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Waktu produksi berkisar antara <strong>7–14 hari kerja</strong> 
                    tergantung jumlah pesanan dan tingkat kesulitan desain.
                </div>
            </div>

            <!-- QNA ITEM -->
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow-md overflow-hidden">
                <button 
                    @click="open = !open"
                    class="w-full flex justify-between items-center p-6 text-left"
                >
                    <span class="font-semibold text-lg text-blue-900">
                        Apakah bisa request desain sendiri?
                    </span>
                    <span class="text-blue-900 text-2xl" x-text="open ? '−' : '+'"></span>
                </button>

                <div x-show="open" x-transition class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Bisa. Kamu dapat mengirimkan desain sendiri atau berdiskusi dengan tim 
                    KIV Wear untuk pembuatan desain sesuai kebutuhan dan identitas organisasi.
                </div>
            </div>

            <!-- QNA ITEM -->
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow-md overflow-hidden">
                <button 
                    @click="open = !open"
                    class="w-full flex justify-between items-center p-6 text-left"
                >
                    <span class="font-semibold text-lg text-blue-900">
                        Apakah melayani pengiriman ke seluruh Indonesia?
                    </span>
                    <span class="text-blue-900 text-2xl" x-text="open ? '−' : '+'"></span>
                </button>

                <div x-show="open" x-transition class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Ya, kami melayani pengiriman ke seluruh Indonesia menggunakan ekspedisi 
                    terpercaya sesuai permintaan pelanggan.
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="mt-16 text-center">
            <a 
                href="https://wa.me/6285352840964"
                target="_blank"
                class="inline-flex items-center gap-2 px-10 py-4 bg-blue-900 text-white font-semibold rounded-full hover:bg-blue-800 transition"
            >
                Tanya via WhatsApp
            </a>
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