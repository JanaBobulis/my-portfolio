"use strict";

;
(function ($, root, undefined) {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
      $(".header").addClass("scrolled");
    } else {
      $(".header").removeClass("scrolled");
    }
  });
})(jQuery, void 0);

//lenis
var lenis = new Lenis({
  lerp: 0.1,
  smooth: true,
  direction: "vertical"
});
lenis.on('scroll', function (e) {
  console.log(e);
});
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);