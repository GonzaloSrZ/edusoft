<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S.E.E.A</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://edusoftseea.000webhostapp.com/build/assets/app.fb632e42.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    {{-- @vite(['resources/css/app.scss', 'resources/js/app.js']) --}}

    <!-- JavaScript Bundle with Popper -->


    <!-- Styles -->
    @livewireStyles 

</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg nav-pills bg-primary">
        <div class="container-fluid ">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center alig-items-center" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="{{ request()->routeIs('index') ? 'text-light bg-dark nav-link' : 'text-light nav-link' }}"
                        aria-current="page" href="{{ route('index') }}">Inicio</a>
                    <a class="{{ request()->routeIs('aprender') ? 'text-light bg-dark nav-link' : 'text-light nav-link' }}"
                        href="{{ route('aprender') }}">Aprendé</a>
                    <a class="{{ request()->routeIs('practicar') ? 'text-light bg-dark nav-link' : 'text-light nav-link' }}"
                        href="{{ route('practicar') }}">Practicá</a>
                    <a class="{{ request()->routeIs('evaluar') ? 'text-light bg-dark nav-link' : 'text-light nav-link' }}"
                        href="{{ route('evaluar') }}">Evaluate</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Contenido --}}
    <div class="container">
        <br>
        @yield('content')


    </div>

    <div class="">
        <footer class="bg-primary flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="align-items-center">

                <p class="mb-3 text-light mb-md-0 text-center"> 2022 | Todos los derechos reservados | Producido por
                    Gonzalez Guillermo y Suarez Gonzalo</p>
            </div>
        </footer>
    </div>
    @livewireScripts

    <script src="https://edusoftseea.000webhostapp.com/build/assets/app.6cd44e53.js"></script>

    <script>
        Livewire.on('alert', message =>{
          console.log("escuchado");
            Swal.fire(
                'Bien hecho!',
                message,
                'success'
            );
        })

        Livewire.on('alert2', message=> {
          console.log("escuchado");
            Swal.fire(message);
        })
    </script>

</body>

</html>
