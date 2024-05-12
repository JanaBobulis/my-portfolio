;(function ($, root, undefined) {
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $(".header").addClass("scrolled");
    } else {
        $(".header").removeClass("scrolled");
    }
});


})(jQuery, this)

//lenis
const lenis = new Lenis({
  lerp: 0.1,
  smooth: true,
  direction: "vertical"
})

lenis.on('scroll', (e) => {
  console.log(e)
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
