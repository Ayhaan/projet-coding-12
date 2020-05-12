<?php

namespace App\Http\Controllers;

use App\Head;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $head = Head::first();
        return view('head', compact('head'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function show(Head $head)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function edit(Head $head)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Head $head)
    {
        request()->validate([
            "Title" => 'required',
            "descirption" => 'required|min:5',
        ],[
            "Title.required" =>"Titre : Le champ  est obligatoire.",
            "descirption.required" =>"Description : Le champ  est obligatoire.",
            "descirption.min" =>"Description : Erreur, minimum 5lettres.",
        ]);
        $head->Title = $request->Title;
        $head->descirption = $request->descirption;

        if ($request->hasFile('img_path')) {
            // Supp l'ancienne photo du storage
            Storage::disk('public')->delete($head->url_img);
            // Remmettre la nouvelle phott dans le storage
            $img = $request->file('img_path');  
            $newName= Storage::disk('public')->put('', $img);                                                                         
            // Mettre à jour la nouvelle url
            $head->url_img = $newName;
        } 
        $head->save();
        return redirect()->back()->with('success', 'Vos données ont bien été modifié.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function destroy(Head $head)
    {
        //
    }


}
