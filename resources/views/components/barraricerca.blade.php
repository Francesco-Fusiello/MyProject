    
    <div class="container justify-content-center mb-3">
        <div class="row ">

            <form action="{{ route('announcement.search') }}" method="GET" class="d-flex">
                <input type="search" name="searched" class="form-control me-2" style="width: 100%"
                    placeholder='Ricerca un articolo' aria-label='Search'>
                <button class="btn btn-outline-primary w-25 " type='submit'>Cerca</button>
            </form>
        </div>
    </div>