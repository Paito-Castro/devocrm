<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\SolicitudeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EstadosolicitudController;
use App\Http\Controllers\CotizacioneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('/empleado', function () {
    return view('empleado.index');
}); 

Route::get('/empleado/create',[EmpleadoController::class,'create']);*/


Route::get("/servicios", function() {
    return view('servicios.index');
});

Route::get('/servicios/create',[ServiciosController::class,'create']);

Route::resource('servicios', ServiciosController::class)->middleware('auth');


Route::resource('empleado', EmpleadoController::class)->middleware('auth');//puedo acceder a todas las URLs

Auth::routes(['register'=>true,'reset'=>true]); // elimina registro y olvido de contraseñas

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');; // Cuando el usuario escriba home lleva al CRUD

Route::group(['middleware' => 'auth'], function () { // Si se autentica
    Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth'); // Redirecciona a index
});


Route::get("/clientes", function() {
    return view('clientes.index');
});

Route::get('/clientes/create',[ClientesController::class,'create']);

Route::resource('clientes', ClientesController::class)->middleware('auth');

Route::resource('solicitudes', App\Http\Controllers\SolicitudeController::class)->middleware('auth');

Route::resource('estadosolicitud', App\Http\Controllers\EstadosolicitudController::class)->middleware('auth');

Route::resource('cotizaciones', App\Http\Controllers\CotizacioneController::class)->middleware('auth');

Route::get('/solicitudes-pdf', [SolicitudeController::class,'pdf'])->name('solicitudes.pdf')->middleware('auth');


