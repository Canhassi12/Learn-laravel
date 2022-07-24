<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAnimeRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {     
        $animes = Anime::all();

        // return view('index', ['fds'=> $fds]); // array associativo
        return view('index', compact('animes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:23',
            'score' => 'required|integer|min:0|max:10',
            'rewatched' => 'required|integer|min:1|max:999' 
        ]);

        if ($validator->fails()) {
            $messages = $validator->getMessageBag()->first();

            return response()->view( 'index', compact('messages'));
        }


        $inputs = $request->all();

        Anime::create($inputs);

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $anime)
    {
        return view('edit', compact('anime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Anime $anime, Request $request)
    {
        $inputs = $request->except(['_token', '_method']);

        $anime->fill(collect($inputs)->toArray());

        $anime->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anime::where('id', $id)->delete();

        return redirect('/');
    }
}