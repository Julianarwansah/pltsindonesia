@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="bg-white py-4 px-6 lg:px-12 border-b" style="border-color: var(--solar-cream);">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-[var(--accent-green)] transition">Home</a>
                <span class="mx-2 text-gray-400">/</span>
                <a href="{{ route('produk.list') }}"
                    class="text-gray-600 hover:text-[var(--accent-green)] transition">Produk</a>
                <span class="mx-2 text-gray-400">/</span>
                @if($produk->kategori)
                    <a href="{{ route('produk.list', ['kategori' => $produk->kategori->slug]) }}"
                        class="text-gray-600 hover:text-[var(--accent-green)] transition">{{ $produk->kategori->nama_kategori }}</a>
                    <span class="mx-2 text-gray-400">/</span>
                @endif
                <span class="font-semibold" style="color: var(--navy-primary);">{{ $produk->nama_produk }}</span>
            </nav>
        </div>
    </section>
                                   
    <!-- Product Detail Section -->
    <section class="pt-32 pb-16 px-6 lg:px-12 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-20">
                <!-- Product Images -->
                <div class="fade-in-left">
                    <!-- Main Image with Zoom -->
                    <div class="mb-6 overflow-hidden rounded-2xl shadow-2xl relative group"
                        style="border: 3px solid var(--accent-green);">
                        <img id="mainImage"
                            src="{{ $produk->gambar_utama ? asset('storage/' . $produk->gambar_utama) : '/img/no-image.png' }}"
                            alt="{{ $produk->nama_produk }}"
                            class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                            <i class="fas fa-search-plus text-gray-600"></i>
                        </div>
                    </div>

                    <!-- Thumbnail Gallery -->
                    @if($produk->gambar && $produk->gambar->count() > 0)
                        <div class="grid grid-cols-5 gap-3">
                            <div class="thumbnail-item cursor-pointer overflow-hidden rounded-xl border-3 border-[var(--accent-green)] shadow-md transition-all hover:shadow-xl hover:-translate-y-1"
                                onclick="changeImage('{{ $produk->gambar_utama ? asset('storage/' . $produk->gambar_utama) : '/img/no-image.png' }}', this)">
                                <img src="{{ $produk->gambar_utama ? asset('storage/' . $produk->gambar_utama) : '/img/no-image.png' }}"
                                    alt="Thumbnail" class="w-full aspect-square object-cover">
                            </div>
                            @foreach($produk->gambar as $gambar)
                                <div class="thumbnail-item cursor-pointer overflow-hidden rounded-xl border-3 border-gray-200 shadow-md transition-all hover:shadow-xl hover:-translate-y-1 hover:border-[var(--accent-green)]"
                                    onclick="changeImage('{{ asset('storage/' . $gambar->nama_file) }}', this)">
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
                        <div class="inline-block px-4 py-2 rounded-full text-sm font-bold mb-4"
                            style="background: linear-gradient(135deg, var(--accent-green), var(--accent-light-green)); color: white;">
                            <i class="fas fa-tag mr-2"></i>{{ $produk->kategori->nama_kategori }}
                        </div>
                    @endif

                    <h1 class="text-4xl lg:text-5xl font-display font-bold mb-6 leading-tight"
                        style="color: var(--navy-primary);">
                        {{ $produk->nama_produk }}
                    </h1>

                    <!-- Badges Only (Rating Removed) -->
                    <div class="flex flex-wrap items-center gap-4 mb-8">
                        @if($produk->terlaris == 'yes')
                            <span class="px-4 py-2 text-sm font-bold rounded-full shadow-lg"
                                style="background: linear-gradient(135deg, #FF6B6B, #FF8E53); color: white;">
                                <i class="fas fa-fire mr-1"></i> TERLARIS
                            </span>
                        @endif
                        @if($produk->rekomendasi == 'yes')
                            <span class="px-4 py-2 text-sm font-bold rounded-full shadow-lg"
                                style="background: linear-gradient(135deg, #4FACFE, #00F2FE); color: white;">
                                <i class="fas fa-star mr-1"></i> REKOMENDASI
                            </span>
                        @endif
                    </div>

                    <!-- Short Description -->
                    @if($produk->deskripsi_singkat)
                        <div class="bg-white p-6 rounded-2xl shadow-md mb-8 border-l-4"
                            style="border-color: var(--accent-green);">
                            <p class="text-gray-700 text-lg leading-relaxed">
                                {{ $produk->deskripsi_singkat }}
                            </p>
                        </div>
                    @endif

                    <!-- Product Specifications -->
                    @if($produk->berat || $produk->dimensi)
                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-8 rounded-2xl mb-8 shadow-md border"
                            style="border-color: var(--accent-green);">
                            <h3 class="font-display font-bold text-2xl mb-6 flex items-center"
                                style="color: var(--navy-primary);">
                                <i class="fas fa-clipboard-list mr-3" style="color: var(--accent-green);"></i>
                                Spesifikasi Produk
                            </h3>
                            <div class="space-y-4">
                                @if($produk->dimensi)
                                    <div class="flex items-center bg-white p-4 rounded-xl shadow-sm">
                                        <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4"
                                            style="background: var(--accent-green);">
                                            <i class="fas fa-ruler-combined text-white"></i>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-500 block">Dimensi</span>
                                            <span class="font-bold text-lg"
                                                style="color: var(--navy-primary);">{{ $produk->dimensi }}</span>
                                        </div>
                                    </div>
                                @endif
                                @if($produk->berat)
                                    <div class="flex items-center bg-white p-4 rounded-xl shadow-sm">
                                        <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4"
                                            style="background: var(--accent-green);">
                                            <i class="fas fa-weight text-white"></i>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-500 block">Berat</span>
                                            <span class="font-bold text-lg" style="color: var(--navy-primary);">{{ $produk->berat }}
                                                kg</span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="flex gap-4 mb-8">
                        <a href="https://wa.me/6281258885595?text=Halo, saya tertarik dengan produk {{ urlencode($produk->nama_produk) }}"
                            target="_blank"
                            class="flex-1 text-center py-5 rounded-2xl font-bold text-lg shadow-xl transform transition-all hover:scale-105 hover:shadow-2xl"
                            style="background: linear-gradient(135deg, #25D366, #128C7E); color: white;">
                            <i class="fab fa-whatsapp mr-2 text-2xl"></i> Pesan via WhatsApp
                        </a>
                        <button
                            class="px-8 py-5 rounded-2xl border-3 transition-all hover:scale-105 shadow-lg hover:shadow-xl"
                            style="border-color: var(--navy-primary); color: var(--navy-primary); background: white;">
                            <i class="far fa-heart text-2xl"></i>
                        </button>
                    </div>

                    <!-- Additional Info -->
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t-2" style="border-color: var(--accent-green);">
                        <div class="text-center group">
                            <div class="w-16 h-16 mx-auto mb-3 rounded-full flex items-center justify-center transition-all group-hover:scale-110 shadow-lg"
                                style="background: linear-gradient(135deg, var(--accent-green), var(--accent-light-green));">
                                <i class="fas fa-truck text-2xl text-white"></i>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Pengiriman Cepat</p>
                        </div>
                        <div class="text-center group">
                            <div class="w-16 h-16 mx-auto mb-3 rounded-full flex items-center justify-center transition-all group-hover:scale-110 shadow-lg"
                                style="background: linear-gradient(135deg, var(--accent-green), var(--accent-light-green));">
                                <i class="fas fa-shield-alt text-2xl text-white"></i>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Garansi Produk</p>
                        </div>
                        <div class="text-center group">
                            <div class="w-16 h-16 mx-auto mb-3 rounded-full flex items-center justify-center transition-all group-hover:scale-110 shadow-lg"
                                style="background: linear-gradient(135deg, var(--accent-green), var(--accent-light-green));">
                                <i class="fas fa-headset text-2xl text-white"></i>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">CS 24/7</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Description Tabs -->
            <div class="mb-20 fade-in">
                <div class="flex gap-4 border-b-2 mb-8" style="border-color: var(--accent-green);">
                    <button onclick="showTab('description')" id="tab-description"
                        class="tab-button px-8 py-4 font-bold transition border-b-3 border-[var(--accent-green)] text-lg"
                        style="color: var(--navy-primary);">
                        <i class="fas fa-file-alt mr-2"></i> Deskripsi Lengkap
                    </button>
                    <button onclick="showTab('reviews')" id="tab-reviews"
                        class="tab-button px-8 py-4 font-bold transition border-b-3 border-transparent text-gray-500 hover:text-[var(--navy-primary)] text-lg">
                        <i class="fas fa-star mr-2"></i> Ulasan
                    </button>
                </div>

                <!-- Description Tab -->
                <div id="content-description" class="tab-content">
                    <div class="prose max-w-none">
                        @if($produk->deskripsi_lengkap)
                            {!! $produk->deskripsi_lengkap !!}
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
        function changeImage(src, element) {
            // Change main image
            document.getElementById('mainImage').src = src;

            // Update thumbnail borders
            document.querySelectorAll('.thumbnail-item').forEach(thumb => {
                thumb.classList.remove('border-[var(--accent-green)]', 'border-3');
                thumb.classList.add('border-gray-200', 'border-3');
            });

            // Highlight selected thumbnail
            if (element) {
                element.classList.remove('border-gray-200');
                element.classList.add('border-[var(--accent-green)]');
            }
        }

        function showTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Remove active styling from all tabs
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('border-[var(--accent-green)]');
                button.classList.add('border-transparent', 'text-gray-500');
                button.style.color = '';
            });

            // Show selected tab content
            document.getElementById('content-' + tabName).classList.remove('hidden');

            // Add active styling to selected tab
            const activeTab = document.getElementById('tab-' + tabName);
            activeTab.classList.remove('border-transparent', 'text-gray-500');
            activeTab.classList.add('border-[var(--accent-green)]');
            activeTab.style.color = 'var(--navy-primary)';
        }
    </script>
@endsection