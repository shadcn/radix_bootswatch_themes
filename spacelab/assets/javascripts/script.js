/**
 * @file
 * Custom scripts for theme.
 */
(function ($) {
  $(document).ready(function() {
    // Show dropdowns on hover.
    $('.nav > li.dropdown').mouseenter(function() {
      $(this).addClass('open');
    });
    $('.nav > li.dropdown').mouseleave(function() {
      $(this).removeClass('open');
    });

    // Equal height for .row-eh and .col-eh
    $('body').imagesLoaded(function() {
      $('.row-eh, .col-eh').eh();
    });
  });

  // Sets all el to equal height.
  $.fn.eh = function() {
    return this.height(Math.max.apply(this, $.map(this, function(el) { return $(el).outerHeight() })));
  }
})(jQuery);
