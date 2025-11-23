(function ($) {
    "use strict";

    // ==========================================
    //      Start Document Ready function
    // ==========================================
    $(document).ready(function () {
        // ============== Mobile Nav Menu Dropdown Js Start =======================
        function toggleSubMenu() {
            if ($(window).width() <= 1199) {
                $(".has-submenu")
                    .off("click")
                    .on("click", function () {
                        $(this)
                            .toggleClass("active")
                            .siblings(".has-submenu")
                            .removeClass("active")
                            .find(".nav-submenu")
                            .slideUp(300);
                        $(this).find(".nav-submenu").stop(true, true).slideToggle(300);
                    });
            } else {
                $(".has-submenu").off("click");
            }
        }
        toggleSubMenu();
        $(window).resize(toggleSubMenu);
        // ============== Mobile Nav Menu Dropdown Js End =======================

        // ===================== Scroll Back to Top Js Start ======================
            function back_to_top() {
                var btn = $('#back_to_top');
                var btn_wrapper = $('.back-to-top-wrapper');
                // Detect scroll
                $(window).on('scroll', function () {
                    if ($(this).scrollTop() > 300) {
                        btn_wrapper.addClass('back-to-top-btn-show');
                    } else {
                        btn_wrapper.removeClass('back-to-top-btn-show');
                    }
                });
                // Smooth scroll to top
                btn.on('click', function (e) {
                    e.preventDefault();
                    $('html, body').animate({ scrollTop: 0 }, 300);
                });
            }
            // Init
            back_to_top();

        // ===================== Scroll Back to Top Js End ======================

        // ========================== add active class to navbar menu current page Js Start =====================
        function dynamicActiveMenuClass(selector) {
            let FileName = window.location.pathname.split("/").reverse()[0];

            // If we are at the root path ("/" or no file name), keep the activePage class on the Home item
            if (FileName === "" || FileName === "index.html") {
                // Keep the activePage class on the Home link
                selector
                    .find("li.nav-menu__item.has-submenu")
                    .eq(0)
                    .addClass("activePage");
            } else {
                // Remove activePage class from all items first
                selector.find("li").removeClass("activePage");

                // Add activePage class to the correct li based on the current URL
                selector.find("li").each(function () {
                    let anchor = $(this).find("a");
                    if ($(anchor).attr("href") == FileName) {
                        $(this).addClass("activePage");
                    }
                });

                // If any li has activePage element, add class to its parent li
                selector.children("li").each(function () {
                    if ($(this).find(".activePage").length) {
                        $(this).addClass("activePage");
                    }
                });
            }
        }

        if ($("ul").length) {
            dynamicActiveMenuClass($("ul"));
        }
        // ========================== add active class to navbar menu current page Js End =====================

        // ========================== Settings Panel Js Start =====================
        $(".settings-button").on("click", function () {
            $(".settings-panel").toggleClass("active");
            $(this).toggleClass("active");
        });

        $(document).on(
            "click",
            ".settings-panel__buttons .settings-panel__button",
            function () {
                $(this).siblings().removeClass("active");
                $(this).addClass("active");
            }
        );

        // Cursor start
        $(".cursor-animate").on("click", function () {
            $("body").removeClass("remove-animate-cursor");
        });

        $(".cursor-default").on("click", function () {
            $("body").addClass("remove-animate-cursor");
        });
        // Cursor end

        // Direction start
        $(".direction-ltr").on("click", function () {
            $("html").attr("dir", "ltr");
        });

        $(".direction-rtl").on("click", function () {
            $("html").attr("dir", "rtl");
        });
        // Direction end
        // ========================== Settings Panel Js End =====================

        // ********************* Toast Notification Js start *********************
        function toastMessage(messageType, messageTitle, messageText, messageIcon) {
            let $toastContainer = $("#toast-container");

            let $toast = $("<div>", {
                class: `toast-message ${messageType}`,
                html: `
                    <div class="toast-message__content">
                        <span class="toast-message__icon">
                        <i class="${messageIcon}"></i>
                        </span>
                        <div class="flex-grow-1">
                        <div class="d-flex align-items-start justify-content-between mb-1">
                            <h6 class="toast-message__title">${messageTitle}</h6>
                            <button type="button" class="toast-message__close">
                            <i class="ph-bold ph-x"></i>
                            </button>
                        </div>
                        <span class="toast-message__text">${messageText}</span>
                        </div>
                    </div>
                    <div class="progress__bar"></div>
                    `,
            });

            $toastContainer.append($toast);

            setTimeout(() => {
                $toast.addClass("active");
            }, 50);

            let totalDuration = 3500;
            let startTime = Date.now();
            let remainingTime = totalDuration;
            let toastTimeout = setTimeout(hideToast, remainingTime);

            function hideToast() {
                $toast.removeClass("active");
                setTimeout(() => {
                    $toast.remove();
                }, 500);
            }

            // Remove Toast on Close Button Click
            $toast.find(".toast-message__close").on("click", function () {
                $toast.removeClass("active");
                setTimeout(() => {
                    $toast.remove();
                }, 500);
            });

            // Pause Timeout on Hover
            $toast.on("mouseenter", function () {
                remainingTime -= Date.now() - startTime;
                clearTimeout(toastTimeout);
            });

            // Resume Timeout on Mouse Leave
            $toast.on("mouseleave", function () {
                startTime = Date.now();
                toastTimeout = setTimeout(hideToast, remainingTime);
            });
        }
        // ********************* Toast Notification Js End *********************




        // ========================= Delete Item Js start ===================
        $(document).on("click", ".delete-button", function () {
            $(this).closest(".delete-item").addClass("d-none");

            toastMessage(
                "danger",
                "Deleted",
                "You deleted successfully!",
                "ph-bold ph-trash"
            );
        });
        // ========================= Delete Item Js End ===================

        // ========================= Form Submit Js Start ===================
        $(document).on("submit", ".form-submit", function (e) {
            e.preventDefault();

            $("input").val("");

            $("textarea").val("");

            toastMessage(
                "success",
                "Success",
                "Form submitted successfully!",
                "ph-fill ph-check-circle"
            );
        });
        // ========================= Form Submit Js End ===================

        // ================== Password Show Hide Js Start ==========
        $(".toggle-password").on("click", function () {
            $(this).toggleClass("active");
            var input = $($(this).attr("id"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
                $(this).removeClass("ph-bold ph-eye-closed");
                $(this).addClass("ph-bold ph-eye");
            } else {
                input.attr("type", "password");
                $(this).addClass("ph-bold ph-eye-closed");
            }
        });
        // ========================= Password Show Hide Js End ===========================

        // ========================= AOS Js Start ===========================
        AOS.init({
            once: true,
        });
        // ========================= AOS Js End ===========================

    });
    // ==========================================
    //      End Document Ready function
    // ==========================================






    // ========================= magnific Popup Js Start =====================
    $('.open-popup').magnificPopup({
        type: 'iframe',
        removalDelay: 300,
        mainClass: 'mfp-fade',
    });
    // ========================= magnific Popup Js End =====================



    // ========================== Add Attribute For Bg Image Js Start ====================
    $(".bg-img").css('background', function () {
        var bg = ('url(' + $(this).data("background-image") + ')');
        return bg;
    });
    // ========================== Add Attribute For Bg Image Js End =====================  



    // ========================== Odometer Js Start ====================
    if ($(".odometer").length > 0) {
        $(".odometer").each(function () {
            var $this = $(this);

            $this.waypoint(
            function () {
                var countNumber = $this.attr("data-count");
                $this.html(countNumber);
            },
            {
                offset: "100%",
                triggerOnce: true
            }
            );
        });
    }
    // ========================== Odometer Js End ====================



    // =========================  Search Bar 9 Js Start ==============
    $(".open-search").on("click", function () {
        $(".search_popup").addClass("search-opened");
        $(".search-popup-overlay").addClass("search-popup-overlay-open");
    });
    $(".search_close_btn").on("click", function () {
        $(".search_popup").removeClass("search-opened");
        $(".search-popup-overlay").removeClass("search-popup-overlay-open");
    });
    $(".search-popup-overlay").on("click", function () {
        $(".search_popup").removeClass("search-opened");
        $(this).removeClass("search-popup-overlay-open");
    });
    // =========================  Search Bar 9 Js End ==============




    // ========================= Preloader Js Start =====================
    var percentage = 0;
      var LoadingCounter = setInterval(function () {
        if (percentage <= 100) {
          // $('#loading-screen ').css('opacity', (100 - percentage));
          $("#loading-screen .loading-counter").text(percentage + "%");
          $("#loading-screen .bar").css("width", (100 - percentage) / 2 + "%");
          $("#loading-screen .progress-line").css("transform", "scale(" + percentage / 100 + ")");
          percentage++;
        } else {
          $("#loading-screen").fadeOut(500);
          setTimeout(() => {
            $("#loading-screen").remove();
          }, 500);
          clearInterval(LoadingCounter);
        }
      }, 10);
    // ========================= Preloader Js End =====================


      
    // ========================= Header Sticky Js Start ==============
    $(window).on('scroll', function() {
      if ($(window).scrollTop() >= 260) {
        $('.header').addClass('fixed-header');
      }
      else {
          $('.header').removeClass('fixed-header');
      }
    });
    // ========================= Preloader Js End=====================



    // ========================= Offcanvas Sidebar Js Start ==============
    $(".tw-menu-bar").on("click", function () {
        $(".twoffcanvas").addClass("opened");
        $(".body-overlay").addClass("apply");
    });
    $(".close-btn").on("click", function () {
        $(".twoffcanvas").removeClass("opened");
        $(".body-overlay").removeClass("apply");
    });
    $(".body-overlay").on("click", function () {
        $(".twoffcanvas").removeClass("opened");
        $(".body-overlay").removeClass("apply");
    });
    // ========================= Offcanvas Sidebar Js End===================



    // ================================ Floating Progress js start =================================
    const progressContainers = document.querySelectorAll('.progress-container');
    function setPercentage(progressContainer) {
        const percentage = progressContainer.getAttribute('data-percentage') + '%';
        const progressEl = progressContainer.querySelector('.progress');
        const percentageEl = progressContainer.querySelector('.percentage');
        progressEl.style.width = percentage;
        percentageEl.innerText = percentage;
        percentageEl.style.insetInlineStart = percentage;
    }
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progressContainer = entry.target;
                setPercentage(progressContainer);
                progressContainer.querySelector('.progress').classList.remove('active');
                progressContainer.querySelector('.percentage').classList.remove('active');
                observer.unobserve(progressContainer);
            }
        });
    }, {
        threshold: 0.5
    });
    progressContainers.forEach(progressContainer => {
        observer.observe(progressContainer);
    });
    // ================================ Floating Progress js End =================================




    // =========================  knob progress Js start ==============
    if (typeof ($.fn.knob) !== 'undefined') {
        $('.knob').each(function () {
            var $this = $(this);
            var knobVal = $this.attr('data-rel');

            $this.knob({
                'draw': function () {
                    $(this.i).val(this.cv + '%');
                }
            });

            // Use GSAP ScrollTrigger
            gsap.fromTo($({
                val: 0
            }), {
                val: 0
            }, {
                val: knobVal,
                duration: 2,
                ease: "power1.out",
                scrollTrigger: {
                    trigger: $this,
                    start: "top 80%", // when element top is 80% from top of viewport
                    once: true, // trigger only once
                },
                onUpdate: function () {
                    $this.val(Math.ceil(this.targets()[0].val)).trigger('change');
                }
            });
        });
    }

    // =========================  knob progress Js end ==============


    // =========================  BeforeAfter Js Start ==============
	if ($(".before-after-wrapper").length > 0) {
		$(".before-after-wrapper").beforeAfter({
			movable: true,
			clickMove: true,
			position: 50,
			separatorColor: "#fafafa",
			bulletColor: "#fafafa",
			onMoveStart: function (e) {
				console.log(event.target);
			},
			onMoving: function () {
				console.log(event.target);
			},
			onMoveEnd: function () {
				console.log(event.target);
			},
		});
	}
    // =========================  BeforeAfter Js End ==============

    

    // =========================  niceSelect Js Start ==============
    $(document).ready(function() {
        $('select').niceSelect();
    });
    // =========================  niceSelect Js Start ==============





    // =========================  Pricing Js Start ==============
    function tabtable_active() {
        var e = document.getElementById("filt-monthly"),
            d = document.getElementById("filt-yearly"),
            t = document.getElementById("switcher"),
            m = document.getElementById("monthly"),
            y = document.getElementById("hourly");

        e.addEventListener("click", function () {
            t.checked = false;
            e.classList.add("pricing-ip-active");
            d.classList.remove("pricing-ip-active");
            m.classList.remove("hide");
            y.classList.add("hide");
        });
        d.addEventListener("click", function () {
            t.checked = true;
            d.classList.add("pricing-ip-active");
            e.classList.remove("pricing-ip-active");
            m.classList.add("hide");
            y.classList.remove("hide");
        });
        t.addEventListener("click", function () {
            d.classList.toggle("pricing-ip-active");
            e.classList.toggle("pricing-ip-active");
            m.classList.toggle("hide");
            y.classList.toggle("hide");
        })
    }
    if ($('#filt-monthly').length > 0) {
        tabtable_active();
    }
    // =========================  Pricing Js end ==============\\


    // =========================  Mouse Custom Cursor Js Start ==============\\
    function itCursor() {
      var myCursor = jQuery(".mouseCursor");
      if (myCursor.length) {
        if ($("body")) {
          const e = document.querySelector(".cursor-inner"),
            t = document.querySelector(".cursor-outer");
          let n,
            i = 0,
            o = !1;
          (window.onmousemove = function (s) {
            o ||
              (t.style.transform =
                "translate(" + s.clientX + "px, " + s.clientY + "px)"),
              (e.style.transform =
                "translate(" + s.clientX + "px, " + s.clientY + "px)"),
              (n = s.clientY),
              (i = s.clientX);
          }),
            $("body").on("mouseenter", "button, a, .cursor-pointer", function () {
              e.classList.add("active"), t.classList.add("active");
            }),
            $("body").on("mouseleave", "button, a, .cursor-pointer", function () {
              ($(this).is("a", "button") &&
                $(this).closest(".cursor-pointer").length) ||
                (e.classList.remove("active"),
                  t.classList.remove("active"));
            }),
            (e.style.visibility = "visible"),
            (t.style.visibility = "visible");
        }
      }
    }
    itCursor();
    $(".tp-cursor-point-area").on("mouseenter", function () {
      $(".mouseCursor").addClass("cursor-big");
    });
    $(".tp-cursor-point-area").on("mouseleave", function () {
      $(".mouseCursor").removeClass("cursor-big");
    });
    $(".tp-cursor-point-area-2").on("mouseenter", function () {
      $(".cursor-inner").addClass("active");
    });
    $(".tp-cursor-point-area-2").on("mouseleave", function () {
      $(".cursor-inner").removeClass("active");
    });
    // =========================  Mouse Custom Cursor Js Start ==============\\




    // ========================= Ecommerce Cart Js Js Start ==============\\
	function tw_ecommerce() {
        $('.tw-cart-minus').on('click', function () {
			var $input = $(this).parent().find('input');
			var count = Number($input.val()) - 1;
			count = count < 1 ? 1 : count;
			$input.val(count);
			$input.change();
			return false;
		});
		$('.tw-cart-plus').on('click', function () {
			var $input = $(this).parent().find('input');
			$input.val(Number($input.val()) + 1);
			$input.change();
			return false;
		});
		$("#slider-range").slider({
			range: true,
			min: 0,
			max: 500,
			values: [75, 300],
			slide: function (event, ui) {
				$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
			}
		});
		$("#amount").val("$" + $("#slider-range").slider("values", 0) +
			" - $" + $("#slider-range").slider("values", 1));

        
		$('.checkout-payment-item label').on('click', function () {
			$(this).siblings('.checkout-payment-desc').slideToggle(400);
			
		});

		// Show Login Toggle Js
		$('.checkout-login-form-reveal-btn').on('click', function () {
			$('#ReturnCustomerLoginForm').slideToggle(400);
		});


		// 18. Show Coupon Toggle Js
		$('.checkout-coupon-form-reveal-btn').on('click', function () {
			$('#CheckoutCouponForm').slideToggle(400);
		});
	}
	tw_ecommerce();
    const box = document.querySelector('.cart-ip-wrapper');
    if (box) { 
        box.style.overflowX = 'auto';
        box.style.whiteSpace = 'nowrap';
    }
    // ========================= Ecommerce Cart Js Js Start ==============\\



})(jQuery);