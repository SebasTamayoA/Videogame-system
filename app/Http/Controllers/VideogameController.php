<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VideogameRequest;
use App\Models\Videogame;
use App\Enums\Platforms;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //var_dump(videogame::all());die;
        //return videogame::all();
        return view('videogames.index', [
            'videogames' => Videogame::all()->sortBy('id')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videogames.create',[
            'platforms' => Platforms::cases()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VideogameRequest $request)
    {
        //var_dump($request->all());die;
        //var_dump($request->videogame_name);die;
        // $videogame = new Videogame();
        // $videogame->name = $request->name;
        // $videogame->genre = $request->genre;
        // $videogame->release_date = $request->release_date;
        // $videogame->description = $request->description;
        // $videogame->rating = $request->rating;
        // $videogame->price = $request->price;
        // $videogame->is_multiplayer = $request->is_multiplayer;
        // $videogame->platform = $request->platform;
        // $videogame->save();
        Videogame::create($request->all());
        return redirect('/videogames');
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        //$videogame = videogame::findOrFail($id);
        return view('videogames.show', [
            'videogame' => $videogame
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        //$videogame = videogame::findOrFail($id);
        //var_dump($videogame);die;
        return view('videogames.edit', [
            'videogame' => $videogame,
            'platforms' => Platforms::cases()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VideogameRequest $request, Videogame $videogame)
    {
        // $videogame->name = $request->name;
        // $videogame->genre = $request->genre;
        // $videogame->release_date = $request->release_date;
        // $videogame->description = $request->description;
        // $videogame->rating = $request->rating;
        // $videogame->price = $request->price;
        // $videogame->is_multiplayer = $request->is_multiplayer;
        // $videogame->platform = $request->platform;
        // $videogame->update();

        $videogame->update($request->all());

        return redirect('/videogames');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();
        return redirect('/videogames');
    }
}
