<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xama</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-900">
    <header class="flex flex-row bg-white w-full h-16">
        <nav class="flex w-full h-16 gap-5 ml-32">
            <button class="text-center font-bold italic">
                <p>Canhassi</p>
            </button>
            <button>
                <p class="font-bold italic" >{{$sexo}}</p>
            </button>
        </nav>
    </header>
</body>
</html>