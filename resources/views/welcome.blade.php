<x-layout>
{{-- 
    @if(session()->has('nmsg'))
    <div class="alert alert-success" role="alert">
      {{session('nmsg')}}
    </div>
    @endif --}}


    <header class="container-fluid verdesf">
        <div class="row justify-content-center">

                <h1 class="display-1 text-center p-3">
                Prestoo
                </h1>

                <h2 class="h2 p-3 my-2 fw-bold text-light bg-success bg-gradient ">I nostri annunci</h2>
                <div class="row">
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
                </div>
        </div>

    </header>

{{-- 
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-4">
                <livewire:create-announcement>
            </div>
            <div class="col-8">
                <livewire:author.index>
            </div>
        </div>
    </div> --}}
    
</x-layout>