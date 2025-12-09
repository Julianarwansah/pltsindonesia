@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient py-16 lg:py-20 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto text-center fade-in">
            <h1 class="text-4xl lg:text-5xl font-display font-bold mb-4" style="color: var(--solar-blue-dark);">
                Katalog Produk
            </h1>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                Temukan solusi panel surya yang sempurna untuk kebutuhan energi Anda
            </p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar Filter -->
                <aside class="lg:col-span-1 fade-in-left">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-6" style="border: 1px solid var(--solar-cream);">
                        <h3 class="font-display text-xl font-bold mb-4" style="color: var(--solar-blue-dark);">Kategori</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="{{ route('produk.list') }}"
                                    class="block py-2 px-3 rounded hover:bg-[var(--solar-cream)] transition {{ !request('kategori') ? 'bg-[var(--solar-cream)]' : '' }}">
                                    Semua Produk
                                </a>
                            </li>
                            @foreach($kategoris as $kat)
                                <li>
                                    <a href="{{ route('produk.list', ['kategori' => $kat->slug]) }}"
                                        class="block py-2 px-3 rounded hover:bg-[var(--solar-cream)] transition {{ request('kategori') == $kat->slug ? 'bg-[var(--solar-cream)]' : '' }}">
                                        {{ $kat->nama_kategori }}
                                        <span class="text-sm text-gray-500">({{ $kat->produk_count }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md" style="border: 1px solid var(--solar-cream);">
                        <h3 class="font-display text-xl font-bold mb-4" style="color: var(--solar-blue-dark);">Urutkan</h3>
                        <select name="sort" onchange="window.location.href='?sort='+this.value"
                            class="w-full p-2 border rounded" style="border-color: var(--solar-cream);">
                            <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                            <option value="termurah" {{ request('sort') == 'termurah' ? 'selected' : '' }}>Harga Terendah
                            </option>
                            <option value="termahal" {{ request('sort') == 'termahal' ? 'selected' : '' }}>Harga Tertinggi
                            </option>
                            <option value="terlaris" {{ request('sort') == 'terlaris' ? 'selected' : '' }}>Terlaris</option>
                        </select>
                    </div>
                </aside>

                <!-- Products Grid -->
                <div class="lg:col-span-3">
                    @if($produks->count() > 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($produks as $produk)
                                <div class="product-card group scale-in stagger-delay-{{ $loop->index % 4 + 1 }}">
                                    <div class="relative overflow-hidden aspect-square bg-gray-50">
                                        <img src="{{ $produk->gambar_utama ? asset('storage/' . $produk->gambar_utama) : '/img/no-image.png' }}"
                                            alt="{{ $produk->nama_produk }}"
                                            class="w-full h-full object-contain p-4 group-hover:scale-110 transition-transform duration-500">
                                        @if($produk->harga_diskon && $produk->harga_diskon < $produk->harga)
                                            <div
                                                class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                                                {{ round((($produk->harga - $produk->harga_diskon) / $produk->harga) * 100) }}% OFF
                                            </div>
                                        @endif
                                    </div>
                                    <div class="p-5">
                                        <div class="text-xs font-semibold mb-2" style="color: var(--solar-blue-light);">
                                            {{ $produk->kategori->nama_kategori ?? 'Produk' }}
                                        </div>
                                        <h3 class="font-bold text-lg mb-3 line-clamp-2" style="color: var(--solar-blue-dark);">
                                            {{ $produk->nama_produk }}
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                                            {{ $produk->deskripsi_singkat }}
                                        </p>
                                        <div class="mb-4">
                                            <!-- Price removed -->
                                        </div>
                                        <a href="{{ route('produk.detail', $produk->slug) }}"
                                            class="btn-primary w-full block text-center py-3 rounded-lg font-semibold">
                                            <i class="fas fa-eye mr-2"></i> Lihat Detail
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="mt-12">
                            {{ $produks->links() }}
                        </div>
                    @else
                        <div class="text-center py-16 fade-in">
                            <i class="fas fa-solar-panel text-6xl mb-4" style="color: var(--solar-blue-light);"></i>
                            <p class="text-gray-500 text-lg">Produk tidak ditemukan</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection