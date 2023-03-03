$(document).ready(function () {

  if ($(window).width() < 667) {
    $(".dropdown").addClass("clickmenu");
  } else {
    $(".dropdown").removeClass("clickmenu");
    $(".dropdown").addClass("hovermenu");
    $(window).scroll(function () {
      if ($(document).scrollTop() > 0) {
        $("div#myTopnav a").css("padding", "25px 20px");
        $(".dropdown").css("padding", "25px 20px");
        $(".dropdown .dropdown-content").css("top", "74px");
        $(".cm-header-navbar .logo img").css("width", "180px");
      } else {
        $("div#myTopnav a").css("padding", "45px 20px");
        $(".dropdown").css("padding", "45px 20px");
        $(".dropdown .dropdown-content").css("top", "110px");
        $(".cm-header-navbar .logo img").css("width", "240px");

      }
    });
  }


  // $(".nav-menu").click(function () {
  //   $("div#myTopnav").slideToggle("slow");
  // });

  $(".clickmenu").click(function () {
    // alert("hello");
    var test = $(this).children('div.dropdown-content');
    test.toggle();
  });




  $(".cm-question").click(function () {
    var test = $(this).parent('.cm-question-box').children('.questoin-ans');
    test.slideToggle("fast");
    var down = $(this).find(".fa-angle-down");
    var up = $(this).find(".fa-angle-up");
    if (down.length === 1) {
      down.addClass('fa-angle-up');
      down.removeClass('fa-angle-down');
    }

    if (up.length === 1) {
      up.addClass('fa-angle-down');
      up.removeClass('fa-angle-up');
    }

    console.log(down.length);
    // var test = $(this).find('i').toggleClass('down');
  });

  $('.slick-box-slid').slick({
    adaptiveHeight: 250,
    dots: true,
  });


  $('.responsive-slider-destination').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // AOS Init
  AOS.init({ disable: 'mobile' });

});