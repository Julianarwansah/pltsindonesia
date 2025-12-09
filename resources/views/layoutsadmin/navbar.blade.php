<!-- Header -->
<header class="bg-white shadow-sm z-10 border-b border-sky-100">
    <div class="flex items-center justify-between px-4 py-4 lg:px-6">
        <div class="flex items-center">
            <button id="toggleSidebar" class="text-[var(--solar-blue-dark)] hover:text-[var(--solar-blue)] mr-4">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h1 class="text-xl lg:text-2xl font-bold text-[var(--solar-blue-dark)]">@yield('page-title', 'Dashboard')
            </h1>
        </div>

        <div class="flex items-center space-x-4">
            <!-- Profile Dropdown -->
            <div class="relative">
                <button id="profileButton"
                    class="flex items-center text-[var(--solar-blue-dark)] hover:text-[var(--solar-blue)] focus:outline-none">
                    <i class="fas fa-user-circle text-2xl"></i>
                </button>
                <!-- Dropdown Menu -->
                <div id="profileDropdown"
                    class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-sky-100 py-1 z-50">
                    <div class="px-4 py-2 border-b border-sky-100">
                        <p class="text-sm font-medium text-[var(--solar-blue-dark)]">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                    </div>
                    <div class="border-t border-sky-100 mt-1"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>