<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use App\Models\Vehiculos;
use Illuminate\Http\Request;
use User;

class CochesController extends Controller
{
    public function index(string $tipo)
    {
        $coches = Vehiculos::all();
        return view('coche', ['coches' => $coches]);
    }

    public function modificar()
{
    $coches = Coche::all();
    return view('cambiar', ['coches' => $coches]);
}

    public function create()
    {
        return view('cambiar.create');
    }

    public function store(Request $request)
    {
        // Validar y almacenar el nuevo coche
        // ...

        return redirect('/cambiar')->with('success', 'Coche creado correctamente');
    }

    public function edit($id)
    {
        $coche = Coche::find($id);
        return view('cambiar.edit', compact('coche'));
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar el coche
        // ...

        return redirect('/cambiar')->with('success', 'Coche actualizado correctamente');
    }

    public function destroy($id)
    {
        $coche = Coche::find($id);
        $coche->delete();

        return redirect('/cambiar')->with('success', 'Coche eliminado correctamente');
    }
}
