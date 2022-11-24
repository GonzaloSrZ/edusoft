<div>
    <p>Según el siguiente vector: [{{ implode(',', collect($arreglo)->toArray()) }}]</p>
    <p>Ingrese como quedaría el nuevo vector añadiendo el valor: {{ $valor }}</p>
    <div class="row g-5">
            <div class="col-sm-1">
                <input type="number" wire:model.defer="n1" class="form-control">
            </div>
            <div class="col-sm-1">
                <input type="number" wire:model.defer="n2" class="form-control">
            </div>
            <div class="col-sm-1">
                <input type="number" wire:model.defer="n3" class="form-control">
            </div>
            <div class="col-sm-1">
                <input type="number" wire:model.defer="n4" class="form-control">
            </div>
            <div class="col-sm-1">
                <input type="number" wire:model.defer="n5" class="form-control">
            </div>
    </div>

    <br>

    <button class="btn btn-secondary text-light" wire:click="genVector">Generar</button>

    <button class="btn btn-dark text-light" wire:click="verificar">Verificar</button>

    @section('js')
        <script>
            Livewire.on('prueba', message => {
            console.log("escuchado");
        })
        </script>
    @stop

</div>
