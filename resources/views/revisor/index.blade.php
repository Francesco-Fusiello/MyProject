<x-layout>

    @if (session()->has('message'))
        <div class="alert alert-success fst-italic" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <h2 class="text-center">
        @if ($announcement_to_check)
            {{ __('ui.titRev') }}
        @else
            {{ __('ui.titRev1') }}
        @endif
        {{-- {{ $announcement_to_check  "{{__('ui.titolo')}}" : 'Non ci sono annunci da revisionare' }} --}}
    </h2>

    @if ($announcement_to_check)

         <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    {{-- <th>{{ __('ui.acc') }}  Rifiutato</th> --}}
                    <th>{{ __('ui.titolo') }}: </th>
                    <th>{{ __('ui.descri') }}</th>
                    <th>{{ __('ui.value') }}</th>
                    <th>{{ __('ui.category') }}</th>
                    <th>{{ __('ui.pub') }}</th>

                    <th></th>
                    <th class="text-center ">{{ __('ui.acc') }}/{{ __('ui.rif') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    {{-- <td>
                    <div class="form-check">
                        <input class="form-check-input ms-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <input class="form-check-input ms-5" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                </td> --}}
                    <td>{{ $announcement_to_check->title }}</td>
                    <td> {{ $announcement_to_check->body }}</td>
                    <td>{{ $announcement_to_check->price }}</td>
                    <td>{{ $announcement_to_check->category->name }}</td>
                    <td>{{ $announcement_to_check->created_at->format('d/m/y') }}</td>
                    <td>
                        <div class="d-flex col-12 justify-content-center">

                            <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;" data-bs-toggle="modal" data-bs-target="#myModal" title="{{ __('ui.visua') }}">
                                <i class="fa-solid fa-magnifying-glass fa-sm" style="color: #eceff4;"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-xs dt-delete" title="{{ __('ui.canc') }}">
                                <i class="fa-solid fa-trash fa-sm" style="color: #eceff4;"></i>
                            </button>
                    <td class="d-flex col-12 justify-content-center">
                        <form
                            action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="ms-3 btn btn-outline-success btn-xs dt-edit"
                                title="{{ __('ui.acc') }} "><i
                                    class="fa-regular fa-square-check fa-sm"></i></i></button>
                        </form>
                        <form
                            action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="ms-3 btn btn-outline-danger btn-xs dt-edit"
                                title="{{ __('ui.rif') }}"><i
                                    class="fa-regular fa-thumbs-down fa-sm"></i></i></button>
                        </form>

                    </td>

                    </div>

                    </td>
                </tr>

            </tbody>
        </table>



        <!-- Modal -->
        <div id="myModal" class="modal fade modal-lg" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">

                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 col-md-9 col-lg-9">
                                    @if ($announcement_to_check)
                                        <div id="carouselExampleFade" class="carousel slide carousel-fade">
                                            @if ($announcement_to_check && $announcement_to_check->images && $announcement_to_check->images->count() > 0)
                                                <div class="container d-flex ">
                                                    <div class="carousel-inner">
                                                        @foreach ($announcement_to_check->images as $image)
                                                            <div
                                                                class="carousel-item  d-flex @if ($loop->first) active @endif">
                                                                <div class="col-12 col-md-6 img-fluid p-3 rounded"
                                                                    alt="...">
                                                                    <img src="{{ $image->getUrl(256, 256) }}"
                                                                        alt="immagine dell'articolo">
                                                                </div>
                                                                {{-- tag per google Vision --}}
                                                                <div class="col-12 col-md-3">
                                                                    <h5 class="tc-accent mt-3fs-6 ">Tags</h5>
                                                                    <div
                                                                        class="p-2 col-10 font-mini border border-primary">
                                                                        @if ($image->labels)
                                                                            @foreach ($image->labels as $label)
                                                                                <p class="d-inline">
                                                                                    {{ $label }},</p>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-md-3">
                                                                    <div class="col-12 card-body p-2 border border-success">
                                                                        <h6 class="tc-accent">Revisione Immagini</h6>
                                                                        <p class="font-mini">Adulti: <span
                                                                                class="{{ $image->adult }}"></span>
                                                                        </p>
                                                                        <p class="font-mini">Satira: <span
                                                                                class="{{ $image->spoof }}"></span>
                                                                        </p>
                                                                        <p class="font-mini">Medicina: <span
                                                                                class="{{ $image->medical }}"></span>
                                                                        </p>
                                                                        <p class="font-mini">Violenza: <span
                                                                                class="{{ $image->violence }}"></span>
                                                                        </p>
                                                                        <p class="font-mini">Osè: <span
                                                                                class="{{ $image->racy }}"></span>
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
                                                        <img src="https://picsum.photos/id/28/1200/400"
                                                            class="img-fluid p-3 rounded" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://picsum.photos/id/29/1200/400"
                                                            class="img-fluid p-3 rounded" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://picsum.photos/id/29/1200/400"
                                                            class="img-fluid p-3 rounded" alt="...">
                                                    </div>
                                                </div>
                                            @endif

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        {{-- </div>
                                    </div> --}}
                                        <div class="col-12 card shadow d-flex" style='width: 100%;'>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ __('ui.titolo') }}:
                                                    {{ $announcement_to_check->title }}</h5>
                                                <p class="card-text">{{ __('ui.descri') }}:
                                                    {{ $announcement_to_check->body }}</p>
                                                <p class="card-footer">{{ __('ui.pub') }}
                                                    {{ $announcement_to_check->created_at->format('d/m/y') }}</p>
                                            </div>
                                        </div>

                                        <div class="row d-flex justify-content-between ">
                                            <div class="col-12 col-md-6 text-center ">
                                                <form
                                                    action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit"
                                                        class="bn632-hover bn22">{{ __('ui.acc') }}</button>
                                                </form>
                                            </div>
                                            <div class="col-12 col-md-6 text-center">
                                                <form
                                                    action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit"
                                                        class="bn632-hover bn28">{{ __('ui.rif') }}</button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center ">
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

</x-layout>












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
                                        <div
                                            class="carousel-item  d-flex @if ($loop->first) active @endif">
                                            <div class="col-12 col-md-6 img-fluid p-3 rounded" alt="...">
                                                <img src="{{ $image->getUrl(256, 256) }}"
                                                    alt="immagine dell'articolo">
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
                                                    <p class="font-mini">Adulti: <span
                                                            class="{{ $image->adult }}"></span> </p>
                                                    <p class="font-mini">Satira: <span
                                                            class="{{ $image->spoof }}"></span> </p>
                                                    <p class="font-mini">Medicina: <span
                                                            class="{{ $image->medical }}"></span> </p>
                                                    <p class="font-mini">Violenza: <span
                                                            class="{{ $image->violence }}"></span> </p>
                                                    <p class="font-mini">Contenuto Ammiccante: <span
                                                            class="{{ $image->racy }}"></span>
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
                    <div class="col-12 card shadow d-flex" style='width: 100%;'>
                        <div class="card-body">
                            <h5 class="card-title">{{ __('ui.titolo') }}: {{ $announcement_to_check->title }}</h5>
                            <p class="card-text">{{ __('ui.descri') }}: {{ $announcement_to_check->body }}</p>
                            <p class="card-footer">{{ __('ui.pub') }}
                                {{ $announcement_to_check->created_at->format('d/m/y') }}</p>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-between ">
                        <div class="col-12 col-md-6 text-center ">
                            <form
                                action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="bn632-hover bn22">{{ __('ui.acc') }}</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <form
                                action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
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


