@extends('app')

@section('content')
<!-- Navbar -->
<!-- Navbar -->
<header class="bg-white shadow sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center relative">

        <!-- Logo -->
        <a href="#">
            <img src="img/logo.png" alt="Pulse Solutions Logo" class="h-12">
        </a>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-6">
            <li><a href="#about" class="hover:text-blue-600">About us</a></li>
            <li><a href="#services" class="hover:text-blue-600">Services</a></li>
            <li><a href="#experiences" class="hover:text-blue-600">Experiences</a></li>
            <li><a href="#partners" class="hover:text-blue-600">Partners/Customers</a></li>
            <li><a href="#contact" class="hover:text-blue-600">Contact us</a></li>
        </ul>

        <div class="hidden md:flex items-center space-x-4 text-sm text-gray-600">
            <div class="flex items-center space-x-1">
                <!-- Ikon Lokasi dari Gambar -->
                <img src="img/map-pin.png" alt="Location Icon" class="h-4 w-4">
                <span>Batam | EN</span>
            </div>

            <!-- Ikon Search -->
            <button class="hover:text-blue-600" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1011 18.5a7.5 7.5 0 005.65-1.85z" />
                </svg>
            </button>
        </div>


        <!-- Mobile menu toggle -->
        <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none" aria-label="Toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Mobile menu -->
        <ul id="mobile-menu"
            class="absolute left-0 top-full w-full bg-white shadow-md mt-2 hidden flex-col space-y-2 p-4 md:hidden z-40">
            <li><a href="#about" class="block hover:text-blue-600">About us</a></li>
            <li><a href="#services" class="block hover:text-blue-600">Services</a></li>
            <li><a href="#experiences" class="block hover:text-blue-600">Experiences</a></li>
            <li><a href="#partners" class="block hover:text-blue-600">Partners/Customers</a></li>
            <li><a href="#contact" class="block hover:text-blue-600">Contact us</a></li>
        </ul>

    </nav>
</header>


<!-- About Section -->
<section class=" text-black py-20" id="about">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-10">

        <!-- Kolom Teks -->
        <div class="md:w-1/2 space-y-6 text-left">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                Accelerating<br>
                Digital Transformation
            </h1>

            <p class="text-lg md:text-xl text-black leading-relaxed">
                We empower companies to navigate the digital era with confidence. Through innovative solutions and
                cutting-edge technology, we streamline operations, enhance efficiency, and unlock new growth
                opportunities. Our goal is to transform challenges into breakthroughs, ensuring companies to stay
                ahead in an ever-evolving digital landscape. </p>

            <!-- Tombol -->
            <div class="flex flex-col sm:flex-row gap-4 mt-6">
                <a href="#experiences"
                    class="bg-white border-black text-black px-6 py-3 text-base font-medium rounded-md shadow hover:bg-gray-100 transition">
                    Explore our experiences →
                </a>
                <a href="#contact"
                    class="border border-white bg-amber-200 text-black px-6 py-3 text-base shadow font-medium rounded-md hover:bg-black hover:text-white transition">
                    Talk to us
                </a>
            </div>
        </div>

        <!-- Kolom Gambar -->
        <div class="md:w-1/2 flex justify-center md:justify-end">
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_puciaact.json" background="transparent"
                speed="1" loop autoplay style="max-width: 100%; height: 400px;">
            </lottie-player>
        </div>

    </div>
</section>



