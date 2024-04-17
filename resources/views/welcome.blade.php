<x-layout>




    @if (session()->has('access.denied'))
        <div class="alert alert-danger" role="alert">
            {{ session('access.denied') }}
        </div>
    @endif


    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

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
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-11">
                <img style="position-relative" class="img-fluid rounded-5 "src="{{ __('ui.banner') }}"  alt="">
                <a href="{{ route('categoryShow', 9) }}"><button class="button-1">Scoprili tutti</button></a>

            </div>

        </div>
    </div>

    <section class="light">
        <div class="container py-2">
            <div class="h1 text-center text-dark raleway-Thin" id="pageHeaderTitle">{{ __('ui.allAnnouncements') }}
            </div>


            <div id="carouselExampleFade" class="carousel slide carousel-fade">



                <div class="carousel-inner">
                    @foreach ($announcements as $announcement)

                        <div class="carousel-item active">
                            <article class="postcard light red">
                                <a class="postcard__img_link" href="#">
                                    <img class="postcard__img"
                                        src="{{ !$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200' }}"
                                        alt="Image Title" />
                                </a>
                                <div class="postcard__text t-dark">
                                    <h1 class="postcard__title red"><a
                                            href="{{ route('announcements.show', $announcement) }}">{{ $announcement->title }}</a>
                                    </h1>
                                    <div class="postcard__subtitle small">
                                        <time datetime="2020-05-25 12:00:00">
                                            <i class="fas fa-calendar-alt mr-2"> {{ __('ui.pub') }}
                                                {{ $announcement->created_at->format('d/m/y') }}</i>
                                        </time>
                                    </div>
                                    <div class="postcard__bar"></div>
                                    <div class="postcard__preview-txt"> {{ $announcement->body }}</div>
                                    <ul class="postcard__tagbox">
                                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{ __('ui.value') }}
                                            {{ $announcement->price }}</li>
                                        <br>
                                        <li class="tag__cat play red">
                                            <a
                                                href="{{ route('categoryShow', ['category' => $announcement->category]) }}"><i
                                                    class="fas fa-play mr-2"></i> {{ __('ui.category') }}
                                                {{ $announcement->category->name }}</a>
                                        </li>
                                    </ul>
                                    <p class="card-text fs-6 fst-italic ">{{ __('ui.author') }}
                                        {{ $announcement->user->name }}</p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-primary mt-5" aria-hidden="true"></span>
                        <span class="visually-hidden  ">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-primary mt-5" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

            </div>


        </div>
    </section>




    {{-- Card una sotto l'altra--}}
    {{-- <section class="light">
        <div class="container py-2">
            <div class="h1 text-center text-dark raleway-Thin" id="pageHeaderTitle">{{ __('ui.allAnnouncements') }}
            </div>
            @foreach ($announcements as $announcement)
                <article class="postcard light red">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img"
                            src="{{ !$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200' }}"
                            alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title red"><a
                                href="{{ route('announcements.show', $announcement) }}">{{ $announcement->title }}</a>
                        </h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"> {{ __('ui.pub') }}
                                    {{ $announcement->created_at->format('d/m/y') }}</i>
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt"> {{ $announcement->body }}</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{ __('ui.value') }}
                                {{ $announcement->price }}</li>
                            <br>
                            <li class="tag__cat play red">
                                <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"><i
                                        class="fas fa-play mr-2"></i> {{ __('ui.category') }}
                                    {{ $announcement->category->name }}</a>
                            </li>
                        </ul>
                        <p class="card-text fs-6 fst-italic ">{{ __('ui.author') }} {{ $announcement->user->name }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </section> --}}




</x-layout>
