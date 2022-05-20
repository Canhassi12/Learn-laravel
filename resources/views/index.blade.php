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
<body class="bg-neutral-900">
    <header class="nav flex flex-row-reverse border-2 border-purple-700 w-full h-16 bg-neutral-900">
        <nav class="w-full h-16 gap-5 ml-32 contents">
            <div class="flex w-80 justify-between mr-28 text-pink-400">
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
    <h1 class="flex justify-center text-purple-600 text-5xl ml- ">Anime</h1>
    <section class="flex items-center justify-center">
        <div class="p-1 bg-gradient-to-tl from-pink-700 to-purple-900 mt-32 ml-20 rounded">
            <form class="flex justify-between flex-col gap-2 border-4 px-2 border-neutral-800  text-pink-400 bg-neutral-800 font-bold" 
            method="POST" action="{{route('anime.store')}}"
            >
            @csrf
            <div class="flex flex-col w-80 gap-2">
               <label class="text-2xl">Name</label>
                <input name="name" class="border-2 rounded border-pink-400 outline-none focus:border-pink-600 text-neutral-900" type="text"> 
            </div>

            <div class="flex flex-col w-80 gap-2">
                <label class="text-2xl">Score</label>
                <input name="score" class="border-2 rounded border-pink-400 outline-none focus:border-pink-600 text-neutral-900"> 
            </div>
            
            <div class="flex flex-col w-80 gap-2">
               <label class="text-2xl">rewatched</label>
                <input name="rewatched" class="border-2 rounded border-pink-400 outline-none focus:border-pink-600 text-neutral-900"> 
            </div>
                <button class="mt-8 mb-4 rounded text-white font-bold text-lg hover:bg-pink-500 bg-pink-600 hover:transition-all hover:duration-700 py-1 uppercase
                    type="submit">register 
                </button>
            </form>
        </div> 
    </section>

    @if (\Session::has('success'))
       <h2>{{\Session::get('success')}}</h2> 
    @endif
   
    
    
    
</body>
</html>