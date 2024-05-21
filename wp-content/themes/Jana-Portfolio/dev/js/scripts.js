;(function ($, root, undefined) {
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $(".header").addClass("scrolled");
    } else {
        $(".header").removeClass("scrolled");
    }
    
});
setTimeout(() => {
  var skillTagsContainer = $('.skillset-tags');
  var skillTags = skillTagsContainer.html()
  var tagsArray = skillTags.split(" ");
  let testArray = Array.from(tagsArray);
  skillTagsContainer.remove()
  testArray.map(function(name) {
    return $('.skillset-right').append('<span class="skill">' + name + '</span>');
 });
}, 500);

})(jQuery, this)

//lenis
const lenis = new Lenis({
  lerp: 0.1,
  smooth: true,
  direction: "vertical"
})

// lenis.on('scroll', (e) => {
//   console.log(e)
// })

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
