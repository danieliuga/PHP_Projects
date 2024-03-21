<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Venta de Vehiculos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .car-listing {
            width: 100%;
            width: 100%;
            margin: 20px 10px 0 0;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            box-sizing: border-box;
        }

        .menu-icon {
            font-size: 24px;
            cursor: pointer;
            z-index: 100;
            position: fixed;
            top: 35px;
            left: 40px;
            color: black;
        }

        .menu-icon:hover {
            color: rgb(96, 165, 250);
        }

        #menu-toggle {
            display: none;
        }

        #menu-toggle:checked+label {
            color: white;
        }

        #menu-toggle:checked~nav {
            display: block;
        }

        #menu-toggle:checked~.main {
            filter: blur(4px);
            pointer-events: none;
        }
    </style>
</head>

<body class="font-sans bg-gradient-to-r from-blue-300 to-blue-600 m-0 p-0">
    <div class="mx-auto px-4 py-20">

        <input type="checkbox" id="menu-toggle" class="hidden">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>


        <nav class="hidden fixed top-0 left-0 bg-blue-500 w-1/6 h-full text-center shadow-md pt-20 z-20">
            <a href="/venta/coche" class="block py-4 text-white hover:bg-gray-500">Venta de Coches</a>
            <a href="/venta/moto" class="block py-4 text-white hover:bg-gray-500">Venta de Motos</a>
            <a href="/accesorios" class="block py-4 text-white hover:bg-gray-500">Accesorios</a>
            <a href="/marcas" class="block py-4 text-white hover:bg-gray-500">Marcas</a>
            <a href="/contact" class="block py-4 text-white hover:bg-gray-500">Contactar</a>
            @role('admin')
                <a href="/users" class="block py-4 text-white hover:bg-gray-500">Usuarios</a>
                <a href="/compras" class="block py-4 text-white hover:bg-gray-500">Compras</a>
            @endrole
        </nav>
        @extends('layouts.header')
        @section('content')
            <div class="grid grid-cols-3 gap-4 w-full max-w-full mt-10 mb-10">
                @foreach ($accesorios as $accesorio)
                    <div class="accessory-listing">
                        <img src="{{ asset($accesorio->imagen) }}" alt="{{ $accesorio->modelo }}"
                            class="mx-auto object-contain h-48 max-w-full" />
                        <h3 class="mt-4 text-gray-900 mb-4">{{ $accesorio->modelo }}</h3>
                        <p class="text-gray-600 flex-grow mb-4">Precio: {{ number_format($accesorio->precio, 2) }} €</p>
                        <p class="text-gray-600 flex-grow mb-4">Stock: {{ number_format($accesorio->stock) }}</p>
                        <p class="text-gray-600 flex-grow mb-4">Descripción: {{ $accesorio->descripcion }}</p>
                        <a href="/comprar/accesorio/{{ $accesorio->modelo }}"
                            class="block py-2 px-4 bg-blue-500 text-white rounded-md transition-colors duration-300 ease-in-out text-center hover:bg-blue-600"
                            @guest disabled @endguest>
                            @auth
                                @foreach (auth()->user()->cuenta_bancarias as $cuenta_bancaria)
                                    @if ($cuenta_bancaria->dinero >= $accesorio->precio)
                                        Comprar
                                    @else
                                        No suficiente dinero
                                    @endif
                                @endforeach
                            @else
                                No hay cuenta bancaria asociada
                    @endif
                    </a>
                </div>
                @endforeach

            </div>

            <div class="bg-black text-white px-2 py-1 rounded-md text-center">
                <a href="/" class="text-blue-500 hover:underline">Volver a la página principal</a>
            </div>
            </div>
        @endsection
    </body>

    </html>
