    
    <div class="container justify-content-center mb-3">
        <div class="row">

            <form action="{{ route('announcement.search') }}" method="GET" class="d-flex">
                <input type="search" name="searched" class="form-control me-2" style="width: 100%"
                    placeholder='Cosa stai cercando?' aria-label='Search'>
                <button class="btn btn-outline-success" type='submit'>Cerca</button>
            </form>
        </div>
    </div>