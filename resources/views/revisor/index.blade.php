<x-layout>

    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div class='container-fluid bg-gradient shadow mb-3'>
        <div class="row d-flex justify-content-center ">
            <div class="col-12 p-2">
                <h2 class="text-center">
                    @if ($announcement_to_check)
                        {{ __('ui.titRev') }}
                    @else
                        {{ __('ui.titRev1') }}
                    @endif
                    {{-- {{ $announcement_to_check  "{{__('ui.titolo')}}" : 'Non ci sono annunci da revisionare' }} --}}
                </h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-9 col-lg-9">
                @if ($announcement_to_check)
                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        @if ($announcement_to_check && $announcement_to_check->images && $announcement_to_check->images->count() > 0)
                            <div class="container d-flex ">
                                <div class="carousel-inner">
                                    @foreach ($announcement_to_check->images as $image)
                                        <div class="carousel-item  d-flex @if ($loop->first)active @endif">
                                            <div class="col-12 col-md-6 img-fluid p-3 rounded" alt="...">
                                                <img src="{{ $image->getUrl(256, 256) }}" alt="immagine dell'articolo">
                                            </div>
                                            {{-- tag per google Vision --}}
                                            <div class="col-12 col-md-3">
                                                <h5 class="tc-accent mt-3fs-6 ">Tags</h5>
                                                <div class="p-2 col-10 font-mini border border-primary">
                                                    @if ($image->labels)
                                                        @foreach ($image->labels as $label)
                                                            <p class="d-inline">{{ $label }},</p>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <div class="card-body p-2 border border-success ">
                                                    <h6 class="tc-accent">Revisione Immagini</h6>
                                                    <p class="font-mini">Adulti: <span class="{{ $image->adult }}"></span> </p>
                                                    <p class="font-mini">Satira: <span class="{{ $image->spoof }}"></span> </p>
                                                    <p class="font-mini">Medicina: <span class="{{ $image->medical }}"></span> </p>
                                                    <p class="font-mini">Violenza: <span class="{{ $image->violence }}"></span> </p>
                                                    <p class="font-mini">Contenuto Ammiccante: <span class="{{ $image->racy }}"></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/id/28/1200/400" class="img-fluid p-3 rounded"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/29/1200/400" class="img-fluid p-3 rounded"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/29/1200/400" class="img-fluid p-3 rounded"
                                        alt="...">
                                </div>
                            </div>
                        @endif

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
                        {{-- </div>
                    </div> --}}
                    <div class="card shadow ms-3" style='width: 58rem;'>
                        <div class="card-body">
                            <h5 class="card-title">{{ __('ui.titolo') }}: {{ $announcement_to_check->title }}</h5>
                            <p class="card-text">{{ __('ui.descri') }}: {{ $announcement_to_check->body }}</p>
                            <p class="card-footer">{{ __('ui.pub') }}
                                {{ $announcement_to_check->created_at->format('d/m/y') }}</p>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-between ">
                        <div class="col-6 text-center ">
                            <form action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="bn632-hover bn22">{{ __('ui.acc') }}</button>
                            </form>
                        </div>
                        <div class="col-6 text-center">
                            <form action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="bn632-hover bn28">{{ __('ui.rif') }}</button>
                            </form>
                        </div>
                    </div>

                @endif

                    <div class="row">
                        <div class="col-12 text-center justify-content-center">
                            <form method="GET" action="{{ route('announcements.reset-last-accepted') }}">
                                @csrf
                                <button type="submit" class="bn632-hover yellow">{{ __('ui.annu') }}</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</x-layout>
