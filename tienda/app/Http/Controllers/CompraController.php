<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use App\Models\Carrito;
use App\Models\Compras;
use App\Models\Vehiculos;
use App\Models\Ventas;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    public function comprarVehiculo($modelo)
    {
        $vehiculo = Vehiculos::where('modelo', $modelo)->first();
        if (!$vehiculo) {
            return redirect()->back()->with('error', 'La vehiculo no está disponible para comprar.');
        }

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para comprar.');
        }

        $compras = Compras::where('vehiculos_id', $vehiculo->id)->first();

        if ($user && $user->cuenta_bancarias()->exists()) {
            foreach ($user->cuenta_bancarias as $cuenta_bancaria) {
                if ($cuenta_bancaria && $cuenta_bancaria->dinero >= $vehiculo->precio && $vehiculo->stock > 0) {
                    $cuenta_bancaria->dinero -= $vehiculo->precio;
                    $vehiculo->stock -= 1;
                    if ($compras->estado == "pendiente") {
                        $compras->estado = "comprado";
                    }
                    $cuenta_bancaria->save();
                    $vehiculo->save();
                    $compras->save();

                    return redirect()->back()->with('success', '¡Compra realizada con éxito!');
                } else {
                    return redirect()->back()->with('error', 'No tienes suficiente dinero para comprar este vehiculo.');
                }
            }
        }
    }

    public function comprarAccesorio($modelo)
    {
        $accesorio = Accesorio::where('modelo', $modelo)->first();

        if (!$accesorio) {
            return redirect()->back()->with('error', 'El accesorio no está disponible para comprar.');
        }

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para comprar.');
        }

        if ($user && $user->cuenta_bancarias()->exists()) {
            foreach ($user->cuenta_bancarias as $cuenta_bancaria) {
                if ($cuenta_bancaria && $cuenta_bancaria->dinero >= $accesorio->precio && $accesorio->stock > 0) {
                    $cuenta_bancaria->dinero -= $accesorio->precio;
                    $accesorio->stock -= 1;
                    $cuenta_bancaria->save();
                    $accesorio->save();

                    Ventas::create([
                        'user_id' => $user->id,
                        'accesorios_id' => $accesorio->id,
                    ]);

                    return redirect()->back()->with('success', '¡Compra realizada con éxito!');
                } else {
                    return redirect()->back()->with('error', 'No tienes suficiente dinero para comprar este accesorio.');
                }
            }
        }
    }

    public function index()
    {
        $compras = Compras::all();
        return view('carrito', ['compras' => $compras]);
    }

    public function agregarAlCarrito($modelo)
    {
        $vehiculo = Vehiculos::where('modelo', $modelo)->first();

        if (!$vehiculo) {
            return redirect()->back()->with('error', 'La vehiculo no está disponible para añadir al carrito.');
        }

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para añadir al carrito.');
        }

        if ($user && $user->cuenta_bancarias()->exists()) {
            Compras::create([
                'user_id' => $user->id,
                'vehiculos_id' => $vehiculo->id,
                'tipo_id' => $vehiculo->tipo_id,
            ]);
            return redirect()->back()->with('success', '¡Vehiculo agregado al carrito con éxito!');
        }
    }

    public function eliminarDelCarrito($id)
    {
        $item = Compras::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('success', '¡Vehiculo eliminado del carrito con éxito!');
    }
// no funciona comprar todo
    public function comprarTodo()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para comprar.');
        }

        $compras = Compras::where('user_id', $user->id)
            ->where('estado', 'pendiente')
            ->get();
            foreach ($compras as $compra) {
                if ($compra->vehiculos) {
                    if ($user && $user->cuenta_bancarias()->exists()) {
                        foreach ($user->cuenta_bancarias as $cuenta_bancaria) {
                            if ($cuenta_bancaria && $cuenta_bancaria->dinero >= $compra->vehiculos->precio && $compra->vehiculos->stock > 0) {
                                $cuenta_bancaria->dinero -= $compra->vehiculos->precio;
                                $compra->vehiculos->stock -= 1;
                                $compra->estado = 'comprado';
                                $cuenta_bancaria->save();
                                $compra->vehiculos->save();
                                $compra->save();
                            }
                        }
                    }
                } else {
                    dd('No hay vehículo asociado a esta compra:', $compra);
                }
            }

        return redirect()->back()->with('success', '¡Todos los artículos del carrito han sido comprados con éxito!');
    }

}
