<div>

    <div class="row g-2">
        <div class="" style="width: 150px">
            <p class="">Dada la matriz: <b>M=</b></p>
        </div>
        <div class="" style="width: 300px">
            @for ($i = 0; $i < $this->n; $i++)
                <p>
                    <b>
                        {{ json_encode($arreglo[$i]) }}
                    </b>
                </p>
            @endfor

        </div>
    </div>

    <p><b></b></p>
    <div class="row g-5">
        <div class="" style="width: 112px">
            <input type="number" wire:model.defer="n1" placeholder="V₁" class="form-control">
        </div>
        <div class="" style="width: 112px">
            <input type="number" wire:model.defer="n2" placeholder="V₂" class="form-control">
        </div>
        <div class="" style="width: 112px">
            <input type="number" wire:model.defer="n3" placeholder="V₃" class="form-control">
        </div>
        <div class="" style="width: 112px">
            <input type="number" wire:model.defer="n4" placeholder="V₄" class="form-control">
        </div>
        <div class="" style="width: 112px">
            <input type="number" wire:model.defer="n5" placeholder="V₅" class="form-control">
        </div>
    </div>

    <br>

    {{-- <p>{{implode(',', collect($aux)->toArray())}}</p>
    <p>{{implode(',', collect($aux2)->toArray())}}</p> --}}


    <button class="btn btn-secondary text-light" wire:click="opGen">Generar otro</button>

    <button class="btn btn-dark text-light" wire:click="">Verificar</button>
</div>
