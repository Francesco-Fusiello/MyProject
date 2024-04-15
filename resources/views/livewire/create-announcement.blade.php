<div>
    
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif




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
            <input wire:model.change='price' type="number" class="form-control" min="1">
            @error('price')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label  class="form-label color-primary">Categoria</label>
            <select wire:model.change='category_id' class="form-select @error('category_id') is-invalid @enderror">
                <option value="">Seleziona una categoria</option>
                @foreach (App\Models\Category::all() as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-danger fw-bold">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
            @error('temporary_images.*')
             <p class="text-danger mt-2">{{$message}}</p>
             @enderror
        </div>
        @if (!empty($images))
            <div class="row">
                <div class="div col-12">
                    <p>Photo preview:</p>
                    <div class="row border border-4 border-info rounded shadow py-4">
                        @foreach($images as $key => $images)
                        <div class="col my-3">
                            <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});"></div>
                            <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</div>
