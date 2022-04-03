// --- Swiper import & init ---

// Settings: https://swiperjs.com/get-started/

import Swiper, {
  Navigation,
  Pagination
} from 'swiper/core';

Swiper.use([
  Navigation,
  Pagination
]);

// --- Swiper settings ---

const swiperSettings = {

  loop: true,
  centeredSlides: true,
  spaceBetween: 0,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets'
  },
  breakpoints: {
    0: {
      slidesPerView: 1
    },
    576: {
      slidesPerView: 1
    },
    768: {
      slidesPerView: 1
    },
    992: {
      slidesPerView: 1,
      centeredSlides: false
    },
    1200: {
      slidesPerView: 1
    }
  }

};

// --- Swiper instances ---

const mountSwiper = new Swiper('.swiper-container', swiperSettings);
