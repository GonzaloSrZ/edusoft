<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vectores extends Component
{
    public $arreglo = [], $valor;

    public $n1, $n2, $n3, $n4, $n5;

    public $b=true;


    public function render()
    {
        if ($this->b){
            $this->genVector();
        }
        return view('livewire.vectores');
    }

    public function genVector()
    {
        $this->b=false;
        $this->arreglo = [];
        $this->arreglo = collect($this->arreglo);


        for ($i = 1; $i <= 4; $i++) {
            $num = mt_rand(1, 99);
            //$this->arreglo[] = $num;
            $this->arreglo->push($num);
        }

        $this->valor = mt_rand(1, 99);
        $this->reset('n1','n2','n3','n4','n5',);
    }

    public function verificar()
    {
        $arregloAux = collect($this->arreglo);
        $control = [];
        $control = collect($control);

        $control->push($this->n1);
        $control->push($this->n2);
        $control->push($this->n3);
        $control->push($this->n4);
        $control->push($this->n5);

        $arregloAux->push($this->valor);
        if ($control==$arregloAux) {
            $this->emit('alert', 'El vector está creado correctamente');
        } else {
            $this->emit('alert2', 'El vector creado es incorrecto');
        }
    }
}
