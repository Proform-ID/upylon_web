var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector("nav");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.style.height = "80px";
        } else {
            navbar.style.height = "120px";
        }
    });

    navbar.style.transition = "height 0.3s ease-in-out";
});