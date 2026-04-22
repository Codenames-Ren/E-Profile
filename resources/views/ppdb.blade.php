@extends('layouts.app')

@section('title', 'PPDB')

@section('content')

<!-- HEADER -->
<section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-500 to-blue-400 text-white py-20 text-center">
    <div class="relative z-10 max-w-3xl mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Pendaftaran Siswa Baru</h1>
        <p class="mb-8 text-blue-100 text-lg leading-relaxed max-w-2xl mx-auto">
            Proses pendaftaran dilakukan secara online untuk memudahkan orang tua
            dalam mendaftarkan putra/putrinya dengan cepat dan efisien.
        </p>
        <a href="/form" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all">
            Daftar Sekarang
        </a>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0,30 C360,0 1080,60 1440,30 L1440,60 L0,60 Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- INFO TAMBAHAN -->
<section class="py-14 max-w-4xl mx-auto px-6 text-center">
    <h2 class="text-2xl font-bold text-gray-800 mb-3">Kenapa Memilih SDN Karet 1?</h2>
    <div class="w-12 h-1 bg-blue-500 mx-auto mb-5 rounded"></div>
    <p class="text-gray-600 leading-relaxed max-w-2xl mx-auto">
        Kami memberikan pendidikan yang berfokus pada pembentukan karakter,
        pengembangan akademik, dan keterampilan sosial sehingga siswa siap
        menghadapi jenjang pendidikan selanjutnya.
    </p>
</section>

<!-- ALUR PENDAFTARAN -->
<section class="bg-blue-600 py-16 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-white">Alur Pendaftaran</h2>
            <div class="w-16 h-1 bg-white/40 mx-auto mt-3 rounded"></div>
        </div>
        <div class="grid md:grid-cols-4 gap-6 text-center">
            @foreach (['Isi Form','Upload Dokumen','Verifikasi','Pengumuman'] as $index => $step)
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:-translate-y-1 transition-all duration-200">
                <div class="w-14 h-14 mx-auto flex items-center justify-center bg-blue-600 text-white rounded-full font-extrabold text-xl mb-4 shadow-md">
                    {{ $index + 1 }}
                </div>
                <p class="font-bold text-gray-800 text-lg">{{ $step }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SYARAT -->
<section class="py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-gray-800">Syarat Pendaftaran</h2>
            <div class="w-12 h-1 bg-blue-500 mx-auto mt-3 rounded"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-4">
            @foreach(['Kartu Keluarga (KK)', 'Akta Kelahiran', 'Ijazah TK (opsional)', 'Pas Foto 3x4 (2 lembar)'] as $syarat)
            <div class="bg-white border border-blue-100 p-5 rounded-xl shadow-sm flex items-center gap-4 hover:shadow-md transition">
                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <span class="font-medium text-gray-700">{{ $syarat }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- BIAYA -->
<section class="pb-16 px-6">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-gray-800">Biaya Pendidikan</h2>
            <div class="w-12 h-1 bg-blue-500 mx-auto mt-3 rounded"></div>
        </div>
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <table class="w-full">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="p-4 text-left font-semibold">Jenis Biaya</th>
                        <th class="p-4 text-left font-semibold">Nominal</th>
                        <th class="p-4 text-left font-semibold">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-blue-50 transition">
                        <td class="p-4 font-medium text-gray-700">Pendaftaran</td>
                        <td class="p-4 text-blue-600 font-bold">Rp 100.000</td>
                        <td class="p-4 text-sm text-gray-500">Dibayar saat mendaftar</td>
                    </tr>
                    <tr class="hover:bg-blue-50 transition">
                        <td class="p-4 font-medium text-gray-700">Seragam</td>
                        <td class="p-4 text-blue-600 font-bold">Rp 500.000</td>
                        <td class="p-4 text-sm text-gray-500">Dibayar setelah diterima</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-8 text-center">
            <a href="/form" class="inline-block bg-blue-600 text-white px-10 py-3 rounded-xl font-bold shadow-md hover:bg-blue-700 hover:shadow-lg transition-all">
                Mulai Pendaftaran →
            </a>
        </div>
    </div>
</section>

@endsection