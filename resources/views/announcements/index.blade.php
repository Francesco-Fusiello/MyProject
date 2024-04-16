<x-layout>
    <x-barraricerca />

    <div class="container py-5">
        <!-- For Demo Purpose-->
        <header class="text-center mb-5">
            <h1 class="display-4 font-weight-bold">Tutti i nostri annunci</h1>
        </header>

        <!-- First Row [Prosucts]-->

        <div class="row pb-5 mb-4">
            @forelse($announcements as $announcement)
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- Card-->
                    <div class="card rounded shadow-sm border-0">
                        <div class="card-body p-4"> <img src="https://picsum.photos/200" alt=""
                                class='img-fluid d-block mx-auto mb-3'>

                            <h5 class="card-title text-center ">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->body }}</p>
                            <p class="card-text">Valore: {{ $announcement->price }}</p>
                            <a href="{{ route('announcements.show', $announcement) }}"
                                class="btn btn-primary shadow w-50">Visualizza</a>
                            <p>
                                <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                    class="w-100 my-2 border-top pt-2 border-dark card-link shadow btn btn-outline-success ">Categoria:
                                    {{ $announcement->category->name }}</a>
                            </p>
                            <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/y') }}</p>
                            <p class="card-text fs-6 fst-italic ">Autore: {{ $announcement->user->name }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">Nessun articolo trovato</p>
                    </div>
                </div>
            @endforelse
            {{ $announcements->links() }}
        </div>
    </div>
</x-layout>
