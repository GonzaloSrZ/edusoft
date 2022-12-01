<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://edusoftseea.000webhostapp.com/imagenes/seea2.png">
    <title>S.E.E.A | @yield('titulo')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://edusoftseea.000webhostapp.com/build/assets/app.fb632e42.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    {{-- @vite(['resources/css/app.scss', 'resources/js/app.js']) --}}

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/889b4f6c92.js" crossorigin="anonymous"></script>


    <!-- Styles -->
    @livewireStyles

</head>

<body class="bg-light">
    <nav class="navbar fixed-top navbar-expand-lg nav-pills bg-primary">
        <div class="container-fluid ">
            <a class=" text-light" href="/">
                <img src="https://edusoftseea.000webhostapp.com/imagenes/seea2.png" width="60" height="60"s>

            </a>
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
    <div class="container pt-5 mt-2">
        <br>
        @yield('content')


    </div>

    <div class="">
        {{-- <footer class="bg-primary flex-wrap justify-content-between align-items-center py-3 my-4 border-top"> --}}
        {{-- <div class="align-items-center">

                <p class="mb-3 text-light mb-md-0 text-center"> 2022 | Todos los derechos reservados | Producido por
                    Gonzalez Guillermo y Suarez Gonzalo</p>
            </div> --}}
        <footer class="text-center text-white bg-secondary mt-3" style="background-color: #f1f1f1;">
            <!-- Grid container -->
            <div class="container pt-1 ">
                <!-- Section: Social media -->
                <section class="mb-1">
                    <!-- Facebook -->
                    {{-- <a
                      class="btn btn-link btn-floating btn-lg text-dark m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-facebook-f"></i
                    ></a> --}}


                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-light m-1"
                        href="https://www.instagram.com/guilli_00" target="_blank" role="button"><i
                            class="fab fa-instagram"></i></a>
                    <img src="https://edusoftseea.000webhostapp.com/imagenes/seea2.png" width="100" height="100"s>
                    <a class="btn btn-link btn-floating btn-lg text-light m-1"
                        href="https://www.instagram.com/gon.zalo.srz" target="_blank" role="button"><i
                            class="fab fa-instagram"></i></a>

                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center small text-light p-3 bg-primary" style="">

                Aplicación realizada en el marco de la
                Optativa II Informática Educativa de la
                Licenciatura en Sistemas de Información, FCEyT – UNSE
                <br>
                Autores: Gonzalez Guillermo y Suarez Gonzalo | Contacto:
                <a class="link-secondary" href="mailto:guillermogonzalez.edu@gmail.com">
                    guillermogonzalez.edu@gmail.com
                </a>
                 - 
                <a class="link-secondary" href="mailto:gon.srz@gmail.com">
                    gon.srz@gmail.com
                </a>
                <br>
                Todos los derechos reservados
                <br>
                2022
            </div>
            <!-- Copyright -->
        </footer>
        {{-- </footer> --}}
    </div>
    @livewireScripts

    <script src="https://edusoftseea.000webhostapp.com/build/assets/app.6cd44e53.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('alert', message => {
            console.log("escuchado");
            Swal.fire(
                'Bien hecho!',
                message,
                'success'
            );
        })

        Livewire.on('alert2', message => {
            console.log("escuchado");
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message
            })
        })
    </script>

    @yield('js')

</body>

</html>
