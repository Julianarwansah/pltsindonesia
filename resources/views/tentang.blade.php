@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient py-16 lg:py-20 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto text-center fade-in">
        <h1 class="text-4xl lg:text-5xl font-display font-bold mb-4" style="color: var(--solar-blue-dark);">
            Tentang PLTS Indonesia
        </h1>
        <p class="text-lg text-gray-700 max-w-2xl mx-auto">
            solusi energi terbarukan modern untuk rumah Anda
        </p>
    </div>
</section>

<!-- Story Section -->
<section class="py-16 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <div class="fade-in-left">
                @if($storyImages->count() > 0)
                    <img src="{{ asset('storage/' . $storyImages->first()->image_path) }}"
                         alt="{{ $storyImages->first()->judul }}"
                         class="rounded-xl shadow-lg w-full"
                         style="border: 3px solid var(--solar-cream);">
                @else
                    <img src="/img/about-story.jpg" alt="PLTS Indonesia Story" class="rounded-xl shadow-lg w-full" style="border: 3px solid var(--solar-cream);">
                @endif
            </div>
            <div class="fade-in-right">
                <h2 class="text-3xl lg:text-4xl font-display font-bold mb-6" style="color: var(--solar-blue-dark);">
                    Cerita Kami
                </h2>
                <p class="text-gray-700 mb-4 leading-relaxed">
                    PLTS Indonesia lahir dari kebutuhan akan solusi energi terbarukan yang tidak hanya funktional, tetapi juga estetis. Kami memahami bahwa rumah adalah tempat di mana kehidupan terjadi, dan setiap sudut harus dioptimalkan tanpa mengorbankan keindahan.
                </p>
                <p class="text-gray-700 mb-4 leading-relaxed">
                    Sejak tahun 2020, PLTS Indonesia telah membantu ribuan keluarga Indonesia mengatur ruang mereka dengan produk penyimpanan berkualitas tinggi yang dirancang dengan cermat. Dari rak sepatu minimalis hingga lemari multifungsi, setiap produk kami dibuat dengan perhatian detail dan komitmen terhadap kualitas.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Kami percaya bahwa rumah yang terorganisir adalah awal dari kehidupan yang lebih bahagia dan produktif.
                </p>
            </div>
        </div>

        <!-- Values Section -->
        <div class="mb-20 fade-in">
            <h2 class="text-3xl lg:text-4xl font-display font-bold mb-12 text-center" style="color: var(--solar-blue-dark);">
                Nilai-Nilai Kami
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 rounded-xl scale-in stagger-delay-1" style="background: var(--solar-cream);">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6" style="background: var(--solar-blue);">
                        <i class="fas fa-award text-3xl text-white"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-3" style="color: var(--solar-blue-dark);">Kualitas Terjamin</h3>
                    <p class="text-gray-700">
                        Setiap produk dipilih dan diuji untuk memastikan daya tahan dan kualitas terbaik untuk rumah Anda.
                    </p>
                </div>

                <div class="text-center p-8 rounded-xl scale-in stagger-delay-2" style="background: var(--solar-cream);">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6" style="background: var(--solar-blue);">
                        <i class="fas fa-palette text-3xl text-white"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-3" style="color: var(--solar-blue-dark);">Desain Modern</h3>
                    <p class="text-gray-700">
                        Menggabungkan fungsi dengan estetika, menciptakan produk yang indah dan praktis untuk ruang modern.
                    </p>
                </div>

                <div class="text-center p-8 rounded-xl scale-in stagger-delay-3" style="background: var(--solar-cream);">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6" style="background: var(--solar-blue);">
                        <i class="fas fa-heart text-3xl text-white"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-3" style="color: var(--solar-blue-dark);">Kepuasan Pelanggan</h3>
                    <p class="text-gray-700">
                        Komitmen kami adalah kepuasan Anda. Layanan pelanggan yang responsif dan solusi yang tepat untuk setiap kebutuhan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="py-16 px-8 rounded-2xl mb-20 fade-in" style="background: linear-gradient(135deg, var(--solar-blue) 0%, var(--solar-blue-dark) 100%);">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center text-white">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">5000+</div>
                    <div class="text-lg opacity-90">Pelanggan Puas</div>
                </div>
                <div class="text-center text-white">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">150+</div>
                    <div class="text-lg opacity-90">Produk Tersedia</div>
                </div>
                <div class="text-center text-white">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">20+</div>
                    <div class="text-lg opacity-90">Kota Terjangkau</div>
                </div>
                <div class="text-center text-white">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">4.8/5</div>
                    <div class="text-lg opacity-90">Rating Pelanggan</div>
                </div>
            </div>
        </div>

        <!-- Vision Mission Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-20">
            <div class="p-8 rounded-xl scale-in stagger-delay-1" style="background: var(--solar-bg); border: 2px solid var(--solar-cream);">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mr-4" style="background: var(--solar-blue);">
                        <i class="fas fa-eye text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold" style="color: var(--solar-blue-dark);">Visi Kami</h3>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Menjadi brand terdepan di Indonesia untuk solusi energi terbarukan rumah yang menggabungkan kualitas premium, desain modern, dan harga terjangkau. Kami ingin setiap rumah di Indonesia memiliki ruang yang terorganisir dan indah.
                </p>
            </div>

            <div class="p-8 rounded-xl scale-in stagger-delay-2" style="background: var(--solar-bg); border: 2px solid var(--solar-cream);">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mr-4" style="background: var(--solar-blue);">
                        <i class="fas fa-bullseye text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold" style="color: var(--solar-blue-dark);">Misi Kami</h3>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Memberikan produk penyimpanan berkualitas tinggi dengan desain yang inovatif, harga yang kompetitif, dan layanan pelanggan yang excellence. Kami berkomitmen untuk terus berinovasi dan mendengarkan kebutuhan pelanggan.
                </p>
            </div>
        </div>

        <!-- Team Section (Optional - can be uncommented when team photos are available) -->
        <!--
        <div class="fade-in">
            <h2 class="text-3xl lg:text-4xl font-display font-bold mb-12 text-center" style="color: var(--solar-blue-dark);">
                Tim Kami
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="text-center scale-in stagger-delay-1">
                    <div class="w-32 h-32 rounded-full mx-auto mb-4 overflow-hidden" style="border: 3px solid var(--solar-cream);">
                        <img src="/img/team/team-1.jpg" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-lg" style="color: var(--solar-blue-dark);">John Doe</h4>
                    <p class="text-sm" style="color: var(--solar-blue-light);">CEO & Founder</p>
                </div>
            </div>
        </div>
        -->

        <!-- Why Choose Us Section -->
        <div class="fade-in">
            <h2 class="text-3xl lg:text-4xl font-display font-bold mb-12 text-center" style="color: var(--solar-blue-dark);">
                Mengapa Memilih PLTS Indonesia?
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex gap-4 p-6 rounded-xl hover:shadow-lg transition" style="background: var(--solar-cream);">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: var(--solar-blue);">
                            <i class="fas fa-box text-white"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-2" style="color: var(--solar-blue-dark);">Produk Berkualitas</h4>
                        <p class="text-gray-700 text-sm">Material premium dan konstruksi kokoh untuk ketahanan jangka panjang.</p>
                    </div>
                </div>

                <div class="flex gap-4 p-6 rounded-xl hover:shadow-lg transition" style="background: var(--solar-cream);">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: var(--solar-blue);">
                            <i class="fas fa-truck text-white"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-2" style="color: var(--solar-blue-dark);">Pengiriman Cepat</h4>
                        <p class="text-gray-700 text-sm">Pengiriman ke seluruh Indonesia dengan packaging aman dan rapi.</p>
                    </div>
                </div>

                <div class="flex gap-4 p-6 rounded-xl hover:shadow-lg transition" style="background: var(--solar-cream);">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: var(--solar-blue);">
                            <i class="fas fa-shield-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-2" style="color: var(--solar-blue-dark);">Garansi Produk</h4>
                        <p class="text-gray-700 text-sm">Setiap produk dilindungi garansi untuk memberikan ketenangan pikiran.</p>
                    </div>
                </div>

                <div class="flex gap-4 p-6 rounded-xl hover:shadow-lg transition" style="background: var(--solar-cream);">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: var(--solar-blue);">
                            <i class="fas fa-headset text-white"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-2" style="color: var(--solar-blue-dark);">Customer Support 24/7</h4>
                        <p class="text-gray-700 text-sm">Tim kami siap membantu Anda kapan saja dengan respons cepat.</p>
                    </div>
                </div>

                <div class="flex gap-4 p-6 rounded-xl hover:shadow-lg transition" style="background: var(--solar-cream);">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: var(--solar-blue);">
                            <i class="fas fa-tags text-white"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-2" style="color: var(--solar-blue-dark);">Harga Terjangkau</h4>
                        <p class="text-gray-700 text-sm">Kualitas premium dengan harga yang kompetitif dan banyak promo menarik.</p>
                    </div>
                </div>

                <div class="flex gap-4 p-6 rounded-xl hover:shadow-lg transition" style="background: var(--solar-cream);">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: var(--solar-blue);">
                            <i class="fas fa-sync text-white"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-2" style="color: var(--solar-blue-dark);">Easy Return</h4>
                        <p class="text-gray-700 text-sm">Proses retur mudah jika produk tidak sesuai harapan dalam 7 hari.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 px-6 lg:px-12" style="background: var(--solar-cream);">
    <div class="max-w-4xl mx-auto text-center fade-in">
        <h2 class="text-3xl lg:text-4xl font-display font-bold mb-6" style="color: var(--solar-blue-dark);">
            Siap Mengatur Rumah Anda?
        </h2>
        <p class="text-lg text-gray-700 mb-8">
            Jelajahi koleksi produk kami dan temukan solusi energi terbarukan yang sempurna untuk kebutuhan Anda.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('produk.list') }}" class="btn-primary px-8 py-4 rounded-xl font-semibold text-lg">
                <i class="fas fa-shopping-bag mr-2"></i> Lihat Produk
            </a>
            <a href="{{ route('kontak') }}" class="px-8 py-4 rounded-xl font-semibold text-lg border-2 hover:bg-white transition" style="border-color: var(--solar-blue); color: var(--solar-blue);">
                <i class="fas fa-envelope mr-2"></i> Hubungi Kami
            </a>
        </div>
    </div>
</section>
@endsection
