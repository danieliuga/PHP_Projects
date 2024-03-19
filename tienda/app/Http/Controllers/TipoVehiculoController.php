<?php

namespace App\Http\Controllers;

use App\Models\TipoVehiculos;
use Illuminate\Http\Request;

class TipoVehiculoController extends Controller
{
    public function index()
    {
        $tipoVehiculos = TipoVehiculos::all();
        return view('tipoVehiculo', ['tipoVehiculos' => $tipoVehiculos]);
    }
}
