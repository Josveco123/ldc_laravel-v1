@extends('layouts.layouts')

<!-- Script JavaScript para mostrar mensajes como alertas -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Función para mostrar mensajes como alertas
        function showMessageAsAlert(message, type) {
            // Mostrar alerta según el tipo de mensaje
            if (type === 'alert-success') {
                alert("¡Éxito!\n" + message);
            } else if (type === 'alert-danger') {
                alert("¡Error!\n" + message);
            }
        }

        // Mostrar mensaje de éxito si existe en la sesión
        var successMessage = {!! json_encode(session('success')) !!};
        if (successMessage) {
            showMessageAsAlert(successMessage, 'alert-success');
        }

        // Mostrar mensaje de error si existe en la sesión
        var errorMessage = {!! json_encode(session('error')) !!};
        if (errorMessage) {
            showMessageAsAlert(errorMessage, 'alert-danger');
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      var boton = document.getElementById('contacto');
      var contenidoOriginal = boton.textContent; // Guarda el contenido original

      // Cambiar el contenido del elemento al cargar la página
      boton.textContent = "CONTACTOS";
      boton.classList.add("text-red-600");

      // Evitar que el enlace recargue la página
      boton.addEventListener("click", function(event) {
          event.preventDefault();
      });
  });
  </script>
<!-- Cuerpo principal del distribuidor -->
@section('content')
    <div class="px-4 md:px-8 lg:px-12 xl:px-16 ">
        <div class="w-full h-28bg-red-100 mt-5 pb-3 " style="border-radius: 3vw;">
            <div class="w-full h-full text-lg md:text-xl lg:text-3xl xl:text-4xl py-2 bg-gray-50 flex flex-row text-center justify-center font-titulo1 text-red-600 border-l-2 border-t-2 border-red-100"
                style="border-radius: 3vw;">
                CONTACTOS
            </div>
        </div>
        <div class="pb-20 max-w-full h-full grid grid-cols-1 lg:grid-cols-2 gap-x-4 md:gap-x-8 lg:gap-x-12 xl:gap-x-16  px-5 md:px-8 lg:px-12 xl:px-20 justify-items-center py-5">
            <div class="w-full h-full bg-red-100" style="border-radius: 3vw;">
                <div class="w-full h-full bg-gray-50 ml-[-.5vw] mt-[-.5vw] px-[3vw] py-10 border-l-2 border-t-2 border-red-100"
                    style="border-radius: 3vw;">
                    <ul class="w-full text-center text-sm sm:text-md md:text-lg leading-tight  p-3">
                        <li class="mb-7">
                            <span>ventas@laboratoriodelcaribe.com</span>
                            <br />
                            <span class="text-red-600">Celular: (+57) 3155277697</span>
                        </li>
                        <li class="mb-7">
                            <span>comercial@laboratoriodelcaribe.com</span>
                            <br />
                            <span class="text-red-600">Celular: (+57) 3126869891</span>
                        </li>
                        <li class="mb-7">
                            <span>contabilidad@laboratoriodelcaribe.com</span>
                            <br />
                            <span class="text-red-600">Celular: (+57) 3135120781</span>
                        </li>
                        <li class="mb-7">
                            <span>gerencia@laboratoriodelcaribe.com</span>
                            <br />
                            <span class="text-red-600">Celular: (+57) 3126869891</span>
                        </li>
                        <li class="mb-7">
                            <span>WhatsApp:</span>
                            <br />
                            <span class="text-red-600"> Numeros: (+57) 3135120781 y (+57) 3126869891</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full  h-full lg:mt-0 mt-10 bg-red-100" style="border-radius: 3vw;">
                <div class="w-full h-full bg-gray-50 ml-[-.5vw] mt-[-.5vw] px-[3vw] pt-5 border-l-2 border-t-2 border-red-100 "
                    style="border-radius: 3vw;">
                    <div id="form-correo">
                        <h2 class="text-xl md:text-xl text-gray-400 font-bold">Queremos escucharte!</h2>
                        <div class="mt-6">
                            <form id="formulario-correo" action="{{ route('enviarcorreo') }}"
                                class="flex flex-col font-bold text-sm lg:text-lg text-gray-500  gap-y-2 " method="POST">
                                @csrf
                                <div class="">
                                    <label class="" for="nombre">Nombre:</label>
                                    <br />
                                    <input type="text" id="nombre" name="name" required autofocus
                                        class="w-full border border-red-200 rounded-md px-3 py-0.5  focus:outline-none focus:border-red-600" />
                                </div>
                                <div>
                                    <label class="label-correo" for="correo">Correo:</label>
                                    <br />
                                    <input type="email" id="correo" name="email" required
                                        class="w-full border border-red-200 rounded-md px-3 py-0.5 focus:outline-none focus:border-red-600" />
                                </div>
                                <div>
                                    <label class="label-correo" for="telefono">Teléfono:</label>
                                    <br />
                                    <input type="text" id="telefono" name="phone" required
                                        class="w-full border border-red-200 rounded-md px-3 py-0.5 focus:outline-none focus:border-red-600" />
                                </div>
                                <div>
                                    <label class="label-correo" for="mensaje">Mensaje:</label>
                                    <br />
                                    <textarea id="mensaje" name="message" rows="4" required
                                        class="w-full border border-red-200 rounded-md px-3 py-0.5 focus:outline-none focus:border-red-600"></textarea>
                                </div>
                                <div>
                                    <button id="enviar-contacto"
                                        class="enviar bg-red-600 text-white font-bold py-1 px-4 rounded-3xl hover:scale-110 "
                                        name="submit" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
