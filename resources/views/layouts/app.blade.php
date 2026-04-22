<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'SDN Karet 1')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- NAVBAR -->
    @include('partials.navbar')

    <!-- CONTENT -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('partials.footer')

</body>
</html>