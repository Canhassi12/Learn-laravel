<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $animes = Anime::all();
        // return view('index', ['fds'=> $fds]); // array associativo
        return view('index', compact('animes'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        $anime = new Anime();

        $anime->name = $inputs['name'];
        $anime->score = $inputs['score'];
        $anime->rewatched = $inputs['rewatched'];
        
        $anime->save();

        return redirect()->back()->with('success', 'anime add with success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // $inputs= $request->all();

        // $anime->name = $inputs['name'];
        // $anime->score = $inputs['score'];
        // $anime->rewatched = $inputs['rewatched'];
        
        // $anime->save();

        // XGH = XTREME GO HORSE (SE ESTA FUNCIONANDO A GENTE NÃO MEXE!!)

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
