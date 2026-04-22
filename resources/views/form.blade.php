@extends('layouts.app')

@section('title', 'Form Pendaftaran')

@section('content')

<!-- HEADER -->
<section class="relative overflow-hidden bg-gradient-to-br from-blue-600 to-blue-400 text-white py-12 text-center">
    <div class="relative z-10">
        <h1 class="text-3xl font-extrabold mb-2">Form Pendaftaran Siswa Baru</h1>
        <p class="text-blue-100">Isi data dengan benar dan lengkap untuk mempermudah proses verifikasi</p>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0,25 C360,0 1080,50 1440,25 L1440,50 L0,50 Z" fill="white"/>
        </svg>
    </div>
</section>

<div class="max-w-2xl mx-auto mt-10 mb-16 px-4">
    <div class="bg-white rounded-2xl shadow-xl p-8">

        <!-- STEP INDICATOR -->
        <div class="flex items-center mb-10">
            @php $steps_labels = ['Data Siswa', 'Orang Tua', 'Dokumen']; @endphp
            @foreach ($steps_labels as $i => $label)
                <div class="step-indicator flex-1 flex flex-col items-center {{ $i === 0 ? 'active' : '' }}" data-step="{{ $i }}">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full font-bold text-sm transition-all
                        {{ $i === 0 ? 'bg-blue-600 text-white shadow-md' : 'bg-gray-200 text-gray-500' }}">
                        {{ $i + 1 }}
                    </div>
                    <span class="text-xs mt-1 font-semibold {{ $i === 0 ? 'text-blue-600' : 'text-gray-400' }}">{{ $label }}</span>
                </div>
                @if ($i < 2)
                <div class="step-line flex-1 h-1 {{ $i === 0 ? 'bg-blue-200' : 'bg-gray-200' }} -mt-4 mx-1 rounded transition-all" data-after="{{ $i }}"></div>
                @endif
            @endforeach
        </div>

        <form id="formPendaftaran">

            <!-- STEP 1 - Data Siswa -->
            <div class="step-content">
                <h2 class="text-xl font-bold mb-6 text-gray-800">Data Siswa</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Contoh: Budi Santoso"
                            class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-1 text-sm font-medium text-gray-700">Tanggal Lahir <span class="text-red-500">*</span></label>
                            <input type="date" class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 transition bg-white">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Alamat Lengkap <span class="text-red-500">*</span></label>
                        <textarea placeholder="Masukkan alamat lengkap" rows="3"
                            class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 transition resize-none"></textarea>
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Asal TK/PAUD</label>
                        <input type="text" placeholder="Opsional"
                            class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
                    </div>
                </div>
            </div>

            <!-- STEP 2 - Data Orang Tua -->
            <div class="step-content hidden">
                <h2 class="text-xl font-bold mb-6 text-gray-800">Data Orang Tua / Wali</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Nama Ayah <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Nama ayah kandung"
                            class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Nama Ibu <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Nama ibu kandung"
                            class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Nomor HP / WhatsApp <span class="text-red-500">*</span></label>
                        <input type="tel" placeholder="Contoh: 08123456789"
                            class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Pekerjaan Orang Tua</label>
                        <input type="text" placeholder="Opsional"
                            class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
                    </div>
                </div>
            </div>

            <!-- STEP 3 - Upload Dokumen -->
            <div class="step-content hidden">
                <h2 class="text-xl font-bold mb-2 text-gray-800">Upload Dokumen</h2>
                <p class="text-sm text-gray-500 mb-6">Format yang diterima: JPG, PNG, atau PDF. Maksimal 2MB per file.</p>
                <div class="space-y-5">
                    @foreach(['Kartu Keluarga (KK)', 'Akta Kelahiran', 'Pas Foto 3x4'] as $doc)
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">{{ $doc }} <span class="text-red-500">*</span></label>
                        <div class="border-2 border-dashed border-blue-200 rounded-xl p-5 text-center hover:border-blue-400 hover:bg-blue-50 transition cursor-pointer">
                            <svg class="w-8 h-8 text-blue-300 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                            </svg>
                            <p class="text-sm text-gray-500">Klik untuk upload atau drag & drop</p>
                            <input type="file" class="hidden" accept=".jpg,.jpeg,.png,.pdf">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- NAVIGATION BUTTONS -->
            <div class="flex justify-between mt-8 pt-6 border-t border-gray-100">
                <button type="button" id="prevBtn"
                    class="hidden px-6 py-3 bg-gray-100 text-gray-700 rounded-xl font-semibold hover:bg-gray-200 transition">
                    ← Kembali
                </button>
                <div class="flex-1"></div>
                <button type="button" id="nextBtn"
                    class="px-8 py-3 bg-blue-600 text-white rounded-xl font-bold hover:bg-blue-700 shadow-md hover:shadow-lg transition-all">
                    Selanjutnya →
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    let currentStep = 0;
    const steps = document.querySelectorAll(".step-content");
    const indicators = document.querySelectorAll(".step-indicator");
    const stepLines = document.querySelectorAll(".step-line");

    function updateUI() {
        steps.forEach((s, i) => s.classList.toggle("hidden", i !== currentStep));

        indicators.forEach((ind, i) => {
            const circle = ind.querySelector("div");
            const label = ind.querySelector("span");
            if (i <= currentStep) {
                circle.className = "w-10 h-10 flex items-center justify-center rounded-full font-bold text-sm transition-all bg-blue-600 text-white shadow-md";
                label.className = "text-xs mt-1 font-semibold text-blue-600";
            } else {
                circle.className = "w-10 h-10 flex items-center justify-center rounded-full font-bold text-sm transition-all bg-gray-200 text-gray-500";
                label.className = "text-xs mt-1 font-semibold text-gray-400";
            }
        });

        stepLines.forEach((line, i) => {
            line.className = `step-line flex-1 h-1 ${i < currentStep ? 'bg-blue-600' : 'bg-gray-200'} -mt-4 mx-1 rounded transition-all`;
        });

        document.getElementById("prevBtn").classList.toggle("hidden", currentStep === 0);
        const nextBtn = document.getElementById("nextBtn");
        nextBtn.textContent = currentStep === steps.length - 1 ? "Kirim Pendaftaran ✓" : "Selanjutnya →";
    }

    document.getElementById("nextBtn").addEventListener("click", () => {
        if (currentStep < steps.length - 1) {
            currentStep++;
            updateUI();
        } else {
            alert("Pendaftaran berhasil dikirim! Tim kami akan menghubungi Anda segera.");
        }
    });

    document.getElementById("prevBtn").addEventListener("click", () => {
        if (currentStep > 0) { currentStep--; updateUI(); }
    });
</script>

@endsection