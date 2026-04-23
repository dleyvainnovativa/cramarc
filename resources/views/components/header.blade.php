<nav id="navbar-top" class="navbar navbar-expand-lg navbar-dark fixed-top pb-0" aria-label="Offcanvas navbar large">
    <div class="container">
        <div class="container">
            <div id="header-container" class="py-2 border border-light  rounded-pill">
                <div class="d-flex align-items-center justify-content-between container">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img class="appLogo" src="{{asset('img/logo.avif')}}" width="200" alt="">
                    </a>
                    <a class="position-relative ms-auto me-3">
                        <div class="theme-switch ">
                            <input type="checkbox" id="themeToggle">
                            <label for="themeToggle" class=" btn btn-primary">
                                <i id="themeIcon" class="fas fa-moon"></i>
                            </label>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"><i class="fas fa-bars-staggered text-dark"></i></button>

                </div>
            </div>
        </div>
    </div>
</nav>