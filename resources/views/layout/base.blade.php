<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LearnLaravel | index </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-neutral-900 m-0">
    <header class="nav flex flex-row-reverse border-2 border-neutral-800 w-full h-16 bg-gradient-to-br from-purple-900 to-pink-700">
        <nav class="w-full h-16 gap-5 ml-32 contents text-gray-300">
            <div class="flex w-80 justify-between mr-28 ">
                <button class="text-center font-bold italic">
                    <p>Canhassi</p>
                </button>
                <button>
                    <p class="font-bold italic text-base" >fdss</p>
                </button>
                <button class="text-center font-bold italic">
                    <p>list</p>
                </button> 
            </div>
        </nav>
    </header>
    <h1 class="flex justify-center text-gray-300 text-5xl ml- ">Anime</h1>
    @yield('123')
</body>
</html>