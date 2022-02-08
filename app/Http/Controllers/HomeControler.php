<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function __invoke()
    {
        return "Bienvenido a la página principal de mi primer proyecto";
    }
}
