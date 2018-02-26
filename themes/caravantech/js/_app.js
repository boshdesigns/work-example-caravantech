// To activate this file uncomment scripts[] = js/app.min.js from the .info file.

(function ($) {

  // Debouncer function
  function debouncer( func , timeout ) {
     var timeoutID;
     timeout = timeout || 200;
     return function () {
        var scope = this , args = arguments;
        clearTimeout( timeoutID );
        timeoutID = setTimeout( function () {
            func.apply( scope , Array.prototype.slice.call( args ) );
        } , timeout );
     };
  }

  // Add smooth scrolling to anchor tags
  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  // exclude certian #links that we don't want to smooth scroll
  .not('[href="#tab-video"]')
  .not('[href="#tab-video2"]')
  .not('[href="#tab-video3"]')
  .not('[href="#tab-video4"]')
  .not('[href="#tab-images"]')
  .not('[href="#tab-features"]')
  .not('[href="#tab-techspec"]')
  .not('[href="#tab-finance"]')
  .not('[href="#tab-contact"]')
  .click(function(event) {
    // On-page links
    if ( location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 200
        }, 700 );
      }
    }
  });

  function setSticky() {
        // Make search block sticky if tablet or desktop
        var self = $('.l-header');

        if ($(window).width() > 767) {
          $('.l-header__outer').css('min-height', $('.l-header').outerHeight());
          $('.l-header').addClass('fixed');
        } else if ($(window).width() < 767) {
          $('.l-header__outer').css('min-height', 'auto');
          $('.l-header').removeClass('fixed');
        }
    }

    if ($('.l-header__outer').length) {
    // call the function if the div exists
    setSticky();
    // call function again via the debouner for window resize
    $(window).on('resize', debouncer(setSticky));
  }

  // Disable enquiry button once the button is clicked to stop multiple submissions
  $('.entity-entityform-type.entitytype-vehicle_enquiry_form-form #edit-submit, .entity-entityform-type.entitytype-general_enquiries-form #edit-submit').click(function(){

      // Set the button var
      var btn = $(this);

      // We have to set a timeout to disbale to allow the form to submit
      setTimeout(function(){
        btn.prop('disabled', true).html("Submitting Please Wait...");
      }, 1);

  });

})(jQuery);
