<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>বিক্রমপুর মানব সেবা ফাউন্ডেশন</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
        @include('sweetalert::alert')
    </div>

    @yield('scripts')
    <script type="module" src="{{ asset('/build/assets/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/build/assets/app.css') }}">
</body>

</html>
