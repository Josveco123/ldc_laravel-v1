@extends('layouts.app')

@section('content')
<div class="container grid grid-cols-1  lg:grid-cols-2  pt-4 lg:pt-20 lg:space-x-2">
    <div class="flex flex-col justify-center items-center w-full h-full border-2 rounded-3xl bg-red-50 p-4 md:p-10 mr-2">

        <div class="text-center text-lg p-2 text-red-600 ">¡Bienvenido a <strong> Laboratorio del Caribe sas!</strong>
        </div>
        <div class="hidden lg:block text-lg text-justify p-2">
            <span>
                Nos complace darte la bienvenida a nuestra plataforma en línea, donde encontrarás un mundo de
                posibilidades para mejorar la calidad de vida. Al validar tu ingreso, has dado el primer paso hacia
                mejorar la salud y bienestar con los medicamentos de vanguardia que ofrecemos. <br />
                En <strong>Laboratorio del Caribe sas</strong>, entendemos que cada persona merece lo mejor cuando se
                trata de su salud. Es por eso que hemos creado una amplia gama de medicamentos humanos que están
                diseñados para abordar tus necesidades individuales y mejorar el bienestar en nuestro entorno.
            </span>
        </div>
    </div>

    <div class="row justify-content-center bg-blue-50 py-4 lg:py-20 border-2 rounded-3xl">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!---
                            Nombre

                            --->
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!---
                            Nombre del email

                            --->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!---
                            Nombre del password

                            --->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!---
                            Nombre del confirmacion password

                            --->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <!---
                            NRazon social

                            --->
                        <div class="row mb-3">
                            <label for="razon_rocial" class="col-md-4 col-form-label text-md-end">{{ __('Razon Social') }}</label>

                            <div class="col-md-6">
                                <input id="razon_social" type="text" class="form-control @error('razon_social') is-invalid @enderror" name="razon_social" value="{{ old('razon_social') }}" required autocomplete="razon_social" autofocus>

                                @error('razon_social')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!---
                            NRazon whatsapp

                            --->
                            <div class="row mb-3">
                                <label for="whatsapp" class="col-md-4 col-form-label text-md-end">{{ __('whatsapp') }}</label>

                                <div class="col-md-6">
                                    <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" required autocomplete="whatsapp" autofocus>

                                    @error('whatsapp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!---
                            NRazon ciudad

                            --->
                            <div class="row mb-3">
                                <label for="ciudad" class="col-md-4 col-form-label text-md-end">{{ __('ciudad') }}</label>

                                <div class="col-md-6">
                                    <input id="ciudad" type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" value="{{ old('ciudad') }}" required autocomplete="ciudad" autofocus>

                                    @error('ciudad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
