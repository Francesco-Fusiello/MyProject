<div>
    <h2 class="text-center">Crea il tuo annuncio</h2>

    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label  class="form-label">Titolo</label>
            <input wire:model.change='title' type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label  class="form-label">Descrizione</label>
            <input wire:model.change='body' type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label  class="form-label">Prezzo</label>
            <input wire:model.change='price' type="number" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
