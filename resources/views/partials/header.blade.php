<header>

    <div class="bg-color-white">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid justify-content-between h-100">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('img/dc-logo.png') }}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class=" collapse navbar-collapse flex-grow-0 h-100" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 h-100">
                            <li class=" ">
                                <a class="nav-link-text d-flex align-items-center " aria-current="page" href="">CHARACTERS</a>
                            </li>
                            <li class=" {{ Route::currentRouteName() === 'home' ? 'ds-active' : '' }} ">
                                <a class="nav-link-text d-flex align-items-center " aria-current="page" href="{{ route('home') }}">COMICS</a>
                            </li>
                            <li class=" ">
                                <a class="nav-link-text d-flex align-items-center " aria-current="page" href="">TV</a>
                            </li>
                            <li class=" ">
                                <a class="nav-link-text d-flex align-items-center " aria-current="page" href="">GAMES</a>
                            </li>
                            <li class=" ">
                                <a class="nav-link-text d-flex align-items-center " aria-current="page" href="">COLLECTIBLES</a>
                            </li>
                            <li class=" ">
                                <a class="nav-link-text d-flex align-items-center " aria-current="page" href="">VIDEOS</a>
                            </li>
                            <li class=" ">
                                <a class="nav-link-text d-flex align-items-center " aria-current="page" href="">FANS</a>
                            </li>
                            <li class=" ">
                                <a class="nav-link-text d-flex align-items-center " aria-current="page" href="">NEWS</a>
                            </li>
                            <li class=" ">
                                <a class="nav-link-text d-flex align-items-center " aria-current="page" href="">SHOP</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

</header>
