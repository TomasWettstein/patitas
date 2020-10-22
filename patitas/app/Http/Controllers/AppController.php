<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Categoria;
use App\Models\Alerta;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function mostrarCrearAlerta()
    {
        return view('user/crearAlerta');
    }
    public function mostrarFormAlerta()
    {
        $categorias = Categoria::all();
        return view('user/alertaForm')->with('categorias', $categorias);
    }
    public function crearAlerta(Request $datos)
    {
        $usuario = Auth::user()->id;
        $reglas = [
            "animal" => "required",
            "imagen" => "mimes:jpg,jpeg,png,bmp|required",
            "zona" => "required",
            "detalle" => "required",
            "categoria" => "required",
            
        ];
        $mensajes = [
            "required" => "El campo :attribute es obligatorio",
            "mimes" => "El campo :attribute debe ser una imagen valida",
        ];
        $this->validate($datos, $reglas, $mensajes);
        $nuevaAlerta = new Alerta();
        $nuevaAlerta->animal = $datos['animal'];
        //Subir imagen
        $ruta = $datos->file("imagen")->store("public");
        $nombreDeArchivo = basename($ruta);
        $nuevaAlerta->imagen = $nombreDeArchivo;
        $nuevaAlerta->nombre = $datos['nombre'];
        $nuevaAlerta->zona = $datos['zona'];
        $nuevaAlerta->color = $datos['color'];
        $nuevaAlerta->raza = $datos['raza'];
        $nuevaAlerta->detalle = $datos['detalle'];
        $nuevaAlerta->categoria_id = $datos['categoria'];
        $nuevaAlerta->usuario_id = $usuario;
        $nuevaAlerta->save();
        return redirect('/');
    }
    public function nosotros()
    {
        return view('user/nosotros');
    }
}
