<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Matrices extends Component
{
    public $arreglo=[];

    public $opc;

    public $b = true;

    public $valor, $msj;

    public $n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9;

    public $filas, $columnas;

    public $i, $j;

    public function render()
    {
        if ($this->b) {
            $this->opGen();
            $this->b = false;
        }
        return view('livewire.matrices');
    }

    public function genMatriz($f,$c)
    {

        for ($i = 0; $i < $f; $i++) {
            for($j = 0; $j < $c; $j++){

                $num = mt_rand(1, 99);
                $this->arreglo[$i][$j] = $num;
            }
        }

        $this->valor = mt_rand(1, 99);
        $this->reset('n1', 'n2', 'n3', 'n4', 'n5','n6','n7','n8','n9');
    }

    public function opGen()
    {
        $this->filas=3;
        $this->opc = mt_rand(1, 5);
        $this->opc = 1;
        switch ($this->opc) {
            case 1:
                $this->asignar();
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

    public function asignar()
    {
        $this->genMatriz(3,3);

        $this->i = mt_rand(0, 2);
        $this->j = mt_rand(0, 2);
        
        $this->valor = mt_rand(1, 99);

        $this->msj = "Vamos a modificar la matriz obtenida y cargarla cómo quedaría finalmente. 
        Queremos ASIGNAR en la posición [". $this->i + 1 . ",".$this->j + 1 ."] el valor: ";
    }

    public function verifAsignar()
    {
        $arregloAux = $this->arreglo;

        $arregloAux[$this->i][$this->j]=$this->valor;

        $this->verificar($arregloAux);
    }

    public function opVerif()
    {
        switch ($this->opc) {
            case 1:
                $this->verifAsignar();
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

        $control[0][0]=$this->n1;
        $control[0][1]=$this->n2;
        $control[0][2]=$this->n3;
        $control[1][0]=$this->n4;
        $control[1][1]=$this->n5;
        $control[1][2]=$this->n6;
        $control[2][0]=$this->n7;
        $control[2][1]=$this->n8;
        $control[2][2]=$this->n9;

        //$this->aux2 = $control;

        if ($control == $arregloAux) {
            $this->emit('alert', 'El vector está creado correctamente');
        } else {
            $this->emit('alert2', 'El vector creado es incorrecto');
        }
    }
}
