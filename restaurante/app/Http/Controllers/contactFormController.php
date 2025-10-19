<?php

namespace App\Http\Controllers;

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
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');


    return back()->with('success', 'Thank you for your message!');



      }
}


