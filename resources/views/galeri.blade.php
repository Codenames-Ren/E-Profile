@extends('layouts.app')

@section('title', 'Galeri')

@section('content')

<!-- HEADER -->
<section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-500 to-blue-400 text-white py-16 text-center">
    <div class="relative z-10">
        <h1 class="text-4xl font-extrabold mb-2">Galeri Kegiatan</h1>
        <p class="text-blue-100">Dokumentasi kegiatan dan momen berharga SDN Karet 1</p>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0,30 C360,0 1080,60 1440,30 L1440,60 L0,60 Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- FILTER TABS -->
<section class="py-8 max-w-5xl mx-auto px-6">
    <div class="flex flex-wrap justify-center gap-3 mb-10">
        @foreach(['Semua', 'Kegiatan', 'Prestasi', 'Fasilitas', 'Upacara'] as $tab)
        <button class="px-5 py-2 rounded-full text-sm font-semibold border-2 {{ $tab === 'Semua' ? 'bg-blue-600 text-white border-blue-600' : 'border-blue-200 text-blue-600 hover:bg-blue-50' }} transition">
            {{ $tab }}
        </button>
        @endforeach
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @php
            $labels = ['Lomba 17 Agustus', 'Upacara Bendera', 'Kunjungan Edukasi', 'Pentas Seni', 'Wisuda Kelas 6', 'Olahraga Bersama'];
        @endphp
        @foreach ($labels as $i => $label)
        <div class="group relative rounded-2xl overflow-hidden bg-gradient-to-br from-blue-{{ ($i % 3 + 1) * 100 + 100 }} to-blue-{{ ($i % 3 + 2) * 100 + 100 }} h-48 shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer">
            <div class="w-full h-full flex flex-col items-center justify-center">
                <svg class="w-12 h-12 text-blue-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <!-- Overlay on hover -->
            <div class="absolute inset-0 bg-blue-800/70 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                <span class="text-white font-bold text-sm text-center px-4">{{ $label }}</span>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Load more -->
    <div class="text-center mt-10">
        <button class="px-8 py-3 border-2 border-blue-600 text-blue-600 rounded-xl font-semibold hover:bg-blue-600 hover:text-white transition-all">
            Lihat Lebih Banyak
        </button>
    </div>
</section>

@endsection