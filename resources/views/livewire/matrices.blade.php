<div>

    <div class="row g-2 align-items-center">
        <div class="" style="width: 150px">
            <p class="">Dada la matriz: <b>M=</b></p>
        </div>
        <div class="" style="width: 150px">
            @for ($i = 0; $i < $this->filas; $i++)
                <p>
                    <b>
                        {{ json_encode($arreglo[$i]) }}
                    </b>
                </p>
            @endfor

        </div>
    </div>

    <p>{{ $msj }}<b>
        @if ($valor!=null)
        {{ json_encode($valor) }}
        @endif
    </b></p>

    @if ($open)
        <div class="row g-2 p-1 justify-content-center">
            <div class="" style="width: 75px">
                <input type="number" wire:model.defer="n1" placeholder="M₁₁" class="form-control">
            </div>
            <div class="" style="width: 75px">
                <input type="number" wire:model.defer="n2" placeholder="M₁₂" class="form-control">
            </div>
            <div class="" style="width: 75px">
                <input type="number" wire:model.defer="n3" placeholder="M₁₃" class="form-control">
            </div>
        </div>

        <div class="row g-2 p-1 justify-content-center">
            <div class="" style="width: 75px">
                <input type="number" wire:model.defer="n4" placeholder="M₂₁" class="form-control">
            </div>
            <div class="" style="width: 75px">
                <input type="number" wire:model.defer="n5" placeholder="M₂₂" class="form-control">
            </div>
            <div class="" style="width: 75px">
                <input type="number" wire:model.defer="n6" placeholder="M₂₃" class="form-control">
            </div>
        </div>
        <div class="row g-2 p-1 justify-content-center">
            <div class="" style="width: 75px">
                <input type="number" wire:model.defer="n7" placeholder="M₃₁" class="form-control">
            </div>
            <div class="" style="width: 75px">
                <input type="number" wire:model.defer="n8" placeholder="M₃₂" class="form-control">
            </div>
            <div class="" style="width: 75px">
                <input type="number" wire:model.defer="n9" placeholder="M₃₃" class="form-control">
            </div>
        </div>        
    @else
    <div class="row g-2 p-1 justify-content-center">
        <div class="" style="width: 75px">
            <input type="number" wire:model.defer="d1" class="form-control">
        </div>
        <div class="" style="width: 75px">
            <input type="number" wire:model.defer="d2" class="form-control">
        </div>
        <div class="" style="width: 75px">
            <input type="number" wire:model.defer="d3" class="form-control">
        </div>
    </div>
        
    @endif
    <br>

     {{-- <p>{{json_encode($aux)}}</p>
    <p>{{json_encode($aux2)}}</p>  --}}


    <button class="btn btn-secondary text-white" wire:click="opGen">
        <b>
            Generar
        </b>
    </button>

    <button class="btn btn-dark text-white" wire:click="opVerif">
        <b>
            Verificar
        </b>
    </button>
</div>
