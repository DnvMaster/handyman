/* **************************************************************************** 
                          Custom GSAP js start 
****************************************************************************  */
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

    const smoother = ScrollSmoother.create({
        content: "#scrollSmoother-container",
        smooth: 1,
        effects: true,
        smoothTouch: 0.1,
        ease: "power4.out",
    });

// =================================== Smooth Scroller Js Start =====================================




// **************************** Section title Js Start ****************************
if ($(window).width() > 768 && $(".tw-char-animation").length > 0) {
    let char_come = gsap.utils.toArray(".tw-char-animation");
    char_come.forEach(splitTextLine => {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: splitTextLine,
                start: "top 90%",
                end: "bottom 60%",
                scrub: false,
                markers: false,
                toggleActions: "play none none none",
            },
        });
        const itemSplitted = new SplitText(splitTextLine, {
            type: "chars, words",
        });
        gsap.set(splitTextLine, {
            perspective: 300
        });
        itemSplitted.split({
            type: "chars, words"
        });
        tl.from(itemSplitted.chars, {
            duration: 1,
            delay: 0.5,
            x: 100,
            autoAlpha: 0,
            stagger: 0.05,
        });
    });
}
// **************************** Section title Js End ****************************


// **************************** split invert Js Start ****************************
const split = new SplitText(".text-invert", {
    type: "lines"
});
split.lines.forEach(target => {
    gsap.to(target, {
        backgroundPositionX: 0,
        ease: "none",
        scrollTrigger: {
            trigger: target,
            scrub: 1,
            start: "top 85%",
            end: "bottom center",
        },
    });
});
// **************************** split invert Js End ****************************



// **************************** Mobile Menu js Start ****************************
var mmm = gsap.matchMedia();
var mtl = gsap.timeline({
    paused: true
});
const toggleMobileMenu = document.querySelector(".toggle-mobileMenu");
const closeButton = document.querySelector(".close-button");
const mobileSideOverlay = document.querySelector(".side-overlay");
mmm.add("(max-width: 1199px)", () => {
    mtl.to(".side-overlay", {
        opacity: 1,
        visibility: "visible",
        duration: 0.15,
    });

    mtl.to(".mobile-menu", {
        x: 0,
        delay: 0.2,
        duration: 0.2,
    });

    mtl.from(".nav-menu__item", {
        opacity: 0,
        duration: 0.2,
        y: -60,
        stagger: 0.08,
    });

    toggleMobileMenu.addEventListener("click", function () {
        mtl.play();
        document.body.style.overflow = "hidden";
    });

    closeButton.addEventListener("click", function () {
        mtl.reverse();
        document.body.style.overflow = "";
    });

    mobileSideOverlay.addEventListener("click", function () {
        mtl.reverse();
        document.body.style.overflow = "";
    });
});
// **************************** Mobile Menu js End ****************************



// **************************** Video js Start ****************************
if ($('.video-area').length > 0) {
    let mm = gsap.matchMedia();
    mm.add("(min-width: 1200px)", () => {
        let thumbnail = gsap.timeline({
            scrollTrigger: {
                trigger: ".video-area",
                start: "top 170",
                pin: true,
                markers: false,
                scrub: 1,
                pinSpacing: false,
                end: "bottom 70%",
            }
        });
        thumbnail.to(".video-bg", {
            width: "1110px",
            height: "560px",
        });
    });
}
// **************************** Video js End ****************************



// **************************** Hover js Start ****************************
const hoverItem = document.querySelectorAll(".hover__reveal-item");
function moveImage(e, hoverItem, index) {
    const item = hoverItem.getBoundingClientRect();
    const x = e.clientX - item.x;
    const y = e.clientY - item.y;
    if (hoverItem.children[index]) {
        hoverItem.children[index].style.transform = `translate(${x}px, ${y}px)`;
    }
}
hoverItem.forEach((item, i) => {
    item.addEventListener("mousemove", (e) => {
        setInterval(moveImage(e, item, 1), 50);
    });
});
// **************************** Hover js End ****************************



