    {{-- BUTTON CON ICONE --}}
    <div class="container">
        <div class="row justify-content-center">
            <h2>{{ __('ui.exporaCat') }}</h2>
            <ul class="wrapper">
                <li class="icon abbigl">
                    <span class="tooltip">{{ __('ui.abbigliamento') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 1) }}"><i
                                class="fa-solid fa-shirt"></i></a></span>
                </li>
                <li class="icon inform">
                    <span class="tooltip">{{ __('ui.informatica') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 2) }}"><i
                                class="fa-solid fa-computer"></a></i></span>
                </li>
                <li class="icon elettro">
                    <span class="tooltip">{{ __('ui.elettrodom') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 3) }}"><i
                                class="fa-solid fa-blender-phone"></a></i></span>
                </li>
                <li class="icon libri">
                    <span class="tooltip">{{ __('ui.libri') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 4) }}"><i
                                class="fa-solid fa-book"></a></i></span>
                </li>
                <li class="icon giochi">
                    <span class="tooltip">{{ __('ui.giochi') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 5) }}"><i
                                class="fa-solid fa-table-tennis-paddle-ball"></a></i></span>
                </li>
                <li class="icon sport">
                    <span class="tooltip">Sport</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 6) }}"><i
                                class="fa-solid fa-person-biking"></a></i></span>
                </li>
                <li class="icon telef">
                    <span class="tooltip">{{ __('ui.tel') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 7) }}"><i
                                class="fa-solid fa-mobile-screen-button"></a></i></span>
                </li>
                <li class="icon servizi">
                    <span class="tooltip">{{ __('ui.serv') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 8) }}"><i
                                class="fa-regular fa-lightbulb"></a></i></span>
                </li>
                <li class="icon arredo">
                    <span class="tooltip">{{ __('ui.arred') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 9) }}"><i
                                class="fa-solid fa-couch"></a></i></span>
                </li>
                <li class="icon vgame">
                    <span class="tooltip">{{ __('ui.videog') }}</span>
                    <span><a class="iconaante" href="{{ route('categoryShow', 10) }}"><i
                                class="fa-solid fa-gamepad"></a></i></span>
                </li>
            </ul>
        </div>
    </div>