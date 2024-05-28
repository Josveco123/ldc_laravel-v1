@extends('layouts.app')

@section('content')
    <div class="container grid grid-cols-1 lg:space-x-1 lg:grid-cols-2  pt-5 lg:pt-20">
        <div class="flex flex-col justify-center items-center w-full h-full border-2 rounded-3xl bg-red-50 p-3 md:p-10">

            <div class="text-center text-lg p-2 text-red-600 ">¡Bienvenido a <strong> Laboratorio del Caribe sas!</strong>
            </div>
            <div class="text-lg text-justify hidden lg:block p-2">
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

        <div class="row justify-content-center bg-blue-50 py-5 lg:py-20 border-2 rounded-3xl">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            <P>Olvido la clave?</P>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
