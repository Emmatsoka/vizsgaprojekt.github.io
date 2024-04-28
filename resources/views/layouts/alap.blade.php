<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{ romanzipp\Turnstile\Captcha::getScript() }}
        <link rel="shortcut icon" href="{{ asset('Wesoc_favicon_white.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('styles/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('styles/app-main.css') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        @if($user->tema == "alap-tema")
        <meta name="theme-color" content="rgb(13, 24, 30)">
        @elseif($user->tema == "feher-tema")
        <meta name="theme-color" content="#f2f2f2">
        @elseif($user->tema == "lila-tema")
        <meta name="theme-color" content="rgb(13, 14, 30)">
        @elseif($user->tema == "rozsa-tema")
        <meta name="theme-color" content="rgb(252, 204, 229)">
        @elseif($user->tema == "narancs-tema")
        <meta name="theme-color" content="rgb(97, 56, 3)">
        @elseif($user->tema == "piros-tema")
        <meta name="theme-color" content="#1e0d0ddc">
        @elseif($user->tema == "kek-tema")
        <meta name="theme-color" content="rgb(13, 18, 30)">
        @elseif($user->tema == "zold-tema")
        <meta name="theme-color" content="#0d1e0e">
        @endif

        <script src="{{ asset('js/post.js')}}"></script>
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
