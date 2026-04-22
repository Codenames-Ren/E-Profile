@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')

<!-- HEADER ROW -->
<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-xl font-bold text-gray-800">Data Pendaftar</h2>
        <p class="text-sm text-gray-500 mt-0.5">Kelola seluruh data pendaftar siswa baru</p>
    </div>
    <button class="flex items-center gap-2 bg-blue-600 text-white px-5 py-2.5 rounded-xl font-semibold text-sm hover:bg-blue-700 shadow-md hover:shadow-lg transition-all">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
        </svg>
        Export Data
    </button>
</div>

<!-- FILTER & SEARCH -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 mb-6">
    <div class="flex flex-col md:flex-row gap-4">
        <div class="relative flex-1">
            <div class="absolute left-3 top-1/2 -translate-y-1/2">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <input type="text" placeholder="Cari nama siswa..."
                class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
        </div>
        <select class="border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-300 bg-white transition">
            <option>Semua Status</option>
            <option>Pending</option>
            <option>Diterima</option>
            <option>Ditolak</option>
        </select>
        <select class="border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-300 bg-white transition">
            <option>Semua Tanggal</option>
            <option>Hari ini</option>
            <option>7 Hari Terakhir</option>
            <option>Bulan ini</option>
        </select>
    </div>
</div>

<!-- TABLE -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-500 text-xs uppercase border-b border-gray-100">
            <tr>
                <th class="px-6 py-4 text-left font-semibold">No</th>
                <th class="px-6 py-4 text-left font-semibold">Nama Siswa</th>
                <th class="px-6 py-4 text-left font-semibold">Alamat</th>
                <th class="px-6 py-4 text-left font-semibold">Tanggal Daftar</th>
                <th class="px-6 py-4 text-left font-semibold">Status</th>
                <th class="px-6 py-4 text-left font-semibold">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @php
                $siswa = [
                    ['nama' => 'Budi Santoso',   'alamat' => 'Jakarta Pusat', 'tgl' => '12 Jan 2026', 'status' => 'Pending'],
                    ['nama' => 'Siti Aisyah',    'alamat' => 'Jakarta Selatan', 'tgl' => '10 Jan 2026', 'status' => 'Diterima'],
                    ['nama' => 'Rizky Pratama',  'alamat' => 'Depok',         'tgl' => '08 Jan 2026', 'status' => 'Diterima'],
                    ['nama' => 'Dewi Lestari',   'alamat' => 'Jakarta Timur', 'tgl' => '05 Jan 2026', 'status' => 'Ditolak'],
                    ['nama' => 'Ahmad Fauzi',    'alamat' => 'Bekasi',        'tgl' => '03 Jan 2026', 'status' => 'Pending'],
                ];
                $statusStyle = [
                    'Pending'  => 'bg-yellow-100 text-yellow-700',
                    'Diterima' => 'bg-green-100 text-green-700',
                    'Ditolak'  => 'bg-red-100 text-red-600',
                ];
            @endphp
            @foreach ($siswa as $i => $s)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4 text-gray-400">{{ $i + 1 }}</td>
                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xs">
                            {{ strtoupper(substr($s['nama'], 0, 1)) }}
                        </div>
                        <span class="font-medium text-gray-800">{{ $s['nama'] }}</span>
                    </div>
                </td>
                <td class="px-6 py-4 text-gray-500">{{ $s['alamat'] }}</td>
                <td class="px-6 py-4 text-gray-500">{{ $s['tgl'] }}</td>
                <td class="px-6 py-4">
                    <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $statusStyle[$s['status']] }}">
                        {{ $s['status'] }}
                    </span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center gap-2">
                        <a href="/admin/siswa/{{ $i + 1 }}" class="px-3 py-1.5 bg-blue-50 text-blue-600 rounded-lg text-xs font-semibold hover:bg-blue-100 transition">
                            Detail
                        </a>
                        <button class="px-3 py-1.5 bg-red-50 text-red-500 rounded-lg text-xs font-semibold hover:bg-red-100 transition">
                            Hapus
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- PAGINATION -->
    <div class="px-6 py-4 border-t border-gray-100 flex justify-between items-center">
        <p class="text-sm text-gray-500">Menampilkan 1–5 dari 120 pendaftar</p>
        <div class="flex gap-1">
            <button class="w-8 h-8 rounded-lg bg-gray-100 text-gray-500 text-sm hover:bg-gray-200 transition">‹</button>
            <button class="w-8 h-8 rounded-lg bg-blue-600 text-white text-sm font-bold">1</button>
            <button class="w-8 h-8 rounded-lg bg-gray-100 text-gray-600 text-sm hover:bg-gray-200 transition">2</button>
            <button class="w-8 h-8 rounded-lg bg-gray-100 text-gray-600 text-sm hover:bg-gray-200 transition">3</button>
            <button class="w-8 h-8 rounded-lg bg-gray-100 text-gray-500 text-sm hover:bg-gray-200 transition">›</button>
        </div>
    </div>
</div>

@endsection