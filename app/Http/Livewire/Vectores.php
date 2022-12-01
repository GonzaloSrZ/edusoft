<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vectores extends Component
{
    public $arreglo = [], $valor;

    public $n1, $n2, $n3, $n4, $n5;

    public $b = true;

    public $opc = 0;

    public $msj = "";

    public $i;

    //public $aux, $aux2;


    public function render()
    {
        if ($this->b) {
            $this->opGen();
            $this->b = false;
        }
        return view('livewire.vectores');
    }

    public function opGen()
    {
        $opcion = mt_rand(1, 5);
        while($opcion == $this->opc){
            $opcion = mt_rand(1,5);
        }
        $this->opc = $opcion;

        switch ($this->opc) {
            case 1:
                $this->insertar();
                break;
            case 2:
                $this->añadir();
                break;
            case 3:
                $this->eliminar();
                break;
            case 4:
                $this->ordenar();
                break;
            case 5:
                $this->asignar();
                break;
        }
    }

    public function genVector($n)
    {
        $this->arreglo = [];
        $this->arreglo = collect($this->arreglo);


        for ($i = 1; $i <= $n; $i++) {
            $num = mt_rand(1, 99);
            //$this->arreglo[] = $num;
            $this->arreglo->push($num);
        }

        $this->valor = mt_rand(1, 99);
        $this->reset('n1', 'n2', 'n3', 'n4', 'n5',);
    }

    public function insertar()
    {
        $this->genVector(4);
        $this->arreglo = collect($this->arreglo)->toArray();


        sort($this->arreglo);

        $this->arreglo = collect($this->arreglo);

        $this->msj = "Vamos a ACTUALIZAR dicho vector usando el método de INSERTAR un valor
        y cargar el vector resultante. El valor a insertar es: ";
    }

    public function verifInsertar()
    {
        $arregloAux = collect($this->arreglo);
        $arregloAux->push($this->valor);



        $arregloAux = collect($arregloAux)->toArray();
        sort($arregloAux);
        $arregloAux = collect($arregloAux);


        $this->verificar($arregloAux);
    }


    public function añadir()
    {
        $this->genVector(4);
        $this->arreglo = collect($this->arreglo);

        $this->msj = "Vamos a ACTUALIZAR dicho vector usando el método de AÑADIR un valor
        y cargar el vector resultante. El valor a añadir es: ";
    }

    public function verifAñadir()
    {
        $arregloAux = collect($this->arreglo);
        $arregloAux->push($this->valor);
        $this->verificar($arregloAux);
    }

    public function ordenar()
    {
        $this->genVector(5);
        $this->arreglo = collect($this->arreglo);
        $this->valor = null;
        $this->msj = "ORDENAR dicho vector de manera creciente e 
        indicar cómo quedaría el vector resultante. ";
    }

    public function verifOrdenar()
    {
        $arregloAux = collect($this->arreglo)->toArray();
        
        sort($arregloAux);

        $arregloAux = collect($arregloAux);
        $this->verificar($arregloAux);
    }



    public function eliminar()
    {
        $this->genVector(6);
        $this->arreglo = collect($this->arreglo)->toArray();

        $this->i = mt_rand(0, 4);

        $this->valor = $this->arreglo[$this->i];

        $this->msj = "Vamos a ACTUALIZAR dicho vector usando el método de ELIMINAR un valor
        y cargar como quedaria el vector resultante. El valor a eliminar es: ";
    }

    public function verifEliminar()
    {
        $auxiliar = collect($this->arreglo)->toArray();
        //$arregloAux->pull($this->i);
        unset($auxiliar[$this->i]);
        $arregloAux = collect();

        foreach ($auxiliar as $value) {
            $arregloAux->push($value);
        }

        $this->verificar($arregloAux);
    }
    
    public function asignar()
    {
        $this->genVector(5);
        $this->arreglo = collect($this->arreglo)->toArray();

        $this->i = mt_rand(0, 4);

        $this->msj = "ASIGNAR en la posición ". $this->i + 1 . " el valor: ";
    }

    public function verifAsignar()
    {
        $arregloAux = collect($this->arreglo)->toArray();

        $arregloAux[$this->i]=$this->valor;
        $arregloAux = collect($arregloAux);

        $this->verificar($arregloAux);
    }

    public function opVerif()
    {
        switch ($this->opc) {
            case 1:
                $this->verifInsertar();
                break;
            case 2:
                $this->verifAñadir();
                break;
            case 3:
                $this->verifEliminar();
                break;
            case 4:
                $this->verifOrdenar();
                break;
            case 5:
                $this->verifAsignar();
                break;
        }
    }

    public function verificar($arregloAux)
    {
        //$this->aux = collect($arregloAux);
        $control = [];
        $control = collect($control);

        $control->push($this->n1);
        $control->push($this->n2);
        $control->push($this->n3);
        $control->push($this->n4);
        $control->push($this->n5);

        //$this->aux2 = $control;

        if ($control == $arregloAux) {
            $this->emit('alert', 'Resolviste correctamente el ejercicio. Felicitaciones!.');
        } else {
            $this->emit('alert2', 'El ejercicio fue resuelto de manera incorrecta. Sigue practicando.');
        }
    }
}
