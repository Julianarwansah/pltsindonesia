<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLTS Indonesia - Solusi Energi Terbarukan</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .line-clamp-2 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        }
    </style>
    <style>
        :root {
            --navy-primary: #1A2B4C;
            /* Deep Navy Blue - SolarKita Primary */
            --navy-dark: #0F1A2E;
            /* Darker navy for text */
            --accent-green: #0077B6;
            /* Dark Ocean Blue - Darker accent */
            --accent-light-green: #0096C7;
            /* Medium blue */
            --white: #FFFFFF;
            --gray-light: #F8F9FA;
            --gray-medium: #626963;
            --gray-dark: #757575;
            --danger: #f72929;
            --solar-bg: #F8F9FA;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: var(--white);
            color: var(--navy-primary);
        }

        .font-display {
            font-family: 'DM Sans', sans-serif;
        }

        .hero-gradient {
            background: linear-gradient(135deg, #FFFFFF 0%, var(--gray-light) 100%);
        }

        .btn-primary {
            background-color: var(--accent-green);
            color: var(--white);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 6.25rem;
            padding: 0.75rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            box-shadow: 0 4px 12px rgba(14, 165, 233, 0.2);
        }

        .btn-primary:hover {
            background-color: var(--navy-primary);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 37, 92, 0.3);
        }

        .product-card {
            background: var(--white);
            border-radius: 1rem;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(14, 165, 233, 0.1);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
            border-color: var(--accent-green);
        }

        .category-badge {
            background-color: var(--gray-light);
            color: var(--navy-primary);
            border: 1px solid var(--accent-green);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 6.25rem;
            padding: 0.5rem 1.5rem;
        }

        .category-badge:hover {
            background-color: var(--accent-green);
            color: var(--white);
            border-color: var(--accent-green);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(14, 165, 233, 0.3);
        }

        .nav-link {
            position: relative;
            color: #ffffff;
            transition: color 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 500;
        }

        .nav-link:hover {
            color: var(--accent-green);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent-green);
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Active Nav Link */
        .nav-link.active {
            color: var(--accent-green);
        }

        .nav-link.active::after {
            width: 100%;
        }

        .section-title {
            color: var(--navy-primary);
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 1.875rem;
            }
        }

        /* Scroll Animations - Instant dengan durasi cepat */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s ease-out,
                transform 0.3s ease-out;
            will-change: opacity, transform;
        }

        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-in-left {
            opacity: 0;
            transform: translateX(-30px);
            transition: opacity 0.3s ease-out,
                transform 0.3s ease-out;
            will-change: opacity, transform;
        }

        .fade-in-left.show {
            opacity: 1;
            transform: translateX(0);
        }

        .fade-in-right {
            opacity: 0;
            transform: translateX(30px);
            transition: opacity 0.3s ease-out,
                transform 0.3s ease-out;
            will-change: opacity, transform;
        }

        .fade-in-right.show {
            opacity: 1;
            transform: translateX(0);
        }

        .scale-in {
            opacity: 0;
            transform: scale(0.97);
            transition: opacity 0.3s ease-out,
                transform 0.3s ease-out;
            will-change: opacity, transform;
        }

        .scale-in.show {
            opacity: 1;
            transform: scale(1);
        }

        /* Stagger Delays - Removed for instant response */
        .stagger-delay-1 {
            transition-delay: 0s;
        }

        .stagger-delay-2 {
            transition-delay: 0s;
        }

        .stagger-delay-3 {
            transition-delay: 0s;
        }

        .stagger-delay-4 {
            transition-delay: 0s;
        }

        .stagger-delay-5 {
            transition-delay: 0s;
        }

        .stagger-delay-6 {
            transition-delay: 0s;
        }

        /* Ultra Smooth Scroll */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }

        @media (prefers-reduced-motion: no-preference) {
            html {
                scroll-behavior: smooth;
            }
        }

        /* Smooth Transitions for All Elements */
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Smooth Page Scroll */
        body {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--gray-light);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--accent-green);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--navy-primary);
        }

        /* Parallax Effect */
        .parallax {
            transition: transform 0.1s ease-out;
        }

        /* Hero Interactive Animation */
        .hero-interactive-container {
            position: relative;
            width: 100%;
            aspect-ratio: 4/3;
            max-height: 500px;
            perspective: 1000px;
        }

        .hero-tilt-card {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.3s ease-out;
            transform-style: preserve-3d;
        }

        .hero-card-front img {
            transition: none;
        }

        .hero-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .hero-card-front {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
        }

        .hero-tilt-card:hover .hero-card-overlay {
            opacity: 1;
            pointer-events: auto;
        }

        .text-solar-blue {
            color: var(--solar-blue);
        }

        /* Floating Badges */
        .hero-float-badge {
            position: absolute;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            background: white;
            border-radius: 50px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            font-size: 14px;
            font-weight: 600;
            color: var(--navy-primary);
            animation: float 3s ease-in-out infinite;
            z-index: 3;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hero-float-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
        }

        .hero-float-badge i {
            color: var(--accent-green);
            font-size: 18px;
        }

        .hero-float-1 {
            top: -20px;
            left: -20px;
            animation-delay: 0s;
        }

        .hero-float-2 {
            top: 50%;
            right: -30px;
            animation-delay: 0.5s;
        }

        .hero-float-3 {
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            animation-delay: 1s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            50% {
                transform: translateY(-15px) translateX(5px);
            }
        }

        .hero-float-3 {
            animation-name: float-center;
        }

        @keyframes float-center {

            0%,
            100% {
                transform: translateX(-50%) translateY(0);
            }

            50% {
                transform: translateX(-50%) translateY(-15px);
            }
        }

        /* Smooth Page Load Animation */
        @keyframes fadeInPage {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        body {
            animation: fadeInPage 0.5s ease-in;
            margin: 0 !important;
            padding: 0 !important;
        }

        /* Link Transitions */
        a {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Image Lazy Load Effect */
        img {
            transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        img[loading="lazy"] {
            opacity: 0;
        }

        img[loading="lazy"].loaded {
            opacity: 1;
        }
    </style>
</head>

<body class="antialiased">
    <nav class="w-full py-3 px-6 lg:px-8 fixed top-0 z-50 bg-transparent">
        <div
            class="max-w-7xl mx-auto bg-white/10 backdrop-blur-md shadow-lg rounded-full px-6 py-3 transition-all duration-300">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}"
                    class="text-xl lg:text-2xl font-display font-bold hover:opacity-80 transition text-white">
                    PLTS Indonesia
                </a>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('home') }}" class="nav-link font-medium text-sm">Home</a>

                    <!-- Produk Dropdown -->
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button class="nav-link font-medium flex items-center gap-1 text-sm" @click="open = !open">
                            Produk
                            <svg class="w-3 h-3 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute left-0 mt-2 w-72 bg-white rounded-lg shadow-xl border border-gray-100 py-2 z-50"
                            @click.away="open = false">

                            <a href="{{ route('produk.detail', 'pembangkit-listrik-tenaga-surya-off-grid') }}"
                                class="block px-4 py-3 hover:bg-sky-50 transition-colors group">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-green-50 flex items-center justify-center flex-shrink-0 group-hover:bg-green-100 transition-colors">
                                        <i class="fas fa-mountain text-green-600"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800 group-hover:text-[var(--accent-green)]">
                                            PLTS
                                            OFF Grid</div>
                                        <div class="text-xs text-gray-500 mt-0.5">Sistem mandiri dengan baterai</div>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ route('produk.detail', 'paket-plts-on-grid-industrial') }}"
                                class="block px-4 py-3 hover:bg-sky-50 transition-colors group">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-100 transition-colors">
                                        <i class="fas fa-industry text-[var(--navy-primary)]"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800 group-hover:text-[var(--accent-green)]">
                                            PLTS
                                            On Grid Industrial</div>
                                        <div class="text-xs text-gray-500 mt-0.5">Untuk pabrik & industri</div>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ route('produk.detail', 'paket-plts-on-grid-residential') }}"
                                class="block px-4 py-3 hover:bg-sky-50 transition-colors group">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center flex-shrink-0 group-hover:bg-purple-100 transition-colors">
                                        <i class="fas fa-home text-purple-600"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800 group-hover:text-[var(--accent-green)]">
                                            PLTS
                                            On Grid Residential</div>
                                        <div class="text-xs text-gray-500 mt-0.5">Untuk rumah tinggal</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('artikel.list') }}" class="nav-link font-medium text-sm">Artikel</a>
                    <a href="{{ route('tentang') }}" class="nav-link font-medium text-sm">Tentang</a>
                    <a href="{{ route('kontak') }}" class="nav-link font-medium text-sm">Kontak</a>

                    <!-- Penawaran Button -->
                    <a href="{{ route('kontak') }}"
                        class="px-6 py-2.5 rounded-full font-semibold text-sm bg-[var(--navy-primary)] text-white hover:bg-[var(--accent-green)] transition-all duration-300 shadow-md hover:shadow-lg">
                        Penawaran
                    </a>
                </div>
                <div class="md:hidden">
                    <button class="text-2xl" style="color: var(--navy-primary);">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-[var(--navy-primary)] mt-20 py-12 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-display font-bold mb-4 text-white">PLTS Indonesia
                    </h3>
                    <p class="text-white/80 mb-4">Solusi energi terbarukan untuk masa depan yang lebih hijau. Panel
                        surya berkualitas tinggi dengan instalasi profesional.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl hover:scale-110 transition-transform text-[var(--accent-green)]"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="text-2xl hover:scale-110 transition-transform text-[var(--accent-green)]"><i
                                class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:scale-110 transition-transform text-[var(--accent-green)]"><i
                                class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 text-white">Navigasi</h4>
                    <ul class="space-y-2 text-white/70">
                        <li><a href="{{ route('home') }}" class="hover:text-[var(--accent-green)] transition">Home</a>
                        </li>
                        <li><a href="{{ route('produk.list') }}"
                                class="hover:text-[var(--accent-green)] transition">Produk</a>
                        </li>
                        <li><a href="{{ route('artikel.list') }}"
                                class="hover:text-[var(--accent-green)] transition">Artikel</a></li>
                        <li><a href="{{ route('tentang') }}" class="hover:text-[var(--accent-green)] transition">Tentang
                                Kami</a></li>
                        <li><a href="{{ route('kontak') }}"
                                class="hover:text-[var(--accent-green)] transition">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 text-white">Kontak</h4>
                    <ul class="space-y-2 text-white/70">
                        <li><i class="fas fa-phone mr-2 text-[var(--accent-green)]"></i> +62 812-3456-7890</li>
                        <li><i class="fas fa-envelope mr-2 text-[var(--accent-green)]"></i> info@pltsindonesia.id
                        </li>
                        <li><i class="fas fa-map-marker-alt mr-2 text-[var(--accent-green)]"></i> PT. Jarwinn
                            Feliciti
                            Hotapea<br>BSD Ruko Boulevard, Jalan Raya Taman Tekno Serpong Blok AA No.7, Ciater, Serpong
                            Sub-District, South Tangerang City, Banten 15323, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/20 pt-6 text-center text-white/60 text-sm">
                <p>&copy; {{ date('Y') }} PLTS Indonesia. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu"
        class="fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
        <div class="flex flex-col h-full">
            <div class="flex justify-between items-center p-6 border-b border-gray-200">
                <span class="text-2xl font-display font-bold text-[var(--navy-primary)]">PLTS Indonesia</span>
                <button id="close-menu" class="text-2xl text-[var(--navy-primary)]">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="flex flex-col p-6 space-y-6">
                <a href="{{ route('home') }}"
                    class="text-xl font-medium hover:text-[var(--accent-green)] transition transform hover:translate-x-2 duration-300">Home</a>
                <a href="{{ route('produk.list') }}"
                    class="text-xl font-medium hover:text-[var(--accent-green)] transition transform hover:translate-x-2 duration-300">Produk</a>
                <a href="{{ route('artikel.list') }}"
                    class="text-xl font-medium hover:text-[var(--accent-green)] transition transform hover:translate-x-2 duration-300">Artikel</a>
                <a href="{{ route('tentang') }}"
                    class="text-xl font-medium hover:text-[var(--accent-green)] transition transform hover:translate-x-2 duration-300">Tentang</a>
                <a href="{{ route('kontak') }}"
                    class="text-xl font-medium hover:text-[var(--accent-green)] transition transform hover:translate-x-2 duration-300">Kontak</a>
            </div>
        </div>
    </div>

    <script>
        // Mobile Menu Logic
        const mobileMenu = document.getElementById('mobile-menu');
        const menuBtn = document.querySelector('.md\\:hidden button');
        const closeBtn = document.getElementById('close-menu');

        function toggleMenu() {
            mobileMenu.classList.toggle('translate-x-full');
            document.body.classList.toggle('overflow-hidden');
        }

        if (menuBtn) menuBtn.addEventListener('click', toggleMenu);
        if (closeBtn) closeBtn.addEventListener('click', toggleMenu);

        // Close menu when clicking a link
        if (mobileMenu) {
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', toggleMenu);
            });
        }

        // Enhanced Scroll Animation Observer with Smooth Delays
        const observerOptions = {
            root: null,
            threshold: 0.1,
            rootMargin: '0px 0px -80px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Langsung tampilkan tanpa delay
                    entry.target.classList.add('show');
                    // Unobserve after showing to improve performance
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Instant scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href !== '') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        // Gunakan browser default smooth scroll yang lebih cepat
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        });

        // Observe all elements with animation classes with Stagger Effect
        document.addEventListener('DOMContentLoaded', () => {
            const fadeElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .scale-in');

            // Group elements by parent for better stagger effect
            const elementsBySection = new Map();
            fadeElements.forEach(el => {
                const parent = el.closest('section') || document.body;
                if (!elementsBySection.has(parent)) {
                    elementsBySection.set(parent, []);
                }
                elementsBySection.get(parent).push(el);
            });

            // Observe each section's elements with progressive delay
            elementsBySection.forEach((elements, parent) => {
                elements.forEach((el, index) => {
                    // Add data attribute for sequential animation
                    el.setAttribute('data-animation-index', index);
                    observer.observe(el);
                });
            });

            // Lazy load images
            const lazyImages = document.querySelectorAll('img[loading="lazy"]');
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.classList.add('loaded');
                        imageObserver.unobserve(img);
                    }
                });
            });

            lazyImages.forEach(img => imageObserver.observe(img));

            // Hero Interactive 3D Tilt Effect
            const heroInteractive = document.getElementById('heroInteractive');
            const heroTiltCard = heroInteractive?.querySelector('.hero-tilt-card');

            if (heroInteractive && heroTiltCard) {
                heroInteractive.addEventListener('mousemove', (e) => {
                    const rect = heroInteractive.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    const rotateX = ((y - centerY) / centerY) * -10; // Max 10 degrees
                    const rotateY = ((x - centerX) / centerX) * 10;

                    heroTiltCard.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                });

                heroInteractive.addEventListener('mouseleave', () => {
                    heroTiltCard.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
                });
            }

            // Parallax effect on scroll
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        const scrolled = window.pageYOffset;
                        const parallaxElements = document.querySelectorAll('.parallax');

                        parallaxElements.forEach(el => {
                            const speed = el.dataset.speed || 0.5;
                            el.style.transform = `translateY(${scrolled * speed}px)`;
                        });

                        ticking = false;
                    });
                    ticking = true;
                }
            });

            // Enhanced Navbar glass blur effect on scroll
            const nav = document.querySelector('nav');
            const navInner = document.querySelector('nav > div');
            let lastScrollTop = 0;
            
            // Check if current page is homepage
            const isHomepage = document.querySelector('#home') !== null;

            // Set initial navbar state based on page
            function setInitialNavbarState() {
                if (!isHomepage) {
                    // Non-homepage: solid white with dark text from start
                    navInner.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                    navInner.style.backdropFilter = 'blur(20px)';
                    navInner.style.webkitBackdropFilter = 'blur(20px)';
                    navInner.style.boxShadow = '0 4px 16px rgba(0, 0, 0, 0.08)';
                    navInner.querySelectorAll('a:not(.bg-\\[var\\(--navy-primary\\)\\]), button:not(.bg-\\[var\\(--navy-primary\\)\\])').forEach(el => {
                        el.style.color = 'var(--navy-primary)';
                    });
                }
            }

            setInitialNavbarState();

            window.addEventListener('scroll', () => {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > 50) {
                    // Scrolled - solid white navbar with DARK text
                    navInner.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                    navInner.style.backdropFilter = 'blur(20px)';
                    navInner.style.webkitBackdropFilter = 'blur(20px)';
                    navInner.style.boxShadow = '0 8px 32px rgba(0, 0, 0, 0.12)';
                    // Change to dark text
                    navInner.querySelectorAll('a:not(.bg-\\[var\\(--navy-primary\\)\\]), button:not(.bg-\\[var\\(--navy-primary\\)\\])').forEach(el => {
                        el.style.color = 'var(--navy-primary)';
                    });
                } else {
                    // At top - different behavior for homepage vs other pages
                    if (isHomepage) {
                        // Homepage: transparent navbar with WHITE text
                        navInner.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
                        navInner.style.backdropFilter = 'blur(12px)';
                        navInner.style.webkitBackdropFilter = 'blur(12px)';
                        navInner.style.boxShadow = '0 4px 16px rgba(0, 0, 0, 0.08)';
                        // Keep white text
                        navInner.querySelectorAll('a:not(.bg-\\[var\\(--navy-primary\\)\\]), button:not(.bg-\\[var\\(--navy-primary\\)\\])').forEach(el => {
                            el.style.color = '#ffffff';
                        });
                    } else {
                        // Other pages: solid white with DARK text
                        navInner.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                        navInner.style.backdropFilter = 'blur(20px)';
                        navInner.style.webkitBackdropFilter = 'blur(20px)';
                        navInner.style.boxShadow = '0 4px 16px rgba(0, 0, 0, 0.08)';
                        navInner.querySelectorAll('a:not(.bg-\\[var\\(--navy-primary\\)\\]), button:not(.bg-\\[var\\(--navy-primary\\)\\])').forEach(el => {
                            el.style.color = 'var(--navy-primary)';
                        });
                    }
                }

                lastScrollTop = scrollTop;
            });

            // Smooth scroll polyfill for older browsers
            if (!('scrollBehavior' in document.documentElement.style)) {
                const script = document.createElement('script');
                script.src = 'https://cdn.jsdelivr.net/npm/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js';
                script.onload = () => {
                    window.__forceSmoothScrollPolyfill__ = true;
                    smoothscroll.polyfill();
                };
                document.head.appendChild(script);
            }

            // Add active class to current nav link
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });

            // Preload critical images
            const criticalImages = document.querySelectorAll('img[data-preload]');
            criticalImages.forEach(img => {
                const preloadLink = document.createElement('link');
                preloadLink.rel = 'preload';
                preloadLink.as = 'image';
                preloadLink.href = img.src;
                document.head.appendChild(preloadLink);
            });

            // Smooth Wheel Scroll removed - menggunakan browser default untuk scroll lebih instant
        });

        // Performance optimization: Debounce scroll events
        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        // Momentum Scroll Effect
        let scrollMomentum = 0;
        let momentumID;

        function applyMomentum() {
            scrollMomentum *= 0.95;
            if (Math.abs(scrollMomentum) > 0.5) {
                window.scrollBy(0, scrollMomentum);
                momentumID = requestAnimationFrame(applyMomentum);
            }
        }
    </script>
</body>

</html>