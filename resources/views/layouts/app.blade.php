<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/kovil.css') }}">
</head>
<body>
    <!-- Header Section -->
    <header>@include('shared.navbar')</header>

    <!-- Aside Section -->
    <aside>@include('shared.sidebar')</aside>

    <!-- Main Section -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer></footer>

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{  asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script src="{{ asset('js/kovil.js') }}"></script>
</body>
</html>
