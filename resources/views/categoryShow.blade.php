<x-layout>
    <x-barraricerca/>
<h1 class="title_cat p-4 text-light ">Esplora la categoria: {{ $category->name }}</h1>
    <div class="mt-5 col-12">
        <div class="row">
            @forelse($category->announcements as $announcement)
                <div class="col-12 col-md-4 my-4">
                    <div class="card shadow" style='width: 25rem;'>
                        <img src="https://picsum.photos/200" alt="" class='card-img-top p-3 rounded'>
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->body }}</p>
                            <p class="card-text">Valore: {{ $announcement->price }}</p>
                            <a href="{{route('announcements.show', $announcement)}}" class="btn btn-primary shadow m-3">Visualizza</a>
                            <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/y') }}</p>
                            <p class="card-text fs-6 fst-italic ">Autore: {{ $announcement->user->name ?? '' }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="h1">Non ci sono annunci per la categoria selezionata!</p>
                    <p class="h2 mt-5">Pubblicane uno: <a href="{{ route('announcements.create') }}"
                            class="btn btn-success shadow">Nuovo Annuncio</a> </p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
