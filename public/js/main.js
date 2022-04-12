$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $("#myHeader").addClass("headerSticky");
    } else {
        $("#myHeader").removeClass("headerSticky");
    }
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $("#back-to-top").fadeIn();
        } else {
            $("#back-to-top").fadeOut();
        }
    });
    // scroll body to 0px on click
    $("#back-to-top").click(function () {
        $("body,html").animate(
            {
                scrollTop: 0,
            },
            400
        );
        return false;
    });
});

$(".filter-active").on("click", function (e) {
    e.preventDefault();
    $(".filter-wrapper").slideToggle();
});

$(document).ready(function () {
    $(".basic-single").select2();
});

const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
    const itemToggle = this.getAttribute("aria-expanded");

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute("aria-expanded", "false");
    }

    if (itemToggle == "false") {
        this.setAttribute("aria-expanded", "true");
    }
}

items.forEach((item) => item.addEventListener("click", toggleAccordion));

$(".package-slider").owlCarousel({
    loop: true,
    rewind: true,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true,
        },
        480: {
            items: 1,
            nav: true,
        },
        768: {
            items: 2,
            nav: true,
        },
        1024: {
            items: 2,
            nav: true,
        },
        1380: {
            items: 3,
            nav: true,
        },
        1580: {
            items: 3,
            nav: true,
        },
    },
});

$('.gallery-slider').owlCarousel({
  loop:true,
  rewind:true,
  margin:20,
  nav:false,
  dots:false,
  autoplay:true,
  slideTransition: 'linear',
  autoplayTimeout: 10000,
  autoplaySpeed: 10000,
  autoplayHoverPause: true,
  responsiveClass:true,
  responsive:{
       0:{
          items:1,
      },
      480:{
          items:1,
      },
      768:{
          items:1,
      },
      1024:{
          items:1,
      },
      1380:{
          items:1,
      },
      1580:{
          items:1,
      }
  }
})

$(".blog-slider").owlCarousel({
    loop: true,
    rewind: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplay: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        768: {
            items: 1,
        },
        1024: {
            items: 1,
        },
        1380: {
            items: 2,
            nav: true,
        },
        1580: {
            items: 2,
            nav: true,
        },
    },
});

// $('.package-slider').slick({
//     dots: false,
//     infinite: false,
//     speed: 300,
//     slidesToShow: 3,
//     slidesToScroll: 3,
//     responsive: [
//       {
//         breakpoint: 1024,
//         settings: {
//           slidesToShow: 2,
//           slidesToScroll: 2,
//           infinite: true,
//           dots: false
//         }
//       },
//       {
//         breakpoint: 600,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1
//         }
//       },
//       {
//         breakpoint: 480,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1
//         }
//       }
//     ]
//   });
