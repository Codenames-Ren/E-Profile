@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<!-- WELCOME BANNER -->
<div class="bg-gradient-to-r from-blue-600 to-blue-500 rounded-2xl p-6 mb-8 text-white flex justify-between items-center shadow-lg">
    <div>
        <h2 class="text-xl font-extrabold mb-1">Selamat Datang, Admin! 👋</h2>
        <p class="text-blue-100 text-sm">Berikut ringkasan data pendaftaran siswa baru hari ini.</p>
    </div>
    <div class="hidden md:block">
        <p class="text-blue-200 text-sm text-right">{{ now()->translatedFormat('l, d F Y') }}</p>
        <p class="text-white font-bold text-right">Tahun Ajaran 2026/2027</p>
    </div>
</div>

<!-- STATS CARDS -->
<div class="grid md:grid-cols-4 gap-5 mb-8">
    @php
        $stats = [
            ['label' => 'Total Pendaftar', 'value' => '120', 'color' => 'blue', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
            ['label' => 'Menunggu Verifikasi', 'value' => '45', 'color' => 'yellow', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
            ['label' => 'Diterima', 'value' => '60', 'color' => 'green', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
            ['label' => 'Ditolak', 'value' => '15', 'color' => 'red', 'icon' => 'M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z'],
        ];
        $colorMap = [
            'blue'   => ['bg' => 'bg-blue-50',   'icon' => 'bg-blue-100 text-blue-600',   'val' => 'text-blue-700'],
            'yellow' => ['bg' => 'bg-yellow-50',  'icon' => 'bg-yellow-100 text-yellow-600','val' => 'text-yellow-600'],
            'green'  => ['bg' => 'bg-green-50',   'icon' => 'bg-green-100 text-green-600', 'val' => 'text-green-600'],
            'red'    => ['bg' => 'bg-red-50',     'icon' => 'bg-red-100 text-red-500',     'val' => 'text-red-500'],
        ];
    @endphp

    @foreach ($stats as $stat)
    @php $c = $colorMap[$stat['color']]; @endphp
    <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition">
        <div class="flex justify-between items-start mb-4">
            <p class="text-sm text-gray-500 font-medium">{{ $stat['label'] }}</p>
            <div class="w-10 h-10 {{ $c['icon'] }} rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"/>
                </svg>
            </div>
        </div>
        <p class="text-3xl font-extrabold {{ $c['val'] }}">{{ $stat['value'] }}</p>
        <p class="text-xs text-gray-400 mt-1">↑ Update terakhir hari ini</p>
    </div>
    @endforeach
</div>

<!-- PROGRESS BAR -->
<div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 mb-8">
    <div class="flex justify-between items-center mb-3">
        <h3 class="font-bold text-gray-800">Progress Penerimaan</h3>
        <span class="text-sm text-gray-500">60 / 100 Kuota</span>
    </div>
    <div class="w-full bg-gray-100 rounded-full h-4 overflow-hidden">
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-4 rounded-full transition-all" style="width: 60%"></div>
    </div>
    <div class="flex justify-between text-xs text-gray-400 mt-2">
        <span>0</span>
        <span class="text-blue-600 font-semibold">60% Terpenuhi</span>
        <span>100 Kuota</span>
    </div>
</div>

<!-- TABEL PENDAFTAR TERBARU -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 flex justify-between items-center border-b border-gray-100">
        <h3 class="font-bold text-gray-800">Pendaftar Terbaru</h3>
        <a href="/admin/siswa" class="text-sm text-blue-600 hover:underline font-medium">Lihat Semua →</a>
    </div>

    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-500 text-xs uppercase">
            <tr>
                <th class="px-6 py-3 text-left font-semibold">Nama Siswa</th>
                <th class="px-6 py-3 text-left font-semibold">Tanggal Daftar</th>
                <th class="px-6 py-3 text-left font-semibold">Orang Tua</th>
                <th class="px-6 py-3 text-left font-semibold">Status</th>
                <th class="px-6 py-3 text-left font-semibold">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @php
                $rows = [
                    ['nama' => 'Budi Santoso', 'ortu' => 'Santoso', 'tgl' => '12 Jan 2026', 'status' => 'Pending'],
                    ['nama' => 'Siti Aisyah', 'ortu' => 'Ahmad', 'tgl' => '10 Jan 2026', 'status' => 'Diterima'],
                    ['nama' => 'Rizky Pratama', 'ortu' => 'Pratama', 'tgl' => '08 Jan 2026', 'status' => 'Diterima'],
                    ['nama' => 'Dewi Lestari', 'ortu' => 'Lestari', 'tgl' => '05 Jan 2026', 'status' => 'Ditolak'],
                ];
                $statusStyle = [
                    'Pending'  => 'bg-yellow-100 text-yellow-700',
                    'Diterima' => 'bg-green-100 text-green-700',
                    'Ditolak'  => 'bg-red-100 text-red-600',
                ];
            @endphp
            @foreach ($rows as $row)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xs">
                            {{ strtoupper(substr($row['nama'], 0, 1)) }}
                        </div>
                        <span class="font-medium text-gray-800">{{ $row['nama'] }}</span>
                    </div>
                </td>
                <td class="px-6 py-4 text-gray-500">{{ $row['tgl'] }}</td>
                <td class="px-6 py-4 text-gray-500">{{ $row['ortu'] }}</td>
                <td class="px-6 py-4">
                    <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $statusStyle[$row['status']] }}">
                        {{ $row['status'] }}
                    </span>
                </td>
                <td class="px-6 py-4">
                    <a href="/admin/siswa/detail" class="text-blue-600 hover:underline text-xs font-medium">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection