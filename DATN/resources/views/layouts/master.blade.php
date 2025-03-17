<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('asset/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>

    <!-- Header -->
    
    @include('partials.navbar')

    <!-- Nội dung trang -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    @yield('scripts')
    <script src="{{ asset('asset/js/script.js') }}"></script>
</body>
</html>
