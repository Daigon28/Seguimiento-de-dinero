<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function index()
    {
        return("Listado de cuentas");
    }

    public function create()
    {
        return("Creando las cuentas");
    }
    
    public function show($cuenta)
    {
        return("Mostrando la cuenta ".$cuenta);
    }

}
