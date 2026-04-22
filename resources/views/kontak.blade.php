@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<!-- HEADER -->
<section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-500 to-blue-400 text-white py-16 text-center">
    <div class="relative z-10">
        <h1 class="text-4xl font-extrabold mb-2">Hubungi Kami</h1>
        <p class="text-blue-100 max-w-xl mx-auto">Jika Anda memiliki pertanyaan terkait pendaftaran, fasilitas, atau kegiatan sekolah, kami siap membantu.</p>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0,30 C360,0 1080,60 1440,30 L1440,60 L0,60 Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- INFO CARDS -->
<section class="py-12 px-6 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-4 gap-4 mb-12">
        @php $contacts = [
            ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z', 'label' => 'Alamat', 'val' => 'Jl. Karet No.1, Jakarta'],
            ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'label' => 'Telepon', 'val' => '0812-3456-7890'],
            ['icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Email', 'val' => 'sdnkaret1@email.com'],
            ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Jam Operasional', 'val' => 'Sen–Jum 07:00–15:00'],
        ]; @endphp
        @foreach ($contacts as $c)
        <div class="bg-white border border-gray-100 rounded-2xl p-5 shadow-sm text-center hover:shadow-md transition">
            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-3">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $c['icon'] }}"/>
                </svg>
            </div>
            <p class="text-xs text-gray-400 uppercase font-semibold mb-1">{{ $c['label'] }}</p>
            <p class="text-sm font-medium text-gray-700">{{ $c['val'] }}</p>
        </div>
        @endforeach
    </div>

    <!-- FORM + MAP -->
    <div class="grid md:grid-cols-2 gap-8">

        <!-- FORM -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-xl font-bold text-blue-700 mb-6">Kirim Pesan</h2>
            <form>
                <div class="mb-4">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" placeholder="Nama Anda"
                        class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent transition">
                </div>
                <div class="mb-4">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                    <input type="email" placeholder="email@contoh.com"
                        class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent transition">
                </div>
                <div class="mb-4">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Subjek</label>
                    <input type="text" placeholder="Topik pesan"
                        class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent transition">
                </div>
                <div class="mb-6">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Pesan</label>
                    <textarea rows="4" placeholder="Tulis pesan Anda di sini..."
                        class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent transition resize-none"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 shadow-md hover:shadow-lg transition-all">
                    Kirim Pesan
                </button>
            </form>
        </div>

        <!-- MAP -->
        <div class="flex flex-col gap-4">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex-1 flex items-center justify-center shadow-sm min-h-64">
                <div class="text-center">
                    <svg class="w-16 h-16 text-blue-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <p class="text-blue-400 font-medium">Embed Google Maps</p>
                    <p class="text-blue-300 text-sm mt-1">Jl. Karet No.1, Jakarta</p>
                </div>
            </div>
            <!-- Social Media -->
            <div class="bg-white rounded-2xl shadow-sm p-5">
                <p class="text-sm font-semibold text-gray-600 mb-3">Ikuti Kami</p>
                <div class="flex gap-3">
                    @foreach(['Facebook', 'Instagram', 'YouTube'] as $sosmed)
                    <button class="flex-1 text-xs py-2 bg-blue-50 text-blue-600 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition">{{ $sosmed }}</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection