<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class contactFormController extends Controller
{
     public function create(){
                                        //returna la vista del formulario del contacto
        return view('contact');
}



public function store(Request $request){

    //almacenamiento de datos que voy introduciendo
             // Capture the data
            
           $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Mail::to('p1@example.com')->send(new ContactMail($validated));

        return back()->with('success', 'Thank you for your message!');
    }
    }


    
      



