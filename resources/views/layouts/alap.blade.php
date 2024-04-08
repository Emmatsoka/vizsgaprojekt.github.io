<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('Wesoc_favicon_white.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('styles/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('styles/app-main.css') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="{{ $user->tema }}">
        <div id="htrszin"></div>
        <div class="">

            @include('layouts.navigation')
            <div class="oldal">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="">
                    <div class="">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @include('layouts.footer')

        <script src="{{ asset('styles/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    </div>
    </body>
</html>
