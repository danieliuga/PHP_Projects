<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\impresion;
use App\Models\impresora;
use Illuminate\Http\Request;

class copisteriaController extends Controller
{
    public function prueba()
    {
        return view('copisteria');
    }

    public function imprimir(Request $request)
    {
        $impresion = new impresion;
        $texto = $request->texto;
        $idImpresora = $request->n_impresora;

        $impresion->texto = $texto;
        $impresion->idImpresora = $idImpresora;
        $impresion->save();

        return redirect('/');
    }

    public function impresora($id)
    {
        $impresora = impresora::find($id);
        $impresiones = impresion::where('idImpresora', $id)->first();
        if ($impresora && $impresiones) {
            $impresora->tintaAmarilla -= 2;
            $impresora->tintaCian -= 2;
            $impresora->tintaNegra -= 2;
            $impresora->tintaRosa -= 2;

            $impresiones->delete();
            $impresora->save();
        }
        return redirect('/');
    }

    public function mostrar()
    {
        $imprimir = impresion::all();
        $impresoras = impresora::all();
        return view('copisteria', ['imprimir' => $imprimir, 'impresoras' => $impresoras]);
    }

}