<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Categoria;
use App\Models\Alerta;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function inicio()
    {
        if(Auth::guest()){
            return view('user/mensajeAuth');
        }else {
            $municipio = Auth::user()->municipio;
            $perdidos = Alerta::where("categoria_id", "=", 1 , "AND", "municipio", "=", $municipio)->get();
            $encontrados = Alerta::where("categoria_id", "=", 2, "AND", "municipio","=", $municipio)->get();
            $adopciones = Alerta::where("categoria_id", "=", "3", "AND", "municipio", "=", $municipio)->get();
            return view('/welcome')->with('perdidos', $perdidos)->with('encontrados', $encontrados)->with('adopciones', $adopciones);

        }
    }
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
            "provincia" => "required",
            "municipio" => "required",
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
        /*Subir imagen*/
        $ruta = $datos->file('imagen')->store('public');
        $nombreDeArchivo = basename($ruta);
        $nuevaAlerta->imagen = $nombreDeArchivo;
        $nuevaAlerta->provincia = $datos['provincia'];
        $nuevaAlerta->municipio = $datos['municipio'];
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
