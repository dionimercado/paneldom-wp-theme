jQuery(function($) {
  jQuery(".highlights-carousel").owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    autoplayHoverPause:true,
    items: 1
  });

  jQuery(".testimonials-carousel").owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    autoplayHoverPause:true,
    items: 1
  });

  jQuery(".portfolio-carousel").owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    responsive: {
      0: {
        items: 2,
      },
      768: {
        items: 4,
      }
    }
  });

});
