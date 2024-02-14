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

Route::controller(CuentaController::class)->group(function(){
   Route::get('/cuentas', 'index');
   Route::get('/cuentas/create', 'create');
   Route::get('/cuentas/{cuenta}', 'show');
});

