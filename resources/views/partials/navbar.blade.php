<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                <span class="text-white font-black text-sm">SDN</span>
            </div>
            <span class="font-bold text-blue-700 text-lg tracking-tight">SDN Karet 1</span>
        </div>
        <div class="hidden md:flex items-center space-x-1">
            <a href="/" class="px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg font-medium transition">Beranda</a>
            <a href="/profil" class="px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg font-medium transition">Profil</a>
            <a href="/galeri" class="px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg font-medium transition">Galeri</a>
            <a href="/kontak" class="px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg font-medium transition">Kontak</a>
            <a href="/ppdb" class="ml-2 px-5 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition shadow-sm">PPDB</a>
        </div>
        <!-- Mobile hamburger -->
        <button class="md:hidden text-gray-700" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    <div id="mobileMenu" class="hidden md:hidden px-6 pb-4 space-y-1">
        <a href="/" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded-lg">Beranda</a>
        <a href="/profil" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded-lg">Profil</a>
        <a href="/galeri" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded-lg">Galeri</a>
        <a href="/kontak" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded-lg">Kontak</a>
        <a href="/ppdb" class="block px-4 py-2 bg-blue-600 text-white rounded-lg text-center font-semibold">PPDB</a>
    </div>
</nav>