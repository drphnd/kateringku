<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="{{ asset('mydesign/mystyle.css') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/custom.js'])

    </head>
    <body>
        <div>
            <x-navigation></x-navigation>
            
        </div>
    </body>
</html>
