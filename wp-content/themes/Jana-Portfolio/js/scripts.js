"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
;
(function ($, root, undefined) {
  "use strict";

  Array.from(document.querySelectorAll("a")).forEach(function (a) {
    a.classList.add(location.hostname === a.hostname || !a.hostname.length ? "local" : "external");
  });
  $(function () {
    // DOM ready, take it away
    detectBrowser();
    // Browser detection.
    function detectBrowser() {
      var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor),
        isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor),
        isFirefox = navigator.userAgent.toLowerCase().indexOf("firefox") > -1,
        isIE = /MSIE/.test(navigator.userAgent) || /Trident/.test(navigator.userAgent),
        isEdge = /Edge/.test(navigator.userAgent),
        isOpera = /OPR/.test(navigator.userAgent) && /Opera/.test(navigator.vendor),
        hoolite_body = jQuery("body");
      if (isChrome) {
        hoolite_body.addClass("is-chrome");
      }
      if (isSafari) {
        hoolite_body.addClass("is-safari");
      }
      if (isFirefox) {
        hoolite_body.addClass("is-firefox");
      }
      if (isIE) {
        hoolite_body.addClass("is-ms-explorer");
      }
      if (isEdge) {
        hoolite_body.addClass("is-edge");
      }
      if (isOpera) {
        hoolite_body.addClass("is-opera");
      }
    }

    //passive event listeners for pagespeed
    // Passive event listeners for IE
    jQuery.event.special.touchstart = {
      setup: function setup(_, ns, handle) {
        this.addEventListener("touchstart", handle, {
          passive: !ns.includes("noPreventDefault")
        });
      }
    };
    jQuery.event.special.touchmove = {
      setup: function setup(_, ns, handle) {
        this.addEventListener("touchmove", handle, {
          passive: !ns.includes("noPreventDefault")
        });
      }
    };

    //nav bar scroll
    $(window).on("scroll", function () {
      var $nav = $("header");
      var $hero = $(".hero");
      $nav.toggleClass("hero-scrolled", $(this).scrollTop() > 80);
    });
    setTimeout(function () {
      $(".owl-carousel.quotes-owl-carousel.make-carousel").owlCarousel({
        items: 1,
        loop: true,
        center: false,
        onInitialized: callback,
        onResized: callback
      });
      $(".owl-carousel.events-owl-carousel").owlCarousel({
        center: true,
        loop: true,
        margin: 20,
        onResized: callback,
        onInitialized: callback,
        responsive: {
          1200: {
            items: 3.7
          },
          768: {
            items: 2
          },
          475: {
            items: 1.5
          },
          200: {
            items: 1.3
          }
        }
      });

      //news section owl carousel

      $(".news-owl-carousel.owl-carousel").owlCarousel({
        // margin: 20,
        center: false,
        items: 3,
        loop: true,
        nav: true,
        dots: false,
        onInitialized: callback,
        onResized: callback,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
          1200: {
            items: 3
          },
          768: {
            items: 2
          },
          400: {
            items: 1
          }
        }
      });
      function callback(event) {
        var items = event.item.count;
        console.log(items);
        if (items <= 1) {
          $(".quotes-owl-carousel.make-carousel .owl-dots").addClass("single");
        }
      }
    }, 500);

    //stacking cards
    //https://codepen.io/GreenSock/pen/XWxOwVp?editors=1010
    gsap.registerPlugin(ScrollTrigger);

    // ScrollSmoother.create({
    //   smooth: 2,
    //   normalizeScroll: true,
    //   smoothTouch: 0.1
    // });

    // const cards = gsap.utils.toArray(".stacking-cards-content");

    // cards.forEach((card, i) => {
    //   console.log(i)
    //   gsap.to(card, {
    //     scale: () => 0.8 + i * 0.035,
    //     ease: "none",
    //     scrollTrigger: {
    //       trigger: card,
    //       start: "top-=" + 40 * i + " 40%",
    //       end: "center center",
    //       scrub: true
    //     }
    //   });
    //   ScrollTrigger.create({
    //     trigger: card,
    //     start: "top-=" + 40 * i + " 10%",
    //     end: "bottom bottom",
    //     endTrigger: ".end-element",
    //     pin: true,
    //     pinSpacing: false,
    //     markers: true,
    //     id: "card-" + i
    //   });
    // });

    // ScrollTrigger.refresh();

    //stacking images
    // Variable to store the Lenis smooth scrolling object

    var lenis;

    // Selecting DOM elements

    var contentElements = _toConsumableArray(document.querySelectorAll(".content--sticky"));
    var totalContentElements = contentElements.length;

    // Function to handle scroll-triggered animations
    var scroll = function scroll() {
      contentElements.forEach(function (el, position) {
        var isLast = position === totalContentElements - 1;
        console.log(window.innerWidth <= 991 ? "smaller" : "larger");
        gsap.timeline({
          scrollTrigger: {
            trigger: el,
            start: "top top",
            end: "+=100%",
            scrub: true
          }
        }).to(el, {
          ease: "none",
          startAt: {
            filter: "brightness(100%)"
          },
          filter: window.innerWidth <= 991 ? "none" : "brightness(50%)",
          // opacity: 0.5,
          // filter: "brightness(50%)",
          scale: 0.85
          // borderRadius: 40,
        }, 0);
      });
    };

    // // Initialization function
    var init = function init() {
      scroll(); // Apply scroll-triggered animations
    };
    init();

    // Window listeners
    // $(window).resize(function () {
    //   AOS.refresh()
    // })
    // setTimeout(function () {
    //   AOS.refresh()
    // }, 500)

    //AOS animation
    // AOS.init({
    //   offset: 200,
    //   duration: 500,
    //   delay: 250,
    // })

    //************* */
    //** => Two Column Image Shrink
    //************* */
    var twoCol = $(".two-col-content");
    twoCol.each(function () {
      var c = $(this),
        img = c.find(".hex-img img"),
        source = c.find(".hex-img source"),
        hex = c.find(".hex-img"),
        hexTrigger = {
          trigger: c,
          start: "top 75%",
          end: "center 25%",
          scrub: true
        };
      if (hex) {
        gsap.from([img, source], {
          scale: 1.2,
          ease: "power1.inOut",
          scrollTrigger: hexTrigger
        });
        // gsap.to(hex, {
        //   clipPath: "polygon(28% 2%, 73% 2%, 98% 50%, 73% 98%, 27% 98%, 2% 50%)",
        //   ease: "power1.inOut",
        //   scrollTrigger: hexTrigger,
        // })
      }
    });

    //popup
    $(".inner-pop-up-block .close-btn").on("click", function () {
      $(".pop-up-block").addClass("pop-up-block-close");
    });

    //dropdown menu
    $(".dropdown-toggle").on("click", function (e) {
      e.preventDefault();
      $(".dropdown-menu").toggleClass("dropdown-menu-active");
    });

    //************* */
    //** => Painting Contact Block Arrow
    //************* */
    // gsap.registerPlugin(DrawSVGPlugin)
    // const contactSection = $(".contact-section")

    // contactSection.each(function () {
    //   let s = $(this),
    //     arrow = s.find(".contact-us-arrow svg path"),
    //     arrowTrigger = {
    //       trigger: s,
    //       start: "center bottom",
    //       end: "+=100",
    //       scrub: true,
    //       markers: true,
    //     }
    //   console.log(arrow)
    //   gsap.from(arrow, {
    //     drawSVG: 0,
    //     ease: "none",
    //     scrollTrigger: arrowTrigger,
    //   })
    // })

    //menu toggle btn
    $(".burger-container").on("click", function () {
      $(".burger-container ul").toggleClass("active");
      $("body").toggleClass("active-nav");
      $(".mobile-menu-container").toggleClass("active-nav");
    });
    var stackingCards = $(".stacking-cards-content");
    if (stackingCards[0]) {
      console.log("has stacking");
    } else {
      $(".wrapper").addClass("no-overflow");
      console.log("no stacking cards");
    }
  }); //END JQUERY
})(jQuery, void 0);