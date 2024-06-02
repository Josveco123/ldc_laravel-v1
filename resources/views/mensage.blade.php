<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-gray-50 p-20">

        <div
            class="w-full h-auto flex flex-col space-y-3 justify-center items-center text-center file:backdrop:after:even:pt-20">
            <div class="bg-white w-sm border-2 border-red-600 rounded-3xl shadow-2xl shadow-red-200  p-5">
                <h1 class="mb-5 text-red-600 text-3xl border-b-2 border-red-400"><span>Para control funcional de la
                        pagina</span> <br /><span>laboratorio del caribe le informa</span></h1>
                <div class="text-lg">Para poder ver las fichas técnicas de los productos, debe realizar los siguientes
                    pasos:</div>

                <div class="flex flex-col pl-20 p-2">
                    <div class="text-left p-2">1. - Registrese como Usuario de nuestra plataforma</div>
                    <div class="text-left p-2">2. - Inicie sesión con su usuario registrado</div>
                    <div class="text-left p-2">3. - Seleccione ficha del producto a ver</div>
                </div>

                <button
                    class="text-center mt-10 w-auto h-auto p-1 bg-gray-100 text-black/60 rounded-3xl hover:text-black/100 border-2 border-red-600 hover:bg-white"
                    id="cerrarPaginaBtn">
                    Clic para volver
                </button>
            </div>
        </div>

    <script>
        document.getElementById("cerrarPaginaBtn").addEventListener("click", function() {
            window.close();
        });
    </script>
</body>

</html>
