import 'bootstrap';
import $ from 'jquery';
import * as bootstrap from 'bootstrap';
import Swiper from 'swiper';
import { Pagination, Mousewheel, EffectFade, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

window.Swiper = Swiper;
window.SwiperModules = { Pagination, Mousewheel, EffectFade, Autoplay };
window.bootstrap = bootstrap;
window.jQuery = $;
window.$ = $;

let app_url = document.querySelector('meta[name="app-url"]').getAttribute('content');

const root = document.documentElement;
function updateLogos() {
    const logos = document.querySelectorAll(".appLogo");
    console.log(logos);

    const isLight = root.classList.contains("theme-light");
    const src = isLight
        ? `${app_url}img/logo.avif`
        :`${app_url}img/logo2.png`

    logos.forEach(logo => {
        logo.src = src;
    });
}
window.updateLogos=updateLogos;

document.addEventListener("DOMContentLoaded", () => {
    console.log("root");
    const root = document.documentElement;
    const toggle = document.getElementById("themeToggle");
    const metaThemeColor = document.querySelector('meta[name="theme-color"]');

    function applyThemeColor(isLight) {
        metaThemeColor?.setAttribute(
            "content",
            isLight ? "#3b5df6" : "#0b0b18"
        );
    }

    // 🔹 Load saved theme
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "light") {
        root.classList.add("theme-light");
        toggle.checked = true;
    } else {
        root.classList.remove("theme-light");
        toggle.checked = false;
    }
    applyThemeColor(toggle.checked);
    updateLogos();
    updateThemeIcon();

    // 🔹 Listen to switch change
    toggle.addEventListener("change", () => {
        console.log("switch");
        const isLight = toggle.checked;
        root.classList.toggle("theme-light", isLight);
        localStorage.setItem("theme", isLight ? "light" : "dark");
        applyThemeColor(isLight);
    updateLogos();
    updateThemeIcon();

    });

});
function updateThemeIcon() {
const icon = document.getElementById("themeIcon");
if (!icon) return;

const isLight = document.documentElement.classList.contains("theme-light");

if (isLight) {
    icon.classList.remove("fa-moon");
    icon.classList.add("fa-sun");
} else {
    icon.classList.remove("fa-sun");
    icon.classList.add("fa-moon");
}
}