<!-- Our Services Section -->
<section id="services" class="text-black py-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <br>
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">OUR SEVICES</h2>
        <!-- Grid Card Services -->
        <div id="service-cards" class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 transition-all duration-500">
            <!-- Digital Transformation -->
            <div class="service-card bg-white p-6 rounded-lg shadow cursor-pointer hover:scale-105 transition"
                data-target="digital">
                <!-- Gambar -->
                <img src="img/digital-transformation.png" alt="Digital Transformation" class="h-20 mx-auto mb-4">

                <!-- Judul & Deskripsi -->
                <h3 class="text-xl font-semibold mb-2">Digital Transformation</h3>
                <p class="text-sm text-gray-600">Maximize efficiency & innovation using tech</p>
            </div>

            <!-- Data Strategy -->
            <div class="service-card bg-white p-6 rounded-lg shadow cursor-pointer hover:scale-105 transition"
                data-target="data">
                <!-- Gambar -->
                <img src="img/data-strategy.png" alt="Digital Transformation" class="h-20 mx-auto mb-4">

                <h3 class="text-xl font-semibold mb-2">Data Strategy & Analytics</h3>
                <p class="text-sm text-gray-600">Unlock insights with better data handling</p>
            </div>

            <!-- Cyber Security -->
            <div class="service-card bg-white p-6 rounded-lg shadow cursor-pointer hover:scale-105 transition"
                data-target="security">
                <!-- Gambar -->
                <img src="img/cyber-security.png" alt="Digital Transformation" class="h-20 mx-auto mb-4">

                <h3 class="text-xl font-semibold mb-2">Cyber Security</h3>
                <p class="text-sm text-gray-600">Proactive defense & protection for business</p>
            </div>

            <!-- IT Managed -->
            <div class="service-card bg-white p-6 rounded-lg shadow cursor-pointer hover:scale-105 transition"
                data-target="managed">
                <!-- Gambar -->
                <img src="img/managed-service.png" alt="Digital Transformation" class="h-20 mx-auto mb-4">

                <h3 class="text-xl font-semibold mb-2">IT Managed Services</h3>
                <p class="text-sm text-gray-600">Cloud, fiber optic, and enterprise infra</p>
            </div>
        </div>

        <!-- Detail Section -->
        <div id="service-detail" class="mt-12 hidden text-left bg-white p-6 rounded shadow relative animate-slide-in">
            <button id="back-button"
                class="absolute top-4 right-4 text-base px-4 py-2 bg-white bg-opacity-90 text-blue-600 font-medium rounded-md shadow hover:bg-opacity-100 hover:underline transition">
                ← Back
            </button>
            <div id="service-content"></div>
        </div>
    </div>
</section>

<!-- Segmen 3
Teks : we have work with these companies and institutions 
in the past that contribute to our overall network and experience.
List logo partner dan konsumen
 Section -->
<section id="partners" class="py-24 px-6 text-center bg-white bg-opacity-60 text-gray-800">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">OUR PAST CLIENTS & PARTNERS</h2>
        <p class="text-lg text-gray-600 mb-10 max-w-3xl mx-auto">
            We have work with these companies and institutions in the past that contribute to our overall network and
            experience.
        </p>

        <!-- Grid Logo 5 kolom -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 place-items-center">
            <img src="img/picture1.png" alt="BRCC"
                class="h-14 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture2.png" alt="Techstars"
                class="h-14 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture3.png" alt="RK"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture4.png" alt="Tunas Industrial"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture5.png" alt="APJII"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">

            <img src="img/picture6.png" alt="BMC"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture7.png" alt="BP Batam"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture8.png" alt="Indosat"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture9.png" alt="Polibatam"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture10.png" alt="APTIKNAS"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">

            <img src="img/picture11.png" alt="Shopee"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture12.png" alt="Canon"
                class="h-20 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture13.png" alt="Unilever"
                class="h-12 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture14.png" alt="BSI"
                class="h-20 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture15.png" alt="ITEBA"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">

            <img src="img/picture16.png" alt="UK Tech Hub"
                class="h-16 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture17.png" alt="Coworking"
                class="h-12 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture18.png" alt="Bank Indonesia"
                class="h-12 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110o">
            <img src="img/picture19.png" alt="Astra"
                class="h-28 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture20.png" alt="Bank BJB"
                class="h-20 transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture21.png" alt="PLN"
                class="h-10 w-auto transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture22.png" alt="Mayar"
                class="h-16 w-auto transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture23.png" alt="PLN"
                class="h-20 w-auto transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">
            <img src="img/picture24.png" alt="Mayar"
                class="h-16 w-auto transition duration-300 transform hover:scale-125 hover:shadow-lg hover:brightness-110">

        </div>

    </div>
</section>



<!-- Segmen 4
Teks : a sample of our work in the past with notable national and multinational companies
Our experience list 6 pengalaman paling besar
 Section <section id="experiences" class="py-24 px-6 text-center bg-white/1 text-gray-800"> -->

