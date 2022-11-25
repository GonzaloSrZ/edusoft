<div>
    <p>Dado el vector: <b>[{{ implode(',', collect($arreglo)->toArray()) }}]</b></p>
    <p>{{ $msj }}<b>{{$valor}}</b></p>
    <div class="row g-5">
            <div class="" style="width: 112px">
                <input type="number" wire:model.defer="n1" placeholder="i=1" class="form-control">
            </div>
            <div class="" style="width: 112px">
                <input type="number" wire:model.defer="n2" placeholder="i=2" class="form-control">
            </div>
            <div class="" style="width: 112px">
                <input type="number" wire:model.defer="n3" placeholder="i=3" class="form-control">
            </div>
            <div class="" style="width: 112px">
                <input type="number" wire:model.defer="n4" placeholder="i=4" class="form-control">
            </div>
            <div class="" style="width: 112px">
                <input type="number" wire:model.defer="n5" placeholder="i=5" class="form-control">
            </div>
    </div>

    <br>

    {{-- <p>{{implode(',', collect($aux)->toArray())}}</p>
    <p>{{implode(',', collect($aux2)->toArray())}}</p>
 --}}

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
