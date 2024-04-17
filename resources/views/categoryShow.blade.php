<x-layout>
    <x-barraricerca/>

    {{-- BUTTON CON ICONE --}}
    <div class="container">
        <div class="row justify-content-center">
            <h2>{{ __('ui.exporaCat') }}</h2>
            <ul class="wrapper">
                <li class="icon abbigl">
                    <span class="tooltip">{{ __('ui.abbigliamento') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 1) }}"><i
                                class="fa-solid fa-shirt"></i></a></span>
                </li>
                <li class="icon inform">
                    <span class="tooltip">{{ __('ui.informatica') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 2) }}"><i
                                class="fa-solid fa-computer"></a></i></span>
                </li>
                <li class="icon elettro">
                    <span class="tooltip">{{ __('ui.elettrodom') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 3) }}"><i
                                class="fa-solid fa-blender-phone"></a></i></span>
                </li>
                <li class="icon libri">
                    <span class="tooltip">{{ __('ui.libri') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 4) }}"><i
                                class="fa-solid fa-book"></a></i></span>
                </li>
                <li class="icon giochi">
                    <span class="tooltip">{{ __('ui.giochi') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 5) }}"><i
                                class="fa-solid fa-table-tennis-paddle-ball"></a></i></span>
                </li>
                <li class="icon sport">
                    <span class="tooltip">Sport</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 6) }}"><i
                                class="fa-solid fa-person-biking"></a></i></span>
                </li>
                <li class="icon telef">
                    <span class="tooltip">{{ __('ui.tel') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 7) }}"><i
                                class="fa-solid fa-mobile-screen-button"></a></i></span>
                </li>
                <li class="icon servizi">
                    <span class="tooltip">{{ __('ui.serv') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 8) }}"><i
                                class="fa-regular fa-lightbulb"></a></i></span>
                </li>
                <li class="icon arredo">
                    <span class="tooltip">{{ __('ui.arred') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 9) }}"><i
                                class="fa-solid fa-couch"></a></i></span>
                </li>
                <li class="icon vgame">
                    <span class="tooltip">{{ __('ui.videog') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 10) }}"><i
                                class="fa-solid fa-gamepad"></a></i></span>
                </li>



            </ul>
        </div>
    </div>

<h1 class="p-4 text-center  ">Esplora la categoria: {{ __("ui.$category->name")}}</h1>
    <div class="mt-5 col-12">
        <div class="row">
            @forelse($category->announcements as $announcement)
                <div class="col-12 col-md-4 my-4">
                    <div class="card shadow" style='width: 25rem;'>
                        <img class="postcard__img"
                                        src="{{ !$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200' }}"
                                        alt="Image Title" />
                        {{-- <img src="https://picsum.photos/200" alt="" class='card-img-top p-3 rounded'> --}}
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
