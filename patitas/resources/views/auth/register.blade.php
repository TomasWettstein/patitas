@extends('layouts.plantilla')

@section('content')
<section class="_seccion_login">
    <div class="_caja_login">
        <h1 class="_titulo_login">Registro</h1>
        <form method="POST" action="{{ route('register') }}" class="_form_login">
            @csrf
                <label for="name" class="_texto_login">Nombre de usuario</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label for="email" class="_texto_login">Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label for="password" class="_texto_login">Contraseña</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label for="password-confirm" class="_texto_login">Confirmar contraseña</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

            <div class="form-group row mb-0">
                    <button type="submit" class="_btn_login">
                        Registrarse
                    </button>
            </div>
        </form>
    </div>
</section>
@endsection
