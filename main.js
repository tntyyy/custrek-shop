let slider = new Swiper('.slider', {
    slidesPerView: 6,
    spaceBetween: 24,
    loop: true,
    autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
    loopedSlides: 6,
    watchOverflow: true,
    breakpoints: {
      768: {
          slidesPerView: 6,
          spaceBetween: 24
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 8
      }
    }
});