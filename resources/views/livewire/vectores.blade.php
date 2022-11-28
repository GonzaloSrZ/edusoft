<div>
    <p>Dado el vector: <b>V=[{{ implode(',', collect($arreglo)->toArray()) }}]</b></p>
    <p>{{ $msj }}<b>{{$valor}}</b></p>
    <div class="row g-2 justify-content-center">
            <div class="" style="width: 65px">
                <input type="number" wire:model.defer="n1" placeholder="V₁" class="form-control">
            </div>
            <div class="" style="width: 65px">
                <input type="number" wire:model.defer="n2" placeholder="V₂" class="form-control">
            </div>
            <div class="" style="width: 65px">
                <input type="number" wire:model.defer="n3" placeholder="V₃" class="form-control">
            </div>
            <div class="" style="width: 65px">
                <input type="number" wire:model.defer="n4" placeholder="V₄" class="form-control">
            </div>
            <div class="" style="width: 65px">
                <input type="number" wire:model.defer="n5" placeholder="V₅" class="form-control">
            </div>
    </div>

    <br>

    {{-- <p>{{implode(',', collect($aux)->toArray())}}</p>
    <p>{{implode(',', collect($aux2)->toArray())}}</p> --}}


    <button class="btn btn-secondary text-light" wire:click="opGen">Generar otro</button>

    <button class="btn btn-dark text-light" wire:click="opVerif">Verificar</button>

    @section('js')
        <script>
            Livewire.on('prueba', message => {
            console.log("escuchado");
        })
        </script>
    @stop

</div>
