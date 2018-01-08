export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    var headerFloating = $(".header_floating");

    $(window).on("load resize scroll", function() {
      var contentOffset = $(".writings").offset().top;
      var top = $(this).scrollTop();

      if ((top > (contentOffset)) && ($(window).width() >= 768)) {
        headerFloating.removeAttr("style");
        headerFloating.addClass("is_scrolled");
      } else {
        headerFloating.fadeOut(300, function() {
          headerFloating.removeClass("is_scrolled");
        });
      }
    });
  },
};
