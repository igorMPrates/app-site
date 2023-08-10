jQuery(document).ready(function ($) {
  const faqs = document.querySelectorAll(".faq-item");

  faqs.forEach((faq) => {
    faq.addEventListener("click", () => {
      faq.classList.toggle("active");
    });
  });

  $(".slider").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    prevArrow: $(".arrow-prev"),
    nextArrow: $(".arrow-next"),
  });

  $("#close-video-vimeo").click(() => {
    $(".background-video").css({
      display: "none",
    });

    $("body").css({
      overflow: "auto",
    });
  });

  $("#open-video-vimeo").click(() => {
    $(".background-video").css({
      display: "flex",
    });

    $("body").css({
      overflow: "hidden",
    });
  });
  // FIRST CAROUSEL
  $(".main-carousel").owlCarousel({
    margin: 70,
    nav: false,

    responsive: {
      1: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  // School positions carousel
  $(".school-parts").owlCarousel({
    margin: 0,
    nav: false,
    dots: false,
    touchDrag: false,
    mouseDrag: false,
    items: 1,
  });

  // School positions carousel
  $(".cookie-carousel").owlCarousel({
    margin: 0,
    nav: false,
    dots: true,
    items: 1,
  });

  // Releated posts
  $(".releated-posts").owlCarousel({
    margin: 0,
    nav: true,
    dots: false,
    stagePadding: 45,
    items: 4,
    navText: [
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.7599 31.1025L2.60893 17.8023C1.70458 16.8876 1.70458 15.7608 2.60893 14.8462L15.7599 1.54589" stroke-width="3"/>
    <line x1="1.93066" y1="16.231" x2="32.3008" y2="16.231" stroke-width="3"/>
    </svg>`,
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.1229 1.5459L30.2739 14.8462C31.1782 15.7608 31.1782 16.8877 30.2739 17.8023L17.1229 31.1025" stroke-width="3"/>
    <line x1="30.9521" y1="16.4175" x2="0.58201" y2="16.4175" stroke-width="3"/>
    </svg>`,
    ],
    responsive: {
      0: {
        items: 1,
        stagePadding: 10,
      },
      424: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1024: {
        items: 3,
      },
      1280: {
        stagePadding: 0,
        items: 4,
      },
    },
  });

  // Imprensa carousel
  $(".imprensa-carousel").owlCarousel({
    margin: 30,
    nav: false,
    dots: false,
    stagePadding: 45,
    responsive: {
      0: {
        items: 1,
        stagePadding: 20,
      },
      424: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1024: {
        items: 3,
      },
      1280: {
        stagePadding: 0,
        items: 4,
      },
    },
  });

  // OWL TREE
  $(".owl-tree").owlCarousel({
    margin: 10,
    nav: true,
    navText: [
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.7599 31.1025L2.60893 17.8023C1.70458 16.8876 1.70458 15.7608 2.60893 14.8462L15.7599 1.54589" stroke-width="3"/>
    <line x1="1.93066" y1="16.231" x2="32.3008" y2="16.231" stroke-width="3"/>
    </svg>`,
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.1229 1.5459L30.2739 14.8462C31.1782 15.7608 31.1782 16.8877 30.2739 17.8023L17.1229 31.1025" stroke-width="3"/>
    <line x1="30.9521" y1="16.4175" x2="0.58201" y2="16.4175" stroke-width="3"/>
    </svg>`,
    ],

    responsive: {
      0: {
        items: 1,
      },
    },
    URLhashListener: true,
  });

  $(".owl-directors").owlCarousel({
    margin: 10,
    nav: true,
    dots: false,
    navText: [
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.7599 31.1025L2.60893 17.8023C1.70458 16.8876 1.70458 15.7608 2.60893 14.8462L15.7599 1.54589" stroke-width="3"/>
    <line x1="1.93066" y1="16.231" x2="32.3008" y2="16.231" stroke-width="3"/>
    </svg>`,
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.1229 1.5459L30.2739 14.8462C31.1782 15.7608 31.1782 16.8877 30.2739 17.8023L17.1229 31.1025" stroke-width="3"/>
    <line x1="30.9521" y1="16.4175" x2="0.58201" y2="16.4175" stroke-width="3"/>
    </svg>`,
    ],

    responsive: {
      0: {
        items: 1,
      },
    },
    URLhashListener: true,
  });

  $(".owl-page").owlCarousel({
    nav: true,
    dots: true,
    navText: [
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.7599 31.1025L2.60893 17.8023C1.70458 16.8876 1.70458 15.7608 2.60893 14.8462L15.7599 1.54589" stroke-width="3"/>
    <line x1="1.93066" y1="16.231" x2="32.3008" y2="16.231" stroke-width="3"/>
    </svg>`,
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.1229 1.5459L30.2739 14.8462C31.1782 15.7608 31.1782 16.8877 30.2739 17.8023L17.1229 31.1025" stroke-width="3"/>
    <line x1="30.9521" y1="16.4175" x2="0.58201" y2="16.4175" stroke-width="3"/>
    </svg>`,
    ],

    responsive: {
      0: {
        items: 1,
      },
    },
    URLhashListener: true,
  });

  // OWL TREE
  $(".owl-directors").owlCarousel({
    margin: 10,
    nav: true,
    navText: [
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.7599 31.1025L2.60893 17.8023C1.70458 16.8876 1.70458 15.7608 2.60893 14.8462L15.7599 1.54589" stroke-width="3"/>
      <line x1="1.93066" y1="16.231" x2="32.3008" y2="16.231" stroke-width="3"/>
      </svg>`,
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M17.1229 1.5459L30.2739 14.8462C31.1782 15.7608 31.1782 16.8877 30.2739 17.8023L17.1229 31.1025" stroke-width="3"/>
      <line x1="30.9521" y1="16.4175" x2="0.58201" y2="16.4175" stroke-width="3"/>
      </svg>`,
    ],

    responsive: {
      0: {
        items: 1,
      },
    },
    URLhashListener: true,
  });

  // Education
  $(".education-carousel").owlCarousel({
    margin: 10,
    nav: true,
    navText: [
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.7599 31.1025L2.60893 17.8023C1.70458 16.8876 1.70458 15.7608 2.60893 14.8462L15.7599 1.54589" stroke-width="3"/>
    <line x1="1.93066" y1="16.231" x2="32.3008" y2="16.231" stroke-width="3"/>
    </svg>`,
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.1229 1.5459L30.2739 14.8462C31.1782 15.7608 31.1782 16.8877 30.2739 17.8023L17.1229 31.1025" stroke-width="3"/>
    <line x1="30.9521" y1="16.4175" x2="0.58201" y2="16.4175" stroke-width="3"/>
    </svg>`,
    ],
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      1024: {
        items: 1,
      },
    },
    URLhashListener: true,
  });

  // Education
  $(".ensino-fundamental-carousel").owlCarousel({
    margin: 10,
    nav: false,
    navText: [
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.7599 31.1025L2.60893 17.8023C1.70458 16.8876 1.70458 15.7608 2.60893 14.8462L15.7599 1.54589" stroke-width="3"/>
    <line x1="1.93066" y1="16.231" x2="32.3008" y2="16.231" stroke-width="3"/>
    </svg>`,
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.1229 1.5459L30.2739 14.8462C31.1782 15.7608 31.1782 16.8877 30.2739 17.8023L17.1229 31.1025" stroke-width="3"/>
    <line x1="30.9521" y1="16.4175" x2="0.58201" y2="16.4175" stroke-width="3"/>
    </svg>`,
    ],
    dots: false,
    responsive: {
      0: {
        nav: true,
        items: 1,
      },
      1024: {
        items: 1,
      },
    },
    URLhashListener: true,
  });

  $(".courses-carousel").owlCarousel({
    margin: 10,
    nav: true,
    items: 1,
    navText: [
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.7599 31.1025L2.60893 17.8023C1.70458 16.8876 1.70458 15.7608 2.60893 14.8462L15.7599 1.54589" stroke-width="3"/>
    <line x1="1.93066" y1="16.231" x2="32.3008" y2="16.231" stroke-width="3"/>
    </svg>`,
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.1229 1.5459L30.2739 14.8462C31.1782 15.7608 31.1782 16.8877 30.2739 17.8023L17.1229 31.1025" stroke-width="3"/>
    <line x1="30.9521" y1="16.4175" x2="0.58201" y2="16.4175" stroke-width="3"/>
    </svg>`,
    ],
    dots: false,
    responsive: {
      0: {
        items: 1,
        stagePadding: 50,
      },
      1024: {
        items: 1,
        stagePadding: 150,
      },
    },
    URLhashListener: true,
  });

  /*
   * Owl custom navigation
   */
  changeItems(0);
  changeItems(1);
  changeItems(2);

  function changeItems(index) {
    $(".atual-screen").html(
      $(".school-parts.part-" + index + " .owl-item.active")
        .find(".item")
        .attr("data-item")
    );
    $(".next-carousel.carousel-" + index + "").click(function () {
      $(".school-parts.part-" + index + "").trigger("next.owl.carousel");
      $(".atual-screen").html(
        $(".school-parts.part-" + index + " .owl-item.active")
          .find(".item")
          .attr("data-item")
      );
    });
    $(".prev-carousel.carousel-" + index + "").click(function () {
      $(".school-parts.part-" + index + "").trigger("prev.owl.carousel");
      $(".atual-screen").html(
        $(".school-parts.part-" + index + " .owl-item.active")
          .find(".item")
          .attr("data-item")
      );
    });
  }

  /**
   * Carousel one column
   */
  $(".carousel-one-column").owlCarousel({
    margin: 10,
    nav: true,
    navText: [
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.7599 31.1025L2.60893 17.8023C1.70458 16.8876 1.70458 15.7608 2.60893 14.8462L15.7599 1.54589" stroke-width="3"/>
    <line x1="1.93066" y1="16.231" x2="32.3008" y2="16.231" stroke-width="3"/>
    </svg>`,
      `<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.1229 1.5459L30.2739 14.8462C31.1782 15.7608 31.1782 16.8877 30.2739 17.8023L17.1229 31.1025" stroke-width="3"/>
    <line x1="30.9521" y1="16.4175" x2="0.58201" y2="16.4175" stroke-width="3"/>
    </svg>`,
    ],
    dots: false,
    responsive: {
      0: {
        items: 1,
        stagePadding: 30,
      },
      400: {
        items: 1,
        stagePadding: 65,
      },
      600: {
        items: 1,
        stagePadding: 100,
      },
      800: {
        items: 2,
        stagePadding: 30,
      },
      1024: {
        stagePadding: 50,
        items: 3,
      },
      1100: {
        stagePadding: 50,
        items: 4,
      },
    },
    URLhashListener: true,
  });
});