<section id="experiences" class="py-24 px-6 text-center bg-white/1 text-gray-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mt-2">
                Our experience
            </h2>
            <p class="mt-4 text-gray-500 max-w-3xl mx-auto">
                A sample of our work in the past with notable national and multinational companies.
            </p>
        </div>
        <div class="grid md:grid-cols-4 gap-10">
            <!-- Ship App -->

            <div
                class="text-center bg-white bg-opacity-70 rounded-md p-6 shadow-md transform transition-transform duration-300 hover:scale-105">
                <div class="flex justify-center mb-4">
                    <img src="img/app.png" alt="AI Icon" class="w-10 h-10 object-contain" />
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Ship Ticketing Platform Startup
                </h3>
                <p class="text-gray-500 text-sm text-justify">
                    Advising Startup operations & Technology Roadmap. The startup won World Startup Championship in US
                    and manage to acquire USD 10 Million in funding.
                </p>
            </div>

            <!-- Data Complexity -->
            <div
                class="text-center bg-white bg-opacity-70 rounded-md p-6 shadow-md transform transition-transform duration-300 hover:scale-105">
                <div class="flex justify-center mb-4">
                    <img src="img/datcom.png" alt="AI Icon" class="w-10 h-10 object-contain" />
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Enterprise Architecture Strategy for Malaysian
                    National Utility Company
                </h3>
                <p class="text-gray-500 text-sm text-justify">
                    Developed an Enterprise Architecture (EA) strategy, including capability building, frameworks,
                    operating model (e.g. demand and portfolio management, governance), and a 3-year development
                    roadmap.
                </p>
            </div>

            <!-- Fiber Optic -->
            <div
                class="text-center bg-white bg-opacity-70 rounded-md p-6 shadow-md transform transition-transform duration-300 hover:scale-105">
                <div class="flex justify-center mb-4">
                    <img src="img/tech.png" alt="AI Icon" class="w-10 h-10 object-contain" />
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Fiber Optic Network for a local Industrial Estate
                </h3>
                <p class="text-gray-500 text-sm text-justify">
                    Creating and implementing a new fiber optic network of more than 50Km and 500Gb Capacity for an
                    industrial estate for internet and CCTV use.
                </p>
            </div>
            <!-- AI -->
            <div
                class="text-center bg-white bg-opacity-70 rounded-md p-6 shadow-md transform transition-transform duration-300 hover:scale-105">
                <div class="flex justify-center mb-4">
                    <img src="img/ai.png" alt="AI Icon" class="w-10 h-10 object-contain" />
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    AI Related Training and Implementation for Various National Companies
                </h3>
                <p class="text-gray-500 text-sm text-justify">
                    Our team is responsible for training sessions and consultation for various AI productivity
                    implementations in banking and industry alike.
                </p>
            </div>
        </div>
        <!-- Centered Button -->
        <div class="pt-12">
            <a href="https://drive.google.com/file/d/1XGm0m56JFlGIvUSAYlSVHtfM_XAcm1Bu/view?usp=sharing" target="_blank"
                class="bg-white border  text-black px-6 py-3 text-base font-medium rounded-md shadow hover:bg-gray-100 transition">
                See More →
            </a>
        </div>
    </div>
</section>


<section id="news" class="py-24 px-4 bg-white/60 text-black">
    <div class="max-w-7xl mx-auto">
        <div class="mb-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold">Insights & Publications</h2>
        </div>

        <div class="grid gap-8 md:grid-cols-3">
            {{-- Technology --}}
            <div class="bg-black rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                <div class="relative">
                    <img src="{{ $tech->urlToImage ?? asset('img/project.jpeg') }}" alt="News"
                        class="w-full h-48 object-cover">
                    <span
                        class="absolute top-3 left-3 bg-emerald-600 text-xs font-semibold px-3 py-1 rounded">Technology</span>
                </div>
                <div class="p-5">
                    <h3 class="text-lg text-gray-300 font-semibold mb-2">{{ $tech->title ?? 'No Title' }}</h3>
                    <p class="text-sm text-gray-300 mb-4">
                        {{ \Illuminate\Support\Str::limit($tech->description ?? 'No description.', 120) }}</p>
                    <div class="flex items-center justify-between text-xs text-gray-400">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 7V3m8 4V3m-9 4h10m-10 0a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V9a2 2 0 00-2-2H7z" />
                            </svg>
                            {{ \Carbon\Carbon::parse($tech->publishedAt ?? now())->format('F d, Y') }}
                        </span>
                        <a href="{{ $tech->url ?? '#' }}" target="_blank" class="underline">Read more</a>
                    </div>
                </div>
            </div>

            {{-- Business --}}
            <div class="bg-black rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                <div class="relative">
                    <img src="{{ $business->urlToImage ?? asset('img/project.jpeg') }}" alt="News"
                        class="w-full h-48 object-cover">
                    <span
                        class="absolute top-3 left-3 bg-teal-600 text-xs font-semibold px-3 py-1 rounded">Business</span>
                </div>
                <div class="p-5">
                    <h3 class="text-lg text-gray-300 font-semibold mb-2">{{ $business->title ?? 'No Title' }}</h3>
                    <p class="text-sm text-gray-300 mb-4">
                        {{ \Illuminate\Support\Str::limit($business->description ?? 'No description.', 120) }}</p>
                    <div class="flex items-center justify-between text-xs text-gray-400">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 7V3m8 4V3m-9 4h10m-10 0a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V9a2 2 0 00-2-2H7z" />
                            </svg>
                            {{ \Carbon\Carbon::parse($business->publishedAt ?? now())->format('F d, Y') }}
                        </span>
                        <a href="{{ $business->url ?? '#' }}" target="_blank" class="underline">Read more</a>
                    </div>
                </div>
            </div>

            {{-- general --}}
            <div class="bg-black rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                <div class="relative">
                    <img src="{{ $general->urlToImage ?? asset('img/project.jpeg') }}" alt="News"
                        class="w-full h-48 object-cover">
                    <span
                        class="absolute top-3 left-3 bg-cyan-600 text-xs font-semibold px-3 py-1 rounded">General</span>
                </div>
                <div class="p-5">
                    <h3 class="text-lg text-gray-300 font-semibold mb-2">{{ $general->title ?? 'No Title' }}</h3>
                    <p class="text-sm text-gray-300 mb-4">
                        {{ \Illuminate\Support\Str::limit($general->description ?? 'No description.', 120) }}</p>
                    <div class="flex items-center justify-between text-xs text-gray-400">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 7V3m8 4V3m-9 4h10m-10 0a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V9a2 2 0 00-2-2H7z" />
                            </svg>
                            {{ \Carbon\Carbon::parse($general->publishedAt ?? now())->format('F d, Y') }}
                        </span>
                        <a href="{{ $general->url ?? '#' }}" target="_blank" class="underline">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- Contact Section -->
