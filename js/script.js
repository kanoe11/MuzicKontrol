(function($) {
  "use strict"; // Start of use strict

  // animation navigation ( navbar)
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    //quand je clique sur un lien  du navbar mais section de la page ex #services 
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 56)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

})(jQuery); // End of use strict

//$(document).on('click', '#bcreateArtic"', function() {
//  $('#formActiv').toggle();
//});

