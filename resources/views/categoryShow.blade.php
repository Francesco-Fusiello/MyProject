<x-layout>
    <x-barraricerca />

    <x-button_category />

    {{-- <h1 class="p-4 text-center  ">{{ __('ui.' . $category->name) }}</h1>
    <div class="mt-5 col-12">
        <div class="row">
            @forelse($category->announcements as $announcement)
                <div class="col-12 col-md-4 my-4">
                    <div class="card shadow" style='width: 25rem;'>
                        <img class="postcard__img"
                            src="{{ !$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200' }}"
                            alt="Image Title" /> --}}
                        {{-- <img src="https://picsum.photos/200" alt="" class='card-img-top p-3 rounded'> --}}
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->body }}</p>
                            <p class="card-text">{{ __('ui.value') }} {{ $announcement->price }}</p>
                            <a href="{{ route('announcements.show', $announcement) }}"
                                class="btn btn-primary shadow m-3">{{ __('ui.visua') }}</a>
                            <p class="card-footer">{{ __('ui.pub') }}: {{ $announcement->created_at->format('d/m/y') }}
                            </p>
                            <p class="card-text fs-6 fst-italic ">{{ __('ui.author') }}
                                {{ $announcement->user->name ?? '' }}</p>
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
    </div> --}}

    <img src="{{ $category->image }}" class="d-block w-100" alt="...">
    <section id="header" class="jumbotron text-center">
        <h1 class="display-3">{{ __('ui.' . $category->name) }}</h1>
        {{-- <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p> --}}
        {{-- <a href="" class="btn btn-primary">Click</a>
        <a href="" class="btn btn-secondary">Click</a> --}}
    </section>

    <section id="gallery">
        <div class="container">
            <div class="row justify-content-center">

                @forelse($category->announcements as $announcement)
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="card shadow mb-3">
                            <img src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(256,256) 
                            //  Storage::url($announcement->images()->first()->path) 
                             : 'https://picsum.photos/200' }}"
                                alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $announcement->title }}</h5>
                                <p class="tag__item"><i class="fas fa-tag mr-2">  </i>{{ __('ui.value') }}  
                                  {{ $announcement->price }}</p>
                                  <p class="card-text fs-6 fst-italic ">{{ __('ui.author') }}
                                    {{ $announcement->user->name }}</p>
                                <a  href="{{ route('announcements.show', $announcement) }}"
                                    class="col-4 btn btn-outline-success btn-sm">{{ __('ui.visua') }}</a>
                                {{-- <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="h1">{{ __('ui.noann') }}</p>
                        <p class="h2 mt-5">{{ __('ui.creaNav') }}: <a href="{{ route('announcements.create') }}"
                                class="btn btn-success shadow">{{ __('ui.annuncio') }}</a> </p>
                    </div>
                @endforelse



                {{-- <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60"
                            alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sunset</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum
                                similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi
                                dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60"
                            alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sunset</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum
                                similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi
                                dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
    </section>








</x-layout>
