<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLTS Indonesia - Solusi Energi Terbarukan</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            --solar-blue: #0EA5E9;
            --solar-blue-light: #38BDF8;
            --solar-blue-dark: #0284C7;
            --solar-green: #10B981;
            --solar-yellow: #F59E0B;
            --white: #FFFFFF;
            --black: #1A1A1A;
            --solar-bg: #F0F9FF;
            --solar-cream: #FFFBEB;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--solar-bg);
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        .hero-gradient {
            background: linear-gradient(135deg, var(--solar-cream) 0%, var(--solar-blue-light) 100%);
        }

        .btn-primary {
            background-color: var(--solar-blue);
            color: var(--white);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--solar-blue-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(14, 165, 233, 0.3);
        }

        .product-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(14, 165, 233, 0.1);
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(14, 165, 233, 0.15);
        }

        .category-badge {
            background-color: var(--solar-cream);
            color: var(--solar-blue-dark);
            border: 1px solid var(--solar-blue-light);
            transition: all 0.3s ease;
        }

        .category-badge:hover {
            background-color: var(--solar-blue);
            color: var(--white);
            border-color: var(--solar-blue);
        }

        .nav-link {
            position: relative;
            color: var(--solar-blue-dark);
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--solar-blue);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--solar-blue);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .section-title {
            color: var(--solar-blue-dark);
            font-size: 2.5rem;
            font-weight: 700;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 1.875rem;
            }
        }

        /* Scroll Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in-left.show {
            opacity: 1;
            transform: translateX(0);
        }

        .fade-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in-right.show {
            opacity: 1;
            transform: translateX(0);
        }

        .scale-in {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .scale-in.show {
            opacity: 1;
            transform: scale(1);
        }

        .stagger-delay-1 {
            transition-delay: 0.1s;
        }

        .stagger-delay-2 {
            transition-delay: 0.2s;
        }

        .stagger-delay-3 {
            transition-delay: 0.3s;
        }

        .stagger-delay-4 {
            transition-delay: 0.4s;
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
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
            color: var(--brown-dark);
            animation: float 3s ease-in-out infinite;
            z-index: 3;
        }

        .hero-float-badge i {
            color: var(--solar-blue);
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
    </style>
</head>

<body class="antialiased">
    <nav class="w-full py-5 px-6 lg:px-12 bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-3xl font-display font-bold hover:opacity-80 transition"
                style="color: var(--solar-blue);">
                PLTS Indonesia
            </a>
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="nav-link font-medium">Home</a>
                <a href="{{ route('produk.list') }}" class="nav-link font-medium">Produk</a>
                <a href="{{ route('artikel.list') }}" class="nav-link font-medium">Artikel</a>
                <a href="{{ route('tentang') }}" class="nav-link font-medium">Tentang</a>
                <a href="{{ route('kontak') }}" class="nav-link font-medium">Kontak</a>
            </div>
            <div class="md:hidden">
                <button class="text-2xl" style="color: var(--solar-blue);">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white mt-20 py-12 px-6 lg:px-12 border-t" style="border-color: var(--solar-cream);">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-display font-bold mb-4" style="color: var(--solar-blue);">PLTS Indonesia
                    </h3>
                    <p class="text-gray-600 mb-4">Solusi energi terbarukan untuk masa depan yang lebih hijau. Panel
                        surya berkualitas tinggi dengan instalasi profesional.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl hover:scale-110 transition-transform"
                            style="color: var(--solar-blue);"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-2xl hover:scale-110 transition-transform"
                            style="color: var(--solar-blue);"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:scale-110 transition-transform"
                            style="color: var(--solar-blue);"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4" style="color: var(--solar-blue-dark);">Navigasi</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="{{ route('home') }}" class="hover:text-[var(--solar-blue)] transition">Home</a>
                        </li>
                        <li><a href="{{ route('produk.list') }}"
                                class="hover:text-[var(--solar-blue)] transition">Produk</a>
                        </li>
                        <li><a href="{{ route('artikel.list') }}"
                                class="hover:text-[var(--solar-blue)] transition">Artikel</a></li>
                        <li><a href="{{ route('tentang') }}" class="hover:text-[var(--solar-blue)] transition">Tentang
                                Kami</a></li>
                        <li><a href="{{ route('kontak') }}" class="hover:text-[var(--solar-blue)] transition">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4" style="color: var(--solar-blue-dark);">Kontak</h4>
                    <ul class="space-y-2 text-gray-600">
<<<<<<< HEAD
                        <li><i class="fas fa-phone mr-2" style="color: var(--solar-blue);"></i> +62 812-3456-7890</li>
                        <li><i class="fas fa-envelope mr-2" style="color: var(--solar-blue);"></i> info@pltsindonesia.id
                        </li>
                        <li><i class="fas fa-map-marker-alt mr-2" style="color: var(--solar-blue);"></i> PT. Jarwinn
                            Feliciti
=======
                        <li><i class="fas fa-phone mr-2" style="color: var(--brown);"></i>+6281258887895</li>
                        <li><i class="fas fa-envelope mr-2" style="color: var(--brown);"></i>joulwinnofficial@gmail.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2" style="color: var(--brown);"></i> PT. Joulwinn Gelvis
>>>>>>> 0197f237e26d0def35bbf5f4ea5e14b8c865a21c
                            Hotapea<br>BSD Ruko Boulevard, Jalan Raya Taman Tekno Serpong Blok AA No.7, Ciater, Serpong
                            Sub-District, South Tangerang City, Banten 15323, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="border-t pt-6 text-center text-gray-500 text-sm" style="border-color: var(--solar-cream);">
                <p>&copy; {{ date('Y') }} PLTS Indonesia. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu"
        class="fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
        <div class="flex flex-col h-full">
            <div class="flex justify-between items-center p-6 border-b" style="border-color: var(--solar-cream);">
                <span class="text-2xl font-display font-bold" style="color: var(--solar-blue);">PLTS Indonesia</span>
                <button id="close-menu" class="text-2xl" style="color: var(--solar-blue);">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="flex flex-col p-6 space-y-6">
                <a href="{{ route('home') }}"
                    class="text-xl font-medium hover:text-[var(--solar-blue)] transition transform hover:translate-x-2 duration-300">Home</a>
                <a href="{{ route('produk.list') }}"
                    class="text-xl font-medium hover:text-[var(--solar-blue)] transition transform hover:translate-x-2 duration-300">Produk</a>
                <a href="{{ route('artikel.list') }}"
                    class="text-xl font-medium hover:text-[var(--solar-blue)] transition transform hover:translate-x-2 duration-300">Artikel</a>
                <a href="{{ route('tentang') }}"
                    class="text-xl font-medium hover:text-[var(--solar-blue)] transition transform hover:translate-x-2 duration-300">Tentang</a>
                <a href="{{ route('kontak') }}"
                    class="text-xl font-medium hover:text-[var(--solar-blue)] transition transform hover:translate-x-2 duration-300">Kontak</a>
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

        // Scroll Animation Observer
        const observerOptions = {
            root: null,
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        document.addEventListener('DOMContentLoaded', () => {
            const fadeElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .scale-in');
            fadeElements.forEach(el => observer.observe(el));

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

            // Navbar background on scroll
            const nav = document.querySelector('nav');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    nav.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                    nav.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
                } else {
                    nav.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
                    nav.style.boxShadow = '0 1px 3px 0 rgba(0, 0, 0, 0.1)';
                }
            });
        });
    </script>
</body>

</html>