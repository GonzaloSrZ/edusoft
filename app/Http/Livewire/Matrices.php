<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Matrices extends Component
{
    public $arreglo=[];

    public $opc;

    public $b = true;

    public $n;

    public function render()
    {
        if ($this->b) {
            $this->opGen();
            $this->b = false;
        }
        return view('livewire.matrices');
    }

    public function genMatriz($n)
    {

        for ($i = 0; $i < $n; $i++) {
            for($j = 0; $j < $n; $j++){

                $num = mt_rand(1, 99);
                $this->arreglo[$i][$j] = $num;
            }
        }

        sort($this->arreglo);

        $this->valor = mt_rand(1, 99);
        //$this->reset('n1', 'n2', 'n3', 'n4', 'n5',);
    }

    public function opGen()
    {
        $this->n=3;
        $this->opc = mt_rand(1, 5);
        switch (1) {
            case 1:
                $this->genMatriz($this->n);
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
}
