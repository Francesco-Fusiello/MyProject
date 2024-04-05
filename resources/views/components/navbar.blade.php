<nav class="navbar navbar-expand-lg bg-body-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Presto_Flay</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrazione</a>
                    </li>
                @else
                <a class="nav-link active" aria-current="page" href="{{ route('announcements.create') }}">Crea un annuncio</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" id="tab-login" data-mdb-pill-init href="#" role="tab"
                                    aria-controls="pills-logout" aria-selected="true"
                                    onclick="
                            event.preventDefault();
                            getElementById('form-logout').submit();
                            ">Logout</a>
                                <form action="/logout" method="POST" id="form-logout">@csrf</form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endguest
        </div>
    </div>
</nav>
