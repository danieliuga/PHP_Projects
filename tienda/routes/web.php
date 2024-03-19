<?php

use App\Http\Controllers\AccesoriosController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValoracionesController;
use App\Http\Controllers\VehiculosController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/venta/{tipo}', [VehiculosController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/submit', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/users', [UserController::class, 'index']);
Route::get('/compras', [ComprasController::class, 'index']);
Route::get('/marcas', [MarcasController::class, 'index']);
Route::get('/valoraciones', [ValoracionesController::class, 'index']);
Route::get('/accesorios', [AccesoriosController::class, 'index']);

Route::prefix('modificar')->group(function () {
    Route::get('/', [VehiculosController::class, 'modificar']);
    Route::get('/crear', [VehiculosController::class, 'create'])->name('modificar.create');
    Route::post('/crear', [VehiculosController::class, 'store'])->name('modificar.store');
    Route::get('/editar', [VehiculosController::class, 'edit'])->name('modificar.edit');
    Route::put('/editar', [VehiculosController::class, 'update'])->name('modificar.update');
    Route::get('/eliminar', [VehiculosController::class, 'eliminar'])->name('modificar.destroy');
    Route::delete('/eliminar', [VehiculosController::class, 'destroy'])->name('modificar.eliminar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/comprar/vehiculo/{modelo}', [CompraController::class, 'comprarVehiculo'])->middleware('auth');
    Route::get('/comprar/accesorio/{modelo}', [CompraController::class, 'comprarAccesorio'])->middleware('auth');
    Route::get('/carrito', [CompraController::class, 'index'])->middleware('auth');
    Route::get('/carrito/añadir/{id}', [CompraController::class, 'agregarAlCarrito'])->middleware('auth');
    Route::get('/carrito/eliminar/{id}', [CompraController::class, 'eliminarDelCarrito'])->middleware('auth');
    Route::post('/carrito/comprar-todo', [CompraController::class, 'comprarTodo'])->name('comprar.todo')->middleware('auth');
});

require __DIR__ . '/auth.php';
