@extends('layouts.plantilla')

@section('content')
<section class="_seccion_login">
    <div class="_caja_login">
        <h1 class="_titulo_login">Iniciar sesion</h1>
        <form method="POST" action="{{ route('login') }}" class="_form_login">
            @csrf
            <label for="email" class="_texto_login">Email</label>
            <div class="_caja_campos_login">
                <input id="email" type="email" class="_inp_login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="_error_login" role="alert">
                    <strong>Estas credenciales no coinciden con nuestros registros.</strong>
                </span>
                @enderror
            </div>
            <label for="password" class="_texto_login">Contraseña</label>
            <div class="_caja_campos_login">
                <input id="password" type="password" class="_inp_login" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="_error_login" role="alert">
                    <strong>Estas credenciales no coinciden con nuestros registros.</strong>
                </span>
                @enderror
            </div>
            <div class="_caja_campos_login">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="" for="remember">
                   Recordarme
                </label>
            </div>
            <div class="_caja_campos_login">
                <button type="submit" class="btn btn-outline-success _btn_login">
                    Iniciar sesion
                </button>
                @if (Route::has('password.request'))
                <button class="btn btn-dark mt-3"><a class="" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a></button>
                @endif
            </div>
        </form>
    </div>
</section>

@endsection
