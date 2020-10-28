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
<footer class="_footer">
    <h4 class="_texto_footer">Todos los derechos reservados: Tomas Martín Fernandez Wettstein</h4>
</footer>

@else
<section class="_seccion_home">
    <div class="_caja_home">
        <p class="_titulo_home">Bienvenido {{Auth::user()->name}}</p>
        <p class="_titulo_home">Estas son las ultimas alertas de {{Auth::user()->municipio}}</p>
        <div class="_caja_categorias_home">
            <div class="_caja_categoria_home">
                <h2>Perdidos por tu zona</h2>
                @if ($perdidos->isEmpty())
                <h2 class="_mensaje_home">No hay animales perdidos por tu zona</h2>
                @else
                @foreach ($perdidos as $key => $perdido)
                <div class="_caja_alerta_home">
                    <img src="storage/{{$perdido->imagen}}" alt="" class="_img_alerta">
                    <p>Se perdio:{{$perdido->animal}}</p>
                    <p>{{$perdido->detalle}}</p>
                    <p>Zona: {{$perdido->municipio}}</p>
                    <button class="btn btn-outline-success _btn_home">Ver esta alerta</button>
                </div>
                @endforeach
                @endif
                <a href="#"><h2>Ver todas las alertas de perdidos</h2></a>
            </div>
            <div class="_caja_categoria_home">
                <h2>Encontrados por tu zona</h2>
                @if ($encontrados->isEmpty())
                    <h2 class="_mensaje_home">No hay animales encontrados por tu zona</h2>
                @else
                @foreach ($encontrados as $key => $encontrado)
                <div class="_caja_alerta_home">
                    <img src="storage/{{$encontrado->imagen}}" alt="" class="_img_alerta">
                    <p>Encontraron:{{$encontrado->animal}}</p>
                    <p>{{$encontrado->detalle}}</p>
                    <p>Zona: {{$encontrado->municipio}}</p>
                    <button class="btn btn-outline-success _btn_home">Ver esta alerta</button>
                </div>
                @endforeach
                @endif
                <a href="#"><h2>Ver todas las alertas de encontrados</h2></a>
            </div>
            <div class="_caja_categoria_home">
                <h2>En adopción por tu zona</h2>
                @if ($adopciones->isEmpty())
                <h2 class="_mensaje_home">No hay animales en adopción por tu zona</h2>
                @else
                @foreach ($adopciones as $key => $adopcion)
                <div class="_caja_alerta_home">
                    <img src="storage/{{$adopcion->imagen}}" alt="" class="_img_alerta">
                    <p>En adopción:{{$adopcion->animal}}</p>
                    <p>{{$adopcion->detalle}}</p>
                    <p>Zona: {{$adopcion->municipio}}</p>
                    <button class="btn btn-outline-success _btn_home">Ver esta alerta</button>
                </div>
                @endforeach
                @endif
                <a href="#"><h2>Ver todas las alertas de adopción</h2></a>
            </div>
        </div>
    </div>
</section>
<footer class="_footer">
    <h4 class="_texto_footer">Todos los derechos reservados: Tomas Martín Fernandez Wettstein</h4>
</footer>
@endif
@endsection
