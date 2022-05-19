<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LearnLaravel | index </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-900">
    <header class="flex flex-row-reverse bg-white w-full h-16">
        <nav class="w-full h-16 gap-5 ml-32 contents">
            <div class="flex w-80 justify-between mr-28">
                <button class="text-center font-bold italic">
                    <p>Canhassi</p>
                </button>
                <button>
                    <p class="font-bold italic text-base" >{{$fds}}</p>
                </button>
                <button class="text-center font-bold italic">
                    <p>list</p>
                </button> 
            </div>
        </nav>
    </header>

    <section class="flex items-center">
        <section class="flex mt-32 w-auto h-20">
            <ul class=" bg-gray-200 ml-20 h-full text-xl">

            <a href="{{route('site.list')}}"><li>See all</li> </a> 
            <a href="/">    <li>dale pai</li>    </a>              

            </ul>
        </section>
        <form class="flex flex-col w-72 h-72 gap-2 ml-20 mt-32 text-white bg-cyan-900" action="">
                <h1 class="text-2xl">name</h1>
                <input type="text">
                <h1 class="text-2xl">score</h1>
                <input type="number"> 
                <h1 class="text-2xl">fodase</h1>
                <input type="number">
                <button class="mt-8 bg-gray-400" type="submit">Sumbit</button>
        </form> 
    </section>
    

   
    
    
    
</body>
</html>