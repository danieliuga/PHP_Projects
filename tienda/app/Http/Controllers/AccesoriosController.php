<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use Illuminate\Http\Request;

class AccesoriosController extends Controller
{
    public function index() {
        $accesorios = Accesorio::all();
        return view('accesorio', ['accesorios' => $accesorios]);
    }
}
