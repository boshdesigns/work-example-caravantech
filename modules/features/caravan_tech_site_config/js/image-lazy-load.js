if(document.querySelectorAll('.slick picture img')) {
  imagesLoaded( document.querySelectorAll('.slick picture img'), function( instance ) {
    var eachIstance = instance.images;
    for (var a = 0; a < eachIstance.length; a++) {
      if(eachIstance[a].isLoaded) {
        eachIstance[a].img.className += ' loaded';
      }
    }

    // Once done get rid of styling to slick picture element
    if(document.querySelector('.slick')) {
      var removeLoading = document.querySelectorAll('.slick picture');
      for (var c = 0; c < removeLoading.length; c++) {
        removeLoading[c].className += 'default';
      }
    }

    // Catch any cloned Slick slide if there are any
    if(document.querySelector('.slick li.slick-cloned')) {
      var slickCloned = document.querySelectorAll('.slick li.slick-cloned picture img');
      for (var b = 0; b < slickCloned.length; b++) {
        slickCloned[b].className += ' loaded';
      }
    }

  });
}
