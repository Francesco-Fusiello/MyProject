<x-layout>

  <x-barraricerca/>

    <div class="container-fluid p-2 bg-gradient  shadow mb-4">
        <div class="row">
            <div class="col-12 p-2">
                <h1 class="display-2">{{__('ui.annuncio')}} {{ $announcement->title }}</h1>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                  @if ( $announcement->images->count() > 0)
                        <div class="container">
                            <div class="carousel-inner">
                                @foreach ($announcement->images as $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img src="{{ Storage::url($image->path) }}" class="d-block w-100" alt="..."> 
                                    </div>   
                                      {{-- img-fluid p-3 rounded --}}
                                @endforeach
                            </div>
                        @else  
                  
                  <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/27/1200/200" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/28/1200/200" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/29/1200/200" class="d-block w-100" alt="...">
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

                <h5 class="card-title"> {{__('ui.titolo')}}: {{ $announcement->title }}</h5>
                <p class="card-text">{{__('ui.descri')}}: {{ $announcement->body }}</p>
                <p class="card-text">{{__('ui.value1')}}: {{ $announcement->price }}</p>
                <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                    class="my-2 border-top pt-2 border-dark card-link shadow btn btn-outline-success ">{{__('ui.category')}}:
                    {{ $announcement->category->name }}</a>
                <p class="card-footer">{{__('ui.pub')}} {{ $announcement->created_at->format('d/m/y') }}</p>
                <p class="card-text fs-6 fst-italic ">{{__('ui.author')}} {{ $announcement->user->name }}</p>

            </div>
        </div>


    </div>

    {{-- <div class=" m-3">
      {{ $announcements->links() }}
  </div> --}}




    {{-- <!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">Page Heading
      <small>Secondary Text</small>
    </h1>
  
    <!-- Portfolio Item Row -->
    <div class="row">
  
      <div class="col-md-8">
        <img class="img-fluid" src="https://via.placeholder.com/600x400" alt="">
      </div>
  
      <div class="col-md-4">
        <h3 class="my-3">Project Description</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
        <h3 class="my-3">Project Details</h3>
        <ul>
          <li>Lorem Ipsum</li>
          <li>Dolor Sit Amet</li>
          <li>Consectetur</li>
          <li>Adipiscing Elit</li>
        </ul>
      </div>
  
    </div>
    <!-- /.row -->
  
    <!-- Related Projects Row -->
    <h3 class="my-4">Related Projects</h3>
  
    <div class="row">
  
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
            </a>
      </div>
  
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
            </a>
      </div>
  
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
            </a>
      </div>
  
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
            </a>
      </div>
  
    </div>
    <!-- /.row -->
  
  </div>
  <!-- /.container -->
  
 --}}

</x-layout>
