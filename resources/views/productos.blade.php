@extends('layouts.layouts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var boton = document.getElementById('portafolio');
        var contenidoOriginal = boton.textContent; // Guarda el contenido original

        // Cambiar el contenido del elemento al cargar la página
        boton.textContent = "PORTAFOLIO";
        boton.classList.add("text-red-600");

        // Evitar que el enlace recargue la página
        boton.addEventListener("click", function(event) {
            event.preventDefault();
        });
    });
</script>
<!-- se inserta cuerpo del trabajo -->
@section('content')
    <div>
        <div class="pt-5 pb-20 ">
            <div
                class="w-full flex justify-center text-center text-lg sm:text-2xl  lg:text-4xl xl:text-5xl text-red-600 font-titulo1">
                <span class="">Nuestros</span>
                <span class="mx-3 md:mx-6">Productos</span>
            </div>

            <div
                class="grid grid-cols-1 mt-10 px-16  md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-8 lg:gap-x-12 xl:gap-x-16  gap-y-20 ">

                @foreach ($productos as $producto)
                    <div class="w-full h-auto bg-gray-200 pr-1" style="border-radius: 3vw;">
                        <div class="w-full h-full bg-white border-x-2  border-dotted border-gray-300 m-2 p-3"
                            style="border-top-left-radius: 4vw; border-top-right-radius: 4vw; border-bottom-left-radius: 3.5vw; border-bottom-right-radius: 3.5vw;">
                            <div class="max-w-full  h-35 flex flex-row justify-center text-center">
                                <img class="border-0" src="{{ asset('imagen/' . $producto->imagen) }}"
                                    style="border-radius: 3vw;" alt="{{ $producto->nombre }}">
                            </div>
                            <h1
                                class="max-w-full text-2xl lg:text-xl  2xl:text-3xl flex flex-row justify-center text-center text-red-600 font-mote font-bold">
                                {{ $producto->nombre }}
                            </h1>
                            <h1 class="max-w-full text-xl lg:text-lg flex flex-row justify-center text-center font-normal ">
                                {{ $producto->presentacion }}</h1>
                            <h1 class="max-w-full text-sm lg:text-sm flex flex-row justify-center text-center font-titulo5">
                                {{ $producto->slogan }}</h1>

                            <div class="max-w-full  flex flex-row justify-center text-center text-white font-bold">
                                @auth
                                <form id="form-ficha" action="{{ route('mostrar-ficha', ['archivo' => $producto->ficha]) }}"
                                    method="POST" target = '_blank'>
                                    @csrf
                                    <input type="hidden" name="producto" value="{{ json_encode($producto) }}">
                                    <button type="submit"
                                        class="inline-block w-32 h-8 mt-5 border-2  hover:bg-gray-500 hover:scale-110 text-center font-bold text-white bg-gray-400"
                                        style="border-radius: 3vw;">
                                        Ficha técnica
                                    </button>
                                </form>
                                @else
                                <form id="form-ficha" action="{{ route('nomostrarficha') }}"
                                    method="GET">
                                    @csrf
                                    <input type="hidden" name="producto" value="{{ json_encode($producto) }}">
                                    <button type="submit"
                                        class="inline-block w-32 h-8 mt-5 border-2  hover:bg-gray-500 hover:scale-110 text-center font-bold text-white bg-gray-400"
                                        style="border-radius: 3vw;">
                                        Ficha técnica
                                    </button>
                                </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
