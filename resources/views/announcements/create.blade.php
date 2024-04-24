<x-layout>

    <div class="">
        
        <section id="header" class="jumbotron text-center position-relative">
            <img src="\images\AnnuncioMegafono.png" class="d-block w-100" alt="...">
            <h1 class="display-3 position-absolute top-50 start-50 translate-middle text-white">{{ __('ui.creaA') }}</h1>
        </section>
    



        <div class="row d-flex justify-content-center ">
            <div class="col-8">
                <livewire:create-announcement />
            </div>
        </div>
    </div>
</x-layout>