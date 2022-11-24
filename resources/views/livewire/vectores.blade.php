<div>
    <p>Según el siguiente vector: {{ implode('-', collect($arreglo)->toArray()) }}</p>
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

    <button wire:click="genVector">Generar</button>

    <button wire:click="verificar">Verificar</button>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script>
        Livewire.on('alert', message =>{
          console.log("escuchado");
            Swal.fire(
                'Bien hecho!',
                message,
                'success'
            );
        })

        Livewire.on('alert2', message=> {
          console.log("escuchado");
            Swal.fire(message);
        })
    </script> --}}
</div>
