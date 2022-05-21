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
<body class="bg-neutral-900 overflow-x-hidden">
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
        <div class="p-1 bg-gradient-to-tl from-pink-700 to-purple-900 mt-32 rounded">
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
        <section class="flex justify-start items-center gap-10 flex-row flex-wrap mx-32 my-32 ">
            @foreach ($animes as $anime)        
                <div class="p-1 bg-gradient-to-tl from-pink-700 to-purple-900 mt-10 rounded"
                >
                <!--                      FODASE                                     !-->
                    <div class="flex  flex-col gap-2 border-4 px-2 border-neutral-800  text-pink-400 bg-neutral-800 font-bold" 
                    >
                        <div class="flex flex-col max-w-80 max-h-120 gap-2 text-center">
                                        
                            <div class="flex gap-2 text-2xl h-120 w-80">
                                <h2>Name:</h2>
                                <p>{{$anime->name}}</p>  
                            </div>

                            <div class="flex gap-2 text-2xl">
                                <h2>Score:</h2>
                                <p>{{$anime->score}}</p>  
                            </div>
                            
                            <div class="flex gap-2 justify-between text-2xl">
                                <div class="flex gap-2">
                                   <h2>rewatched:</h2>
                                    <p>{{$anime->rewatched}}</p>  
                                </div>
                
                                <div class="flex items-center">
                                    <a href="{{route('anime.edit', $anime->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form method="POST" action="{{route('anime.delete', $anime->id)}}">
                                        @method('DELETE') @csrf 
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg> 
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div> 
            @endforeach
        </section>
    
    @if (\Session::has('success'))
       <h2>{{\Session::get('success')}}</h2> 
    @endif
   
    
    
    
</body>
</html>