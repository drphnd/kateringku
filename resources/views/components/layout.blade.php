<!DOCTYPE html>
<html lang= "en">

<head>

    @vite('resources/css/app.css')
</head>

<body>
    <div>
            <x-navigation></x-navigation>
            <main>
                {{ $slot }}
            </main>
        </div>
    
</body>

</html>