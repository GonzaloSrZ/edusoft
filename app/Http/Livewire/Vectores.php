<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vectores extends Component
{
    public $arreglo = [], $valor;

    public $n1, $n2, $n3, $n4, $n5;

    public $b=true;

    public $opc=1;

    public $msj="";


    public function render()
    {
        if ($this->b){
            $this->opGen();
            $this->b=false;
        }
        return view('livewire.vectores');
    }

    public function opGen(){
        $this->opc = mt_rand(1, 2);
        switch ($this->opc) {
            case 1:
                $this->insertar();
                break;
            case 2:
                $this->añadir();
                break;
            case 2:
                echo "i es igual a 2";
                break;
        }

    }

    public function genVector()
    {
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

    public function insertar(){
        $this->genVector();
        $this->arreglo = collect($this->arreglo)->toArray();
        
        
        sort($this->arreglo);

        $this->arreglo = collect($this->arreglo);
        //$array = collect($array);
        
        //$this->arreglo=collect($array);
        //$this->arreglo = collect($this->arreglo);

        $this->msj="El vector generado se encuentra ordenado y vamos a INSERTAR el siguiente valor: ";

    }

    public function verifInsertar(){
        $arregloAux = collect($this->arreglo);
        $arregloAux->push($this->valor);
        
        
        
        $arregloAux = collect($arregloAux)->toArray();
        sort($arregloAux);
        $arregloAux = collect($arregloAux);


        $this->verificar($arregloAux);
    }


    public function añadir(){
        $this->genVector();
        $this->arreglo = collect($this->arreglo);

        $this->msj="En el vector que se ha generado vamos a AÑADIR el siguiente valor: ";

    }
    
    public function verifAñadir(){
        $arregloAux = collect($this->arreglo);
        $arregloAux->push($this->valor);
        $this->verificar($arregloAux);

    }

    public function opVerif(){
        switch ($this->opc) {
            case 1:
                $this->verifInsertar();
                break;
            case 2:
                $this->verifAñadir();
                break;
            case 2:
                echo "i es igual a 2";
                break;
        }

    }

    public function verificar($arregloAux)
    {
        
        $control = [];
        $control = collect($control);

        $control->push($this->n1);
        $control->push($this->n2);
        $control->push($this->n3);
        $control->push($this->n4);
        $control->push($this->n5);

        
        if ($control==$arregloAux) {
            $this->emit('alert', 'El vector está creado correctamente');
        } else {
            $this->emit('alert2', 'El vector creado es incorrecto');
        }
    }
}
