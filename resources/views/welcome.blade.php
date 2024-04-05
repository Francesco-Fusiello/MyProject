<x-layout>
{{-- 
    @if(session()->has('nmsg'))
    <div class="alert alert-success" role="alert">
      {{session('nmsg')}}
    </div>
    @endif --}}


    <header class="container-fluid p-5 verdesf text-center ">
        <div class="row justify-content-center">

                <h1 class="display-1">
                   Prestoo
                </h1>
                {{-- <p class="h2 my-2 fw-bold">Ecco i nostri annunci</p>
                <div class="row">
                    @foreach($announcements as $announcement)
                    <div class="col-12 col-md-4 my-4">
                        <div class="card shadow" style='width: 18rem;'>
                            <img src="https://picsum.photos/200" alt="" class='card-img-top p-3 rounded'>
                            <div class="card-body">
                                <h5 class="card-title">{{$announcement->title}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                </div>
        </div>

    </header>


    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-4">
                <livewire:author.create>
            </div>
            <div class="col-8">
                <livewire:author.index>
            </div>
        </div>
    </div>
    
</x-layout>