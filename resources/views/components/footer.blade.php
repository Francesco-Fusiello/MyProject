<!-- Footer -->
<footer class=" text-center text-white mt-5" style="background-color:#03092b;">
    <!-- Grid container -->
    <div class="container p-2">



        <!-- Section: Text -->
        <section class="mb-2">
            @if(Auth::user()->is_revisor == 0)
            <div>
                <h3>{{__('ui.work')}}</h3>
                <p>{{__('ui.cl')}}</p>
                <a href="{{route('become.revisor')}}" class='bn5'>{{__('ui.revisor')}}</a>
            </div>
            @else
            <div>
            <h3 class="m-4">Se la qualità degli annunci è impeccabile, è merito del tuo lavoro straordinario.<br>
                🙏 Grazie! 🙏
            </h3>
            </div>
            @endif
        </section>
        <!-- Section: Text -->


    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2024 by Flay
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->