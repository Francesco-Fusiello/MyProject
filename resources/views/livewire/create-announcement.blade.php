<div>
    
    <h2 class="text-center">Crea il tuo annuncio</h2>
    @if (session()->has('success'))
    <div class="alert alert-success">
    {{session('success')}}
    </div>
    @endif

    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label  class="form-label">Titolo</label>
            <input wire:model.change='title' type="text" class="form-control">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label  class="form-label">Descrizione</label>
            <input wire:model.change='body' type="text" class="form-control">
            @error('body')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label  class="form-label">Prezzo</label>
            <input wire:model.change='price' type="number" class="form-control">
            @error('price')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label  class="form-label color-primary">Categoria</label>
            <select wire:model.change='id_category' class="form-select @error('id_category') is-invalid @enderror">
                <option >Seleziona una categoria</option>
                @foreach (App\Models\Category::all() as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('id_category')
                <span class="text-danger fw-bold">{{$message}}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</div>
