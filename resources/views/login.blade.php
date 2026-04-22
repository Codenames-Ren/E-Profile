<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SDN Karet 1</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-600 via-blue-500 to-blue-400 flex items-center justify-center p-4">

<div class="grid md:grid-cols-2 bg-white rounded-3xl shadow-2xl overflow-hidden max-w-4xl w-full">

    <!-- LEFT SIDE (BRANDING) -->
    <div class="hidden md:flex flex-col justify-center items-center bg-gradient-to-b from-blue-700 to-blue-600 text-white p-12 relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/5 rounded-full translate-y-20 -translate-x-20"></div>

        <div class="relative z-10 text-center">
            <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                <span class="text-blue-700 font-black text-xl">SDN</span>
            </div>
            <h1 class="text-3xl font-extrabold mb-2">SDN Karet 1</h1>
            <div class="w-12 h-1 bg-white/40 mx-auto mb-5 rounded"></div>
            <p class="text-blue-100 leading-relaxed text-sm max-w-xs">
                Sistem Informasi dan Pendaftaran Siswa Baru berbasis web untuk mempermudah proses administrasi sekolah.
            </p>

            <div class="mt-10 grid grid-cols-3 gap-4 text-center">
                @foreach(['500+', '30+', '15+'] as $i => $num)
                <div>
                    <p class="text-2xl font-extrabold">{{ $num }}</p>
                    <p class="text-blue-200 text-xs mt-1">{{ ['Siswa', 'Guru', 'Tahun'][$i] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <div class="absolute bottom-6 text-blue-200 text-xs">
            © 2026 SDN Karet 1
        </div>
    </div>

    <!-- RIGHT SIDE (FORM) -->
    <div class="p-10 flex flex-col justify-center">
        <div class="mb-8">
            <h2 class="text-2xl font-extrabold text-gray-800 mb-1">Selamat Datang</h2>
            <p class="text-gray-500 text-sm">Masuk ke panel admin SDN Karet 1</p>
        </div>

        <!-- ERROR ALERT (hidden by default) -->
        <div id="alertError" class="bg-red-50 border border-red-200 text-red-600 p-3 rounded-xl mb-5 text-sm hidden flex items-center gap-2">
            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Email atau password salah. Silakan coba lagi.
        </div>

        <form>
            <!-- EMAIL -->
            <div class="mb-4">
                <label class="block mb-1 text-sm font-semibold text-gray-700">Email</label>
                <div class="relative">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <input type="email" placeholder="admin@sekolah.com"
                        class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-300 focus:border-transparent focus:outline-none transition">
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="mb-2">
                <label class="block mb-1 text-sm font-semibold text-gray-700">Password</label>
                <div class="relative">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <input type="password" id="passwordInput" placeholder="Masukkan password"
                        class="w-full pl-10 pr-10 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-300 focus:border-transparent focus:outline-none transition">
                    <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
                        onclick="const i=document.getElementById('passwordInput'); i.type=i.type==='password'?'text':'password'">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- REMEMBER + FORGOT -->
            <div class="flex justify-between items-center mb-6 text-sm">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" class="w-4 h-4 accent-blue-600">
                    <span class="text-gray-600">Ingat saya</span>
                </label>
                <a href="#" class="text-blue-600 hover:underline font-medium">Lupa password?</a>
            </div>

            <!-- BUTTON -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 shadow-md hover:shadow-lg transition-all duration-200">
                Masuk ke Dashboard
            </button>
        </form>

        <!-- BACK -->
        <p class="text-center text-sm text-gray-400 mt-8">
            <a href="/" class="hover:text-blue-600 hover:underline transition">← Kembali ke Website</a>
        </p>
    </div>

</div>

</body>
</html>