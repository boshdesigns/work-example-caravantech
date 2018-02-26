(function ($) {
  $(function() {
    if ($('.slick.slick--slideshow').length > 0) {
      $('.slick.slick--slideshow').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: "<span class='slick-prev main'>&lt;</span>",
        nextArrow: "<span class='slick-next main'>&gt;</span>",
        autoplay: true,
        autoplaySpeed: 3000
      });
    }
  });
})(jQuery);
