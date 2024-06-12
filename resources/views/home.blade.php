    @extends('layouts.app')
    <div class="hidden xl:flex-auto flex-col">
        @section('content')
            <div class="hidden w-auto h-auto xl:flex flex-col justify-normal ">
                <div class="px-10 flex flex-row space-x-1 order-1 h-auto">
                    <div class="w-[16vw] bg-gray-100 border-2 border-gray-300 shadow-lg  shadow-gray-600">
                        <div
                            class="w-full h-[3vw] flex flex-row justify-center items-center text-center text-[1.2vw] font-bold bg-gray-200">
                            Menu Archivos
                        </div>

                        <div class="w-full h-1 border-y-2 border-gray-400"></div>
                        <div class="min-h-[600px]">
                            <ul
                                class="flex w-auto marker:text-red-600 flex-col justify-between ml-[1vw] text-[1.2vw] space-y-2 mt-[2vw] list-[upper-roman]">
                                <!-- opción 1 -->
                                <li
                                    class="menu-option  border-2 px-2 hover:border-red-500 hover:bg-gray-300 hover:rounded-lg">
                                    <a class="no-underline" href="{{ route('productoindex') }}">Productos</a>
                                </li>

                                <!-- opción 2 -->
                                <li
                                    class="menu-option border-2 px-2 hover:border-red-500 hover:bg-gray-300 hover:rounded-lg">
                                    <a class="no-underline" href="{{ route('distribuidorindex') }}">Distribuidores</a>
                                </li>

                                <!-- opción 3 -->
                                <li
                                    class="menu-option border-2 px-2 hover:border-red-500 hover:bg-gray-300 hover:rounded-lg">
                                    <a class="no-underline" href="{{ route('blogindex') }}">Blogs</a>
                                </li>
                                @hasrole('master')
                                    <li
                                        class="menu-option border-2 px-2 hover:border-red-500 hover:bg-gray-300 hover:rounded-lg">
                                        <a class="no-underline" href="{{ route('userindex') }}">User</a>
                                    </li>
                                    <li
                                        class="menu-option border-2 px-2 hover:border-red-500 hover:bg-gray-300 hover:rounded-lg">
                                        <a class="no-underline" href="{{ route('export') }}">Visitas Exp.</a>
                                    </li>
                                @endhasrole
                            </ul>
                        </div>
                    </div>
                    <div class="flex-grow border-2 border-gray-300">

                        <div class="w-full h-[3vw] flex justify-center items-center text-[1vw] font-bold bg-gray-200">
                            <span id="proceso" class="absolute left-0 ml-[20vw] mt-3 text-red-600"> @yield('proceso')
                            </span>
                            <p class="text-xl mt-2 text-gray-500">Mostrar datos del archivo</p>
                        </div>
                        <div class="w-full h-1 border-y-2 border-gray-400"></div>

                        <div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="text-3xl text-gray-400 pl-[1vw]n h-auto pb-2">
                                @yield('crud', 'AREA PARA PROCESO. (Solo pantallas con ancho 1024px en adelante)')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-auto order-2">
                    @include('layouts.footer')
                </div>
            </div>
        @endsection
    </div>
