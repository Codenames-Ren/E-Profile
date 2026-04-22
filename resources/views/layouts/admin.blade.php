<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - SDN Karet 1</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside id="sidebar" class="w-64 bg-gradient-to-b from-blue-700 to-blue-800 text-white flex flex-col fixed h-full z-30 shadow-xl transition-all duration-300">

        <!-- BRAND -->
        <div class="p-6 border-b border-blue-600/50">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-md">
                    <span class="text-blue-700 font-black text-xs">SDN</span>
                </div>
                <div>
                    <p class="font-extrabold text-base leading-tight">SDN Karet 1</p>
                    <p class="text-blue-200 text-xs">Admin Panel</p>
                </div>
            </div>
        </div>

        <!-- ADMIN INFO -->
        <div class="px-6 py-4 border-b border-blue-600/30">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-blue-500 rounded-full flex items-center justify-center text-sm font-bold">A</div>
                <div>
                    <p class="text-sm font-semibold">Administrator</p>
                    <p class="text-blue-300 text-xs">admin@sekolah.com</p>
                </div>
            </div>
        </div>

        <!-- NAV -->
        <nav class="flex-1 p-4 space-y-1">
            <p class="text-blue-300 text-xs font-semibold uppercase tracking-wider px-3 mb-2">Menu Utama</p>

            <a href="/admin" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium text-sm transition-all
                {{ request()->is('admin') ? 'bg-white text-blue-700 shadow-md' : 'text-blue-100 hover:bg-blue-600/50' }}">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Dashboard
            </a>

            <a href="/admin/siswa" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium text-sm transition-all
                {{ request()->is('admin/siswa*') ? 'bg-white text-blue-700 shadow-md' : 'text-blue-100 hover:bg-blue-600/50' }}">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
                Data Siswa
            </a>

            <a href="/admin/verifikasi" class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium text-sm transition-all
                {{ request()->is('admin/verifikasi*') ? 'bg-white text-blue-700 shadow-md' : 'text-blue-100 hover:bg-blue-600/50' }}">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Verifikasi
                <span class="ml-auto bg-yellow-400 text-yellow-900 text-xs font-bold px-2 py-0.5 rounded-full">45</span>
            </a>

            <div class="pt-4 mt-4 border-t border-blue-600/30">
                <p class="text-blue-300 text-xs font-semibold uppercase tracking-wider px-3 mb-2">Lainnya</p>
                <a href="/" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-blue-200 hover:bg-blue-600/50 text-sm transition-all">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Website
                </a>
                <a href="/logout" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-red-300 hover:bg-red-500/20 text-sm transition-all">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Logout
                </a>
            </div>
        </nav>

        <!-- VERSION -->
        <div class="p-4 text-center text-blue-400 text-xs border-t border-blue-600/30">
            v1.0.0 © 2026 SDN Karet 1
        </div>
    </aside>

    <!-- MAIN WRAPPER -->
    <div class="flex-1 ml-64 flex flex-col min-h-screen">

        <!-- TOPBAR -->
        <header class="bg-white shadow-sm sticky top-0 z-20 px-8 py-4 flex justify-between items-center">
            <div>
                <h1 class="text-lg font-bold text-gray-800">@yield('title', 'Dashboard')</h1>
                <p class="text-xs text-gray-400">SDN Karet 1 — Sistem Admin PPDB</p>
            </div>
            <div class="flex items-center gap-4">
                <!-- Notification -->
                <button class="relative w-9 h-9 bg-gray-100 rounded-xl flex items-center justify-center hover:bg-gray-200 transition">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <span class="absolute -top-0.5 -right-0.5 w-4 h-4 bg-red-500 text-white text-xs rounded-full flex items-center justify-center font-bold">3</span>
                </button>
                <!-- Avatar -->
                <div class="flex items-center gap-2">
                    <div class="w-9 h-9 bg-blue-600 rounded-xl flex items-center justify-center text-white font-bold text-sm">A</div>
                    <span class="text-sm font-semibold text-gray-700 hidden md:block">Admin</span>
                </div>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>

</div>

</body>
</html>