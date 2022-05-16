<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    // Envio de correo electrónico

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(Request $request) {

        return $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $details = $request;
        $emailContacto = $request->email;
        $contacto = Contacto::all();

        Mail::to($contacto->email)->send(new \App\Mail\Contacto($details));
        Mail::to($emailContacto)->send(new \App\Mail\Respuesta());

        return back()->with('success', 'Tu mensaje se ha enviado correctamente');

    }
}
