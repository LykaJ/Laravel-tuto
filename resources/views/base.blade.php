<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

</head>
<body>
<main>
    @yield('content')
</main>
<footer>
    <p class="text-grey-600">
        &copy; Copyright {{ date('Y') }}
        &middot;
        @if(!Route::is('about'))
            <a href="{{ route('about') }}" class="footer-links">About us</a>
        @else
            <a href="{{ route('home') }}" class="footer-links">Home</a>
        @endif
    </p>
</footer>
</body>
</html>
