@extends('layouts.app')

@section('content')

<div class="row justify-content-center" style="min-height: 100vh; width: 100%;">

    <div class="col-sm-6 justify-content-center" style="justify-content: center !important;align-items: center; display: flex;background-color: #316317;">
        <img src="{{ asset('img/logo_sin_fondo.png') }}" alt="logo agro cauca" style="margin-top: -11%;">
    </div>

    <div class="col-sm-6 justify-content-center" style="justify-content: center !important;align-items: center; display: flex; background-color: #316317; background-color: white;">
        <div style="min-height: 100px; min-width: 100px;">
            <h1 style="color:#316317; text-align: center;font-weight: bold;">Crear Cuenta</h1>
            <div style="text-align: center; margin-top: 6%;">
                <a style="text-align: center; color: #d8d7d7; cursor: pointer;">¿YA ESTAS REGISTRADO? INGRESA</a>
            </div>

            <div class="card" style="border: none;">
                <div class="card-body" style="border: none;">
                    <form method="POST" action="{{ route('/registrousuario') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-12 col-form-label text-md-left" style="color: #cfcfcf;">{{ __('ESCRIBA SU NOMBRE') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="background-color: #ececec;  border-radius: 20px; border: none;">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label text-md-LEFT" style="color: #cfcfcf;">{{ __('ESCRIBA SU CORREO') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="background-color: #ececec;  border-radius: 20px; border: none;">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label text-md-left" style="color: #cfcfcf;">{{ __('ESCRIBA UNA CONTRASEÑA') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="background-color: #ececec;  border-radius: 20px; border: none;">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-12 col-form-label text-md-left" style="color: #cfcfcf;">{{ __('REPITA LA CONTRASEÑA') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="background-color: #ececec;  border-radius: 20px; border: none;">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12" style="text-align: center; margin-top: 2%;">
                                <button type="submit" class="btn btn-primary" style="color: white; background-color: #679133; border: none; border-radius: 20px; padding-left: 60px; padding-right: 60px; font-size: 14pt;">
                                    {{ __('Crear Cuenta') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection