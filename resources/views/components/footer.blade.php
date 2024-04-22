<!-- Footer -->
<footer class="text-center text-white mt-5" style="background-color:#0851b1;">
    <!-- Grid container -->
    <div class="container p-2">



        <!-- Section: Text -->
        <section class="mb-2">
            {{-- @dd({{Auth::user()}}) --}}
            @if (Auth::check() && Auth::user()->is_revisor)
            <div>
            <h3 class="m-4">{{__('ui.footer1')}}.<br>
                🙏 {{__('ui.footer2')}}! 🙏
            </h3>
            </div>
            @else
                        <div>
                            <h3>{{__('ui.work')}}</h3>
                            <p>{{__('ui.cl')}}</p>
                            <a href="{{route('become.revisor')}}" class='bn5'>{{__('ui.revisor')}}</a>
                        </div>
            @endif
        </section>
        <!-- Section: Text -->
            <div class="container d-flex flex-nowrap">
                <div class="row col-12">
            <ul class="footer-nav" style="background-color: #0851b1">
                <li><a href="#privacy">Privacy Policy</a></li>
                <li><a href="#chi-siamo">Chi Siamo</a></li>
                <li><a href="#recensioni">Recensioni</a></li>
                <li><a href="#faqs">FAQs</a></li>
            </ul>
                </div>
            </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #0851b1">
        © 2024 by Flay
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->