<section id="contact" class="py-24 px-6 bg-amber-950 text-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 border-b border-white/10 pb-12">

        <!-- Brand & Description -->
        <div class="space-y-4">
            <h3 class="text-2xl font-semibold"><span class="font-light">Pulse</span> <strong
                    class="font-bold">Solutions</strong></h3>
            <p class="text-sm text-gray-300">
                Strategic partner for AI-driven digital transformation. Helping organizations harness technology and
                intelligence to create measurable business impact.
            </p>

            <!-- Social Icons -->
            <div class="flex space-x-4 mt-4">
                <!-- LinkedIn -->
                <a href="#" class="p-2 bg-white/10 rounded hover:bg-white/20 transition">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 
              0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.25c-.97 
              0-1.75-.78-1.75-1.75s.78-1.75 1.75-1.75 1.75.78 
              1.75 1.75-.78 1.75-1.75 1.75zm13.5 11.25h-3v-5.5c0-1.1-.9-2-2-2s-2 
              .9-2 2v5.5h-3v-10h3v1.5c.66-.99 1.87-1.5 3-1.5 2.21 0 4 
              1.79 4 4v6z" />
                    </svg>
                </a>
                <!-- Twitter -->
                <a href="#" class="p-2 bg-white/10 rounded hover:bg-white/20 transition">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557a9.93 9.93 0 01-2.828.775 
              4.932 4.932 0 002.165-2.724c-.951.555-2.005.959-3.127 
              1.184a4.916 4.916 0 00-8.38 4.482c-4.086-.205-7.713-2.165-10.141-5.144a4.822 
              4.822 0 00-.666 2.475c0 1.708.869 3.213 2.188 
              4.096a4.904 4.904 0 01-2.228-.616c-.054 1.997 
              1.388 3.868 3.44 4.29a4.935 4.935 0 01-2.224.084 
              4.928 4.928 0 004.604 3.417A9.867 9.867 0 010 
              19.54a13.94 13.94 0 007.548 2.212c9.056 
              0 14.01-7.496 14.01-13.986 0-.213-.005-.425-.014-.636A10.012 
              10.012 0 0024 4.557z" />
                    </svg>
                </a>
                <!-- Instagram -->
                <a href="#" class="p-2 bg-white/10 rounded hover:bg-white/20 transition">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.054 
              1.97.24 2.427.403a4.92 4.92 0 011.675 1.09 4.918 4.918 0 011.09 
              1.675c.163.457.349 1.257.403 2.427.058 1.266.07 
              1.645.07 4.85s-.012 3.584-.07 4.85c-.054 1.17-.24 
              1.97-.403 2.427a4.902 4.902 0 01-1.09 
              1.675 4.91 4.91 0 01-1.675 1.09c-.457.163-1.257.349-2.427.403-1.266.058-1.645.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.054-1.97-.24-2.427-.403a4.902 
              4.902 0 01-1.675-1.09 4.902 4.902 0 01-1.09-1.675c-.163-.457-.349-1.257-.403-2.427C2.175 
              15.747 2.163 15.368 2.163 12s.012-3.584.07-4.85c.054-1.17.24-1.97.403-2.427A4.918 
              4.918 0 013.726 3.05a4.916 4.916 0 011.675-1.09c.457-.163 
              1.257-.349 2.427-.403C8.416 2.175 8.796 2.163 
              12 2.163zm0 1.837c-3.132 0-3.49.012-4.717.068-1.021.047-1.577.216-1.944.362a3.078 
              3.078 0 00-1.121.731 3.08 3.08 0 00-.731 1.121c-.146.367-.315.923-.362 
              1.944-.056 1.227-.068 1.585-.068 4.717s.012 3.49.068 
              4.717c.047 1.021.216 1.577.362 1.944.163.412.38.766.731 
              1.121.355.351.709.568 1.121.731.367.146.923.315 1.944.362 
              1.227.056 1.585.068 4.717.068s3.49-.012 
              4.717-.068c1.021-.047 1.577-.216 1.944-.362.412-.163.766-.38 
              1.121-.731.351-.355.568-.709.731-1.121.146-.367.315-.923.362-1.944.056-1.227.068-1.585.068-4.717s-.012-3.49-.068-4.717c-.047-1.021-.216-1.577-.362-1.944a3.08 
              3.08 0 00-.731-1.121 3.078 3.078 0 00-1.121-.731c-.367-.146-.923-.315-1.944-.362-1.227-.056-1.585-.068-4.717-.068zM12 
              5.838a6.162 6.162 0 110 12.324 6.162 6.162 0 010-12.324zm0 
              1.837a4.325 4.325 0 100 8.65 4.325 4.325 0 000-8.65zm6.406-1.845a1.44 
              1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z" />
                    </svg>
                </a>
                <!-- YouTube -->
                <a href="#" class="p-2 bg-white/10 rounded hover:bg-white/20 transition">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.615 3.184c-1.596-.182-7.938-.184-9.537 
              0-1.655.191-3.037 1.507-3.232 3.157-.183 
              1.6-.183 4.93 0 6.53.195 1.651 1.577 2.967 
              3.232 3.158 1.599.184 7.941.183 
              9.537 0 1.655-.191 3.037-1.507 
              3.232-3.158.183-1.6.183-4.93 
              0-6.53-.195-1.651-1.577-2.967-3.232-3.157zm-10.615 
              9.816v-6l6 3-6 3z" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Services -->
        <div>
            <h4 class="text-lg font-semibold mb-4">Services</h4>
            <ul class="space-y-2 text-sm text-gray-300">
                <li>Digital Transformation</li>
                <li>Data Strategy & Analytics</li>
                <li>Cyber Security</li>
                <li>IT Managed Services</li>
            </ul>
        </div>

        <!-- Company -->
        <div>
            <h4 class="text-lg font-semibold mb-4">Company</h4>
            <ul class="space-y-2 text-sm text-gray-300">
                <li><a href="#about" class="hover:text-blue-400">About Us</a></li>
                <li><a href="#" class="hover:text-blue-400">Our Team</a></li>
                <li><a href="#" class="hover:text-blue-400">Careers</a></li>
                <li><a href="#" class="hover:text-blue-400">Blog & Insights</a></li>
                <li><a href="#contact" class="hover:text-blue-400">Contact Us</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="space-y-4">
            <h4 class="text-lg font-semibold mb-4">Contact</h4>
            <div class="flex items-start space-x-2 text-sm text-gray-300">
                <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.657 16.657L13.414 12.414M12 11.999l-4.243 4.243M15 7a2 2 0 100-4 2 2 0 000 4z" />
                </svg>
                <span>Jakarta, Indonesia</span>
            </div>
            <div class="flex items-center space-x-2 text-sm text-gray-300">
                <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 10l1.586 1.586a2 2 0 002.828 0L12 6.414l4.586 4.586a2 2 0 002.828 0L21 10m-6 6h6" />
                </svg>
                <span>+62812 3456 7890</span>
            </div>
            <div class="flex items-center space-x-2 text-sm text-gray-300">
                <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m0 0l4-4m-4 4l4 4" />
                </svg>
                <span>info@pulse.com</span>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div
        class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400 mt-6">
        <p>© {{ date('Y') }} Pulse Solutions. All rights reserved.</p>
        <div class="flex space-x-4 mt-2 md:mt-0">
            <a href="#" class="hover:text-white">Privacy Policy</a>
            <a href="#" class="hover:text-white">Terms</a>
            <a href="#" class="hover:text-white">Accessibility</a>
        </div>
    </div>
