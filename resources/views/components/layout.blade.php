<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="{{ asset('mydesign/mystyle.css') }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/custom.js', 'public/mydesign/mystyle.css'])

    </head>
    <body>
        <div class="container">
            <x-navigation></x-navigation>
        </div>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
