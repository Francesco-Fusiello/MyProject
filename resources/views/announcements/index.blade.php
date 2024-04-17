<x-layout>
    <x-barraricerca />
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

    <div class="container py-5">
        <!-- For Demo Purpose-->
        <header class="text-center mb-5">
            <h1 class="display-4 font-weight-bold"> {{ __('ui.tuttiAnn') }}</h1>
        </header>

        <!-- First Row [Prosucts]-->

    <div class="row pb-5 mb-4">
  @forelse($announcements as $announcement)
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-4">  <img src="https://picsum.photos/200" alt="" class='img-fluid d-block mx-auto mb-3'>

                            <h5 class="card-title text-center ">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->body }}</p>
                            <p class="card-text">{{ __('ui.value') }} {{ $announcement->price }}</p>
                            <a href="{{ route('announcements.show', $announcement) }}"
                                class="btn btn-primary shadow w-50">{{ __('ui.visua') }}</a>
                            <p>
                                <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                    class="w-100 my-2 border-top pt-2 border-dark card-link shadow btn btn-outline-success ">{{ __('ui.category') }}
                                    {{ $announcement->category->name }}</a>
                            </p>
                            <p class="card-footer">{{ __('ui.pub') }} {{ $announcement->created_at->format('d/m/y') }}</p>
                            <p class="card-text fs-6 fst-italic ">{{ __('ui.author') }} {{ $announcement->user->name }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">{{ __('ui.nessA') }}</p>
                    </div>
                </div>
            @endforelse
            {{ $announcements->links() }}
        </div>
    </div>
</x-layout>
