let header = document.querySelector('header')

let firstSlider = document.querySelector('.first_slider')

firstSlider.style.height = document.documentElement.clientHeight - header.clientHeight + 'px'

let firstCarousel = new Swiper('.swiper-container', {
    navigation: {
        nextEl: ".first_slider-button._next",
        prevEl: ".first_slider-button._prev"
    }
})

let certificateCarousel = new Swiper('.certificates', {
    slidesPerView: "auto",
    freeMode: true,
    navigation: {
        nextEl: ".certificate._next",
        prevEl: ".certificate._prev"
    }
})