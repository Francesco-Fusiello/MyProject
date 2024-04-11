<x-layout>
    <x-barraricerca/>

    <div class="col-12">
    <div class="row">
        @forelse($announcements as $announcement)
            <div class="col-12 col-md-4 my-4">
                <div class="card shadow" style='width: 25rem;'>
                    <img src="https://picsum.photos/200" alt="" class='card-img-top p-3 rounded'>
                    <div class="card-body">
                        <h5 class="card-title text-center ">{{$announcement->title}}</h5>
                        <p class="card-text">{{$announcement->body}}</p>
                        <p class="card-text">Valore: {{$announcement->price}}</p>
                        <a href="{{route('announcements.show', $announcement)}}" class="btn btn-primary shadow w-50">Visualizza</a>
                        <p>
                            <a href="{{route('categoryShow', ['category'=>$announcement->category])}}" class="w-100 my-2 border-top pt-2 border-dark card-link shadow btn btn-outline-success ">Categoria: {{$announcement->category->name}}</a>
                        </p>
                        <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/y')}}</p>
                        <p class="card-text fs-6 fst-italic ">Autore: {{$announcement->user->name}}</p>
                    </div>
                </div>
            </div>
        @empty    
            <div class="col-12">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead">Nessun articolo trovato</p>
                </div>
            </div>
        @endforelse
        {{$announcements->links()}}
    </div>
</div>





<div class="container py-5">
    <!-- For Demo Purpose-->
    <header class="text-center mb-5">
      <h1 class="display-4 font-weight-bold">Bootstrap Cards</h1>
      <p class="font-italic text-muted mb-0">An awesome Bootstrap 4 cards collection with variant content.</p>
      <p class="font-italic text-muted">Snippet By <a href="https://bootstrapious.com" class="text-muted">
          <u>Bootstrapious</u></a>
      </p>
    </header>
  
  
    <!-- First Row [Prosucts]-->
    <h2 class="font-weight-bold mb-2">From the Shop</h2>
    <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
  
    <div class="row pb-5 mb-4">
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-4"><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
            <h5> <a href="#" class="text-dark">Awesome product</a></h5>
            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <ul class="list-inline small">
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
            </ul>
          </div>
        </div>
      </div>
  
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-4"><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-2_g4qame.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
            <h5> <a href="#" class="text-dark">Awesome product</a></h5>
            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <ul class="list-inline small">
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
            </ul>
          </div>
        </div>
      </div>
  
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-4"><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-3_rk25rt.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
            <h5> <a href="#" class="text-dark">Awesome product</a></h5>
            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <ul class="list-inline small">
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
            </ul>
          </div>
        </div>
      </div>
  
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-4"><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-4_vgfjy9.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
            <h5> <a href="#" class="text-dark">Awesome product</a></h5>
            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <ul class="list-inline small">
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</x-layout>