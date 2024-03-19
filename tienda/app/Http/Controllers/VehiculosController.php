<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Models\Vehiculos;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    public function index(string $tipo)
    {
        $tipo = Tipo::where('nombre', $tipo)->firstOrFail();
        $vehiculos = $tipo->vehiculos;
        return view('vehiculo', ['vehiculos' => $vehiculos]);

    }

    public function modificar()
    {
        $vehiculos = Vehiculos::all();
        return view('modificar', ['vehiculos' => $vehiculos]);
    }

    public function create()
    {
        $tipos = Tipo::all();
        return view('create', ['tipos' => $tipos]);
    }

    public function store(Request $request)
    {

        $vehiculo = new Vehiculos();
        $vehiculo->modelo = $request->modelo;
        $vehiculo->precio = $request->precio;
        $vehiculo->stock = $request->stock;
        $vehiculo->descripcion = $request->descripcion;
        $path = $request->file('imagen')->store('img', 'public');
        $vehiculo->imagen = 'storage/' . $path;
        $vehiculo->tipo_id = $request->tipo_id;

        $vehiculo->save();

        return redirect('/modificar')->with('success', 'Vehiculo creado correctamente');
    }

    public function edit()
    {
        $vehiculos = Vehiculos::all();
        return view('edit', compact('vehiculos'));
    }
    
    public function update(Request $request)
    {
        $id = $request->vehiculo_id;
        $vehiculo = Vehiculos::find($id);
        $vehiculo->modelo = $request->modelo;
        $vehiculo->precio = $request->precio;
        $vehiculo->stock = $request->stock;
        $vehiculo->descripcion = $request->descripcion;
    
        $vehiculo->save();
    
        return redirect('/modificar')->with('success', 'Vehículo actualizado correctamente');
    }

    public function eliminar()
    {
        $vehiculos = Vehiculos::all();
        return view('destroy', compact('vehiculos'));
    }

    public function destroy(Request $request)
    {
        $id = $request->vehiculo_id;
        $vehiculo = Vehiculos::find($id);
        $vehiculo->delete();
        return redirect('/modificar')->with('success', 'Vehículo eliminado correctamente');
    }
}
