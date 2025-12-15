<x-app-layout>
    <x-slot name="header">
    <div class="text-center space-y-2">
        {{-- Judul Utama --}}
        <h2 class="text-3xl md:text-4xl font-extrabold text-blue-900 drop-shadow-md animate-fadeIn">
            Selamat Datang di <span class="text-sky-500">KIV WEAR!</span>
        </h2>

        {{-- Subjudul / tagline --}}
        <p class="text-sm md:text-base text-gray-600 animate-fadeIn delay-200">
            Temukan koleksi fashion premium & custom sesuai gaya kamu. Selamat berbelanja!
        </p>
    </div>
</x-slot>

    <style>
        body {
            overflow-x: hidden;
        }

        /* HERO */
        .kiv-hero {
            width: 100%;
            height: 80vh;
            background-color: #e6e6e6;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

.kiv-hero-image {
    width: 100%;
    height: 100%;
    background-image: url('/images/bgg.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

        .kiv-hero-text {
    position: absolute;
    text-align: center;
    color: #0066ff;
    top: 40%;
    transform: translateY(-10%);
    width: 100%;
}

.kiv-hero-text h2 {
    font-size: 24px;
    margin-bottom: 5px;
    font-weight: 500;
}

.kiv-hero-text h1 {
    font-size: 60px;
    margin: 0;
    font-weight: 700;
}


        .kiv-btn {
            margin-top: 20px;
            background-color: white;
            padding: 15px 35px;
            font-size: 18px;
            border-radius: 15px;
            border: 2px solid #0066ff;
            color: #0066ff;
            cursor: pointer;
        }

        .kiv-btn:hover {
            background-color: #0066ff;
            color: white;
            transition: 0.3s;
        }
    </style>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                {{-- ============================
                      HERO SECTION KIV WEAR
                    ============================ --}}
                <div class="kiv-hero">
                    <div class="kiv-hero-image"></div>

                    <div class="kiv-hero-text">
                        <h2>ACHIEVE MORE THROUGH</h2>
                        <h1>WHOLESALE</h1>
                        <button onclick="window.location.href='/page4'" class="kiv-btn">
                            ORDER NOW!
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
{{-- ============================
                      peta
                    ============================ --}}
    <style>
    .store-section-title {
        text-align: center;
        font-size: 40px;
        margin-top: 80px;
        margin-bottom: 40px;
        font-weight: 800;
        letter-spacing: 2px;
    }

    .store-section-title span {
        color: #0066ff; /* Biru */
    }

    .store-card {
        border: 3px solid #0066ff;
        padding: 25px;
        border-radius: 18px;
        background: white;
        margin-top: 20px;
    }

    .store-card h3 {
        font-size: 28px;
        font-weight: 800;
        color: #0066ff;
    }

    .store-card p {
        font-size: 16px;
        margin-top: 10px;
        line-height: 1.5;
    }

    .store-btn {
        margin-top: 15px;
        background-color: #0066ff;
        color: white;
        padding: 12px 30px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        float: right;
    }

    .store-btn:hover {
        opacity: .85;
    }
</style>

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

{{-- ============================
      STORE SECTION (1 Toko)
============================= --}}
<h2 class="store-section-title">VISIT OUR <span>STORES</span></h2>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-8 pb-12">

    {{-- MAP --}}
    <div>
        <iframe
            width="100%"
            height="420"
            style="border:0; border-radius:15px;"
            loading="lazy"
            allowfullscreen
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63381.89297855085!2d107.758!3d-7.234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68bb5a9df103cd%3A0x5027a76e35315e0!2sBayongbong%2C%20Garut!5e0!3m2!1sid!2sid!4v1701234567890">
        </iframe>
    </div>
{{-- STORE INFO --}}
                <div class="store-card">

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
            <a href="https://maps.google.com/?q=Bayongbong+Garut"
                       target="_blank"
                       class="inline-flex items-center gap-2 mt-4 px-6 py-3 
                              bg-blue-600 hover:bg-blue-700 text-white 
                              font-semibold rounded-full shadow-lg transition">

                        Lihat di Google Maps
                    </a>

            <div class="clear-both"></div>
        </div>
    </div>

</div>

   <style>
      /* Jika kamu sudah menambahkan bg-cream di Tailwind, hapus block ini */
      .bg-cream { background-color: #f4efe0; }
    </style>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                
<!-- ===================== TESTIMONIALS SECTION ===================== -->
<div class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-4xl font-extrabold text-blue-900">
            What Our Customers Say
        </h2>

        <p class="text-gray-600 text-lg mt-4 max-w-2xl mx-auto">
            Kepuasan pelanggan adalah prioritas utama kami.  
            Berikut pengalaman mereka memakai produk KIV Wear.
        </p>

        <!-- Garis dekorasi -->
        <div class="mt-6 flex justify-center">
            <span class="block w-20 h-1 bg-blue-900 rounded-full shadow-md"></span>
        </div>

        <!-- Grid Testimonials -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-14">

            <!-- Testimonial 1 -->
            <div class="p-8 bg-blue-50 border border-blue-100 rounded-2xl shadow-sm hover:shadow-xl transition duration-300">
                
                <!-- FOTO CUSTOMER (ganti manual nanti) -->
                <div class="w-20 h-20 mx-auto rounded-full bg-gray-300 border-4 border-white shadow-md overflow-hidden">
    <img src="{{ asset('images/ririn.jpg') }}" alt="Customer 1" class="w-full h-full object-cover">
</div>

                <h3 class="mt-4 font-bold text-xl text-blue-900">Ririn</h3>

                <!-- Rating -->
                <div class="flex justify-center mt-2 text-yellow-500 text-xl">
                    ★★★★★
                </div>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    “Bahan jersey-nya nyaman banget, jahitan rapi.  
                    Pelayanan cepat dan hasilnya sesuai request. Recommended!”
                </p>
            </div>

            <!-- Testimonial 2 -->
            <div class="p-8 bg-blue-50 border border-blue-100 rounded-2xl shadow-sm hover:shadow-xl transition duration-300">
                
                <!-- FOTO CUSTOMER -->
                <div class="w-20 h-20 mx-auto rounded-full bg-gray-300 border-4 border-white shadow-md overflow-hidden">
    <img src="{{ asset('images/sinta.jpg') }}" alt="Customer 1" class="w-full h-full object-cover">
</div>

                <h3 class="mt-4 font-bold text-xl text-blue-900">Sinta</h3>

                <!-- Rating -->
                <div class="flex justify-center mt-2 text-yellow-500 text-xl">
                    ★★★★★
                </div>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    “Desain vest custom aku dibuat persis seperti yang dimau!  
                    Kualitasnya kerasa premium banget, bakal order lagi.”
                </p>
            </div>

            <!-- Testimonial 3 -->
            <div class="p-8 bg-blue-50 border border-blue-100 rounded-2xl shadow-sm hover:shadow-xl transition duration-300">
                
                <!-- FOTO CUSTOMER -->
                <div class="w-20 h-20 mx-auto rounded-full bg-gray-300 border-4 border-white shadow-md overflow-hidden">
    <img src="{{ asset('images/owner3.jpg') }}" alt="Customer 1" class="w-full h-full object-cover">
</div>
                <h3 class="mt-4 font-bold text-xl text-blue-900">Iki</h3>

                <!-- Rating -->
                <div class="flex justify-center mt-2 text-yellow-500 text-xl">
                    ★★★★★
                </div>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    “Pengiriman cepat, ukuran pas, dan bahannya enak dipakai.  
                    KIV Wear nggak pernah mengecewakan!”
                </p>
            </div>

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
