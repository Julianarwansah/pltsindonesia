@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient py-16 lg:py-20 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto text-center fade-in">
            <h1 class="text-4xl lg:text-5xl font-display font-bold mb-4" style="color: var(--solar-blue-dark);">
                Artikel & Tips
            </h1>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                Temukan inspirasi, tips, dan panduan seputar desain interior dan solusi penyimpanan modern
            </p>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="py-16 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            @if($artikels->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($artikels as $artikel)
                        <article class="product-card group scale-in stagger-delay-{{ $loop->index % 4 + 1 }}">
                            <div class="relative overflow-hidden aspect-[4/3]">
                                <img src="{{ $artikel->gambar_featured ? asset('storage/' . $artikel->gambar_featured) : '/img/no-image.png' }}"
                                    alt="{{ $artikel->judul }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                    <span class="text-white text-sm">
                                        <i class="far fa-calendar mr-2"></i>{{ $artikel->created_at->format('d M Y') }}
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h2 class="font-display text-xl font-bold mb-3 line-clamp-2" style="color: var(--solar-blue-dark);">
                                    {{ $artikel->judul }}
                                </h2>
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    {{ strip_tags($artikel->konten) }}
                                </p>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-sm text-gray-500">
                                        <i class="fas fa-eye mr-1"></i> {{ $artikel->views }} views
                                    </div>
                                    <div class="text-sm" style="color: var(--solar-blue);">
                                        <i class="fas fa-user mr-1"></i> {{ $artikel->penulis->nama_lengkap }}
                                    </div>
                                </div>
                                <a href="{{ route('artikel.detail', $artikel->slug) }}"
                                    class="btn-primary w-full block text-center py-3 rounded-lg font-semibold">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $artikels->links() }}
                </div>
            @else
                <div class="text-center py-16 fade-in">
                    <i class="fas fa-newspaper text-6xl mb-4" style="color: var(--solar-blue-light);"></i>
                    <p class="text-gray-500 text-lg">Belum ada artikel yang tersedia</p>
                </div>
            @endif
        </div>
    </section>
@endsection
