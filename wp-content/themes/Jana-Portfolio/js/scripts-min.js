"use strict";!function(e,r,s){e(window).scroll(function(){e(window).scrollTop()>=100?e(".header").addClass("scrolled"):e(".header").removeClass("scrolled")}),setTimeout(function(){var r=e(".skillset-tags"),s=r.html().split(" "),n=Array.from(s);r.remove(),n.map(function(r){return e(".skillset-right").append('<span class="skill">'+r+"</span>")})},500)}(jQuery);var lenis=new Lenis({lerp:.1,smooth:!0,direction:"vertical"});function raf(e){lenis.raf(e),requestAnimationFrame(raf)}requestAnimationFrame(raf);