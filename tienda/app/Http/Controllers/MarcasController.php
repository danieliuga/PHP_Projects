<?php

namespace App\Http\Controllers;

use App\Models\Marcas;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index() {
        $marcas = Marcas::all();
        return view('marcas', ['marcas' => $marcas]);
    }
}
