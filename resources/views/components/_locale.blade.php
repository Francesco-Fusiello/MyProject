<form action="{{ route('set_language_locale', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="nav-link" style="background-color: transparent; border: none">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="32" eight="32" alt="" />
        <span class="fi fi-{{ $nation }}"></span>
    </button>
</form>
