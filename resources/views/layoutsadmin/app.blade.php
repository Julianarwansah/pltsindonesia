<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    </style>
    @stack('styles')
</head>

<body class="bg-[var(--solar-bg)]">
    <div class="flex h-screen overflow-hidden">
        @include('layoutsadmin.sidebar')

        <!-- Overlay untuk mobile -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            @include('layoutsadmin.navbar')

            <!-- Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-[var(--solar-bg)] p-4 lg:p-6">
                @yield('content')
            </main>
        </div>
    </div>

    @include('layoutsadmin.footer')
    @stack('scripts')
</body>

</html>