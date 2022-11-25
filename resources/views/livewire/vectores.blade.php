<div>
    <p>Según el siguiente vector: <b>[{{ implode(',', collect($arreglo)->toArray()) }}]</b></p>
    <p>{{ $msj }}<b>{{$valor}}</b></p>
    <div class="row g-5">
            <div class="" style="width: 110px">
                <input type="number" wire:model.defer="n1" class="form-control">
            </div>
            <div class="" style="width: 110px">
                <input type="number" wire:model.defer="n2" class="form-control">
            </div>
            <div class="" style="width: 110px">
                <input type="number" wire:model.defer="n3" class="form-control">
            </div>
            <div class="" style="width: 110px">
                <input type="number" wire:model.defer="n4" class="form-control">
            </div>
            <div class="" style="width: 110px">
                <input type="number" wire:model.defer="n5" class="form-control">
            </div>
    </div>

    <br>

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
