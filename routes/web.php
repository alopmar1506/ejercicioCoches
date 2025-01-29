<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerConcesionario;

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

Route::get('/concesionario', [controllerConcesionario::class,'index'])->name('concesionario');
Route::get('/concesionario/{id}', [controllerConcesionario::class, 'show'])->name('mostrarCoche');
Route::get('/crearCoche', [controllerConcesionario::class, 'create'])->name('crearCoche');
Route::post('/concesionario',[controllerConcesionario::class,'store'])->name('guardarCoche');
Route::get('/editarCoche/{id}', [controllerConcesionario::class, 'edit'])->name('editarCoche');
Route::put('/concesionario/{id}', [controllerConcesionario::class, 'update'])->name('actualizarCoche');
Route::delete('/concesionario/{id}', [controllerConcesionario::class, 'destroy'])->name('eliminarCoche');


