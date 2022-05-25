@extends('layout.base')

@section('title', 'LearnLaravel | Edit ')

@section('123')
    <section class="flex items-center justify-center">
        <div class="p-1 bg-gradient-to-tl from-pink-700 to-purple-900 mt-32 rounded">
            <form class="flex justify-between flex-col gap-2 border-4 px-2 border-neutral-800  text-pink-400 bg-neutral-800 font-bold" 
            method="post" action="{{route('anime.update', $anime->id)}}"
            >
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="flex flex-col w-80 gap-2">
               <label class="text-2xl">Name</label>
                <input name="name" value="{{$anime->name}}" autocomplete="off" class="border-2 rounded border-pink-400 outline-none focus:border-pink-600 text-neutral-900" type="text"> 
            </div>

            <div class="flex flex-col w-80 gap-2">
                <label class="text-2xl">Score</label>
                <input name="score" value="{{$anime->score}}" autocomplete="off" class="border-2 rounded border-pink-400 outline-none focus:border-pink-600 text-neutral-900"> 
            </div>
            
            <div class="flex flex-col w-80 gap-2">
               <label class="text-2xl">rewatched</label>
                <input name="rewatched" value="{{$anime->rewatched}}" autocomplete="off" class="border-2 rounded border-pink-400 outline-none focus:border-pink-600 text-neutral-900"> 
            </div>
                <button class="mt-8 mb-4 rounded text-white font-bold text-lg hover:bg-pink-500 bg-pink-600 hover:transition-all hover:duration-700 py-1 uppercase
                    type="submit">update 
                </button>
            </form>
        </div> 
    </section>
@endsection