</section>


<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

</script>
<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll('.service-card');
        const cardsContainer = document.getElementById('service-cards');
        const detailSection = document.getElementById('service-detail');
        const detailContent = document.getElementById('service-content');
        const backBtn = document.getElementById('back-button');

        const serviceData = {
            digital: `
  <div class="text-center space-y-6">
    <!-- Gambar -->
    <img src="img/computer.png" alt="Digital Transformation" class="mx-auto w-48 md:w-64">

    <!-- Judul -->
    <h3 class="text-2xl md:text-3xl font-extrabold">Digital Transformation</h3>

    <!-- Deskripsi -->
    <p class="text-base md:text-lg text-gray-700 max-w-2xl mx-auto">
      Reimagine your business process and customer experience using cutting edge technology
      that maximize efficiency & effectivity.
    </p>

    <!-- Subservices -->
    <div class="flex flex-col md:flex-row justify-center gap-4 font-semibold text-gray-800 pt-4">
      <div>Innovation Breakthrough</div>
      <div>AI, Automation Productivity</div>
      <div>System Migration & Modernization</div>
    </div>
  </div>
`,
            data: `
  <div class="text-center space-y-6">
    <!-- Gambar -->
    <img src="img/data.png" alt="Data Straategy" class="mx-auto w-48 md:w-64">

    <!-- Judul -->
    <h3 class="text-2xl md:text-3xl font-extrabold">Data Strategy & Analytics</h3>

    <!-- Deskripsi -->
    <p class="text-base md:text-lg text-gray-700 max-w-2xl mx-auto">
      Unlocking the power of your data for the betterment of the organization
    </p>

    <!-- Subservices -->
    <div class="flex flex-col md:flex-row justify-center gap-4 font-semibold text-gray-800 pt-4">
      <div>Data Warehouse Solutions</div>
      <div>Data Management & Governence</div>
    </div>
  </div>
`,
            security: `
  <div class="text-center space-y-6">
    <!-- Gambar -->
    <img src="img/cyber.png" alt="Data Straategy" class="mx-auto w-28 md:w-28">

    <!-- Judul -->
    <h3 class="text-2xl md:text-3xl font-extrabold">Cyber Security</h3>

    <!-- Deskripsi -->
    <p class="text-base md:text-lg text-gray-700 max-w-2xl mx-auto">
      Safeguard your business against evolving cyber threats with robust security solutions and proactive defense strategies
    </p>

    <!-- Subservices -->
    <div class="flex flex-col md:flex-row justify-center gap-4 font-semibold text-gray-800 pt-4">
      <div>Penetration Testing</div>
      <div>Security Model Development & Management</div>
    </div>
  </div>
`,
            managed: `
  <div class="text-center space-y-6">
    <!-- Gambar -->
    <img src="img/it.png" alt="Data Straategy" class="mx-auto w-36 md:w-36">

    <!-- Judul -->
    <h3 class="text-2xl md:text-3xl font-extrabold">IT Managed Service</h3>

    <!-- Deskripsi -->
    <p class="text-base md:text-lg text-gray-700 max-w-2xl mx-auto">
We Deliver High Quality Fiber Optics and Network Capabilities for your Housing Development, Buildings, Apartments or Offices.    </p>

    <!-- Subservices -->
    <div class="flex flex-col md:flex-row justify-center gap-4 font-semibold text-gray-800 pt-4">
      <div>Commercial Fiber Optic
 Investment & Cooperation</div>
      <div> Corporate Network & Cloud
 Service</div>
    </div>
  </div>
`
        };

        cards.forEach(card => {
            card.addEventListener('click', () => {
                const target = card.getAttribute('data-target');
                detailContent.innerHTML = serviceData[target];
                cardsContainer.classList.add('hidden');
                detailSection.classList.remove('hidden');
            });
        });

        backBtn.addEventListener('click', () => {
            detailSection.classList.add('hidden');
            cardsContainer.classList.remove('hidden');
        });
    });

</script>
<style>
    .animate-slide-in {
        animation: slideIn 0.4s ease forwards;
    }

    @keyframes slideIn {
        0% {
            transform: translateX(50px);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

</style>
@endsection
