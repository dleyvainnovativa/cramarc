new Swiper('.heroSwiper', {
            slidesPerView: 1,
            loop: true,
            speed: 400,
            modules: [SwiperModules.Pagination, SwiperModules.EffectFade, SwiperModules.Mousewheel, SwiperModules.AutoPlay, SwiperModules.Parallax],
            effect: 'fade', 
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            on: {
        slideChangeTransitionStart: function () {
            // Reset AOS animations
            document.querySelectorAll('[data-aos]').forEach(el => {
                el.classList.remove('aos-animate');
            });
        },

        slideChangeTransitionEnd: function () {
            AOS.refreshHard();
            // Re-trigger AOS
        }
    }
        });