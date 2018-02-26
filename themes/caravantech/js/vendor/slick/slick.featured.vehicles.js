(function ($) {
  $(function() {
    if ($('.slick.slick--featured-vehicles').length > 0) {
      $('.slick.slick--featured-vehicles').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<span class='slick-prev main'>&lt;</span>",
        nextArrow: "<span class='slick-next main'>&gt;</span>",
        autoplay: true,
        autoplaySpeed: 3000,
        mobileFirst: true,
        responsive: [
          {
            breakpoint: 1023,
            settings: {
              slidesToShow: 2,
              autoplay: false
            }
          }
        ]
      });
    }
  });
})(jQuery);
