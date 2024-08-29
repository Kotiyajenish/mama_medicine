jQuery(document).ready(function(){
 	var swiper = new Swiper('.event_slider', {
      loop: true,
      slidesPerView: 5,
      spaceBetween: 40,
       navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        1400: {
          slidesPerView: 5,
          spaceBetween: 40,
        },
        1600: {
          slidesPerView: 5,
          spaceBetween:40,
        },
      }
    });

    var swiper = new Swiper('.popular_slider', {
      loop: true,
      slidesPerView: 2.8,
      spaceBetween: 30,
       navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        1400: {
          slidesPerView: 2.8,
          spaceBetween: 30,
        },
        1600: {
          slidesPerView: 2.8,
          spaceBetween:30,
        },
      }
    });

    // Client say slider js code

     var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      loop: true,
      loopedSlides: 1
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: '3',
      touchRatio: 0.2,
      slideToClickedSlide: true,
      loop: true,
      loopedSlides: 1
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;


    // Blog slider js code start

    var swiper = new Swiper('.blog_slider', {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 45,
       navigation: {
        nextEl: '.next-blog',
        prevEl: '.prev-blog',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        1400: {
          slidesPerView: 3,
          spaceBetween: 45,
        },
        1600: {
          slidesPerView: 3,
          spaceBetween:45,
        },
      }
    });

    // Logo slider js code 

    var swiper = new Swiper('.logo_slider', {
      loop: true,
      slidesPerView: 5,
      spaceBetween: 20,
       navigation: {
        nextEl: '.next-logo',
        prevEl: '.prev-logo',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        1400: {
          slidesPerView: 5,
          spaceBetween: 20,
        },
        1600: {
          slidesPerView: 5,
          spaceBetween:20,
        },
      }
    });

});

