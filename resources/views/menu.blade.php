<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S.E.E.A</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://edusoftseea.000webhostapp.com/build/assets/app.05d03605.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
     {{-- @vite(['resources/css/app.scss', 'resources/js/app.js'])  --}}

    
    <!-- JavaScript Bundle with Popper -->


    <!-- Styles -->
    {{-- @livewireStyles --}}

</head>

<body class="bg-blue-100">
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center alig-items-center" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="{{ request()->routeIs('index') ? 'text-light bg-dark nav-link active' : 'text-light nav-link' }}"
                        aria-current="page" href="{{ route('index') }}">Inicio</a>
                    <a class="{{ request()->routeIs('aprender') ? 'text-light bg-dark nav-link active' : 'text-light nav-link' }}"
                        href="{{ route('aprender') }}">Aprendé</a>
                    <a class="{{ request()->routeIs('practicar') ? 'text-light bg-dark nav-link active' : 'text-light nav-link' }}"
                        href="{{ route('practicar') }}">Practicá</a>
                    <a class="{{ request()->routeIs('evaluar') ? 'text-light bg-dark nav-link active' : 'text-light nav-link' }}"
                        href="{{ route('evaluar') }}">Evaluate</a>
                </div>
            </div>
        </div>
    </nav>
    {{--     <nav class="bg-gama-400 shadow dark:bg-gray-800">
        <div class="container flex items-center justify-center p-6 mx-auto text-gama-100 capitalize dark:text-gray-300">
            <a href="{{ route('index') }}"
                class="{{ request()->routeIs('index') ? 'text-gama-300 dark:text-gray-200 border-b-2 border-gama-300 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gama-300 dark:hover:text-gray-200 hover:border-gama-300 mx-1.5 sm:mx-6' }}">INICIO</a>

            <a href="{{ route('aprender') }}"
                class="{{ request()->routeIs('aprender') ? 'text-gama-300 dark:text-gray-200 border-b-2 border-gama-300 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gama-300 dark:hover:text-gray-200 hover:border-gama-300 mx-1.5 sm:mx-6' }}">Aprendé!</a>

            <a href="{{ route('practicar') }}"
                class="{{ request()->routeIs('practicar') ? 'text-gama-300 dark:text-gray-200 border-b-2 border-gama-300 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gama-300 dark:hover:text-gray-200 hover:border-gama-300 mx-1.5 sm:mx-6' }}">Practicá</a>

            <a href="{{ route('evaluar') }}"
                class="{{ request()->routeIs('evaluar') ? 'text-gama-300 dark:text-gray-200 border-b-2 border-gama-300 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gama-300 dark:hover:text-gray-200 hover:border-gama-300 mx-1.5 sm:mx-6' }}">Evaluate</a>
        </div>
    </nav> --}}

    {{-- Contenido --}}
    <div class="bg-gama-100 container max-w-screen-lg mx-auto px-5">
        @yield('content')


    </div>
    {{-- @livewireScripts --}}

    <script src="https://edusoftseea.000webhostapp.com/build/assets/app.6cd44e53.js"></script>

</body>

</html>
