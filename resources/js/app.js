import 'bootstrap';
import $ from 'jquery';
import * as bootstrap from 'bootstrap';
import Swiper from 'swiper';
import { Pagination, Mousewheel, EffectFade, Autoplay, Parallax } from 'swiper/modules';
import AOS from 'aos';
import 'aos/dist/aos.css';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

window.Swiper = Swiper;
window.SwiperModules = { Pagination, Mousewheel, EffectFade, Autoplay, Parallax };
window.bootstrap = bootstrap;
window.AOS = AOS;
window.jQuery = $;
window.$ = $;
AOS.init();

let app_url = document.querySelector('meta[name="app-url"]').getAttribute('content');
 const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => nav.classList.toggle('scrolled', scrollY > 300));
