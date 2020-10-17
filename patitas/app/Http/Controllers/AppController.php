<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function mostrarCrearAlerta()
    {
        return view('user/crearAlerta');
    }
}
