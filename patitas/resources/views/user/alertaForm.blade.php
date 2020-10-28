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
<section class="_seccion_form_alerta">
        <form action="/formAlerta" method="post" class="_form_alerta" enctype="multipart/form-data">
            @csrf
            <ul class="_lista_errores">
                @foreach ($errors->all() as $error)
                    <li class="_error">{{ $error }}</li>
                @endforeach
            </ul>
            <div  class="_caja_in_alerta">
                <label for="animal" class="_texto_form_alerta">Indique que animal es</label>
                <input id="animal" name="animal" type="text" class="_in_form_alerta" placeholder="Especifique tipo de animal">
            </div>
            <div class="_caja_in_alerta">
                <label for="foto" class="_texto_form_alerta">Suba una foto del animal</label>
                <input name="imagen" type="file" class="_in_form_alerta_file">
            </div>
            <div id = "cajaProv" class="_caja_in_alerta">
                <label for="provincia" class="_texto_form_alerta">Indique provincia</label>
                <select name="provincia" id="prov" class="_in_form_alerta">
                    <option value="#" selected disabled>Seleccione provincia...</option>
                </select>
                <p></p>
            </div>
            <div id="cajaMuni" class="_caja_in_alerta">
                <label for="municipio" class="_texto_form_alerta">Indique municipio</label>
                <select name="municipio" id="muni" class="_in_form_alerta">
                    <option value="" selected disabled>Seleccione municipio...</option>
                </select>
                <p></p>
            </div>
            <div class="_caja_in_alerta">
                <label for="detalle" class="_texto_form_alerta">Ingrese descripción o detalles del animal</label>
                <textarea id="detalle" name="detalle" id="" placeholder="Especifique detalles caracteristicos" cols="30" rows="10"></textarea>
            </div>
            <div class="_caja_in_alerta">
                <label for="categoria" class="_texto_form_alerta">Indique tipo de alerta</label>
                <select id="categoria" name="categoria" id="" class="in_form_alerta">
                    <option value="#" selected disabled>Seleccione tipo de alerta...</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="_caja_btn_form_alerta">
                <button type="submit" class="btn btn-outline-success _btn_form_alerta">Crear alerta</button>
            </div>
        </form>
</section>
<footer class="_footer">
    <h4 class="_texto_footer">Todos los derechos reservados: Tomas Martín Fernandez Wettstein</h4>
</footer>
@endif
<script src="{{asset('/js/formAlerta.js')}}"></script>
@endsection

