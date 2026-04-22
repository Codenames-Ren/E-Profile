@extends('layouts.app')

@section('title', 'Profil - SDN Karet 1')

@section('content')

<!-- HEADER with wave -->
<section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-500 to-blue-400 text-white py-16 text-center">
    <div class="relative z-10">
        <h1 class="text-4xl font-extrabold mb-2">Profil Sekolah</h1>
        <p class="text-blue-100 text-lg">Mengenal lebih dekat SDN Karet 1</p>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0,30 C360,0 1080,60 1440,30 L1440,60 L0,60 Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- SAMBUTAN / PROFIL SEKOLAH -->
<section class="py-16 px-6 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-2xl font-bold text-blue-700 mb-2">Profil Sekolah</h2>
            <div class="w-12 h-1 bg-blue-500 mb-5 rounded"></div>
            <p class="text-gray-600 leading-relaxed mb-3">
                SDN Karet 1 adalah sekolah dasar negeri yang berlokasi di Jl. Karet No.1, Jakarta.
                Berdiri sejak tahun 1985, sekolah ini telah menghasilkan ribuan lulusan yang berprestasi
                di berbagai bidang akademik maupun non-akademik.
            </p>
            <p class="text-gray-600 leading-relaxed mb-3">
                Dengan tenaga pengajar yang kompeten dan berdedikasi, serta fasilitas pendidikan
                yang terus ditingkatkan, SDN Karet 1 berkomitmen memberikan layanan pendidikan
                terbaik bagi seluruh siswa.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Kami percaya bahwa setiap anak memiliki potensi luar biasa yang perlu diasah
                melalui pendidikan berkualitas dan lingkungan yang kondusif.
            </p>
        </div>
        <div class="rounded-2xl overflow-hidden shadow-xl">
            <img src="{{ asset('images/sekolah.jpg') }}" alt="SDN Karet 1"
                class="w-full h-72 object-cover"
                onerror="this.parentElement.innerHTML='<div class=\'bg-gradient-to-br from-blue-100 to-blue-200 h-72 flex items-center justify-center\'><span class=\'text-blue-400 text-lg font-medium\'>Foto Sekolah</span></div>'">
        </div>
    </div>
</section>

<!-- SAMBUTAN KEPALA SEKOLAH -->
<section class="bg-gray-50 py-16 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        <div class="rounded-2xl overflow-hidden shadow-lg bg-gradient-to-br from-blue-100 to-blue-200 h-64 flex items-center justify-center">
            <svg class="w-24 h-24 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
        </div>
        <div>
            <h2 class="text-2xl font-bold text-blue-700 mb-2">Sambutan Kepala Sekolah</h2>
            <div class="w-12 h-1 bg-blue-500 mb-5 rounded"></div>
            <p class="text-gray-600 leading-relaxed mb-4">
                Selamat datang di SDN Karet 1. Kami berkomitmen memberikan pendidikan terbaik
                untuk membentuk generasi yang cerdas, berkarakter, dan siap menghadapi tantangan
                global dengan penuh keyakinan.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Bersama seluruh tenaga pendidik dan orang tua, kami bahu membahu memastikan
                setiap anak mendapatkan perhatian dan bimbingan yang mereka butuhkan.
            </p>
            <div class="mt-6">
                <p class="font-bold text-gray-800">Drs. Nama Kepala Sekolah, M.Pd.</p>
                <p class="text-sm text-gray-500">Kepala Sekolah SDN Karet 1</p>
            </div>
        </div>
    </div>
</section>

<!-- VISI MISI -->
<section class="py-16 px-6 max-w-6xl mx-auto">
    <div class="text-center mb-10">
        <h2 class="text-2xl font-bold text-gray-800">Visi & Misi</h2>
        <div class="w-12 h-1 bg-blue-500 mx-auto mt-3 rounded"></div>
    </div>
    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-blue-600 text-white p-8 rounded-2xl shadow-lg">
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-3">Visi</h3>
            <p class="text-blue-100 leading-relaxed">
                Menjadi sekolah unggulan yang menghasilkan siswa berprestasi, berakhlak mulia,
                dan mampu bersaing di era global dengan landasan iman dan takwa.
            </p>
        </div>
        <div class="bg-white border-2 border-blue-100 p-8 rounded-2xl shadow-lg">
            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-blue-700">Misi</h3>
            <ul class="space-y-3">
                @foreach(['Menyelenggarakan pendidikan berkualitas dan berkarakter', 'Membentuk kepribadian siswa yang berakhlak mulia', 'Menciptakan lingkungan belajar yang nyaman dan inspiratif', 'Meningkatkan kompetensi tenaga pendidik secara berkelanjutan'] as $misi)
                <li class="flex items-start gap-3 text-gray-600">
                    <span class="w-5 h-5 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs flex-shrink-0 mt-0.5">✓</span>
                    {{ $misi }}
                </li>
                @endforeach
            </ul>
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
                    ['svg' => 'M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z', 'nama' => 'Gedung Sekolah', 'desc' => 'Gedung modern dengan ruang kelas yang nyaman dan fasilitas belajar terkini.'],
                    ['svg' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'nama' => 'Perpustakaan', 'desc' => 'Koleksi ribuan buku untuk mendukung minat baca dan literasi siswa.'],
                    ['svg' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z', 'nama' => 'Laboratorium', 'desc' => 'Lab sains lengkap untuk mendukung pembelajaran praktis dan eksperimen.'],
                    ['svg' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z', 'nama' => 'Kantin', 'desc' => 'Kantin bersih dan sehat menyediakan makanan bergizi untuk siswa.'],
                    ['svg' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'nama' => 'Lab. Komputer', 'desc' => 'Komputer modern dengan internet untuk mendukung literasi digital siswa.'],
                    ['svg' => 'M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z', 'nama' => 'Olahraga', 'desc' => 'Lapangan luas untuk aktivitas fisik dan pengembangan bakat olahraga siswa.'],
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

<!-- STRUKTUR ORGANISASI -->
<section class="py-16 px-6 max-w-6xl mx-auto">
    <div class="text-center mb-10">
        <h2 class="text-2xl font-bold text-gray-800">Struktur Organisasi</h2>
        <div class="w-12 h-1 bg-blue-500 mx-auto mt-3 rounded"></div>
    </div>
    <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
        <!-- Simple org chart -->
        <div class="flex flex-col items-center gap-6">
            <div class="bg-blue-600 text-white px-8 py-3 rounded-xl font-bold shadow-md">Kepala Sekolah</div>
            <div class="w-px h-6 bg-blue-300"></div>
            <div class="grid md:grid-cols-3 gap-6 w-full">
                @foreach(['Wakil Kepala Sekolah', 'Tata Usaha', 'Komite Sekolah'] as $pos)
                <div class="bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-xl font-semibold text-sm">{{ $pos }}</div>
                @endforeach
            </div>
            <div class="grid md:grid-cols-4 gap-4 w-full">
                @foreach(['Guru Kelas 1', 'Guru Kelas 2', 'Guru Kelas 3', 'Guru Kelas 4-6'] as $guru)
                <div class="bg-gray-50 border border-gray-200 text-gray-700 px-3 py-2 rounded-lg text-sm">{{ $guru }}</div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection