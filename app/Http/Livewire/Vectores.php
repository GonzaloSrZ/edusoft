<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vectores extends Component
{
    public $arreglo=[],$valor;

    public $n1,$n2,$n3,$n4,$n5;


    public function render()
    {
        return view('livewire.vectores');
    }

    public function genVector(){
        $this->arreglo=[];
        $this->arreglo=collect($this->arreglo);


        for ($i = 1; $i <= 4; $i++) {
            $num=mt_rand(1,99);
            //$this->arreglo[] = $num;
            $this->arreglo->push($num);
        }

        $this->valor=mt_rand(1,99);
    }

    public function verificar(){
        $this->arreglo=collect($this->arreglo);
        $control=[];
        $control=collect($control);
        
        $control->push($this->n1);
        $control->push($this->n2);
        $control->push($this->n3);
        $control->push($this->n4);
        $control->push($this->n5);

        $this->arreglo->push($this->valor);
        $diff = $control->diff($this->arreglo);
        if (collect($diff)->isEmpty()){
            $this->emit('alert', 'El vector está creado correctamente');
            
        }
    }
}
