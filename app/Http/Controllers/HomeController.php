<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function getHome()
    {
        if(!Auth::check()) return redirect('/login');
        return redirect('/catalog');
        // return redirect()->action([CatalogController::class, 'getIndex']);
        // Más adelante tendremos que comprobar si el usuario está logueado o no, y en caso de que no lo este redirigirle al formulario de login.
    }
}
