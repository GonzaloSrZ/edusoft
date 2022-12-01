@extends('menu')

@section('titulo')
Evaluate
@stop

@section('content')

    <h2 class="text-primary text-center">Evaluación sobre los temas adquiridos previamente</h2>
    <p>
        <b>
            En esta sección resolve juegos autoevaluativos para calificar tus conocimientos obtenidos en las secciones anteriores.
        </b>
    </p>

    <div style="width: 100%;">
        <div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;">
            <iframe title="Taller 2" id="frame1" frameborder="0" width="1200px" height="675px"
                src="https://edusoftseea.000webhostapp.com/evaluacion/index.htm"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" type="text/html"
                allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
        </div>
    </div> 

@stop
