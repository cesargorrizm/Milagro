<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    // public function __construct() {

    //     $this->middleware('can:tipo.create')->only('send', 'request');
    // }
    // Envio de correo electrónico

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(Request $request) {

        
        // return $request->all();
         $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:9',
                'date' => 'required'
            ]);
            
            $details = $request;
            // $emailContacto = $request->email;
            $contacto = Contacto::first();
            // return $contacto->email;
            $emailContacto = $contacto->email;
            
        Mail::to($contacto->email)->send(new \App\Mail\Contacto($details));
        Mail::to($emailContacto)->send(new \App\Mail\Respuesta());

        return 'Tu mensaje se ha enviado correctamente';
        // return back()->with('success', 'Tu mensaje se ha enviado correctamente');

    }
}
