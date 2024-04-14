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
            <h2>{{__('ui.exporaCat')}}</h2>
            <ul class="wrapper">
                <li class="icon abbigl">
                    <span class="tooltip">Abbigliamento</span>
                    <span><a class="iconaante" href="{{route('categoryShow', 1)}}"><i class="fa-solid fa-shirt"></i></a></span>
                </li>
                <li class="icon inform">
                    <span class="tooltip">Informatica</span>
                    <span><a class="iconaante" href="{{route('categoryShow', 2)}}"><i class="fa-solid fa-computer"></a></i></span>
                </li>
                <li class="icon elettro">
                    <span class="tooltip">Elettrodomestici</span>
                    <span><a class="iconaante" href="{{route('categoryShow', 3)}}"><i class="fa-solid fa-blender-phone"></a></i></span>
                </li>
                <li class="icon libri">
                    <span class="tooltip">Libri</span>
                    <span><a class="iconaante" href="{{route('categoryShow', 4)}}"><i class="fa-solid fa-book"></a></i></span>
                </li>
                <li class="icon giochi">
                    <span class="tooltip">Giochi</span>
                    <span><a class="iconaante" href="{{route('categoryShow', 5)}}"><i class="fa-solid fa-table-tennis-paddle-ball"></a></i></span>
                </li>
                <li class="icon sport">
                    <span class="tooltip">Sport</span>
                    <span><a class="iconaante" href="{{route('categoryShow', 6)}}"><i class="fa-solid fa-person-biking"></a></i></span>
                </li>
                <li class="icon telef">
                    <span class="tooltip">Telefonia</span>
                    <span><a class="iconaante" href="{{route('categoryShow', 7)}}"><i class="fa-solid fa-mobile-screen-button"></a></i></span>
                </li>
                <li class="icon servizi">
                    <span class="tooltip">Servizi</span>
                    <span><a class="iconaante" href="{{route('categoryShow', 8)}}"><i class="fa-regular fa-lightbulb"></a></i></span>
                </li>
                <li class="icon arredo">
                    <span class="tooltip">Arredamento</span>
                    <span><a class="iconaante" href="{{route('categoryShow', 9)}}"><i class="fa-solid fa-couch"></a></i></span>
                </li>
                <li class="icon vgame">
                    <span class="tooltip">Videogame</span>
                    <span><a class="iconaante" href="{{route('categoryShow', 10)}}"><i class="fa-solid fa-gamepad"></a></i></span>
                </li>



            </ul>
        </div>
    </div>

    <section class="light">
        <div class="container py-2">
            <div class="h1 text-center text-dark raleway-Thin" id="pageHeaderTitle">{{__('ui.allAnnouncements')}}</div>
            @foreach ($announcements as $announcement)
                <article class="postcard light red">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title red"><a
                                href="{{ route('announcements.show', $announcement) }}">{{ $announcement->title }}</a>
                        </h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"> Pubblicato il:
                                    {{ $announcement->created_at->format('d/m/y') }}</i>
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt"> {{ $announcement->body }}</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Valore: {{ $announcement->price }}</li>
                            <br>
                            <li class="tag__cat play red">
                                <a href="#"><i class="fas fa-play mr-2"></i>Categoria:
                                    {{ $announcement->category->name }}</a>
                            </li>
                        </ul>
                        <p class="card-text fs-6 fst-italic ">Autore: {{ $announcement->user->name }}</p>
                    </div>
                </article>
            @endforeach





            {{-- <article class="postcard light green">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                        <li class="tag__item play green">
                            <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                        </li>
                    </ul>
                </div>
            </article> --}}

        </div>
    </section>




</x-layout>
