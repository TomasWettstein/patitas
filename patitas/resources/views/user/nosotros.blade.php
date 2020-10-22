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
    <section class="_seccion_nosotros">
        <div class="slider">
            <ul>
                <li><img src="{{url('/images/carro1.jpg')}}" alt=""></li>
                <li><img src="{{url('/images/carro2.jpg')}}" alt=""></li>
                <li><img src="{{url('/images/carro3.jpg')}}" alt=""></li>
                <li><img src="{{url('/images/carro4.jpg')}}" alt=""></li>
            </ul>
        </div>
        <div class="_caja_texto_nosotros">
            <p class="_texto_nosotros">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto dicta saepe tempore consectetur reiciendis modi reprehenderit velit labore quod explicabo atque doloribus nihil sunt dolore quasi sit molestiae officia, dolorum eveniet? Dolorum beatae dolores veniam? Corrupti optio est earum nostrum inventore cumque laborum dolorum quisquam quam, molestias accusantium error magnam!</p>
        </div>

    </section>
    <footer class="_footer">
        <h4 class="_texto_footer">Todos los derechos reservados: Tomas Martín Fernandez Wettstein</h4>
    </footer>
    @endif
@endsection