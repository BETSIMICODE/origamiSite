var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch:0,
      depth: 150,
      modifier: 2,
      slideShadows: true,
    },
    
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
    },
    loop: true, 
  });