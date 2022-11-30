@extends('menu')

@section('content')

    <h2 class="text-primary text-center">
        Bienvenidos al "Software Educativo para la Enseñanza de Arreglos"
    </h2>
    <br>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Introducción</h5>
                    <p class="card-text">Está aplicación está elaborada con el fin de poder obtener los conocimientos necesarios
                        sobre los arreglos. A continuación podrá ver las secciones que se incluyen.
                    </p>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Contenido</h5>
                    <p class="card-text"> <a href="{{ route('aprender') }}" class="link-secondary">Aprendé:</a>
                         Teoría basica sobre Vectores y Matrices.
                    </p>
                    <p class="card-text"> <a href="{{ route('practicar') }}" class="link-secondary">Practicá:</a>
                         Ejercicios que se autogeneran para aplicar los conocimientos obtenidos.
                    </p>
                    <p class="card-text"> <a href="{{ route('evaluar') }}" class="link-secondary">Evaluate:</a>
                         Juegos autoevaluativos para calificar nuestros nuevos conocimientos sobre los temas.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <img src="https://edusoftseea.000webhostapp.com/imagenes/welcome.gif" class="img-fluid" alt="...">
        </div>
    </div>

@stop
