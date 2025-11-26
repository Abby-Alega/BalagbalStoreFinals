<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Balagbal Store')</title>
    @vite(['resources/css/header.css'])
    @vite(['resources/css/footer.css']) 
    {{-- <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> --}}
    @yield('css')
</head>
<body>
    @include('layout.header')

    <main class="main-content">
        @yield('content')
    </main>

    @include('layout.footer')

    @yield('js')
</body>
</html>
