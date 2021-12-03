/* global jQuery */
(function ($) {
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      center: true,
      nav: true,
      responsive: {
        0: {
          items: 1,
        },
      },
    });
  });
})(jQuery);
