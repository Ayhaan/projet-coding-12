<?php

namespace App\Http\Controllers;

use App\About;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('about', compact(('abouts')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('about.create', compact('roles'));
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
            "name"=>"required",
            "description"=>"required|min:5",
            "descriptionSecondary"=>"required|min:5",
            "facebook"=>"required",
            "dribbble"=>"required",
            "twitter"=>"required",
            "pinterest"=>"required",
        ],[
            "name.required"=>"Nom : Champs obligatoire !",
            "description.required"=>"Présentation: Champs obligatoire !",
            "description.min"=>"Erreur: Minimun 5 caractères!",
            "descriptionSecondary.required"=>"déscription : Champs obligatoire !",
            "descriptionSecondary.min"=>"Erreur: Minimun 5 caractères!",
            "facebook.required"=>"Facebook: Champs obligatoire !",
            "dribbble.required"=>"Dribbble: Champs obligatoire !",
            "twitter.required"=>"Twitter: Champs obligatoire !",
            "pinterest.required"=>"Pinterest: Champs obligatoire !",
        ]);
        $about = new About();
        $about-> name = $request-> name;
        $about-> description = $request-> description;
        $about-> descriptionSecondary = $request-> descriptionSecondary;
        $about-> facebook = $request-> facebook;
        $about-> dribbble = $request-> dribbble;
        $about-> twitter = $request-> twitter;
        $about-> pinterest = $request-> pinterest;
        if (Auth::user()->role_id == 1){
            $about-> role_id = $request-> role_id;
        }
        $img = $request->file('img_path');
        $newName= Storage::disk('public')->put('', $img);
        $about->img_url = $newName;
        $about->save();
        return redirect()->route('about.index')->with('success', 'Un nouveau membre crée !');;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $roles = Role::all();
        return view('about.edit', compact('about', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        request()->validate([
            "name"=>"required",
            "description"=>"required|min:5",
            "descriptionSecondary"=>"required|min:5",
            "facebook"=>"required",
            "dribbble"=>"required",
            "twitter"=>"required",
            "pinterest"=>"required",
        ],[
            "name.required"=>"Nom : Champs obligatoire !",
            "description.required"=>"Présentation: Champs obligatoire !",
            "description.min"=>"Erreur: Minimun 5 caractères!",
            "descriptionSecondary.required"=>"déscription : Champs obligatoire !",
            "descriptionSecondary.min"=>"Erreur: Minimun 5 caractères!",
            "facebook.required"=>"Facebook: Champs obligatoire !",
            "dribbble.required"=>"Dribbble: Champs obligatoire !",
            "twitter.required"=>"Twitter: Champs obligatoire !",
            "pinterest.required"=>"Pinterest: Champs obligatoire !",
        ]);
        $about->name = $request->name;
        $about-> description = $request-> description;
        $about-> descriptionSecondary = $request-> descriptionSecondary;
        $about-> facebook = $request-> facebook;
        $about-> dribbble = $request-> dribbble;
        $about-> twitter = $request-> twitter;
        $about-> pinterest = $request-> pinterest;
        
        if (Auth::user()->role_id == 1){
            $about-> role_id = $request-> role_id;
        }

        if ($request->hasFile('img_path')) {
            Storage::disk('public')->delete($about->img_url);
            $img = $request->file('img_path');  
            $newName= Storage::disk('public')->put('', $img);                                                                         
            $about->img_url = $newName;
        } 
        $about->save();
        return redirect()->route('about.index')->with('success', 'Vos données ont bien été modifié.');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        Storage::disk('public')->delete($about->img_url);
        $about->delete();
        return redirect()->back();
    }
}
