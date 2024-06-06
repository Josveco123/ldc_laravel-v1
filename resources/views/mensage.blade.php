@extends('layouts.layouts')

@section('content')
    <div class="w-auto h-auto  flex-col hidden">

        <div class="w-full lg:w-sm h-auto flex flex-col space-y-3 justify-center items-center text-center ">
            <div class="bg-white w-auto lg:w-sm border-2 border-red-600 rounded-3xl shadow-2xl shadow-red-200  p-2 lg:p-5 ">
                <h1 class="flex flex-row mb-5 text-justify text-red-600 text-lg lg:text-2xl border-b-2 border-red-400">
                    <span>Para control funcional de la pagina laboratorio del caribe le informa.</span>
                </h1>
                <div class="text-sm lg:text-lg font-bold">Para poder ver las fichas técnicas de los productos, debe realizar
                    los siguientes
                    pasos:</div>

                <div class="flex flex-col pl-2 p-1 lg:pl-20 lg:p-2 text-sm lg:text-lg">
                    <div class="text-left p-2">1. - Registrese como Usuario de nuestra plataforma</div>
                    <div class="text-left p-2">2. - Inicie sesión con su usuario registrado</div>
                    <div class="text-left p-2">3. - Seleccione ficha del producto a ver</div>
                </div>

                <div class="flex flex-row space-x-20 justify-center">
                    <a href="{{ route('productos2') }}"
                        class="text-center mt-10 w-auto h-auto p-2 bg-gray-100 text-black/60 rounded-3xl hover:text-black/100 border-2 border-red-600 hover:bg-gray-400">
                        Volver
                    </a>
                    <a id="registrarse" href="{{ route('register') }}"
                        class="text-center mt-10 w-auto h-auto p-2 bg-gray-100 text-black/60 rounded-3xl hover:text-black/100 border-2 border-red-600 hover:bg-gray-400">
                        Registrarse
                    </a>
                </div>
            </div>
        </div>
    </div>

    @endsection
