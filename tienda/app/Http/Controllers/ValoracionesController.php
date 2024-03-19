<?php

namespace App\Http\Controllers;

use App\Models\Valoracion;
use Illuminate\Http\Request;

class ValoracionesController extends Controller
{
    public function index() {
        $valoraciones = Valoracion::all();
        return view('valoracion', ['valoraciones' => $valoraciones]);
    }
}
