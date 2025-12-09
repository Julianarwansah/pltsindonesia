@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="bg-white py-4 px-6 lg:px-12 border-b" style="border-color: var(--solar-cream);">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-[var(--solar-blue)]">Home</a>
                <span class="mx-2 text-gray-400">/</span>
                <a href="{{ route('produk.list') }}" class="text-gray-600 hover:text-[var(--solar-blue)]">Produk</a>
                <span class="mx-2 text-gray-400">/</span>
                @if($produk->kategori)
                    <a href="{{ route('produk.list', ['kategori' => $produk->kategori->slug]) }}"
                        class="text-gray-600 hover:text-[var(--solar-blue)]">{{ $produk->kategori->nama_kategori }}</a>
                    <span class="mx-2 text-gray-400">/</span>
                @endif
                <span class="font-semibold" style="color: var(--solar-blue);">{{ $produk->nama_produk }}</span>
            </nav>
        </div>
    </section>

    <!-- Product Detail Section -->
    <section class="py-12 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <!-- Product Images -->
                <div class="fade-in-left">
                    <!-- Main Image -->
                    <div class="mb-4 overflow-hidden rounded-xl shadow-lg" style="border: 2px solid var(--solar-cream);">
                        <img id="mainImage"
                            src="{{ $produk->gambar_utama ? asset('storage/' . $produk->gambar_utama) : '/img/no-image.png' }}"
                            alt="{{ $produk->nama_produk }}" class="w-full aspect-square object-cover">
                    </div>

                    <!-- Thumbnail Gallery -->
                    @if($produk->gambar && $produk->gambar->count() > 0)
                        <div class="grid grid-cols-4 gap-3">
                            <div class="cursor-pointer overflow-hidden rounded-lg border-2 border-[var(--solar-blue)] transition"
                                onclick="changeImage('{{ $produk->gambar_utama ? asset('storage/' . $produk->gambar_utama) : '/img/no-image.png' }}')">
                                <img src="{{ $produk->gambar_utama ? asset('storage/' . $produk->gambar_utama) : '/img/no-image.png' }}"
                                    alt="Thumbnail" class="w-full aspect-square object-cover">
                            </div>
                            @foreach($produk->gambar as $gambar)
                                <div class="cursor-pointer overflow-hidden rounded-lg border-2 border-transparent hover:border-[var(--solar-blue)] transition"
                                    onclick="changeImage('{{ asset('storage/' . $gambar->nama_file) }}')">
                                    <img src="{{ asset('storage/' . $gambar->nama_file) }}" alt="Thumbnail"
                                        class="w-full aspect-square object-cover">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Product Info -->
                <div class="fade-in-right">
                    @if($produk->kategori)
                        <div class="text-sm font-semibold mb-2" style="color: var(--solar-blue-light);">
                            {{ $produk->kategori->nama_kategori }}
                        </div>
                    @endif

                    <h1 class="text-3xl lg:text-4xl font-display font-bold mb-4" style="color: var(--solar-blue-dark);">
                        {{ $produk->nama_produk }}
                    </h1>

                    <!-- Rating and Reviews (Placeholder) -->
                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                            <span class="ml-2 text-sm text-gray-600">(4.5)</span>
                        </div>
                        @if($produk->terlaris == 'yes')
                            <span class="px-3 py-1 text-xs font-bold rounded-full"
                                style="background: var(--solar-cream); color: var(--solar-blue);">
                                <i class="fas fa-fire mr-1"></i> TERLARIS
                            </span>
                        @endif
                        @if($produk->rekomendasi == 'yes')
                            <span class="px-3 py-1 text-xs font-bold rounded-full"
                                style="background: var(--solar-cream); color: var(--solar-blue);">
                                <i class="fas fa-star mr-1"></i> REKOMENDASI
                            </span>
                        @endif
                    </div>

                    <!-- Price -->
                    <!-- Price removed -->

                    <!-- Short Description -->
                    @if($produk->deskripsi_singkat)
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            {{ $produk->deskripsi_singkat }}
                        </p>
                    @endif

                    <!-- Product Specifications -->
                    @if($produk->berat || $produk->dimensi)
                        <div class="bg-[var(--solar-cream)] p-6 rounded-xl mb-6">
                            <h3 class="font-display font-bold text-lg mb-3" style="color: var(--solar-blue-dark);">Spesifikasi</h3>
                            <div class="space-y-2">
                                @if($produk->dimensi)
                                    <div class="flex">
                                        <span class="text-gray-600 w-32"><i class="fas fa-ruler-combined mr-2"></i>Dimensi:</span>
                                        <span class="font-semibold">{{ $produk->dimensi }}</span>
                                    </div>
                                @endif
                                @if($produk->berat)
                                    <div class="flex">
                                        <span class="text-gray-600 w-32"><i class="fas fa-weight mr-2"></i>Berat:</span>
                                        <span class="font-semibold">{{ $produk->berat }} kg</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="flex gap-4">
                        <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk {{ urlencode($produk->nama_produk) }}"
                            target="_blank" class="btn-primary flex-1 text-center py-4 rounded-xl font-semibold text-lg">
                            <i class="fab fa-whatsapp mr-2"></i> Pesan via WhatsApp
                        </a>
                        <button class="px-6 py-4 rounded-xl border-2 hover:bg-[var(--solar-cream)] transition"
                            style="border-color: var(--solar-blue); color: var(--solar-blue);">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>

                    <!-- Additional Info -->
                    <div class="grid grid-cols-3 gap-4 mt-8 pt-8 border-t" style="border-color: var(--solar-cream);">
                        <div class="text-center">
                            <i class="fas fa-truck text-2xl mb-2" style="color: var(--solar-blue);"></i>
                            <p class="text-sm text-gray-600">Pengiriman Cepat</p>
                        </div>
                        <div class="text-center">
                            <i class="fas fa-shield-alt text-2xl mb-2" style="color: var(--solar-blue);"></i>
                            <p class="text-sm text-gray-600">Garansi Produk</p>
                        </div>
                        <div class="text-center">
                            <i class="fas fa-headset text-2xl mb-2" style="color: var(--solar-blue);"></i>
                            <p class="text-sm text-gray-600">CS 24/7</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Description Tabs -->
            <div class="mb-16 fade-in">
                <div class="flex gap-4 border-b-2 mb-6" style="border-color: var(--solar-cream);">
                    <button onclick="showTab('description')" id="tab-description"
                        class="tab-button px-6 py-3 font-semibold transition border-b-2 border-[var(--solar-blue)]"
                        style="color: var(--solar-blue);">
                        Deskripsi Lengkap
                    </button>
                    <button onclick="showTab('reviews')" id="tab-reviews"
                        class="tab-button px-6 py-3 font-semibold transition border-b-2 border-transparent text-gray-500 hover:text-[var(--solar-blue)]">
                        Ulasan
                    </button>
                </div>

                <!-- Description Tab -->
                <div id="content-description" class="tab-content">
                    <div class="prose max-w-none">
                        @if($produk->deskripsi_lengkap)
                            {!! nl2br(e($produk->deskripsi_lengkap)) !!}
                        @else
                            <p class="text-gray-600">Deskripsi lengkap produk akan segera ditambahkan.</p>
                        @endif
                    </div>
                </div>

                <!-- Reviews Tab -->
                <div id="content-reviews" class="tab-content hidden">
                    <div class="text-center py-12">
                        <i class="fas fa-star text-6xl mb-4" style="color: var(--solar-blue-light);"></i>
                        <p class="text-gray-500 text-lg">Belum ada ulasan untuk produk ini</p>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            @if($relatedProducts && $relatedProducts->count() > 0)
                <div class="fade-in">
                    <h2 class="text-3xl font-display font-bold mb-8 text-center" style="color: var(--solar-blue-dark);">
                        Produk Terkait
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($relatedProducts as $related)
                            <div class="product-card group scale-in stagger-delay-{{ $loop->index % 4 + 1 }}">
                                <div class="relative overflow-hidden aspect-square">
                                    <img src="{{ $related->gambar_utama ? asset('storage/' . $related->gambar_utama) : '/img/no-image.png' }}"
                                        alt="{{ $related->nama_produk }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    @if($related->harga_diskon && $related->harga_diskon < $related->harga)
                                        <div
                                            class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                                            {{ round((($related->harga - $related->harga_diskon) / $related->harga) * 100) }}% OFF
                                        </div>
                                    @endif
                                </div>
                                <div class="p-5">
                                    <div class="text-xs font-semibold mb-2" style="color: var(--solar-blue-light);">
                                        {{ $related->kategori->nama_kategori ?? 'Produk' }}
                                    </div>
                                    <h3 class="font-bold text-lg mb-3 line-clamp-2" style="color: var(--solar-blue-dark);">
                                        {{ $related->nama_produk }}
                                    </h3>
                                    <div class="mb-4">
                                        <!-- Price removed -->
                                    </div>
                                    <a href="{{ route('produk.detail', $related->slug) }}"
                                        class="btn-primary w-full block text-center py-3 rounded-lg font-semibold">
                                        <i class="fas fa-eye mr-2"></i> Lihat Detail
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }

        function showTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Remove active styling from all tabs
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('border-[var(--solar-blue)]');
                button.classList.add('border-transparent', 'text-gray-500');
                button.style.color = '';
            });

            // Show selected tab content
            document.getElementById('content-' + tabName).classList.remove('hidden');

            // Add active styling to selected tab
            const activeTab = document.getElementById('tab-' + tabName);
            activeTab.classList.remove('border-transparent', 'text-gray-500');
            activeTab.classList.add('border-[var(--solar-blue)]');
            activeTab.style.color = 'var(--solar-blue)';
        }
    </script>
@endsection
