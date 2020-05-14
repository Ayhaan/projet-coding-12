<?php

namespace App\Http\Controllers;

use App\Logiciel;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolio', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $logiciels = Logiciel::all();
        return view('portfolio.create', compact(('logiciels')));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "span" => "required",
            "img_path" =>"required",
        ],[
            "span.required" => "Nom du projet: Le champs est obligatoire !",
            "img_path.required" => "Url erreur: Importez une image ! ",
        ]);
        $img = $request->file('img_path');
        $newName= Storage::disk('public')->put('', $img);
        $portfolio = new Portfolio();

        $portfolio->url_img = $newName;
        $portfolio->span = $request->span;
        if (Auth::user()->role_id == 1){
            $portfolio->logiciel_id = $request->logiciel_id;
        }
        $portfolio->save();
        return redirect()->route('portfolio.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $logiciels = Logiciel::all();
        return view('portfolio.edit', compact('portfolio', 'logiciels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        request()->validate([
            "span" => 'required',
        ],[
            "span.required" =>"Titre : Le champ  est obligatoire.",
        ]);
        if (Auth::user()->role_id == 1){
            $portfolio->logiciel_id = $request->logiciel_id;
        }

        $portfolio->span = $request->span;
        if ($request->hasFile('img_path')) {
            // Supp l'ancienne photo du storage
            Storage::disk('public')->delete($portfolio->url_img);
            // Remmettre la nouvelle phott dans le storage
            $img = $request->file('img_path');  
            $newName= Storage::disk('public')->put('', $img);                                                                         
            // Mettre à jour la nouvelle url
            $portfolio->url_img = $newName;
        } 
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('success', 'Vos données ont bien été modifié.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {

        Storage::disk('public')->delete($portfolio->url_img);
        $portfolio->delete();
        return redirect()->back();
    }
}
