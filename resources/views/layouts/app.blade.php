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
            <img class="ml-20 w-24 max-h-full" src="{{asset("images/logo.png")}}" alt="" srcset="">

            <div class="container flex flex-row text-sm md:text-lg h-auto w-full justify-between mt-3">

                <a class="flex flex-row text-center border-2  items-center font-sans text-black/50 hover:text-black h-12 p-1 px-1 w-auto bg-gray-100 hover:bg-gray-50 font-bold rounded-lg" href="{{ url('/') }}" style="text-decoration: none;">
                    Home
                </a>

                <div class="text-red-600" id="navbarSupportedConten">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto w-auto text-red-600 flex flex-row justify-center items-center list-none">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <li class="w-auto nav-item font-sans border-2 p-2  bg-gray-100 font-bold rounded-lg mx-10 hover:bg-gray-50">
                                    <a class="no-underline  text-black/50 hover:text-black" href="{{ route('login') }}">Login</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="w-auto nav-item font-sans border-2 p-2  bg-gray-100 font-bold rounded-lg mx-10 hover:bg-gray-50">
                                <a class="no-underline  text-black/50 hover:text-black"href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                                <!-- Esta opcion desactiva al usuario registrado -->
                            <li class="nav-item dropdown font-sans border-2 p-2  bg-gray-100 font-bold rounded-lg">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle hover:bg-gray-50 hover:scale-110" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end hover:bg-red-100 hover:scale-110" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:red;font-weight: bold;font-family:Verdana, Geneva, Tahoma, sans-serif" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      Desactivar Usuario
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
