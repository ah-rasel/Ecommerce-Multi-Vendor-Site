var swiper1 = new Swiper(".home-slider", {
    loop: true,
    autoplay: {
        delay: 3000,
    },
    speed:1000,
    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
});
var swiper2 = new Swiper(".slider-services", {
    loop: true,
    speed: 500,
    breakpoints: {
        640: {
            slidesPerView: 4,
        },
    },
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 7000,
    },
    navigation: {
        nextEl: ".service-next",
        prevEl: ".service-prev",
    },
});
var flashSale = new Swiper(".flash-sale-slider", {
    // loop: true,
    speed: 500,
    slidesPerView: 1,
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
        },
        640: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
        1280:{
            slidesPerView:1,
        }
      },
    spaceBetween: 30,
    autoplay: {
        delay: 7000,
    },
    navigation: {
        nextEl: ".flash-sale-next",
        prevEl: ".flash-sale-prev",
    },
});

var flashSale = new Swiper(".featured-slide", {
    loop: true,
    speed: 500,
    slidesPerView: 1,
    loop:true,
    breakpoints: {
        320: {
          slidesPerView: 1,
        },
        480: {
          slidesPerView: 2,
        },
      },
    spaceBetween: 30,
    autoplay: {
        delay: 10000,
    },
    navigation: {
        nextEl: ".featured-next",
        prevEl: ".featured-prev",
    },
});