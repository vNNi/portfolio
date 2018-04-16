$(function() {
  $(window).on("scroll", function() {
    if($(window).scrollTop() > 440) {
      $("#menu").addClass("changeColor");
    } else {
      $("#menu").removeClass("changeColor");
    }
  });
});