<x-layout>

    @if(session()->has('access.denied'))
    <div class="alert alert-danger" role="alert">
      {{session('access.denied')}}
    </div>
    @endif 


    @if(session()->has('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @endif 


    <header class="container-fluid verdesf">
        <div class="row justify-content-center">

        <h1 class="display-1 text-center p-3">
        Prestoo                
        </h1>
    </div>
    </header>

                {{-- {{-- <h2 class="h2 p-3 my-2 fw-bold text-light bg-success bg-gradient ">I nostri annunci</h2>
                <div class="row justify-content-center ">
                    @foreach($announcements as $announcement)
                    <div class="col-12 col-md-4 my-4">
                        <div class="card shadow" style='width: 25rem;'>
                            <img src="https://picsum.photos/200" alt="" class='card-img-top p-3 rounded'>
                            <div class="card-body">
                                <h5 class="card-title text-center ">{{$announcement->title}}</h5>
                                <p class="card-text">{{$announcement->body}}</p>
                                <p class="card-text">Valore: {{$announcement->price}}</p>
                                <a href="{{route('announcements.show', $announcement)}}" class="btn btn-primary shadow w-50">Visualizza</a>
                                <p>
                                    <a href="" class="w-100 my-2 border-top pt-2 border-dark card-link shadow btn btn-outline-success ">Categoria: {{$announcement->category->name}}</a>
                                </p>
                                <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/y')}}</p>
                                <p class="card-text fs-6 fst-italic ">Autore: {{$announcement->user->name}}</p>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div> --}}
        

    <section class="light">
        <div class="container py-2">
            <div class="h1 text-center text-dark" id="pageHeaderTitle">I nostri Annunci</div>
            @foreach($announcements as $announcement)
            <article class="postcard light red">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />	
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title red"><a href="{{route('announcements.show', $announcement)}}">{{$announcement->title}}</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"> Pubblicato il: {{$announcement->created_at->format('d/m/y')}}</i>
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{$announcement->body}}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Valore: {{$announcement->price}}</li>
                        <li class="tag__item play red">
                            <a href="#"><i class="fas fa-play mr-2 tag__cat "></i>Categoria: {{$announcement->category->name}}</a>
                        </li>
                    </ul>
                    <p class="card-text fs-6 fst-italic ">Autore: {{$announcement->user->name}}</p>
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