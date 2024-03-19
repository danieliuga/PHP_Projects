<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);
    
        $contacto = new Contacto;
        $contacto->nombre = $request->input('nombre');
        $contacto->correo = $request->input('correo');
        $contacto->mensaje = $request->input('mensaje');
        $contacto->save();

        return redirect()->back()->with('success', '¡Tu mensaje ha sido enviado con éxito!');
    }
}
