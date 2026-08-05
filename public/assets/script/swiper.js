var swiper = new Swiper(".footerImgSwiper", {
    slidesPerView: 1,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000, // Adjust the delay (in milliseconds) between slides
        disableOnInteraction: false, // Allows autoplay to continue after user interactions
    },
});

var heroSwiper = new Swiper(".heroSwiper", {
    slidesPerView: 1,
    loop: true,
    effect: "fade",
    pagination: {
        el: ".heroSwiper .swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});
