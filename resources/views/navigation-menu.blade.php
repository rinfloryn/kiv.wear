<header class="text-white bg-gradient-to-r from-[#1565C0] to-[#90CAF9] shadow-lg">

    <!-- TOP BAR (EMAIL + ICONS) -->
    <div class="items-center justify-between hidden px-4 py-1 mx-auto text-xs border-b border-gray-700 max-w-7xl sm:px-6 lg:px-8 sm:flex">
        
        <div class="flex items-center">

            <!-- Instagram ICON -->
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm6.5-.9a1.1 1.1 0 11-2.2 0 1.1 1.1 0 012.2 0z"/>
</svg>

            <!-- EMAIL -->
            <span>Instagram: <strong>kiv.wear</strong></span>
        </div>
        
        <div class="flex items-center space-x-4">

    <div class="flex items-center bg-blue-700 text-white px-3 py-2 rounded-full shadow-md">
    
    <a href="https://wa.me/6285352840964" target="_blank">
    <!-- WhatsApp ICON -->
    <div class="w-7 h-7 flex items-center justify-center bg-blue-800 rounded-full mr-2 hover:bg-blue-900 transition">
        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.52 3.48A11.78 11.78 0 0 0 12 .75 11.25 11.25 0 0 0 .75 12a11.5 11.5 0 0 0 1.63 5.88L.75 23.25l5.52-1.44A11.58 11.58 0 0 0 12 23.25h.03A11.25 11.25 0 0 0 24 12a11.78 11.78 0 0 0-3.48-8.52ZM12 21.08a9.1 9.1 0 0 1-4.64-1.3l-.33-.2-3.28.86.88-3.2-.22-.33A9.1 9.1 0 1 1 21.12 12 9.13 9.13 0 0 1 12 21.08Zm5-6.82c-.27-.14-1.63-.8-1.88-.9s-.44-.14-.63.14-.72.9-.88 1.08-.33.2-.6.07a7.47 7.47 0 0 1-2.2-1.35 8.24 8.24 0 0 1-1.52-1.9c-.16-.27 0-.42.12-.56s.27-.33.4-.5.2-.28.3-.47a.52.52 0 0 0 0-.49C9 8.07 8.3 6.4 8 5.82s-.58-.47-.8-.48h-.68a1.32 1.32 0 0 0-.95.44A4 4 0 0 0 4 7.8a7.06 7.06 0 0 0 1.52 4.7c.18.23 2.58 3.93 6.3 5.33A21 21 0 0 0 15.6 19h.74a2 2 0 0 0 1.38-.6 5.33 5.33 0 0 0 1.1-2.1c.07-.21.07-.39 0-.53s-.25-.2-.44-.31Z"/>
        </svg>
    </div>
</a>

    <!-- PESAN TEXT -->
    <span class="font-semibold tracking-wide">PESAN</span>
</div>

        </div>
    </div>

    <!-- ================= -->
    <!--   NAVIGATION BAR  -->
    <!-- ================= -->
    <nav x-data="{ open: false }" class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex items-center h-20">
            
            <!-- LOGO + BRAND -->
            <div class="flex items-center">
                <div class="shrink-0 flex items-center space-x-3">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block w-auto h-12" />
                    </a>
                    <span class="text-2xl font-extrabold text-white tracking-widest font-lora">
                        Kiv Wear
                    </span>
                </div>
            </div>

            <!-- NAV LINKS -->
            <div class="hidden sm:flex sm:items-center absolute left-1/2 -translate-x-1/2">
                <div class="flex space-x-8">

                    <!-- HOME -->
                    <x-nav-link href="{{ route('dashboard') }}" 
                                :active="request()->routeIs('dashboard')" 
                                class="!text-white uppercase font-lora hover:text-red-500">
                        {{ __('HOME') }}
                    </x-nav-link>

                    <!-- ABOUT -->
                    <x-nav-link href="{{ route('page1') }}" 
                                :active="request()->routeIs('page1')" 
                                class="!text-white uppercase font-lora hover:text-red-500">
                        {{ __('ABOUT') }}
                    </x-nav-link>

                    <!-- COLLECTION -->
                    <x-nav-link href="{{ route('page4') }}" 
                                :active="request()->routeIs('page4')" 
                                class="!text-white uppercase font-lora hover:text-red-500">
                        {{ __('COLLECTION') }}
                    </x-nav-link>

                    <!-- CONTACT -->
                    <x-nav-link href="{{ route('page5') }}" 
                                :active="request()->routeIs('page5')" 
                                class="!text-white uppercase font-lora hover:text-red-500">
                        {{ __('CONTACT') }}
                    </x-nav-link>
                </div>

                <!-- LOCATION ICON -->
<a href="{{ route('page3') }}"
   class="ml-8 text-white hover:text-sky-300 transition focus:outline-none">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
         viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 21s7-6.2 7-11a7 7 0 10-14 0c0 4.8 7 11 7 11z"/>
        <circle cx="12" cy="10" r="2.5"/>
    </svg>
</a>
            </div>

            <!-- MOBILE MENU BUTTON -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-gray-500 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-gray-500">
                    <svg class="size-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" 
                              class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" 
                              class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- MOBILE NAV -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden bg-gray-700 sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="!text-white">
                {{ __('HOME') }}
            </x-responsive-nav-link>
        </div>
    </div>
</header>
