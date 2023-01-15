<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        {{-- Nunito  --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        {{-- Kalam - handwriting - font-family: 'Kalam', cursive;--}}
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
        {{-- Poppins   font-family: 'Poppins', sans-serif;--}}
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        {{-- Gloria Hallelujah font-family: 'Gloria Hallelujah', cursive; --}}
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
        {{-- Fuzzy Bubbles  font-family: 'Fuzzy Bubbles', cursive;--}}
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&display=swap" rel="stylesheet">


        <!-- Usando Vite -->
        @vite(['resources/js/app.js'])
    </head>

    <body>
        <div id="admin">
            @include('partials.admin.sidebar')

            <div class="wrapper">
                @include('partials.admin.header')

                <main>
                    @yield('content')
                </main>

                {{-- @include('partials.admin.footer') --}}
            </div>
        </div>
    </body>

</html>