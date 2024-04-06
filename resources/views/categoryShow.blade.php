<x-layout>

    <div class="col-12">
        <div class="row">
            @forelse($category->announcements as $announcement)
                <div class="col-12 col-md-4 my-4">
                    <div class="card shadow" style='width: 25rem;'>
                        <img src="https://picsum.photos/200" alt="" class='card-img-top p-3 rounded'>
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->body }}</p>
                            <p class="card-text">Valore: {{ $announcement->price }}</p>
                            <a href="" class="btn btn-primary shadow">Visualizza</a>
                            <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/y') }}</p>
                            <p class="card-text fs-6 fst-italic ">Autore: {{ $announcement->user->name ?? '' }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="h1">Non ci sono annunci per la categoria selezionata!</p>
                    <p class="h2">Pubblicane uno: <a href="{{ route('announcements.create') }}"
                            class="btn btn-success shadow">Nuovo Annuncio</a> </p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
