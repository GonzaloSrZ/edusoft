<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])   'resources/css/app.css', --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gama': {
                            '100': '#cfff8d', // 1
                            '200': '#a8e890', //2
                            '300': '#749f82', //3
                            '400': '#425f57', //4
                        },
                        

                    }
                }
            }
        }
    </script>

    <!-- Styles -->
    {{-- @livewireStyles --}}


</head>

<body class="">
    <nav class="bg-gama-400 shadow dark:bg-gray-800">
        <div class="container flex items-center justify-center p-6 mx-auto text-gama-100 capitalize dark:text-gray-300">
            <a href="#"
                class="text-gama-300 dark:text-gray-200 border-b-2 border-gama-300 mx-1.5 sm:mx-6">Aprendé!</a>

            <a href="#"
                class="border-b-2 border-transparent hover:text-gama-300 dark:hover:text-gray-200 hover:border-gama-300 mx-1.5 sm:mx-6">Practicá</a>

            <a href="#"
                class="border-b-2 border-transparent hover:text-gama-300 dark:hover:text-gray-200 hover:border-gama-300 mx-1.5 sm:mx-6">Evaluate</a>
        </div>
    </nav>
        <div class="w-full bg-gama-100 h-full">{{-- Contenido --}}
            <div class="m-5 bg-gama-300 flex justify-center container ">
                @yield('content')
                <h3>Holaa</h3>
            </div>
        </div>
        {{-- @livewireScripts --}}
</body>

</html>
