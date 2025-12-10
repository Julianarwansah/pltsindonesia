@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/hero-plts.png') }}" alt="PLTS Indonesia" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/60 to-black/70"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-5xl mx-auto px-6 lg:px-12 text-center fade-in parallax" data-speed="-0.3">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white mb-4 leading-tight">
                Solusi Energi Surya untuk<br>
                Hunian dan Bisnis Anda
            </h1>
            <p class="text-base md:text-lg lg:text-xl text-white/90 mb-6 max-w-3xl mx-auto leading-relaxed">
                Hemat biaya listrik dengan teknologi panel surya terpercaya. Layanan profesional dan 
                terintegrasi untuk masa depan energi yang lebih cerah dan berkelanjutan.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                <a href="{{ route('produk.list') }}" class="btn-primary inline-block px-6 py-3 text-base">
                    <i class="fas fa-solar-panel mr-2"></i> Lihat Produk
                </a>
                <a href="{{ route('kontak') }}"
                    class="px-6 py-3 rounded-full font-semibold text-base inline-block border-2 border-white text-white transition-all hover:bg-white hover:text-[var(--navy-primary)]">
                    <i class="fas fa-phone mr-2"></i> Hubungi Kami
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
            <a href="#features" class="text-white/70 hover:text-white transition">
                <i class="fas fa-chevron-down text-3xl"></i>
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="fade-in stagger-delay-1 text-center p-8 rounded-xl transition-all hover:shadow-lg"
                    style="background-color: var(--gray-light);">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center"
                        style="background-color: var(--accent-green);">
                        <i class="fas fa-bolt text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3" style="color: var(--navy-primary);">Hemat Energi</h3>
                    <p style="color: var(--gray-medium);">Kurangi tagihan listrik hingga 70% dengan panel surya berkualitas
                        tinggi</p>
                </div>
                <div class="fade-in stagger-delay-2 text-center p-8 rounded-xl transition-all hover:shadow-lg"
                    style="background-color: var(--gray-light);">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center"
                        style="background-color: var(--accent-green);">
                        <i class="fas fa-leaf text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3" style="color: var(--navy-primary);">Ramah Lingkungan</h3>
                    <p style="color: var(--gray-medium);">Energi bersih yang mengurangi jejak karbon dan melindungi bumi</p>
                </div>
                <div class="fade-in stagger-delay-3 text-center p-8 rounded-xl transition-all hover:shadow-lg"
                    style="background-color: var(--gray-light);">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center"
                        style="background-color: var(--navy-primary);">
                        <i class="fas fa-tools text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3" style="color: var(--navy-primary);">Instalasi Profesional</h3>
                    <p style="color: var(--gray-medium);">Tim ahli berpengalaman untuk instalasi yang aman dan efisien</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PLTS Solutions Section -->
    <section class="py-20 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in">
                <span class="text-[var(--accent-green)] font-bold tracking-wider uppercase mb-2 block">PLTS Solutions</span>
                <h2 class="font-display section-title mb-4">Sistem PLTS untuk <br />Setiap Kebutuhan</h2>
                <p class="text-lg max-w-2xl mx-auto" style="color: var(--gray-medium);">
                    Pilih sistem panel surya yang paling sesuai dengan kebutuhan energi Anda. Dari yang terhubung PLN hingga
                    mandiri sepenuhnya.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative z-10">
                <!-- On-Grid Card -->
                <div
                    class="group relative bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col h-full fade-in stagger-delay-1">
                    <div
                        class="absolute top-0 right-0 bg-[var(--accent-green)] text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">
                        Paling Populer
                    </div>
                    <div class="mb-6">
                        <div
                            class="w-14 h-14 rounded-xl bg-blue-50 flex items-center justify-center text-[var(--navy-primary)] mb-4 group-hover:bg-[var(--accent-green)] group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-city text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-display font-bold mb-3" style="color: var(--navy-primary);">PLTS On-Grid
                        </h3>
                        <p class="text-sm leading-relaxed" style="color: var(--gray-medium);">
                            Sistem panel surya yang terhubung langsung ke jaringan PLN. Hemat biaya listrik dan bisa ekspor
                            kelebihan daya ke PLN.
                        </p>
                    </div>

                    <ul class="space-y-3 mb-8 flex-1">
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-[var(--accent-green)] mt-1 mr-2"></i>
                            <span>Terhubung ke jaringan PLN</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-[var(--accent-green)] mt-1 mr-2"></i>
                            <span>Ekspor kW ke PLN (Net Metering)</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-[var(--accent-green)] mt-1 mr-2"></i>
                            <span>Investasi lebih terjangkau</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-[var(--accent-green)] mt-1 mr-2"></i>
                            <span>Tidak perlu baterai</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-[var(--accent-green)] mt-1 mr-2"></i>
                            <span>ROI 3-5 tahun</span>
                        </li>
                    </ul>

                    <div class="mt-auto">
                        <div class="mb-4">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wide mb-2">Ideal untuk:</p>
                            <p class="text-sm text-gray-700 font-medium">Rumah tinggal, perkantoran, dan bisnis yang sudah
                                terhubung PLN</p>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=6281258887895&text=Halo%20PLTS%20Indonesia,%20saya%20tertarik%20konsultasi%20PLTS%20On-Grid"
                            target="_blank"
                            class="block w-full py-3 px-4 bg-gray-50 hover:bg-[var(--solar-blue)] text-gray-800 hover:text-white text-center rounded-xl font-semibold transition-all duration-300 border border-gray-200 hover:border-transparent">
                            Konsultasi On-Grid
                        </a>
                    </div>
                </div>

                <!-- Off-Grid Card -->
                <div
                    class="group relative bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col h-full fade-in stagger-delay-2">
                    <div
                        class="absolute top-0 right-0 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">
                        100% Mandiri
                    </div>
                    <div class="mb-6">
                        <div
                            class="w-14 h-14 rounded-xl bg-green-50 flex items-center justify-center text-green-600 mb-4 group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-mountain text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-gray-800 mb-3">PLTS Off-Grid</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Sistem mandiri yang tidak terhubung ke PLN. Cocok untuk lokasi terpencil atau ingin sepenuhnya
                            independen.
                        </p>
                    </div>

                    <ul class="space-y-3 mb-8 flex-1">
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>100% independen dari PLN</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Menggunakan sistem baterai</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Cadangan listrik 24/7</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Cocok daerah tanpa PLN</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Ramah lingkungan 100%</span>
                        </li>
                    </ul>

                    <div class="mt-auto">
                        <div class="mb-4">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wide mb-2">Ideal untuk:</p>
                            <p class="text-sm text-gray-700 font-medium">Lokasi terpencil, pulau, villa, rumah pedesaan
                                tanpa akses PLN</p>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=6281258887895&text=Halo%20PLTS%20Indonesia,%20saya%20tertarik%20konsultasi%20PLTS%20Off-Grid"
                            target="_blank"
                            class="block w-full py-3 px-4 bg-gray-50 hover:bg-green-600 text-gray-800 hover:text-white text-center rounded-xl font-semibold transition-all duration-300 border border-gray-200 hover:border-transparent">
                            Konsultasi Off-Grid
                        </a>
                    </div>
                </div>

                <!-- Hybrid Card -->
                <div
                    class="group relative bg-white rounded-2xl p-8 shadow-lg border-2 border-[var(--solar-blue)]/10 hover:border-[var(--solar-blue)] transition-all duration-300 hover:-translate-y-2 flex flex-col h-full fade-in stagger-delay-3 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 bg-purple-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg z-10">
                        Terbaik Keduanya
                    </div>
                    <!-- Background Glow Effect -->
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-[var(--solar-blue)]/5 rounded-full blur-3xl -mr-16 -mt-16 pointer-events-none">
                    </div>

                    <div class="mb-6 relative z-10">
                        <div
                            class="w-14 h-14 rounded-xl bg-purple-50 flex items-center justify-center text-purple-600 mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-random text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-gray-800 mb-3">PLTS Hybrid</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Kombinasi terbaik dari On-Grid dan Off-Grid. Terhubung PLN dengan backup baterai untuk keandalan
                            maksimal.
                        </p>
                    </div>

                    <ul class="space-y-3 mb-8 flex-1 relative z-10">
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-600 mt-1 mr-2"></i>
                            <span>Terhubung PLN + Baterai</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-600 mt-1 mr-2"></i>
                            <span>Backup saat pemadaman</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-600 mt-1 mr-2"></i>
                            <span>Fleksibilitas maksimal</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-600 mt-1 mr-2"></i>
                            <span>Optimasi penggunaan energi</span>
                        </li>
                        <li class="flex items-start text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-600 mt-1 mr-2"></i>
                            <span>Hemat & tetap aman</span>
                        </li>
                    </ul>

                    <div class="mt-auto relative z-10">
                        <div class="mb-4">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wide mb-2">Ideal untuk:</p>
                            <p class="text-sm text-gray-700 font-medium">Rumah sakit, data center, bisnis kritis yang butuh
                                uptime tinggi</p>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=6281258887895&text=Halo%20PLTS%20Indonesia,%20saya%20tertarik%20konsultasi%20PLTS%20Hybrid"
                            target="_blank"
                            class="block w-full py-3 px-4 bg-gray-50 hover:bg-purple-600 text-gray-800 hover:text-white text-center rounded-xl font-semibold transition-all duration-300 border border-gray-200 hover:border-transparent">
                            Konsultasi Hybrid
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    @if($featured->count() > 0)
        <section id="produk" class="py-16 px-6 lg:px-12 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12 fade-in">
                    <h2 class="font-display section-title mb-4">Produk Rekomendasi</h2>
                    <p class="text-gray-600 text-lg">Pilihan terbaik untuk melengkapi rumah Anda</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach($featured as $produk)
                        <div class="product-card group scale-in stagger-delay-{{ $loop->index % 4 + 1 }}">
                            <div class="relative overflow-hidden aspect-square bg-gray-50">
                                <img src="{{ $produk->gambar_utama ? asset('storage/' . $produk->gambar_utama) : ($produk->gambar->first() ? asset('storage/' . $produk->gambar->first()->nama_file) : '/img/no-image.png') }}"
                                    alt="{{$produk->nama_produk}}"
                                    class="w-full h-full object-contain p-4 group-hover:scale-110 transition-transform duration-500">
                                @if($produk->harga_diskon)
                                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                                        SALE
                                    </div>
                                @endif
                            </div>
                            <div class="p-5">
                                <div class="text-xs font-semibold mb-2" style="color: var(--accent-green);">
                                    {{$produk->kategori->nama_kategori ?? 'Produk'}}
                                </div>
                                <h3 class="font-bold text-lg mb-3 line-clamp-2" style="color: var(--navy-primary);">
                                    {{$produk->nama_produk}}
                                </h3>
                                <div class="mb-4">
                                    <!-- Price removed -->
                                </div>
                                <a href="{{ route('produk.detail', $produk->slug) }}"
                                    class="btn-primary w-full block text-center py-3 rounded-lg font-semibold">
                                    <i class="fas fa-shopping-cart mr-2"></i> Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- All Products Section -->
    <section class="py-16 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12 fade-in">
                <h2 class="font-display section-title mb-4">Semua Produk</h2>
                <p class="text-gray-600 text-lg">Temukan produk yang sesuai dengan kebutuhan Anda</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($products as $produk)
                    <div class="product-card group scale-in stagger-delay-{{ $loop->index % 4 + 1 }}">
                        <div class="relative overflow-hidden aspect-square bg-gray-50">
                            <img src="{{ $produk->gambar_utama ? asset('storage/' . $produk->gambar_utama) : ($produk->gambar->first() ? asset('storage/' . $produk->gambar->first()->nama_file) : '/img/no-image.png') }}"
                                alt="{{$produk->nama_produk}}"
                                class="w-full h-full object-contain p-4 group-hover:scale-110 transition-transform duration-500">
                            @if($produk->harga_diskon)
                                <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                                    SALE
                                </div>
                            @endif
                        </div>
                        <div class="p-5">
                            <div class="text-xs font-semibold mb-2" style="color: var(--accent-green);">
                                {{$produk->kategori->nama_kategori ?? 'Produk'}}
                            </div>
                            <h3 class="font-bold text-lg mb-3 line-clamp-2" style="color: var(--navy-primary);">
                                {{$produk->nama_produk}}
                            </h3>
                            <div class="mb-4">
                                <!-- Price removed -->
                            </div>
                            <a href="{{ route('produk.detail', $produk->slug) }}"
                                class="btn-primary w-full block text-center py-3 rounded-lg font-semibold">
                                <i class="fas fa-shopping-cart mr-2"></i> Lihat Detail
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-16">
                        <i class="fas fa-box-open text-6xl mb-4" style="color: var(--accent-green);"></i>
                        <p class="text-gray-500 text-lg">Belum ada produk yang tersedia</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-20 px-6 lg:px-12 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in-left">
                    <h2 class="font-display section-title mb-6">Tentang PLTS Indonesia</h2>
                    <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                        PLTS Indonesia hadir sebagai solusi energi terbarukan yang menggabungkan teknologi panel surya
                        terkini dengan layanan instalasi profesional. Kami percaya bahwa setiap rumah dan bisnis berhak
                        mendapatkan akses ke energi bersih dan terjangkau.
                    </p>
                    <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                        Dengan menggunakan panel surya berkualitas tinggi dan tim teknisi bersertifikat, produk PLTS
                        Indonesia dirancang untuk memberikan efisiensi maksimal dan ketahanan jangka panjang.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div>
                            <div class="text-4xl font-bold mb-2" style="color: var(--solar-blue);">1000+</div>
                            <div class="text-gray-600">Instalasi Selesai</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold mb-2" style="color: var(--solar-blue);">4.9/5</div>
                            <div class="text-gray-600">Rating Pelanggan</div>
                        </div>
                    </div>
                </div>
                <div class="relative fade-in-right">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <div class="aspect-[4/3] w-full"
                            style="background: linear-gradient(135deg, var(--solar-cream) 0%, var(--solar-blue-light) 100%);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    @if($testimonis->count() > 0)
        <section class="py-16 px-6 lg:px-12">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12 fade-in">
                    <h2 class="font-display section-title mb-4">Testimoni Pelanggan</h2>
                    <p class="text-gray-600 text-lg">Kata mereka yang telah mempercayai Antbox</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($testimonis as $testimoni)
                        <div class="product-card scale-in stagger-delay-{{ $loop->index % 3 + 1 }}">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="flex-shrink-0">
                                        @if($testimoni->foto)
                                            <img src="{{ asset('storage/' . $testimoni->foto) }}" alt="{{ $testimoni->nama }}"
                                                class="w-16 h-16 rounded-full object-cover border-2"
                                                style="border-color: var(--brown-light);">
                                        @else
                                            <div class="w-16 h-16 rounded-full flex items-center justify-center text-white text-xl font-bold"
                                                style="background-color: var(--brown);">
                                                {{ strtoupper(substr($testimoni->nama, 0, 1)) }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <h3 class="font-bold text-lg" style="color: var(--navy-primary);">{{ $testimoni->nama }}
                                        </h3>
                                        @if($testimoni->pekerjaan)
                                            <p class="text-sm text-gray-500">{{ $testimoni->pekerjaan }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex mb-3">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= $testimoni->rating ? 'text-yellow-400' : 'text-gray-300' }}"></i>
                                    @endfor
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    "{{ $testimoni->isi }}"
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Latest Articles Section -->
    <section class="py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12 fade-in">
                <h2 class="font-display section-title mb-4">Artikel & Tips Terbaru</h2>
                <p class="text-gray-600 text-lg">Inspirasi dan panduan untuk rumah impian Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <!-- Artikel akan dimuat di sini dari controller -->
                <div class="product-card scale-in stagger-delay-1">
                    <div class="aspect-[4/3] rounded-t-xl overflow-hidden"
                        style="background: linear-gradient(135deg, var(--cream) 0%, var(--brown-light) 100%);"></div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2" style="color: var(--navy-primary);">Tips Mengatur Rak Sepatu</h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">Simak tips praktis mengatur rak sepatu agar lebih
                            rapi dan estetik...</p>
                        <a href="{{ route('artikel.list') }}" class="text-sm font-semibold hover:underline"
                            style="color: var(--accent-green);">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="product-card scale-in stagger-delay-2">
                    <div class="aspect-[4/3] rounded-t-xl overflow-hidden"
                        style="background: linear-gradient(135deg, var(--brown-light) 0%, var(--brown) 100%);"></div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2" style="color: var(--navy-primary);">Desain Interior Minimalis
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">Panduan menciptakan interior minimalis yang
                            nyaman dan fungsional...</p>
                        <a href="{{ route('artikel.list') }}" class="text-sm font-semibold hover:underline"
                            style="color: var(--accent-green);">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="product-card scale-in stagger-delay-3">
                    <div class="aspect-[4/3] rounded-t-xl overflow-hidden"
                        style="background: linear-gradient(135deg, var(--brown) 0%, var(--brown-dark) 100%);"></div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2" style="color: var(--navy-primary);">Solusi Ruang Kecil</h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">Maksimalkan ruang terbatas dengan furnitur
                            penyimpanan yang tepat...</p>
                        <a href="{{ route('artikel.list') }}" class="text-sm font-semibold hover:underline"
                            style="color: var(--accent-green);">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center fade-in">
                <a href="{{ route('artikel.list') }}"
                    class="btn-primary px-8 py-4 rounded-lg font-semibold text-lg inline-block">
                    <i class="fas fa-newspaper mr-2"></i> Lihat Semua Artikel
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="kontak" class="py-20 px-6 lg:px-12 hero-gradient">
        <div class="max-w-4xl mx-auto text-center fade-in">
            <h2 class="font-display text-4xl lg:text-5xl font-bold mb-6" style="color: var(--solar-blue-dark);">
                Siap Beralih ke Energi Terbarukan?
            </h2>
            <p class="text-lg text-gray-700 mb-8 max-w-2xl mx-auto">
                Hubungi kami sekarang untuk konsultasi gratis dan dapatkan penawaran terbaik untuk sistem panel surya Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://api.whatsapp.com/send?phone=6281258887895" target="_blank"
                    class="btn-primary px-8 py-4 rounded-lg font-semibold text-lg inline-block">
                    <i class="fab fa-whatsapp mr-2"></i> Hubungi via WhatsApp
                </a>
                <a href="mailto:joulwinnofficial@gmail.com"
                    class="px-8 py-4 rounded-lg font-semibold text-lg inline-block border-2 bg-white transition-all hover:shadow-lg"
                    style="border-color: var(--solar-blue); color: var(--solar-blue);">
                    <i class="fas fa-envelope mr-2"></i> Email Kami
                </a>
            </div>
        </div>
    </section>
@endsection