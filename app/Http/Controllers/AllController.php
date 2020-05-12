<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Head;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllController extends Controller
{
    public function show(){
        $head = Head::first();
        $services = DB::table('services')->simplePaginate('4');
        $portfolios = Portfolio::all();
        $abouts = About::take(4)
                ->orderBy('role_id')
                ->get();
        $contact = Contact::first();
        return view('index', compact('head', 'services', 'portfolios', 'abouts', 'contact'));
                
    }
}
