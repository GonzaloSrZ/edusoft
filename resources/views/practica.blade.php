@extends('menu')

@section('titulo')
Practicá
@stop

@section('content')

    <h2 class="text-primary text-center">Practicá resolviendo ejercicios con arreglos</h2>

    <p>En esta sección se generan, de manera automática, ejercicios para resolver. 
        Haciendo clic en "Generar" se genera un nuevo ejercicio y presionando el botón "Verificar" 
        nos muestra un mensaje indicando si la resolución es correcta o incorrecta.</p>

    <div class="card w-100">
        <div class="card-body bg-light">
            <h3 class="card-title text-secondary text-center">
                Vectores
            </h3>
            @livewire('vectores')

        </div>
    </div>

    <br>
    <div class="card w-100">
        <div class="card-body bg-light">
            <h3 class="card-title text-secondary text-center">
                Matrices
            </h3>
            @livewire('matrices')

        </div>
    </div>

@stop
