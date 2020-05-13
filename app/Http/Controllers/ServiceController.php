<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('service', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
            'logo'=>'required',
            'Title'=>'required',
            'span'=>'required|min:5',
        ],[
            'logo.required' => "Logo : Le champs est obligatoire",
            'Title.required' => "Titre : Le champs est obligatoire",
            'span.required' => "Description : Le champs est obligatoire",
            'span.max' => "Erreur description: Minimum 10 caractéres."
        ]); 

        $service = new Service();
        $service->logo = $request->logo;
        $service->title = $request->Title;
        $service->span = $request->span;
        $service->save();
        return redirect()->route('service.index')->with('success', 'Félicitation, votre Role à bien été crée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        request()->validate([
            'logo'=>'required',
            'Title'=>'required',
            'span'=>'required|min:5',
        ],[
            'logo.required' => "Logo : Le champs est obligatoire",
            'Title.required' => "Titre : Le champs est obligatoire",
            'span.required' => "Description : Le champs est obligatoire",
            'span.max' => "Erreur description: Minimum 10 caractéres."
        ]); 
        $service->logo = $request->logo;
        $service->title = $request->Title;
        $service->span = $request->span;
        $service->save();
        return redirect()->route('service.index')->with('success', 'Félicitation, votre Role à bien été modifié.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }
}
