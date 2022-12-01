<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Matrices extends Component
{
    public $arreglo=[];

    public $opc=0;

    public $b = true, $open=true;

    public $valor, $msj;

    public $n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$d1,$d2,$d3;

    public $filas, $columnas;

    public $i, $j;

    public $aux=[],$aux2=[];

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
        $this->filas=$f;
        $this->columnas=$c;


        for ($i = 0; $i < $f; $i++) {
            for($j = 0; $j < $c; $j++){

                $num = mt_rand(1, 99);
                $this->arreglo[$i][$j] = $num;
            }
        }

        $this->valor = mt_rand(1, 99);
        $this->reset('n1', 'n2', 'n3', 'n4', 'n5','n6','n7','n8','n9','d1','d2','d3');
    }

    public function opGen()
    {
        $this->filas=3;

        $opcion = mt_rand(1, 5);
        while($opcion == $this->opc){
            $opcion = mt_rand(1,5);
        }
        $this->opc = $opcion;

        switch ($this->opc) {
            case 1:
                $this->asignar();
                break;
            case 2:
                $this->ordenar();
                break;
            case 3:
                $this->diagonal();
                break;
            case 4:
                $this->insertar();
                break;
            case 5:
                $this->eliminar();
                break;
        }
    }

    public function asignar()
    {
        $this->genMatriz(3,3);

        $this->open=true;

        $this->i = mt_rand(0, 2);
        $this->j = mt_rand(0, 2);
        
        $this->valor = mt_rand(1, 99);

        $this->msj = "ASIGNAR en la posición [". $this->i + 1 . ",".$this->j + 1 ."] el valor: ";
    }

    public function verifAsignar()
    {
        $arregloAux = $this->arreglo;

        $arregloAux[$this->i][$this->j]=$this->valor;

        $this->verificar($arregloAux);
    }
    
    public function ordenar()
    {
        $this->genMatriz(3,3);

        $this->open=true;

        $this->valor=null;

        $this->msj = "ORDENAR dicha matriz según su primer columna e indicar como quedaría la matriz resultante.";
    }

    public function verifOrdenar()
    {
        $arregloAux = $this->arreglo;

        sort($arregloAux);

        $this->verificar($arregloAux);
    }


    public function diagonal()
    {
        $this->genMatriz(3,3);

        $this->open=false;

        $this->valor=null;

        $this->msj = "Cargar la DIAGONAL PRINCIPAL de dicha matriz.";
    }

    public function verifDiagonal()
    {
        $arregloAux[] = $this->arreglo[0][0];
        $arregloAux[] = $this->arreglo[1][1];
        $arregloAux[] = $this->arreglo[2][2];

        $control[]=$this->d1;
        $control[]=$this->d2;
        $control[]=$this->d3;

        if ($control == $arregloAux) {
            $this->emit('alert', 'La diagonal esta creada correctamente.');
        } else {
            $this->emit('alert2', 'La diagonal creada es incorrecta.');
        }
    }
    
    public function insertar()
    {
        $this->genMatriz(2,3);

        $this->open=true;

        $this->valor=[];

        $this->valor[]=mt_rand(1, 99);
        $this->valor[]=mt_rand(1, 99);
        $this->valor[]=mt_rand(1, 99);

        sort($this->arreglo);

        $this->msj = "La matriz M está ordenada según su primera columna. 
        Vamos INSERTAR una fila en dicha matriz y cargar la matriz resultante. La fila a insertar es: ";
    }

    public function verifInsertar()
    {
        $arregloAux = $this->arreglo;

        $arregloAux[] = $this->valor;

        sort($arregloAux);

        $this->verificar($arregloAux);
    }
    
    public function eliminar()
    {
        $this->genMatriz(4,3);

        $this->open=true;

        sort($this->arreglo);

        $this->i=mt_rand(0, 3);

        $this->valor=$this->arreglo[$this->i][0];

        $this->msj = "La matriz M está ordenada según su primera columna. Vamos a ELIMINAR un valor de dicha matriz
         y cargar la matriz resultante. El valor a eliminar es: ";
    }

    public function verifEliminar()
    {
        $auxiliar = $this->arreglo;
        unset($auxiliar[$this->i]);
        $arregloAux = [];

        foreach ($auxiliar as $value) {
            $arregloAux[]=$value;
        }

        $this->verificar($arregloAux);
    }

    public function opVerif()
    {
        switch ($this->opc) {
            case 1:
                $this->verifAsignar();
                break;
            case 2:
                $this->verifOrdenar();
                break;
            case 3:
                $this->verifDiagonal();
                break;
            case 4:
                $this->verifInsertar();
                break;
            case 5:
                $this->verifEliminar();
                break;
        }
    }

    public function verificar($arregloAux)
    {
        $this->aux = collect($arregloAux);
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

        $this->aux2 = $control;

        if ($control == $arregloAux) {
            $this->emit('alert', 'Resolviste correctamente el ejercicio. Felicitaciones!.');
        } else {
            $this->emit('alert2', 'El ejercicio fue resuelto de manera incorrecta. Sigue practicando.');
        }
        
    }

}
