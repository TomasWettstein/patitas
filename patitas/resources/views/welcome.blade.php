@extends('layouts.plantilla')
@section('content')
@if (Auth::guest())
<section class="_seccion_bvnda">
    <div class="_caja_bvnda">
        <h2 class="_titulo_bvnda">Para comenzar a usar la app tenes que iniciar sesion</h2>
        <div class="_caja_dos_bvnda">
            <button class="_boton_bvnda"><a href="/login" class="_boton_bvnda_texto">Iniciar sesion</a></button>
            <h4>¿Todavia no tenes una cuenta? Crea una ahora!</h4>
            <button class="_boton_bvnda"><a href="/register" class="_boton_bvnda_texto">Crear cuenta nueva</a></button>
        </div>
    </div>

</section>  
@else
<section class="_seccion_home">
    <div class="_caja_home">
        <p class="_titulo_home">Bienvenido {{Auth::user()->name}}</p>
        <p class="_titulo_home">Estas son las ultimas alertas</p>
        <div class="_caja_categorias_home">
            <div class="_caja_categoria_home">
                <h2>Perdidos</h2>
                <div class="_caja_alerta_home">
                    <img src="/images/ejemplo.jpg" alt="" class="_img_alerta">
                    <p>Color: blanco</p>
                    <p>Raza: Labrador</p>
                    <p>Detalle: Muy cariñoso</p>
                    <button class="_btn_home">Ver esta alerta</button>
                </div>

            </div>
            <div class="_caja_categoria_home">
                <h2>En adopción</h2>
                <div class="_caja_alerta_home">
                    <img src="/images/ejemplo.jpg" alt="" class="_img_alerta">
                    <p>Color: blanco</p>
                    <p>Raza: Labrador</p>
                    <p>Detalle: Muy cariñoso</p>
                    <button class="_btn_home">Ver esta alerta</button>
                </div>
            </div>
            <div class="_caja_categoria_home">
                <h2>Encontrados</h2>
                <div class="_caja_alerta_home">
                    <img src="/images/ejemplo.jpg" alt="" class="_img_alerta">
                    <p>Color: blanco</p>
                    <p>Raza: Labrador</p>
                    <p>Detalle: Muy cariñoso</p>
                    <button class="_btn_home">Ver esta alerta</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

    
@endsection