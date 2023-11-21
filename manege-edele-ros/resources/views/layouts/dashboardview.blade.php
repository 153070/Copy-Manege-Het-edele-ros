<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- CSS -->
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="homeview-container">
        <!-- Getting the header layout content -->
        @include('layouts.header')

        <!-- Getting content form view overview -->
        @yield('content')
        <!-- Getting the footer layout content -->
        @include('layouts.footer')
    </div>
</body>

</html>