<?php

use App\Http\Controllers\copisteriaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('copisteria');
// });

Route::get('/imprimir', [copisteriaController::class, 'imprimir']);
Route::get('/impresora{id}', [copisteriaController::class, 'impresora']);
Route::get('/', [copisteriaController::class, 'mostrar']);

// Route::resource('copisteria', copisteriaController::class);
// php artisan make:model Copisteria -mr --> y te crea el model el migrate ye cl controllere3
