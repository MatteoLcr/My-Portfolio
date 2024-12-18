<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(){
        return view('welcome');
    }
    
    public function showPresto(){
        return view('show.presto');
    }
    public function showSoundstorm(){
        return view('show.soundstorm');
    }
    public function showMenu(){
        return view('show.menu');
    }










    
// servizio mail
    public function contactUs(){
        return view('welcome');
    }

    public function sendEmail(Request $request){
        $contactMail =[
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::to($contactMail['email'])->send(new AdminMail($contactMail));
        return redirect()->back()->with('message', 'Mail inviata con successo!');
    }

}