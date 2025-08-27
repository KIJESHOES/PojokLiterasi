<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('partials.head') {{-- Bisa berisi link CSS, meta tag, dll --}}
</head>
<body>

    @include('partials.preloader')
    @include('partials.header') {{-- Bagian header, navbar --}}

    <main>
        @yield('content') {{-- Isi konten utama tiap halaman --}}
    </main>

    @include('partials.footer') {{-- Bagian footer --}}
    @include('partials.scripts') {{-- JS scripts --}}
</body>
</html>
