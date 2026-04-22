@extends('layouts.admin')

@section('title', 'Verifikasi')

@section('content')

<!-- HEADER -->
<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-xl font-bold text-gray-800">Verifikasi Pendaftar</h2>
        <p class="text-sm text-gray-500 mt-0.5">Tinjau dokumen dan tentukan status penerimaan siswa</p>
    </div>
    <div class="flex items-center gap-2 bg-yellow-50 border border-yellow-200 text-yellow-700 px-4 py-2 rounded-xl text-sm font-semibold">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        45 Menunggu Verifikasi
    </div>
</div>

<!-- FILTER TABS -->
<div class="flex gap-2 mb-6">
    @foreach(['Semua' => 'gray', 'Pending' => 'yellow', 'Diterima' => 'green', 'Ditolak' => 'red'] as $tab => $color)
    <button class="px-4 py-2 rounded-xl text-sm font-semibold transition
        {{ $tab === 'Semua' ? 'bg-blue-600 text-white shadow-md' : 'bg-white text-gray-600 border border-gray-200 hover:border-blue-300 hover:text-blue-600' }}">
        {{ $tab }}
    </button>
    @endforeach
</div>

<!-- TABLE -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-500 text-xs uppercase border-b border-gray-100">
            <tr>
                <th class="px-6 py-4 text-left font-semibold">Pendaftar</th>
                <th class="px-6 py-4 text-left font-semibold">Tanggal Daftar</th>
                <th class="px-6 py-4 text-left font-semibold">Dokumen</th>
                <th class="px-6 py-4 text-left font-semibold">Status</th>
                <th class="px-6 py-4 text-left font-semibold">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @php
                $pendaftar = [
                    ['nama' => 'Budi Santoso',  'tgl' => '12 Jan 2026', 'docs' => 3, 'status' => 'Pending'],
                    ['nama' => 'Siti Aisyah',   'tgl' => '10 Jan 2026', 'docs' => 3, 'status' => 'Diterima'],
                    ['nama' => 'Rizky Pratama', 'tgl' => '08 Jan 2026', 'docs' => 2, 'status' => 'Pending'],
                    ['nama' => 'Dewi Lestari',  'tgl' => '05 Jan 2026', 'docs' => 3, 'status' => 'Ditolak'],
                    ['nama' => 'Ahmad Fauzi',   'tgl' => '03 Jan 2026', 'docs' => 1, 'status' => 'Pending'],
                ];
                $statusStyle = [
                    'Pending'  => 'bg-yellow-100 text-yellow-700',
                    'Diterima' => 'bg-green-100 text-green-700',
                    'Ditolak'  => 'bg-red-100 text-red-600',
                ];
            @endphp
            @foreach ($pendaftar as $p)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-sm">
                            {{ strtoupper(substr($p['nama'], 0, 1)) }}
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">{{ $p['nama'] }}</p>
                            <p class="text-xs text-gray-400">Calon Siswa Baru</p>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 text-gray-500">{{ $p['tgl'] }}</td>
                <td class="px-6 py-4">
                    <button class="flex items-center gap-1.5 text-blue-600 hover:text-blue-800 font-medium text-sm group" onclick="openDocModal('{{ $p['nama'] }}')">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        {{ $p['docs'] }} Dokumen
                    </button>
                </td>
                <td class="px-6 py-4">
                    <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $statusStyle[$p['status']] }}">
                        {{ $p['status'] }}
                    </span>
                </td>
                <td class="px-6 py-4">
                    @if ($p['status'] === 'Pending')
                    <div class="flex items-center gap-2">
                        <button onclick="confirmAction('terima', '{{ $p['nama'] }}')"
                            class="flex items-center gap-1 px-3 py-1.5 bg-green-500 text-white rounded-lg text-xs font-semibold hover:bg-green-600 transition shadow-sm">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                            Terima
                        </button>
                        <button onclick="confirmAction('tolak', '{{ $p['nama'] }}')"
                            class="flex items-center gap-1 px-3 py-1.5 bg-red-500 text-white rounded-lg text-xs font-semibold hover:bg-red-600 transition shadow-sm">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Tolak
                        </button>
                    </div>
                    @else
                    <span class="text-gray-400 text-xs italic">Sudah diproses</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- PAGINATION -->
    <div class="px-6 py-4 border-t border-gray-100 flex justify-between items-center">
        <p class="text-sm text-gray-500">Menampilkan 1–5 dari 45 pending</p>
        <div class="flex gap-1">
            <button class="w-8 h-8 rounded-lg bg-gray-100 text-gray-500 text-sm hover:bg-gray-200 transition">‹</button>
            <button class="w-8 h-8 rounded-lg bg-blue-600 text-white text-sm font-bold">1</button>
            <button class="w-8 h-8 rounded-lg bg-gray-100 text-gray-600 text-sm hover:bg-gray-200 transition">2</button>
            <button class="w-8 h-8 rounded-lg bg-gray-100 text-gray-500 text-sm hover:bg-gray-200 transition">›</button>
        </div>
    </div>
</div>

<!-- MODAL DOKUMEN -->
<div id="docModal" class="fixed inset-0 bg-black/50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6">
        <div class="flex justify-between items-center mb-5">
            <h3 class="font-bold text-gray-800 text-lg">Dokumen Pendaftar</h3>
            <button onclick="closeDocModal()" class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center hover:bg-gray-200 transition">
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <p id="modalName" class="text-sm text-blue-600 font-semibold mb-4"></p>
        <div class="space-y-3">
            @foreach(['Kartu Keluarga (KK)', 'Akta Kelahiran', 'Pas Foto 3x4'] as $doc)
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl border border-gray-200">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-700">{{ $doc }}</span>
                </div>
                <button class="text-xs text-blue-600 font-semibold hover:underline">Lihat</button>
            </div>
            @endforeach
        </div>
        <button onclick="closeDocModal()" class="mt-5 w-full py-2.5 bg-blue-600 text-white rounded-xl font-semibold text-sm hover:bg-blue-700 transition">
            Tutup
        </button>
    </div>
</div>

<script>
    function openDocModal(nama) {
        document.getElementById('modalName').textContent = 'Nama: ' + nama;
        document.getElementById('docModal').classList.remove('hidden');
        document.getElementById('docModal').classList.add('flex');
    }
    function closeDocModal() {
        document.getElementById('docModal').classList.add('hidden');
        document.getElementById('docModal').classList.remove('flex');
    }
    function confirmAction(action, nama) {
        const label = action === 'terima' ? 'menerima' : 'menolak';
        if (confirm('Apakah Anda yakin ingin ' + label + ' pendaftaran ' + nama + '?')) {
            alert('Berhasil! Pendaftaran ' + nama + ' telah di' + (action === 'terima' ? 'terima' : 'tolak') + '.');
        }
    }
</script>

@endsection