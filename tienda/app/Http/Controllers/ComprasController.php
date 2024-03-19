<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Ventas;

class ComprasController extends Controller
{
    public function index()
{
    $compras = Compras::all();
    $ventas = Ventas::all();
    return view('compras', ['compras' => $compras, 'ventas' => $ventas]);
}

}
