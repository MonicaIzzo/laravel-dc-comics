@php
    $links = config('header_links');
@endphp


<header>
    <div class="header-top">
        <div class="container-fluid  mb-1 bg-primary text-white d-flex">
            <div class="row justify-content-end align-items-center w-100">
                <div class="col-1 fs-6 fw-semibold">DC POWER VISA</div>
                <div class="col-1 fs-6 fw-semibold">ADDITIONAL DC SITE</div>
            </div>
        </div>


    </div>
    <!-- MENU dinamico -->
    <nav class="container d-flex">
        <div class="row w-100 align-items-center pt-3 pb-3">
            <div class="col-1">
                <img class="logo" src={{ Vite::asset('resources/img/dc-logo.png') }} alt="Logo DC">
            </div>
            <div class="col-11">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                @foreach ($links as $link)
                                    <li class="nav-item fw-bold">
                                        <a href="{{ route($link['route']) }}"
                                            class="p-2 nav-link">{{ $link['text'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>

                    </div>
                </nav>
            </div>
        </div>



    </nav>
</header>
