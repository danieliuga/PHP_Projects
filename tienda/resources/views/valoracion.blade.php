<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valoraciones de Vehiculos</title>
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
            /* Aplica un desenfoque al contenido principal */
            pointer-events: none;
            /* Deshabilita interacciones con el contenido principal */
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

        <header class="bg-gradient-to-r from-blue-500 to-blue-400 py-5 px-4 rounded-b-lg text-center -mt-14">
            <h1 class="text-white text-3xl font-bold tracking-wide mb-4">Valoraciones</h1>
            
            <div class="flex items-center justify-around bg-blue-500 w-64 h-10 rounded-lg shadow-lg mx-auto">
                <a href="/">
                    <button
                        class="button w-10 h-10 rounded-full bg-transparent text-white flex items-center justify-center transition-transform duration-300 ease-in-out cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"
                            stroke-width="0" fill="currentColor" stroke="currentColor" class="text-xl">
                            <path
                                d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z">
                            </path>

                        </svg>
                    </button>
                </a>
                @role('editor')
                    <a href="/modificar">
                        <button
                            class="button w-10 h-10 rounded-full bg-transparent text-white flex items-center justify-center transition-transform duration-300 ease-in-out cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" aria-hidden="true"
                                viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="text-xl">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linejoin="round"
                                    stroke-linecap="round"></path>
                            </svg>
                        </button>
                    </a>
                @endrole
                <a href="/dashboard">
                    <button
                        class="button w-10 h-10 rounded-full bg-transparent text-white flex items-center justify-center transition-transform duration-300 ease-in-out cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                            stroke-width="0" fill="currentColor" stroke="currentColor" class="text-xl">
                            <path
                                d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z">
                            </path>
                        </svg>
                    </button>
                </a>
                <a href="/carrito">
                    <button
                        class="button w-10 h-10 rounded-full bg-transparent text-white flex items-center justify-center transition-transform duration-300 ease-in-out cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round"
                            stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none"
                            stroke="currentColor" class="text-xl">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </button>
                </a>
                <a href="/valoraciones">
                    <button
                        class="button w-10 h-10 rounded-full bg-transparent text-white flex items-center justify-center transition-transform duration-300 ease-in-out cursor-pointer">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                            <path d="m28 30h8a3 3 0 0 1 3 3v23a0 0 0 0 1 0 0h-14a0 0 0 0 1 0 0v-23a3 3 0 0 1 3-3z"
                                fill="#4aa5ff" />
                            <circle cx="32" cy="18" fill="#e6f3ff" r="15" />
                            <path
                                d="m32 24.98757 5.03973 1.79213a1.382 1.382 0 0 0 1.84451-1.34011l-.14705-5.34687 3.26181-4.23928a1.382 1.382 0 0 0 -.70454-2.16835l-5.13062-1.51241-3.02384-4.41215a1.382 1.382 0 0 0 -2.27994 0l-3.02384 4.41215-5.13062 1.51241a1.382 1.382 0 0 0 -.70454 2.16835l3.26178 4.23928-.14705 5.34687a1.382 1.382 0 0 0 1.84451 1.34011z"
                                fill="#4aa5ff" />
                            <g fill="#e6f3ff">
                                <path
                                    d="m10 38h8a3 3 0 0 1 3 3v15a0 0 0 0 1 0 0h-14a0 0 0 0 1 0 0v-15a3 3 0 0 1 3-3z" />
                                <path
                                    d="m46 35h8a3 3 0 0 1 3 3v18a0 0 0 0 1 0 0h-14a0 0 0 0 1 0 0v-18a3 3 0 0 1 3-3z" />
                                <rect height="4" rx="2" width="58" x="3" y="56" />
                            </g>
                            <path
                                d="m32 34a16.01839 16.01839 0 0 0 16.00006-15.99988c-.87591-21.22012-31.12091-21.22626-32.00006-.00012a16.01833 16.01833 0 0 0 16 16zm0-30a14.01579 14.01579 0 0 1 14.00006 13.99988c-.76606 18.56762-27.2312 18.57306-28.00006.00012a14.01572 14.01572 0 0 1 14-14z"
                                fill="#21257c" />
                            <path
                                d="m59 55h-1v-17a4.00427 4.00427 0 0 0 -4-4h-8a4.00427 4.00427 0 0 0 -4 4v17h-2v-20.41986a1.00011 1.00011 0 0 0 -2-.00006v18.41992h-12v-18.41992a1 1 0 0 0 -2 0v20.41992h-2v-14a4.00427 4.00427 0 0 0 -4-4h-8a4.00427 4.00427 0 0 0 -4 4v14h-1a3.0002 3.0002 0 0 0 .0001 6h53.9999a3.0002 3.0002 0 0 0 0-6zm-13-19h8a2.00229 2.00229 0 0 1 2 2v15h-12v-15a2.00229 2.00229 0 0 1 2-2zm-36 3h8a2.00229 2.00229 0 0 1 2 2v12h-12v-12a2.00229 2.00229 0 0 1 2-2zm49 20h-54a1.00013 1.00013 0 0 1 .00006-2h53.99994a1.00013 1.00013 0 0 1 0 2z"
                                fill="#21257c" />
                        </svg>
                    </button>
                </a>
            </div>
        </header>

        <div class="grid grid-cols-3 gap-4 w-full max-w-full mt-4 mb-4">
            @foreach ($valoraciones as $valoracion)
                <div class="car-listing bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $valoracion->vehiculos->imagen }}');">
                    <h3 class="mt-4 text-white font-bold mb-4 bg-black bg-opacity-50 uppercase">{{ $valoracion->user->name }}</h3>
                    <p class="text-white font-bold flex-grow mb-4 bg-black bg-opacity-50">Vehículo: <span class="text-white font-bold flex-grow mb-4">{{ $valoracion->vehiculos->modelo }}</span></p>
                    <p class="text-white font-bold flex-grow mb-4 bg-black bg-opacity-50">Puntuación:
                        <span class="text-white font-bold flex-grow mb-4">
                            @for ($i = 0; $i < $valoracion->puntuacion; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500 fill-current inline-block">
                                    <path d="M12 1l3.09 6.96 7.02.61-5.36 4.86 1.27 7.03L12 18.77l-6.02 3.78 1.27-7.03L1.89 8.57l7.02-.61L12 1zm-2.58 12.71L12 14.18l2.58-1.47-.49-2.75 2.09-1.91-2.78-.24L12 5.32l-1.39 3.18-2.78.24 2.09 1.91-.49 2.75z"/>
                                </svg>
                            @endfor
                        </span>
                    </p>
                    <p class="text-white font-bold flex-grow mb-4 bg-black bg-opacity-50">Comentario: <span class="text-white font-bold flex-grow mb-4">{{ $valoracion->comentario }}</span></p>
                </div>
            @endforeach
        </div>        

        <div class="bg-black text-white px-2 py-1 rounded-md text-center">
            <a href="/" class="text-blue-500 hover:underline">Volver a la página principal</a>
        </div>
    </div>
</body>

</html>
