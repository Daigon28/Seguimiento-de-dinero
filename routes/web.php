<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuentaController;

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
   /* return view('welcome');*/
   return("Hola puta");
});

Route::get('/cuentas', [CuentaController::class, 'index']);

Route::get('/cuentas/create', [CuentaController::class, 'create']);

Route::get('/cuentas/{cuenta}', [CuentaController::class, 'show']);
