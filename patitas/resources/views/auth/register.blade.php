@extends('layouts.plantilla')

@section('content')
<section class="_seccion_login">
    <div class="_caja_login">
        <h1 class="_titulo_login">Registro</h1>
        <form method="POST" action="{{ route('register') }}" class="_form_login">
            @csrf
                <label for="name" class="_texto_login">Nombre de usuario</label>

                <div class="_caja_campos_login">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="_error_login" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label for="email" class="_texto_login">Email</label>

                <div class="_caja_campos_login">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="_error_login" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label for="password" class="_texto_login">Contraseña</label>
                <div class="_caja_campos_login">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="_error_login" role="alert">
                            <strong>Las contraseñas no coinciden</strong>
                        </span>
                    @enderror
                </div>
                <label for="password-confirm" class="_texto_login">Confirmar contraseña</label>

                <div class="_caja_campos_login">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div id = "cajaProv" class="_caja_in_alerta">
                    <label for="provincia" class="_texto_login">Provincia</label>
                    <select name="provincia" id="prov" class="form-control col-8">
                        <option value="#" selected disabled>Seleccione provincia...</option>
                    </select>
                    <p></p>
                </div>
                <div id="cajaMuni" class="_caja_in_alerta">
                    <label for="municipio" class="_texto_login">Municipio</label>
                    <select name="municipio" id="muni" class="form-control col-12">
                        <option value="" selected disabled>Seleccione municipio...</option>
                    </select>
                    <p></p>
                </div>

            <div class="form-group row mb-0">
                    <button type="submit" class="btn btn-outline-success _btn_login mt-2">
                        Registrarse
                    </button>
            </div>
        </form>
    </div>
</section>
<footer class="_footer">
    <h4 class="_texto_footer">Todos los derechos reservados: Tomas Martín Fernandez Wettstein</h4>
</footer>
<script src="{{asset('/js/formRegistro.js')}}"></script>
@endsection
