<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-neutral-900 m-0">
    <header class="nav flex flex-row-reverse border-2 border-neutral-800 w-full h-16 bg-gradient-to-br from-purple-900 to-pink-600">
        <nav class="w-full h-16 gap-5  flex justify-center text-white">
            <a href="">
                <h1 class="flex my-1 justify-center text-5xl">Anime</h1>    
            </a>
        </nav>
    </header>
    @yield('123')
</body>
</html>