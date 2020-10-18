@extends('layouts.plantilla')
@section('content')
@if (Auth::guest())
<section class="_seccion_bvnda">
    <div class="_caja_bvnda">
        <h2 class="_titulo_bvnda">Para comenzar a usar la app tenes que iniciar sesion</h2>
        <div class="_caja_dos_bvnda">
            <button class="btn btn-outline-success"><a href="/login" class="_boton_bvnda_texto">Iniciar sesion</a></button>
            <h4>¿Todavia no tenes una cuenta? Crea una ahora!</h4>
            <button class="btn btn-outline-success"><a href="/register" class="_boton_bvnda_texto">Crear cuenta nueva</a></button>
        </div>
    </div>

</section>
@else
<section class="_seccion_crear_alerta">
    <div class="_caja_crear_alerta">
        <div class="_caja_btn_crear_alerta">
            <h2 class="_texto_crear_alerta">Si perdiste a tu mascota no dudes en crear una alerta de perdido!</h2>
            <button class="btn btn-outline-success _btn_crear_alerta"><a href="/formAlerta" class="_btn_crear_alerta_texto">Alerta perdido</a></button>
        </div>
        <div class="_caja_btn_crear_alerta">
            <h2 class="_texto_crear_alerta">Si encontraste una mascota perdida crea una alerta de encontrado!</h2>
            <button class="btn btn-outline-success _btn_crear_alerta"><a href="/formAlerta" class="_btn_crear_alerta_texto">Alerta de encontrado</a></button>
        </div>
        <div class="_caja_btn_crear_alerta">
            <h2 class="_texto_crear_alerta">Si queres dar en adopcion una mascota, crea una alerta de adopción!</h2>
            <button class="btn btn-outline-success _btn_crear_alerta"><a href="/formAlerta" class="_btn_crear_alerta_texto">Alerta de Adopción</a></button>
        </div> 
    </div>
</section>
@endif
@endsection