<!-- ══════════════════════ NAVBAR ══════════════════════ -->
<nav id="mainNav" class="fixed-top px-4 px-lg-5 px-md-5 py-3 d-flex align-items-center justify-content-between text-dark">

    <a href="#" class="text-decoration-none fw-bold text-uppercase"><img src="{{asset('img/logo2.png')}}"
            height="25px" alt="" srcset=""></a>
    <ul class="d-none d-lg-flex list-unstyled mb-0 gap-5">
        <li><a href="#" class="text-uppercase text-muted nav-link">Servicios</a></li>
        <li><a href="#" class="text-uppercase text-muted nav-link">Nosotros</a></li>
        <li><a href="#" class="text-uppercase text-muted nav-link">Contacto</a></li>
    </ul>

    <div class="position-relative">
        <button class="btn rounded border btn-outline-light border-0"
            data-bs-toggle="modal"
            data-bs-target="#menuModal">
            <i class="fa-solid fa-bars fa-lg"></i>
        </button>

    </div>

</nav>

<div class="modal fade" id="menuModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content text-white border-0">

            <!-- HEADER -->
            <div class="modal-header border-0">
                <img src="{{asset('img/logo2.png')}}"
                    height="25px" alt="" srcset="">
                <!-- <h5 class="modal-title text-uppercase">Menú</h5> -->
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- BODY -->
            <div class="modal-body d-flex flex-column justify-content-center align-items-center text-center">

                <ul class="list-unstyled">
                    <li class="mb-4">
                        <a href="#" class="menu-link">Servicios</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="menu-link">Nosotros</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="menu-link">Contacto</a>
                    </li>
                </ul>

            </div>

            <!-- FOOTER (social icons) -->
            <div class="modal-footer border-0 justify-content-center pb-4">

                <a href="#" class="social-btn"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="social-btn"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="social-btn"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" class="social-btn"><i class="fa-brands fa-linkedin-in"></i></a>

            </div>

        </div>
    </div>
</div>