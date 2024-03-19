<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;

class MotosController extends Controller
{
    public function index()
    {
        $motos = Moto::all();
        return view('moto', ['motos' => $motos]);
    }

    public function modificar()
    {
        $motos = Moto::all();
        return view('modificar', ['motos' => $motos]);
    }

    public function create()
    {
        return view('modificar.create');
    }

    public function store(Request $request)
    {
        // Validar y almacenar la nueva moto
        // ...

        return redirect('/modificar')->with('success', 'Moto creada correctamente');
    }

    public function edit($id)
    {
        $moto = Moto::find($id);
        return view('modificar.edit', compact('moto'));
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar la moto
        // ...

        return redirect('/modificar')->with('success', 'Moto actualizada correctamente');
    }

    public function destroy($id)
    {
        $moto = Moto::find($id);
        $moto->delete();

        return redirect('/modificar')->with('success', 'Moto eliminada correctamente');
    }
}
