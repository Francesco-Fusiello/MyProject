<x-layout>
{{-- 
    @if(session()->has('nmsg'))
    <div class="alert alert-success" role="alert">
      {{session('nmsg')}}
    </div>
    @endif --}}


    <header class="container-fluid p-5 verdesf text-center text-white">
        <div class="row justify-content-center">

                <h1 class="display-1">
                    Prestissimo
                </h1>
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