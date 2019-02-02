<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Models\Movie;
use Image;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    
    public function list()
    {
        $actors = Character::all();
        return view('character.list', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movie::all();
        return view('character.index',compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $character = new Character();
        $this->validate($request,$character->getValidation(1),$character->getValidation(2));
        $file = $request->file('image');
        $resizeFile = Image::make($file);
        $fileName = md5($file->getClientOriginalName().time()).'.'.$file->getClientOriginalExtension();
        $resizeFile->resize(700,800);
        $resizeFile->save(public_path().'/imgs/'.$fileName);
        $character->heroe = $request->get('heroe');
        $character->real_name = $request->get('real_name');
        $character->description = $request->get('description');
        $character->image = public_path().'/imgs/'.$fileName;
        $character->movie_id = $request -> get('pelicula');
        $character->save();

        return back()->withErrors(['success'=>'se registro correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        //
    }
}
