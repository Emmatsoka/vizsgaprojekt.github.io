<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="Wesoc_favicon_white.png" type="image/x-icon">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="./styles/style.css">
        <link rel="stylesheet" href="./styles/bootstrap/css/bootstrap.min.css">
        
    </head>
    <body class="">
        <div class="">


            <div class="">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
 