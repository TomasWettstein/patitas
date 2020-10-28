@extends('layouts.plantilla')
@section('content')
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
@endsection