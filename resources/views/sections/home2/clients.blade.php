<section class="text-bg-primary py-5">
    <div class="container text-white">
        <div class="container text-center pb-4">
            <h1 class=" display subtitle">Clientes</h1>
            <div class="col-12 col-md-6 mx-auto d-none">
                <p class=" fs-5">
                    Todos los clientes mostrados en este panel, son o han sido nuestros clientes de alguno de nuestros servicios.
                </p>
            </div>
        </div>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide text-center">
                <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=126,fit=crop,trim=2.4393939393939394;0;2.4393939393939394;0/YX4lDW3xMMIXve2V/2222222-YZ9j94Xb30T5ZLE6.png" class="img-fluid client-logo" />
            </div>

            <div class="swiper-slide text-center">
                <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=145,fit=crop/YX4lDW3xMMIXve2V/disea--o-sin-tatulo-23-33423-AQEZEjMj2EFgPZVK.png" class="img-fluid client-logo" />
            </div>

            <div class="swiper-slide text-center">
                <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=250,fit=crop/YX4lDW3xMMIXve2V/photoroom_20250529_134334-2-22-AoPW3jk5P7cpQJXP.png" class="img-fluid client-logo" />
            </div>
            <div class="swiper-slide text-center">
                <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=87,fit=crop,trim=27.27272727272727;0;27.27272727272727;0/YX4lDW3xMMIXve2V/disea--o-sin-tatulo-24-m2W8Lb3VRPhqZ8z2.png" class="img-fluid client-logo" />
            </div>
            <div class="swiper-slide text-center">
                <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=250,fit=crop/YX4lDW3xMMIXve2V/photoroom_20250529_134334-1-2-Yyv9wrrgk1CEX3rK.png" class="img-fluid client-logo" />
            </div>
            <div class="swiper-slide text-center">
                <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=251,fit=crop/YX4lDW3xMMIXve2V/disea--o-sin-tatulo-33-mp8W15B7qvUjLp0e.png" class="img-fluid client-logo" />
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const swiperLogos = new Swiper('.mySwiper', {
            modules: [SwiperModules.Autoplay],
            rtl: true,
            slidesPerView: 3,
            spaceBetween: 40,
            loop: true,
            freeMode: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,

            },

            speed: 3000, // controls smoothness

        });
    });
</script>