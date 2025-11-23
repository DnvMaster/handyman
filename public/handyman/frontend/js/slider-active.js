(function ($) {
    "use strict";

    // ========================= Banner Js Start ==============
	const bannerSlide = new Swiper('banner-active', {
		// Optional parameters
		speed:1500,
		loop: true,
		slidesPerView: 1,
		autoplay: true,
		effect:'fade',
		breakpoints: {
			'1600': {
				slidesPerView:1,
			},
			'1400': {
				slidesPerView:1,
			},
			'1200': {
				slidesPerView:1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
			a11y: false,
		},
		pagination: {
			el: ".banner-dots",
			clickable:true,
		},

	});
    // ========================= Banner End ==============




	// =========================  Home 1 testimonial Js Start ==============
    var slider = new Swiper('.testimonial-active', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        speed: 3500,
        autoplay: true,
		breakpoints: {
			'1600': {
				slidesPerView:2,
			},
			'1400': {
				slidesPerView:2,
			},
			'1200': {
				slidesPerView:2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
			a11y: false,
		},
        // Navigation arrows
        navigation: {
            nextEl: '.slider-next',
            prevEl: '.slider-prev',
        },
    });
    // =========================  Home 1 testimonial Js End ==============


	// =========================  Home 1 brand Js Start ==============
	var slider = new Swiper('.brand-slider-active', {
		slidesPerView: "auto",
		spaceBetween: 30,
		loop: true,
		autoplay:true,
		centeredSlides: true,
		breakpoints: {
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 2,
			},
		},
	});
	// =========================  Home 1 brand Js Start ==============



    // ========================= Home 1 Maquee Js Start===================
    var slider = new Swiper('.maquee-active', {
        slidesPerView: "auto",
        spaceBetween: 40,
        loop: true,
        speed: 15000,
		centeredSlides: true,
        allowTouchMove: false,
        autoplay: {
            delay: 1,
            disableOnInteraction: true,
        },
        breakpoints: {
            320: {
                spaceBetween: 40,
            },
            768: {
                spaceBetween: 20,
            },
            992: {
                spaceBetween: 20,
            },
            1200: {
                spaceBetween: 40,
            },
        },
    });
    // ========================= Home 1 Maquee Js End===================




	
	// ========================= Home 3 About Js Start ==============
    var slider = new Swiper('.about-three-active', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        speed: 3500,
        autoplay: true,
		breakpoints: {
			'1600': {
				slidesPerView:5,
			},
			'1400': {
				slidesPerView:4,
			},
			'1200': {
				slidesPerView:3,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1.5,
			},
			'0': {
				slidesPerView: 1,
			},
		},
    });
    // ========================= Home 3 About Js End ==============




	// =========================  Home 1 brand Js Start ==============
	var slider = new Swiper('.project-three-active', {
		slidesPerView: "auto",
		spaceBetween: 30,
		loop: true,
		autoplay:true,
		centeredSlides: true,
		breakpoints: {
			'1400': {
				slidesPerView: 3.4,
			},
			'1200': {
				slidesPerView: 2.5,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 1.3,
			},
			'576': {
				slidesPerView: 1.3,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	// =========================  Home 1 brand Js Start ==============



	// =========================  Home 3 testimonial Js Start ==============
    var slider = new Swiper('.testimonial-three-active', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        speed: 3500,
        autoplay: true,
        // Navigation arrows
        navigation: {
            nextEl: '.slider-next',
            prevEl: '.slider-prev',
        },
    });
    // =========================  Home 3 testimonial Js End ==============




    // =========================  Home 4 service Js Start ==============
		var slider = new Swiper('.service-four-active', {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,
		breakpoints: {
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1.2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: '.slider-next',
			prevEl: '.slider-prev',
		},
	});
    // =========================  Home 4 service Js End ==============


    // =========================  Home 4 service Js Start ==============
		var slider = new Swiper('.team-four-active', {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,
		breakpoints: {
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: '.slider-next',
			prevEl: '.slider-prev',
		},
	});
    // =========================  Home 4 service Js End ==============



    // =========================  Home 4 service Js Start ==============
		var slider = new Swiper('.project-four-active', {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,
		centeredSlides: true,
		breakpoints: {
			'1600': {
				slidesPerView: 4,
			},
			'1400': {
				slidesPerView: 3.5,
			},
			'1200': {
				slidesPerView: 2.7,
			},
			'992': {
				slidesPerView: 2.2,
			},
			'768': {
				slidesPerView: 1.7,
			},
			'576': {
				slidesPerView: 1.4,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: '.slider-next',
			prevEl: '.slider-prev',
		},
	});
    // =========================  Home 4 service Js End ==============



	// =========================  Home 1 testimonial Js Start ==============
    var slider = new Swiper('.testimonial-four-active', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        speed: 3500,
        autoplay: true,
        // Navigation arrows
        navigation: {
            nextEl: '.slider-next',
            prevEl: '.slider-prev',
        },
    });
    // =========================  Home 1 testimonial Js End ==============




	// =========================  Product Details Js Start ==============
	var swiper = new Swiper(".mySwiper", {
      spaceBetween: 16,
      slidesPerView: 3,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      thumbs: {
        swiper: swiper,
      },
    });
	// =========================  Product Details Js end ==============






	// ========================= Home two testimonial Js Start ==============

	document.addEventListener("DOMContentLoaded", function () {
		const testimonialPage = document.querySelector(".quotes-slide[data-slider-slide-index='1']");
		if (!testimonialPage) return; // safely stop if not found

		testimonialPage.classList.add("quotes-slide--active");

		document.querySelector(".quotes").addEventListener("mouseout", function () {
			document.querySelector(".quotes-slide--active")?.classList.remove("quotes-slide--active");
			document.querySelector(".quotes-slide[data-slider-slide-index='1']")?.classList.add("quotes-slide--active");
		});

		document.querySelectorAll(".quotes-slide").forEach(elem =>
			elem.addEventListener("mouseover", function () {
				document.querySelector(".quotes-slide--active")?.classList.remove("quotes-slide--active");
				this.classList.add("quotes-slide--active");
			})
		);
	});


	// ========================= Home two testimonial Js Start ==============





	// ========================= Home five testimonial Js Start ==============
	var swiper = new Swiper(".testimonial-five-active-one", {
      spaceBetween: 16,
      slidesPerView: 2,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".testimonial-five-active-two", {
      spaceBetween: 10,
      thumbs: {
        swiper: swiper,
      },
	  // Navigation arrows
	  navigation: {
	      nextEl: '.slider-next',
	      prevEl: '.slider-prev',
	  },
	// pagination
    pagination: {
        el: ".testimonial-five-dot",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + '<button>' + (index + 1) + '</button>' + "</span>";
        },
    },
    });
	// ========================= Home five testimonial Js end ==============




})(jQuery);