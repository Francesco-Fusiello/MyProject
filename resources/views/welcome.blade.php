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

    <x-button_category />

    {{-- Banner  --}}

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11" style="position: relative;">
                <a href="{{ route('categoryShow', 9) }}">
                    <img class="img-fluid rounded-5" src="{{ __('ui.banner') }}" alt="">
                </a>
                <a href="{{ route('categoryShow', 9) }}">
                    <button class="button-1">{{ __('ui.scoprili') }}</button>
                </a>
            </div>
        </div>
    </div>



    {{-- Testo ultimi annunci --}}
    <section class="light">
        <div class="container py-1">
            <div class="h2 text-center text-dark raleway-Thin" id="pageHeaderTitle">{{ __('ui.allAnnouncements') }}
            </div>

            {{-- Carosello --}}
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    @foreach ($announcements as $key => $announcement)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="postcard light red">
                                <div class="postcard__img_link">
                                    <img class="postcard__img"
                                        src="{{ !$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200' }}"
                                        alt="Image Title" />
                                </div>
                                <div class="postcard__text t-dark">
                                    <h1 class="postcard__title red"><a
                                            href="{{ route('announcements.show', $announcement) }}">{{ $announcement->title }}</a>
                                    </h1>
                                    <div class="postcard__subtitle small">
                                        {{-- <time datetime="2020-05-25 12:00:00"> --}}
                                            <i class="fas fa-calendar-alt mr-2"> {{ __('ui.pub') }}
                                                {{ $announcement->created_at->format('d/m/y') }}</i>
                                        </time>
                                    </div>
                                    <div class="postcard__bar"></div>
                                    <div class="postcard__preview-txt"> {{ $announcement->body }}</div>
                                    <ul class="postcard__tagbox">
                                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{ __('ui.value') }}
                                            {{ $announcement->price }}</li>
                                        {{-- <br> --}}
                                        <li class="tag__cat play red ms-3">
                                            <a
                                                href="{{ route('categoryShow', ['category' => $announcement->category]) }}"><i
                                                    class="fas fa-play mr-2"></i> {{ __('ui.category') }}
                                                {{ __('ui.' . $announcement->category->name) }}</a>
                                        </li>
                                    </ul>
                                    <p class="card-text fs-6 fst-italic ">{{ __('ui.author') }}
                                        {{ $announcement->user->name }}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>




    {{-- Card una sotto l'altra --}}
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
