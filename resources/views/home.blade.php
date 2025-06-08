<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pulse Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        'xs': '475px',
                    },
                }
            }
        }

    </script>
</head>

<body class="font-sans antialiased text-gray-800">
    <!-- Navbar -->
    <header class="bg-white shadow sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center relative">
            <a href="#" class="text-2xl font-bold text-gray-900">Pulse Solutions</a>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-6">
                <li><a href="#hero" class="hover:text-blue-600">Home</a></li>
                <li><a href="#about" class="hover:text-blue-600">About</a></li>
                <li><a href="#services" class="hover:text-blue-600">Services</a></li>
                <li><a href="#digital-transformation" class="hover:text-blue-600">Digital Transformation</a></li>
                <li><a href="#data" class="hover:text-blue-600">Data Strategy</a></li>
                <li><a href="#cyber" class="hover:text-blue-600">Cyber Security</a></li>
                <li><a href="#it" class="hover:text-blue-600">IT Managed</a></li>
                <li><a href="#clients" class="hover:text-blue-600">Clients</a></li>
                <li><a href="#past-experience" class="hover:text-blue-600">Past-Experience</a></li>
                <li><a href="#contact" class="hover:text-blue-600">Contact</a></li>
            </ul>

            <!-- Mobile menu toggle -->
            <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none" aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Mobile menu content -->
            <ul id="mobile-menu"
                class="absolute left-0 top-full w-full bg-white shadow-md mt-2 hidden flex-col space-y-2 p-4 md:hidden z-40">
                <li><a href="#hero" class="block hover:text-blue-600">Home</a></li>
                <li><a href="#about" class="block hover:text-blue-600">About</a></li>
                <li><a href="#services" class="block hover:text-blue-600">Services</a></li>
                <li><a href="#digital-transformation" class="block hover:text-blue-600">Digital Transformation</a></li>
                <li><a href="#data" class="block hover:text-blue-600">Data Strategy</a></li>
                <li><a href="#cyber" class="block hover:text-blue-600">Cyber Security</a></li>
                <li><a href="#it" class="block hover:text-blue-600">IT Managed</a></li>
                <li><a href="#clients" class="block hover:text-blue-600">Clients</a></li>
                <li><a href="#past-experience" class="block hover:text-blue-600">Past-Experience</a></li>
                <li><a href="#contact" class="block hover:text-blue-600">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero -->
    <section id="hero" class="min-h-[80vh] flex flex-col justify-center items-center px-4 text-center">
        <h1 class="text-5xl sm:text-6xl md:text-8xl lg:text-9xl text-amber-700 font-extrabold mb-4">PULSE</h1>
        <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4 mt-6">
            <img src="img/dinamika-prima-mandiri.png" alt="Dinamika Prima Mandiri" class="h-16 max-w-full" />
            <p class="text-lg text-indigo-600">Dinamika Prima Mandiri</p>
        </div>
    </section>

    <!-- About Us -->
    <section id="about" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 space-y-12">
            <h2 class="text-xl text-amber-700 font-bold">PULSE</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-3xl md:text-5xl font-extrabold mb-6">ABOUT US</h1>
                    <p class="text-lg text-gray-600 mb-4">
                        Our organization was founded on the core principle that customer satisfaction is the cornerstone
                        of our success,
                        enriched by our Value Added services and the philosophy of going the "Extra Mile for the
                        Customer." Located in
                        Batam City, our headquarters is staffed with highly specialized professionals dedicated to
                        delivering exceptional
                        results in their respective fields.
                    </p>
                    <p class="text-lg text-gray-600 mb-4">
                        We are committed to the belief that no challenge is too great, and our team is poised to deliver
                        excellence in
                        every endeavor.
                    </p>
                    <p class="text-lg text-gray-600">
                        Pulse is our commitment to deliver IT Projects in our excellence service. We also have
                        Construction Services that
                        runs parallel with Pulse.
                    </p>
                </div>

                <div class="flex justify-center">
                    <img src="img/laptop-pulse.png" alt="About Us" class="w-full max-w-md rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>



    <!-- Services -->
    <section id="services" class="min-h-[80vh] flex items-center py-16">
        <div class="container px-6 mx-auto flex flex-col space-y-20">
            <!-- PULSE label -->
            <h2 class="text-xl text-amber-700 font-bold mb-8">PULSE</h2>

            <!-- OUR SERVICES Header -->
            <div class="flex flex-col md:flex-row justify-center items-center mb-10 gap-2 md:gap-6 max-w-2xl mx-auto">
                <!-- Gambar di kiri -->
                <img src="img/our-services.png" alt="Our Service" class="w-24 h-24 object-contain" />

                <!-- Teks di kanan -->
                <div class="text-center md:text-left leading-tight">
                    <h1 class="text-4xl font-bold">OUR</h1>
                    <h1 class="text-4xl">SERVICES</h1>
                </div>
            </div>

            <!-- Service Items -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 justify-items-center">
                <!-- Digital Transformation -->
                <div class="flex flex-col items-center text-center">
                    <img src="img/digital-transformation.png" alt="Digital Transformation"
                        class="w-24 h-24 object-contain mb-2" />
                    <div class="leading-tight">
                        <p class="font-semibold">Digital</p>
                        <p class="font-semibold">Transformation</p>
                    </div>
                </div>

                <!-- Data Strategy & Analytics -->
                <div class="flex flex-col items-center text-center">
                    <img src="img/data-strategy.png" alt="Data Strategy" class="w-24 h-24 object-contain mb-2" />
                    <div class="leading-tight">
                        <p class="font-semibold">Data Strategy &</p>
                        <p class="font-semibold">Analytics</p>
                    </div>
                </div>

                <!-- Cyber Security -->
                <div class="flex flex-col items-center text-center">
                    <img src="img/cyber-security.png" alt="Cyber Security" class="w-24 h-24 object-contain mb-2" />
                    <div class="leading-tight">
                        <p class="font-semibold">Cyber</p>
                        <p class="font-semibold">Security</p>
                    </div>
                </div>

                <!-- Managed Service -->
                <div class="flex flex-col items-center text-center">
                    <img src="img/managed-service.png" alt="Managed Service" class="w-24 h-24 object-contain mb-2" />
                    <div class="leading-tight">
                        <p class="font-semibold">Managed</p>
                        <p class="font-semibold">Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Transformation -->
    <section id="digital-transformation" class="min-h-[80vh] flex flex-col justify-between py-0">
        <div class="container mx-auto px-6 flex flex-col pt-16">
            <!-- PULSE Label di kiri atas -->
            <h2 class="text-xl text-amber-700 font-bold self-start">PULSE</h2>

            <!-- Konten utama ditengah -->
            <div class="flex flex-col items-center text-center space-y-6 mt-12">
                <h1 class="text-3xl md:text-4xl font-bold">Digital Transformation</h1>
                <p class="text-gray-700 leading-relaxed text-xl">
                    Reimagine your business process and customer<br>
                    experience using cutting edge technology that maximize<br>
                    efficiency & effectivity.
                </p>
                <div class="flex flex-wrap justify-center gap-20">
                    <p class="font-semibold text-xl">Innovation <br> Breakthrough</p>
                    <p class="font-semibold text-xl">Automation & <br> Productivity</p>
                    <p class="font-semibold text-xl">System Migration & <br> Modernization</p>
                </div>
            </div>
        </div>

        <!-- Gambar benar-benar mentok bawah -->
        <div class="flex justify-center">
            <img src="img/computer.png" alt="Computer" class="max-w-sm w-full object-contain" />
        </div>
    </section>

    <!-- Data -->
    <section id="data" class="min-h-[80vh] flex flex-col justify-between py-0">
        <div class="container mx-auto px-6 flex flex-col pt-16">
            <!-- PULSE Label di kiri atas -->
            <h2 class="text-xl text-amber-700 font-bold self-start">PULSE</h2>

            <!-- Konten utama ditengah -->
            <div class="flex flex-col items-center text-center space-y-6 mt-12">
                <h1 class="text-3xl md:text-4xl font-bold">Data Strategy & Analytics</h1>
                <p class="text-gray-700 leading-relaxed text-xl">
                    Unlocking the power of your data for the betterment of <br> the organization
                </p>
                <div class="flex flex-wrap justify-center gap-20">
                    <p class="font-semibold text-xl">Data Warehouse <br> Solutions</p>
                    <p class="font-semibold text-xl">Data Management & <br> Governence</p>
                </div>
            </div>
        </div>

        <!-- Gambar benar-benar mentok bawah -->
        <div class="flex justify-center">
            <img src="img/data.png" alt="Data Strategy & Analytics" class="max-w-sm w-full object-contain" />
        </div>
    </section>

    <!-- Cyber Security -->
    <section id="cyber" class="min-h-[80vh] flex flex-col justify-center py-16">
        <div class="container mx-auto px-6 flex flex-col items-center text-center space-y-12">
            <!-- PULSE Label di kiri -->
            <h2 class="text-xl text-amber-700 font-bold self-start">PULSE</h2>

            <!-- Judul dan konten -->
            <div class="space-y-6">
                <h1 class="text-3xl md:text-4xl font-bold">Cyber Security</h1>
                <p class="text-gray-700 leading-relaxed text-xl">
                    Safeguard your business against evolving cyber threats with <br>
                    robust security solutions and proactive defense strategies
                </p>
                <div class="flex flex-wrap justify-center gap-20">
                    <p class="font-semibold text-xl">Penetration Testing</p>
                    <p class="font-semibold text-xl text-balance">Security Model Development & <br> Management</p>
                </div>

                <!-- Gambar di bawah konten tapi tidak mentok bawah section -->
                <div class="pt-8">
                    <img src="img/cyber.png" alt="Cyber Security" class="max-w-sm h-40 w-full object-contain mx-auto" />
                </div>
            </div>
        </div>
    </section>

    <!-- IT Managed Service -->
    <section id="it" class="min-h-[80vh] flex flex-col justify-between py-0">
        <div class="container mx-auto px-6 flex flex-col pt-16">
            <!-- PULSE Label di kiri atas -->
            <h2 class="text-xl text-amber-700 font-bold self-start">PULSE</h2>

            <!-- Konten utama ditengah -->
            <div class="flex flex-col items-center text-center space-y-6 mt-12">
                <h1 class="text-3xl md:text-4xl font-bold">IT Managed Service</h1>
                <p class="text-gray-700 leading-relaxed text-xl">
                    We Deliver High Quality Fiber Optics and Network Capabilities for your <br> Housing Development,
                    Buildings, Apartments or Offices.
                </p>
                <div class="flex flex-wrap justify-center gap-20">
                    <p class="font-semibold text-xl">Commercial Fiber Optic <br> Investment & Cooperation</p>
                    <p class="font-semibold text-xl">Corporate Network & Cloud <br> Service</p>
                </div>
            </div>
        </div>

        <!-- Gambar benar-benar mentok bawah -->
        <div class="flex justify-center">
            <img src="img/it.png" alt="IT Managed Service" class="max-w-sm w-full object-contain" />
        </div>
    </section>

    <!-- Clients & Partners -->
    <section id="clients" class="min-h-[80vh] flex flex-col justify-center py-16">
        <div class="container mx-auto px-6 space-y-12">
            <!-- PULSE dan Judul di baris yang sama -->
            <div class="flex justify-between items-start">
                <!-- Teks PULSE -->
                <h2 class="text-xl text-amber-700 font-bold">PULSE</h2>

                <!-- Judul dua baris sejajar vertikal berdasarkan huruf pertama -->
                <div class="grid grid-cols-1">
                    <span class="text-4xl font-bold">OUR PAST</span>
                    <span class="text-4xl">CLIENT & PARTNERS</span>
                </div>
            </div>

            <!-- Gambar di bawah konten -->
            <div class="flex justify-center pt-8">
                <img src="img/kumpulan-logo.png" alt="Clients & Partners"
                    class="max-w-5xl w-full h-auto object-contain" />
            </div>
        </div>
    </section>

    <!-- Past Experience -->
    <section id="past-experience" class="min-h-[80vh] flex flex-col justify-center py-16">
        <div class="container mx-auto px-6 space-y-12">
            <!-- PULSE dan Judul di baris yang sama -->
            <div class="flex justify-between items-start">
                <!-- Teks PULSE -->
                <h2 class="text-xl text-amber-700 font-bold">PULSE</h2>

                <!-- Judul dua baris sejajar vertikal berdasarkan huruf pertama -->
                <div class="grid grid-cols-1">
                    <span class="text-4xl font-bold">OUR TEAM</span>
                    <span class="text-4xl">PAST EXPERIENCE</span>
                </div>
            </div>

            <!-- Daftar Pengalaman -->
            <div class="space-y-8">
                <!-- Singapore Based Talent Development Program -->
                <div>
                    <h1 class="font-bold text-xl">Singapore Based Talent Development Program</h1>
                    <p class="text-xl">Creating & Implementing 4 months Bootcamp program to boost talent aqcuisition for
                        <br>
                        Singapore Startups
                    </p>
                </div>

                <!-- Ship Ticketing Platform Startup -->
                <div>
                    <h1 class="font-bold text-xl">Ship Ticketing Platform Startup</h1>
                    <p class="text-xl">Advising Startup operations & Technology Roadmap. The startup won World Startup
                        <br>
                        Championship in US and manage to acquire USD 10 Million in funding.
                    </p>
                </div>

                <!-- Government Document System App -->
                <div>
                    <h1 class="font-bold text-xl">Government Document System App</h1>
                    <p class="text-xl">Building from ground up a document management system for a local government
                        and <br> maintainance work.</p>
                </div>

                <!-- Government Digital Marketing Initiative -->
                <div>
                    <h1 class="font-bold text-xl">Government Digital Marketing Initiative</h1>
                    <p class="text-xl">Advising a Government division on road safety insurance digital marketing &
                        presence to <br> build awareness regarding road safety</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Experience 2 -->
    <section id="past-experience-2" class="min-h-[80vh] flex flex-col justify-center py-16">
        <div class="container mx-auto px-6 space-y-12">
            <!-- PULSE dan Judul di baris yang sama -->
            <div class="flex justify-between items-start">
                <!-- Teks PULSE -->
                <h2 class="text-xl text-amber-700 font-bold">PULSE</h2>

                <!-- Judul dua baris sejajar vertikal berdasarkan huruf pertama -->
                <div class="grid grid-cols-1">
                    <span class="text-4xl font-bold">OUR TEAM</span>
                    <span class="text-4xl">PAST EXPERIENCE</span>
                </div>
            </div>

            <!-- Daftar Pengalaman -->
            <div class="space-y-8">
                <!-- National Oil Shipping Company -->
                <div>
                    <h1 class="font-bold text-xl">National Oil Shipping Company</h1>
                    <p class="text-xl">The project focused on 2 scope of works, the first one was the MVP development
                        for SuperApps, SmartShip and <br> SmartPort mobile apps and the second one on designing the
                        product/platform-based operating model for the <br> Digital and IT function of the company</p>
                </div>

                <!-- IT Strategy Plan Development for State Owned Bank -->
                <div>
                    <h1 class="font-bold text-xl">IT Strategy Plan Development for State Owned Bank</h1>
                    <p class="text-xl">The project focused on developing the bank’s IT Strategy Plan with the focus on
                        Artificial Intelligence (AI) and a <br> value-driven IT Operating Model, to enable the bank
                        ambition to become one of the leading bank in Asia
                    </p>
                </div>

                <!-- Central Bank Digital Currency (CBDC) PoC Setup -->
                <div>
                    <h1 class="font-bold text-xl">Central Bank Digital Currency (CBDC) PoC Setup</h1>
                    <p class="text-xl">The project focused on assessing current blockchain technology capabilities in
                        enabling and supporting all <br> CBDC use cases for Indonesia.</p>
                </div>

                <!-- Telco DevSecOps Implementation -->
                <div>
                    <h1 class="font-bold text-xl">Telco DevSecOps Implementation</h1>
                    <p class="text-xl">The project focused on development and operationalization of DevSecOps
                        capabilities trough a DevSecOps <br> Center of Excellence (CoE). It also managed 3+ Agile IT
                        projects as pilot implementation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Experience 3 -->
    <section id="past-experience-3" class="min-h-[80vh] flex flex-col justify-center py-16">
        <div class="container mx-auto px-6 space-y-12">
            <!-- PULSE dan Judul di baris yang sama -->
            <div class="flex justify-between items-start">
                <!-- Teks PULSE -->
                <h2 class="text-xl text-amber-700 font-bold">PULSE</h2>

                <!-- Judul dua baris sejajar vertikal berdasarkan huruf pertama -->
                <div class="grid grid-cols-1">
                    <span class="text-4xl font-bold">OUR TEAM</span>
                    <span class="text-4xl">PAST EXPERIENCE</span>
                </div>
            </div>

            <!-- Daftar Pengalaman -->
            <div class="space-y-8">
                <!-- National Police Drone Test -->
                <div>
                    <h1 class="font-bold text-xl">National Police Drone Test</h1>
                    <p class="text-xl">Assisting as a partner in implementing Drone system in National Police and
                        Paspampres uses.
                    </p>
                </div>

                <!-- Capacitor Packing system for Multinational Company -->
                <div>
                    <h1 class="font-bold text-xl">Capacitor Packing system for Multinational Company</h1>
                    <p class="text-xl">Creating and implementing an automation system for capacitor packing in the
                        factory to reduce production <br> cycle.
                    </p>
                </div>

                <!-- Enterprise Architecture Strategy for Malaysian National Utility Company -->
                <div>
                    <h1 class="font-bold text-xl">The project focused on developing an Enterprise Architecture (EA)
                        strategy, focusing in building the client’s EA <br> capabilities, frameworks, operating model
                        (e.g. demand management, architecture portfolio management, <br> governance) and a 3-year EA
                        development strategy</p>
                </div>

                <!-- Data Analysis for multinational Company -->
                <div>
                    <h1 class="font-bold text-xl">Data Analysis for multinational Company</h1>
                    <p class="text-xl">The project focused on analyzing production output for the last 3 years and
                        building a comprehensive report on <br> the outcome.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Experience 4 -->
    <section id="past-experience-4" class="min-h-[80vh] flex flex-col justify-center py-16">
        <div class="container mx-auto px-6 space-y-12">
            <!-- PULSE dan Judul di baris yang sama -->
            <div class="flex justify-between items-start">
                <!-- Teks PULSE -->
                <h2 class="text-xl text-amber-700 font-bold">PULSE</h2>

                <!-- Judul dua baris sejajar vertikal berdasarkan huruf pertama -->
                <div class="grid grid-cols-1">
                    <span class="text-4xl font-bold">OUR TEAM</span>
                    <span class="text-4xl">PAST EXPERIENCE</span>
                </div>
            </div>

            <!-- Daftar Pengalaman -->
            <div class="space-y-8">
                <!-- Internet Exchange Project for local company -->
                <div>
                    <h1 class="font-bold text-xl">Internet Exchange Project for local company</h1>
                    <p class="text-xl">Part of the Managing team for the implementation of a new internet exchange
                        project for Indonesia with <br> preliminary capacity of 200Gb.
                    </p>
                </div>

                <!-- Fiber Optic Network for a local Industrial Estate -->
                <div>
                    <h1 class="font-bold text-xl">Fiber Optic Network for a local Industrial Estate</h1>
                    <p class="text-xl">Creating and implementing a new fiber optic network of more than 50Km and 500Gb
                        Capacity for an industrial <br> estate for internet and CCTV use
                    </p>
                </div>

                <!-- Pentester for 2 Multinational Company -->
                <div>
                    <h1 class="font-bold text-xl">Pentester for 2 Multinational Company</h1>
                    <p class="text-xl">The project focused on penetration testing for 2 multi national company and
                        creating comprehensive report for <br> cyber security considerations.</p>
                </div>

                <!-- Smart Ship Project -->
                <div>
                    <h1 class="font-bold text-xl">Government Digital Marketing Initiative</h1>
                    <p class="text-xl">This is ongoing project for a national shipyard company to monitor various system
                        on a Tugboat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-3xl md:text-5xl font-extrabold mb-6 font-bold">DISCUSS WITH US</h1>
                    <p class="text-lg text-gray-600 mb-4">inquiry@dpmindonesia.com
                    </p>
                    <p class="text-lg text-gray-600 mb-4">+62 819 9117 8900 | +62 823 2462 0830
                    </p>
                </div>

                <div class="flex justify-center">
                    <img src="img/computer-pulse.png" alt="About Us" class="w-full max-w-md rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-6">
        <div class="container mx-auto px-6 text-center text-gray-500">
            &copy; 2025 Pulse Solutions. All rights reserved.
        </div>
    </footer>
    <!-- Script untuk toggle menu mobile -->
    <script>
        const toggleBtn = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        toggleBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

    </script>
    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" title="Go to top"
        class="fixed bottom-6 right-6 z-50 hidden p-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition duration-300">
        ↑
    </button>
    <script>
        // Show/hide scroll to top button
        const scrollBtn = document.getElementById("scrollToTopBtn");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                scrollBtn.classList.remove("hidden");
            } else {
                scrollBtn.classList.add("hidden");
            }
        });

        // Scroll to top when clicked
        scrollBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

    </script>

</body>

</html>
