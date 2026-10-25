<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controllers\HasMiddleware;

class HomeController extends Controller implements HasMiddleware
{
    /**
     * Proteger la pagina de inicio.
     */
    public static function middleware(): array
    {
        return ['auth'];
    }

    /**
     * Mostrar la pagina principal.
     */
    public function index()
    {
        return view('home');
    }
}
