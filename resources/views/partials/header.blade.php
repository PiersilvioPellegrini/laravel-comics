<section class="bg-primary">
    <div class="container">
        <div class="smallNavbar d-flex justify-content-end text-white gap-5 p-1 text-center">
            <p class="mb-0 fw-bold">DC POWER VISA</p>
            <p class="mb-0 fw-bold">ADDITIONAL DC SITES</p>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <nav class="d-flex justify-content-between align-items-center pt-3 pb-3">
            <div class="logo ">
               <a href="{{route('index')}}"><img src="{{ Vite::asset('resources/imgs/dc-logo.png') }}" alt=""></a> 
            </div>
            <div class="mainNav pt-3">
                <ul class="d-flex justify-content-between gap-4 align-items-center">
                    <li>CHARACTERS</li>
                    <li><a href="{{ route('comics') }}"
                            class="{{ Route::currentRouteName() === 'comics' ? 'text-primary' : '' }}">COMICS</a></li>
                    <li>MOVIES</li>
                    <li>TV</li>
                    <li>GAMES</li>
                    <li>COLLECTIBLES</li>
                    <li>VIDEOS</li>
                    <li>FANS</li>
                    <li>NEWS</li>
                    <li>SHOP</li>
                </ul>

            </div>
            <div class="searchBar align-items-center pt-3">
                <p>SEARCH</p>
            </div>
        </nav>

    </div>
</section>
<section class="jumbotron"></section>
