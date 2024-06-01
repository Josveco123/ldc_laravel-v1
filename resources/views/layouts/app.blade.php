<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laboratorio del Caribe SAS</title>

    <!-- Scripts -->
    @vite('resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container flex items-center justify-between mt-3">
                <img class="w-28 max-h-full" src="{{ asset('images/logo.png') }}" alt="" srcset="">

                <div class="flex space-x-10">
                    <a class="flex flex-row text-sm w-auto h-auto text-center text-decoration-none border-2 items-center font-sans text-black/50 hover:text-black/100  p-2 bg-gray-100 hover:bg-white font-bold rounded-lg"
                        href="{{ url('/') }}">
                        Home
                    </a>

                    <div class="relative text-red-600" id="navbarSupportedConten">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto w-auto text-red-600 flex flex-row justify-center items-center list-none space-x-4">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li
                                        class="w-auto nav-item font-sans border-2 p-2  bg-gray-100 font-bold rounded-lg mx-10 hover:bg-gray-50">
                                        <a class="no-underline  text-black/50 hover:text-black"
                                            href="{{ route('login') }}">Login</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li
                                        class="w-auto nav-item font-sans border-2 p-2  bg-gray-100 font-bold rounded-lg mx-10 hover:bg-gray-50">
                                        <a
                                            class="no-underline  text-black/50 hover:text-black" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <!-- Esta opcion desactiva al usuario registrado -->
                                <li class="font-sans border-2 bg-gray-100 rounded-lg">
                                    <a id="logout_menu" href="#"
                                        class="text-decoration-none p-2 relative  bg-gray-100 text-sm w-auto h-auto hover:bg-white text-black/60 hover:text-black/100  flex flex-row text-center justify-center items-center">
                                        <span>{{ Str::limit(ucwords(strtolower(Auth::user()->name)), 12) }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="absolute mt-2 border-2 border-white rounded-lg  bg-gray-100 hover:bg-white hover:text-black/100" style="display: none;">
                                        @csrf
                                        <div
                                            class="w-auto inline-flex p-2 flex-row justify-center text-center text-black/70">
                                            <button type="submit" class="w-full flex flex-row  justify-center text-center">
                                                Log out
                                            </button>
                                        </div>
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Asignar elementos a variables
            var logout = document.getElementById('logout_menu');
            var disp_logout = document.getElementById('logout-form');

            // Función para mostrar u ocultar el menú vertical
            function mostrar(element) {
                element.style.display = element.style.display === 'none' ? 'flex' : 'none';
            }

            // Evento al hacer clic en el menú vertical de usuario
            logout.addEventListener('click', function(e) {
                mostrar(disp_logout);
                // Detenemos la propagación del evento para evitar que se active el cierre inmediato del menú
                e.stopPropagation();
            });

            document.addEventListener('click', function(e) {
                // Si se hizo clic en algún lugar que no sea el botón de registro o el menú de registro, cerramos el menú de registro
                if (e.target !== disp_logout && !logout.contains(e.target)) {
                    disp_logout.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
