<?php

namespace App\Http\Controllers;

use App\Contact;
use App\email as AppEmail;
use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('index','create','store','show','edit','update','delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $contacts = Contact::all();
        $mails= AppEmail::all()->reverse();
        return view('contact', compact('contacts', "mails"));
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        request()->validate([
            "description"=>"required|min:5",
            "adress"=>"required|",
            "phone"=>"required|min:10",
            "email"=>"required|email",
        ]);
        $contact->description = $request->description;
        $contact->adress = $request->adress;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->save();
        return redirect()->back()->with('success', "Le contenu est bien été modifé !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppEmail $appemail)
    {   
           //
    }

    public function seed(Request $request)
    {        
        $request->validate([
        "email" =>'required',
        "subject" =>'required|email',
        "message" =>'required|min:5'
    ]);
        
        Mail::to('ayhan.cln97@gmail.com')->send(new Email($request->email, $request->subject, $request->message));
        return redirect()->back()->with('success', 'Message sent');

    }   
    public function mail(Request $request)
    {        
        request()->validate([
            "email"=>"required|email",
            "subject"=>"required",
            "message"=>"required|min:5",
        ]);
        $mail = new AppEmail();
        $mail->email = $request->email;
        $mail->subject = $request->subject;
        $mail->message = $request->message;
        $mail->save();
        return redirect()->back()->with('success', 'Message sent');
    }

    public function delete(AppEmail $mail)
    {
        // dd($mail);
        $mail->delete();
        return redirect()->back();
    }
}
