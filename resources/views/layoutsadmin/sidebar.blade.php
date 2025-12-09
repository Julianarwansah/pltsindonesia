<!-- Sidebar -->
<aside id="sidebar"
    class="fixed inset-y-0 left-0 z-50 w-64 bg-white text-[var(--solar-blue-dark)] border-r border-sky-100 transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0">
    <!-- Logo -->
    <div class="flex items-center justify-between h-16 px-6 bg-[var(--solar-bg)] border-b border-sky-100">
        <div class="flex items-center">
            <span class="text-xl font-bold text-[var(--solar-blue-dark)]">Admin Panel</span>
        </div>
        <button id="closeSidebar" class="lg:hidden text-[var(--solar-blue-dark)] hover:text-[var(--solar-blue)]">
            <i class="fas fa-times text-xl"></i>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="mt-6 px-3">
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center px-4 py-3 mb-2 {{ request()->routeIs('admin.dashboard') ? 'bg-[var(--solar-blue)] text-white shadow-md' : 'text-[var(--solar-blue-dark)] hover:bg-sky-50' }} rounded-lg font-medium transition">
            <i class="fas fa-home w-5"></i>
            <span class="ml-3">Dashboard</span>
        </a>

        <div class="px-4 py-2 mt-2 text-xs font-semibold text-[var(--solar-blue-dark)] uppercase tracking-wider">
            Konten
        </div>

        <a href="{{ route('admin.artikels.index') }}"
            class="flex items-center px-4 py-3 mb-2 {{ request()->routeIs('admin.artikels.*') ? 'bg-[var(--solar-blue)] text-white shadow-md' : 'text-[var(--solar-blue-dark)] hover:bg-sky-50' }} rounded-lg font-medium transition">
            <i class="fas fa-newspaper w-5"></i>
            <span class="ml-3">Artikel</span>
        </a>

        <a href="{{ route('admin.testimoni.index') }}"
            class="flex items-center px-4 py-3 mb-2 {{ request()->routeIs('admin.testimoni.*') ? 'bg-[var(--solar-blue)] text-white shadow-md' : 'text-[var(--solar-blue-dark)] hover:bg-sky-50' }} rounded-lg font-medium transition">
            <i class="fas fa-comment-alt w-5"></i>
            <span class="ml-3">Testimoni</span>
        </a>

        <a href="{{ route('admin.kategori-produks.index') }}"
            class="flex items-center px-4 py-3 mb-2 {{ request()->routeIs('admin.kategori-produks.*') ? 'bg-[var(--solar-blue)] text-white shadow-md' : 'text-[var(--solar-blue-dark)] hover:bg-sky-50' }} rounded-lg font-medium transition">
            <i class="fas fa-tags w-5"></i>
            <span class="ml-3">Kategori Produk</span>
        </a>

        <a href="{{ route('admin.produk.index') }}"
            class="flex items-center px-4 py-3 mb-2 {{ request()->routeIs('admin.produk.*') ? 'bg-[var(--solar-blue)] text-white shadow-md' : 'text-[var(--solar-blue-dark)] hover:bg-sky-50' }} rounded-lg font-medium transition">
            <i class="fas fa-box w-5"></i>
            <span class="ml-3">Produk</span>
        </a>

        <div class="px-4 py-2 mt-2 text-xs font-semibold text-[var(--solar-blue-dark)] uppercase tracking-wider">
            Pengguna
        </div>

        @if(auth()->user()->role === 'super_admin')
            <a href="{{ route('admin.users.index') }}"
                class="flex items-center px-4 py-3 mb-2 {{ request()->routeIs('admin.users.*') ? 'bg-[var(--solar-blue)] text-white shadow-md' : 'text-[var(--solar-blue-dark)] hover:bg-sky-50' }} rounded-lg font-medium transition">
                <i class="fas fa-users w-5"></i>
                <span class="ml-3">Manajemen User</span>
            </a>
        @endif

        <a href="{{ route('admin.activity-logs.index') }}"
            class="flex items-center px-4 py-3 mb-2 {{ request()->routeIs('admin.activity-logs.*') ? 'bg-[var(--solar-blue)] text-white shadow-md' : 'text-[var(--solar-blue-dark)] hover:bg-sky-50' }} rounded-lg font-medium transition">
            <i class="fas fa-history w-5"></i>
            <span class="ml-3">Activity Logs</span>
        </a>
    </nav>

    <!-- User Info -->
    <div class="absolute bottom-0 w-64 p-4 bg-[var(--solar-bg)] border-t border-sky-100">
        <div class="flex items-center">
            <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name ?? 'Admin' }}&background=0284C7&color=fff"
                alt="{{ auth()->user()->name ?? 'Admin' }}" class="w-10 h-10 rounded-full">
            <div class="ml-3">
                <p class="text-sm font-medium text-[var(--solar-blue-dark)]">{{ auth()->user()->name ?? 'Admin' }}</p>
                <p class="text-xs text-[var(--solar-blue)]">{{ auth()->user()->email ?? '' }}</p>
            </div>
        </div>
    </div>
</aside>