@extends('layouts.app')

@section('content')
    <!-- Article Header -->
    <section class="hero-gradient py-12 lg:py-16 px-6 lg:px-12">
        <div class="max-w-4xl mx-auto fade-in">
            <div class="text-sm mb-4">
                <a href="{{ route('artikel.list') }}" class="hover:underline" style="color: var(--solar-blue);">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Artikel
                </a>
            </div>
            <h1 class="text-3xl lg:text-4xl font-display font-bold mb-6" style="color: var(--solar-blue-dark);">
                {{ $artikel->judul }}
            </h1>
            <div class="flex flex-wrap items-center gap-4 text-gray-600">
                <div class="flex items-center">
                    <i class="fas fa-user mr-2" style="color: var(--solar-blue);"></i>
                    <span>{{ $artikel->penulis->nama_lengkap }}</span>
                </div>
                <div class="flex items-center">
                    <i class="far fa-calendar mr-2" style="color: var(--solar-blue);"></i>
                    <span>{{ $artikel->created_at->format('d M Y') }}</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-eye mr-2" style="color: var(--solar-blue);"></i>
                    <span>{{ $artikel->views }} views</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="py-12 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2 fade-in-left">
                    <!-- Featured Image -->
                    @if($artikel->gambar_featured)
                        <div class="mb-8 rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('storage/' . $artikel->gambar_featured) }}" alt="{{ $artikel->judul }}"
                                class="w-full h-auto">
                        </div>
                    @endif

                    <!-- Article Content -->
                    <div class="prose prose-lg max-w-none">
                        <div class="text-gray-700 leading-relaxed article-content">
                            {!! $artikel->konten !!}
                        </div>
                    </div>

                    <!-- Tags -->
                    @if($artikel->tags)
                        <div class="mt-8 pt-8 border-t" style="border-color: var(--solar-cream);">
                            <h3 class="font-semibold mb-4" style="color: var(--solar-blue-dark);">Tags:</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($artikel->tags as $tag)
                                    <a href="{{ route('artikel.tag', $tag) }}"
                                        class="category-badge px-4 py-2 rounded-full text-sm">
                                        #{{ $tag }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Share Buttons -->
                    <div class="mt-8 pt-8 border-t" style="border-color: var(--solar-cream);">
                        <h3 class="font-semibold mb-4" style="color: var(--solar-blue-dark);">Bagikan Artikel:</h3>
                        <div class="flex gap-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                target="_blank"
                                class="w-10 h-10 rounded-full flex items-center justify-center text-white transition-transform hover:scale-110"
                                style="background-color: #1877F2;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($artikel->judul) }}"
                                target="_blank"
                                class="w-10 h-10 rounded-full flex items-center justify-center text-white transition-transform hover:scale-110"
                                style="background-color: #1DA1F2;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($artikel->judul . ' - ' . request()->url()) }}"
                                target="_blank"
                                class="w-10 h-10 rounded-full flex items-center justify-center text-white transition-transform hover:scale-110"
                                style="background-color: #25D366;">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($artikel->judul) }}"
                                target="_blank"
                                class="w-10 h-10 rounded-full flex items-center justify-center text-white transition-transform hover:scale-110"
                                style="background-color: #0A66C2;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="fade-in-right">
                    <!-- Popular Articles -->
                    @if($popularArticles->count() > 0)
                        <div class="bg-white p-6 rounded-xl shadow-md mb-8" style="border: 1px solid var(--solar-cream);">
                            <h3 class="font-display text-xl font-bold mb-6" style="color: var(--solar-blue-dark);">
                                Artikel Populer
                            </h3>
                            <div class="space-y-4">
                                @foreach($popularArticles as $popular)
                                    <a href="{{ route('artikel.detail', $popular->slug) }}" class="flex gap-4 group">
                                        <div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                            <img src="{{ $popular->gambar_featured ? asset('storage/' . $popular->gambar_featured) : '/img/no-image.png' }}"
                                                alt="{{ $popular->judul }}"
                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold line-clamp-2 mb-1 group-hover:text-[var(--solar-blue)] transition"
                                                style="color: var(--solar-blue-dark);">
                                                {{ $popular->judul }}
                                            </h4>
                                            <p class="text-xs text-gray-500">
                                                <i class="fas fa-eye mr-1"></i> {{ $popular->views }} views
                                            </p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Related Articles -->
                    @if($relatedArticles->count() > 0)
                        <div class="bg-white p-6 rounded-xl shadow-md" style="border: 1px solid var(--solar-cream);">
                            <h3 class="font-display text-xl font-bold mb-6" style="color: var(--solar-blue-dark);">
                                Artikel Terkait
                            </h3>
                            <div class="space-y-4">
                                @foreach($relatedArticles as $related)
                                    <a href="{{ route('artikel.detail', $related->slug) }}" class="block group">
                                        <div class="aspect-video rounded-lg overflow-hidden mb-3">
                                            <img src="{{ $related->gambar_featured ? asset('storage/' . $related->gambar_featured) : '/img/no-image.png' }}"
                                                alt="{{ $related->judul }}"
                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                                        </div>
                                        <h4 class="font-semibold line-clamp-2 group-hover:text-[var(--solar-blue)] transition"
                                            style="color: var(--solar-blue-dark);">
                                            {{ $related->judul }}
                                        </h4>
                                        <p class="text-sm text-gray-500 mt-1">
                                            {{ $related->created_at->format('d M Y') }}
                                        </p>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </aside>
            </div>
        </div>
    </section>

    <style>
        .article-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--solar-blue-dark);
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .article-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--solar-blue-dark);
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .article-content p {
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .article-content ul,
        .article-content ol {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }

        .article-content li {
            margin-bottom: 0.5rem;
        }

        .article-content img {
            border-radius: 0.75rem;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .article-content blockquote {
            border-left: 4px solid var(--solar-blue);
            padding-left: 1.5rem;
            margin: 1.5rem 0;
            font-style: italic;
            color: var(--solar-blue-dark);
        }

        .article-content a {
            color: var(--solar-blue);
            text-decoration: underline;
        }

        .article-content a:hover {
            color: var(--solar-blue-dark);
        }
    </style>
@endsection
