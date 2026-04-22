@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<!-- HERO -->
<section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-500 to-blue-400 text-white text-center py-24">
    <!-- Wave decoration top -->
    <div class="absolute top-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full opacity-20">
            <path d="M0,30 C360,60 1080,0 1440,30 L1440,0 L0,0 Z" fill="white"/>
        </svg>
    </div>

    <div class="relative z-10 max-w-3xl mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">Selamat Datang di<br>SDN Karet 1</h1>
        <p class="mb-8 text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            SDN Karet 1 adalah sekolah dasar yang berkomitmen mencetak generasi unggul,
            berakhlak mulia, dan siap menghadapi tantangan masa depan melalui pendidikan berkualitas.
        </p>
        <a href="/ppdb" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200">
            Daftar Sekarang
        </a>
    </div>

    <!-- Wave decoration bottom -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0,30 C360,0 1080,60 1440,30 L1440,60 L0,60 Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- ABOUT / PROFIL -->
<section class="py-16 px-6 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-2xl font-bold text-blue-700 mb-2">Profil Sekolah</h2>
            <div class="w-12 h-1 bg-blue-500 mb-5 rounded"></div>
            <p class="mb-3 text-gray-600 leading-relaxed">
                SDN Karet 1 berdiri sejak tahun 1985 dan telah meluluskan ratusan siswa
                yang berprestasi di berbagai bidang akademik maupun non-akademik.
            </p>
            <p class="mb-5 text-gray-600 leading-relaxed">
                Dengan tenaga pengajar profesional dan fasilitas yang memadai,
                kami terus berupaya memberikan lingkungan belajar yang nyaman dan inspiratif.
            </p>
            <a href="/profil" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:gap-3 transition-all">
                Lihat Profil Lengkap <span>→</span>
            </a>
        </div>
        <div class="rounded-2xl overflow-hidden shadow-xl">
            <img src="{{ asset('images/sekolah.jpg') }}" alt="SDN Karet 1" class="w-full h-64 object-cover"
                onerror="this.parentElement.innerHTML='<div class=\'bg-gradient-to-br from-blue-100 to-blue-200 h-64 flex items-center justify-center\'><span class=\'text-blue-400 text-lg font-medium\'>Foto Sekolah</span></div>'">
        </div>
    </div>
</section>

<!-- FASILITAS -->
<section class="py-16 px-6 bg-blue-600">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-white tracking-wide uppercase">Fasilitas</h2>
            <div class="w-16 h-1 bg-white mx-auto mt-3 rounded opacity-60"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @php
                $fasilitas = [
                    ['icon' => '🏫', 'svg' => 'M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z', 'nama' => 'Gedung Sekolah', 'desc' => 'Gedung sekolah modern dengan ruang kelas yang nyaman, ventilasi baik, dan dilengkapi fasilitas belajar terkini.'],
                    ['icon' => '📚', 'svg' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'nama' => 'Perpustakaan', 'desc' => 'Koleksi ribuan buku pelajaran dan pengetahuan umum untuk mendukung minat baca siswa.'],
                    ['icon' => '🔬', 'svg' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z', 'nama' => 'Laboratorium', 'desc' => 'Laboratorium sains yang lengkap untuk mendukung pembelajaran praktis dan eksperimental siswa.'],
                    ['icon' => '🍽️', 'svg' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z', 'nama' => 'Kantin', 'desc' => 'Kantin sekolah yang bersih dan sehat menyediakan makanan bergizi untuk para siswa.'],
                    ['icon' => '💻', 'svg' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'nama' => 'Lab. Komputer', 'desc' => 'Laboratorium komputer modern dengan koneksi internet untuk mendukung literasi digital siswa.'],
                    ['icon' => '⚽', 'svg' => 'M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z', 'nama' => 'Olahraga', 'desc' => 'Lapangan olahraga yang luas untuk mendukung aktivitas fisik dan pengembangan bakat olahraga siswa.'],
                ];
            @endphp

            @foreach ($fasilitas as $item)
            <div class="bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-200">
                <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['svg'] }}"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-800 text-lg mb-2">{{ $item['nama'] }}</h3>
                <p class="text-sm text-gray-500 leading-relaxed">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- KEUNGGULAN -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto text-center mb-10 px-6">
        <h2 class="text-2xl font-bold text-gray-800">Keunggulan Kami</h2>
        <p class="text-gray-500 mt-2">Alasan mengapa memilih SDN Karet 1</p>
    </div>
    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto px-6">
        <div class="p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
            <h3 class="font-bold text-gray-800 mb-2">Fasilitas Lengkap</h3>
            <p class="text-sm text-gray-600">Ruang kelas nyaman, perpustakaan, laboratorium, dan area bermain yang aman.</p>
        </div>
        <div class="p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
            </div>
            <h3 class="font-bold text-gray-800 mb-2">Guru Profesional</h3>
            <p class="text-sm text-gray-600">Tenaga pengajar berpengalaman, bersertifikat, dan berdedikasi tinggi.</p>
        </div>
        <div class="p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
            </div>
            <h3 class="font-bold text-gray-800 mb-2">Lingkungan Aman</h3>
            <p class="text-sm text-gray-600">Lingkungan sekolah yang nyaman, aman, dan mendukung perkembangan anak.</p>
        </div>
    </div>
</section>

<!-- BERITA -->
<section class="py-16 max-w-6xl mx-auto px-6">
    <h2 class="text-2xl font-bold mb-8 text-center text-gray-800">Berita Terbaru</h2>
    <div class="grid md:grid-cols-3 gap-6">
        @php
            $berita = [
                ['judul' => 'Kegiatan Lomba 17 Agustus', 'desc' => 'Siswa mengikuti berbagai lomba dengan antusias dan semangat tinggi.', 'tag' => 'Kegiatan'],
                ['judul' => 'Kunjungan Edukasi', 'desc' => 'Siswa belajar langsung di luar kelas untuk pengalaman nyata.', 'tag' => 'Akademik'],
                ['judul' => 'Prestasi Siswa', 'desc' => 'SDN Karet 1 kembali meraih juara tingkat kota tahun ini.', 'tag' => 'Prestasi'],
            ];
        @endphp
        @foreach ($berita as $item)
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden group">
            <div class="bg-gradient-to-br from-blue-100 to-blue-200 h-36 flex items-center justify-center">
                <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <div class="p-5">
                <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">{{ $item['tag'] }}</span>
                <h3 class="font-bold text-gray-800 mt-3 mb-2 group-hover:text-blue-600 transition">{{ $item['judul'] }}</h3>
                <p class="text-sm text-gray-500">{{ $item['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection