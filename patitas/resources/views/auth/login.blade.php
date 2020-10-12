@extends('layouts.plantilla')

@section('content')
<section class="_seccion_login">
    <div class="_caja_login">
        <h1 class="_titulo_login">Iniciar sesion</h1>
        <form method="POST" action="{{ route('login') }}" class="_form_login">
            @csrf
            <label for="email" class="_texto_login">Email</label>
            <div class="">
                <input id="email" type="email" class="_inp_login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <label for="password" class="_texto_login">Contraseña</label>
            <div class="">
                <input id="password" type="password" class="_inp_login" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="" for="remember">
                   Recordarme
                </label>
            </div>
            <div class="">
                <button type="submit" class="_btn_login">
                    Iniciar sesion
                </button>
                @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
                @endif
            </div>
        </form>
    </div>
</section>

@endsection