// **************************** Animated Heading js Start ****************************
if (document.querySelector('.animated-title')) {
    gsap.set('.animated-title', {
        opacity: 0
    });
    gsap.to('.animated-title', {
        opacity: 1,
        duration: 1,
        ease: 'power1.out',
        scrollTrigger: {
            trigger: '.animated-title',
            start: 'top 80%',
            toggleActions: 'play none none none',
            once: true
        },
        onComplete: runAnimation
    });

    function runAnimation() {
        const mySplitText = new SplitText(".animated-title", {
            type: "words,chars"
        });
        const chars = mySplitText.chars;
        const cta = gsap.timeline({
            repeat: -1,
            delay: 0.5
        });
        cta.to(chars, {
            duration: 0.5,
            scaleY: 0.6,
            ease: "power1.out",
            stagger: 0.04,
            transformOrigin: 'center bottom'
        });
        cta.to(chars, {
            yPercent: -20,
            ease: "elastic.out(1, 0.3)",
            stagger: 0.03,
            duration: 0.8
        }, 0.5);
        cta.to(chars, {
            scaleY: 1,
            ease: "elastic.out(1, 0.3)",
            stagger: 0.03,
            duration: 1.5
        }, 0.5);
        cta.to(chars, {
            onStart: () => {
                chars.forEach(char => char.classList.add('char-animated'));
            }
        }, 0.5);
        cta.to(chars, {
            yPercent: 0,
            ease: "back.out(1.7)",
            stagger: 0.03,
            duration: 0.8
        }, 0.7);
        cta.to(chars, {
            onStart: () => {
                chars.forEach(char => char.classList.remove('char-animated'));
            }
        });
    }
}
// **************************** Animated Heading js End ****************************




    // gallery shape 1 leftToRightTL scroll
    if (document.querySelector(".cta-two-shape-1, .cta-two-shape-4")) { 
      let leftToRightTL = gsap.timeline({
        scrollTrigger: {
          trigger: ".cta-two-shape-1, .cta-two-shape-4",
          start: "top 80%",
          end: "bottom 10%",
          scrub: 2,  
          markers: false,
        }
      });
      leftToRightTL.fromTo(".cta-two-shape-1, .cta-two-shape-4", 
        {
          x: -260,
        },  
        { 
          x: 0,
          duration: 1.6
        } 
      );
    }

  // gallery shape 1 Righttoleft scroll
    if (document.querySelector(".cta-two-shape-3, .cta-two-shape-6")) { 
      let rightToLeftTL = gsap.timeline({
        scrollTrigger: {
          trigger: ".cta-two-shape-3, .cta-two-shape-6",
          start: "top 80%",
          end: "bottom 10%",
          scrub: 2,  
          markers: false,
        }
      });
      rightToLeftTL.fromTo(".cta-two-shape-3, .cta-two-shape-6", 
        {
          x: 260,
        },  
        { 
          x: 0,
          duration: 1.5
        } 
      );
    }


    
    if (document.querySelector(".cta-two-shape-2")) { 
        let topToBottomTL = gsap.timeline({
            scrollTrigger: {
            trigger: ".cta-two-shape-2",
            start: "top 80%",
            end: "bottom 10%",
            scrub: 2,
            markers: false,
            }
        });
        topToBottomTL.fromTo(".cta-two-shape-2", 
            {
                y: -260,
            },  
            { 
                y: 0,   
                duration: 1.4
            } 
        );
    }


    if (document.querySelector(".cta-two-shape-5")) { 
        let bottomTooTopTL = gsap.timeline({
            scrollTrigger: {
            trigger: ".cta-two-shape-5",
            start: "top 80%",
            end: "bottom 60%",
            scrub: 2,
            markers: false,
            }
        });
        bottomTooTopTL.fromTo(".cta-two-shape-5", 
            {
                y: 260,
            },  
            { 
                y: 0,   
                duration: 1.3
            } 
        );
    }




    // About Four card animation 
    gsap.registerPlugin(ScrollTrigger);
    document.addEventListener("DOMContentLoaded", function () {
      if (window.innerWidth > 992) {
        const items = document.querySelectorAll(".about-four-wrap .about-four-item");
        if (items.length < 4) return; // skip if items are missing

        const about = gsap.timeline({
          scrollTrigger: {
            trigger: ".about-four-wrap",
            start: "top 60%",
            toggleActions: "play none none reverse",
            markers: false,
          },
          defaults: {
            ease: "ease1",
            duration: 1,
          },
        });
        about
          .from(items[0], {
            xPercent: 100,
            rotate: -8
          })
          .from(items[1], {
            xPercent: 30,
            rotate: 4.13
          }, "<")
          .from(items[2], {
            xPercent: -30,
            rotate: -6.42
          }, "<")
          .from(items[3], {
            xPercent: -60,
            rotate: -12.15
          }, "<");
      }
    });

    



    // button hover animation Js
    $('.tw-hover-btn').on('mouseenter', function (e) {
        var x = e.pageX - $(this).offset().left;
        var y = e.pageY - $(this).offset().top;
        $(this).find('.tw-btn-circle-dot').css({
            top: y,
            left: x
        });
    });
    $('.tw-hover-btn').on('mouseout', function (e) {
        var x = e.pageX - $(this).offset().left;
        var y = e.pageY - $(this).offset().top;
        $(this).find('.tw-btn-circle-dot').css({
            top: y,
            left: x
        });
    });
    var hoverBtns = gsap.utils.toArray(".tw-hover-btn-wrapper");
    const hoverBtnItem = gsap.utils.toArray(".tw-hover-btn-item");
    hoverBtns.forEach((btn, i) => {
        $(btn).mousemove(function (e) {
            callParallax(e);
        });

        function callParallax(e) {
            parallaxIt(e, hoverBtnItem[i], 60);
        }

        function parallaxIt(e, target, movement) {
            var $this = $(btn);
            var relX = e.pageX - $this.offset().left;
            var relY = e.pageY - $this.offset().top;
            gsap.to(target, 1, {
                x: ((relX - $this.width() / 2) / $this.width()) * movement,
                y: ((relY - $this.height() / 2) / $this.height()) * movement,
                ease: Power2.easeOut,
            });
        }
        $(btn).mouseleave(function (e) {
            gsap.to(hoverBtnItem[i], 1, {
                x: 0,
                y: 0,
                ease: Power2.easeOut,
            });
        });
    });



    // gallery-five card animation 
    gsap.registerPlugin(ScrollTrigger);
    document.addEventListener("DOMContentLoaded", function () {
      if (window.innerWidth > 992) {
        const items = document.querySelectorAll(".gallery-five-wrap .gallery-five-item");
        if (items.length < 5) return; // skip if items are missing

        const gallery = gsap.timeline({
          scrollTrigger: {
            trigger: ".gallery-five-wrap",
            start: "top 60%",
            toggleActions: "play none none reverse",
            markers: false,
          },
          defaults: {
            ease: "ease1",
            duration: 1,
          },
        });
        gallery
          .from(items[0], {
            xPercent: 100,
            rotate: -8
          })
          .from(items[1], {
            xPercent: 30,
            rotate: 4.13
          }, "<")
          .from(items[2], {
            xPercent: -30,
            rotate: -6.42
          }, "<")
          .from(items[3], {
            xPercent: -60,
            rotate: -12.15
          }, "<")
          .from(items[4], {
            xPercent: -100,
            rotate: 4.13
          }, "<");
      }
    });




    // Sticky
    gsap.utils.toArray('.sticky-item').forEach(sticky => {
        if (window.innerWidth < 0 || window.innerWidth > 992) {
            ScrollTrigger.create({
            trigger: sticky,
            start: 'top top+=180',
            end: '+=452',
            pin: true,
            scrub: true,
            });
        }
    });





/* **************************************************************************** 
                          Custom GSAP js start 
****************************************************************************  */