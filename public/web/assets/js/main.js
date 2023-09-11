/***************************************************
==================== JS INDEX ======================
****************************************************
01. PreLoader Js


****************************************************/

(function ($) {
	"use strict";

	var windowOn = $(window);
	////////////////////////////////////////////////////
	// 01. PreLoader Js
	windowOn.on('load', function () {
		$("#loading").fadeOut(500);
	});


	// last child menu
	$('.wp-menu nav > ul > li').slice(-4).addClass('menu-last');


	////////////////////////////////////////////////////
	// 03. Offcanvas Js
	$(".tp-menu-bar").on("click", function () {
		$(".tpoffcanvas").addClass("opened");
		$(".body-overlay").addClass("apply");
	});
	$(".close-btn").on("click", function () {
		$(".tpoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});
	$(".body-overlay").on("click", function () {
		$(".tpoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});


	///////////////////////////////////////////////////
	// 02. SubMenu Dropdown Toggle
	var header_icon =
		`<span class="header-icon">
		<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M6.04088 0L0.535156 4.125V11H4.26484V8.59381C4.26484 7.64165 5.05698 6.87506 6.04088 6.87506C7.02477 6.87506 7.81692 7.64165 7.81692 8.59381V11H11.5466V4.125L6.04088 0Z" fill="#FFB302"/></svg>                                
	</span>`;
	$(header_icon).insertBefore('.menu-icon nav ul .menu-icon-2');
	////////////////////////////////////////////////////
	// 21. Password Toggle Js
	if ($('#password-show-toggle').length > 0) {
		var btn = document.getElementById('password-show-toggle');

		btn.addEventListener('click', function (e) {

			var inputType = document.getElementById('tp_password');
			var openEye = document.getElementById('open-eye');
			var closeEye = document.getElementById('close-eye');

			if (inputType.type === "password") {
				inputType.type = "text";
				openEye.style.display = 'block';
				closeEye.style.display = 'none';
			} else {
				inputType.type = "password";
				openEye.style.display = 'none';
				closeEye.style.display = 'block';
			}
		});
	}

	if ($('.tp-header-height').length > 0) {
		var headerHeight = document.querySelector(".tp-header-height");
		var setHeaderHeight = headerHeight.offsetHeight;

		$(".tp-header-height").each(function () {
			$(this).css({
				'height': setHeaderHeight + 'px'
			});
		});
	}
	// Jquery Appear raidal
	if (typeof ($.fn.knob) != 'undefined') {
		$('.knob').each(function () {
			var $this = $(this),
				knobVal = $this.attr('data-rel');

			$this.knob({
				'draw': function () {
					$(this.i).val(this.cv + '%')
				}
			});

			$this.appear(function () {
				$({
					value: 0
				}).animate({
					value: knobVal
				}, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.val(Math.ceil(this.value)).trigger('change');
					}
				});
			}, {
				accX: 0,
				accY: -150,
			});
		});
	}

	if ($('.tp-main-menu-content').length && $('.tp-main-menu-mobile').length) {
		let navContent = document.querySelector(".tp-main-menu-content").outerHTML;
		let mobileNavContainer = document.querySelector(".tp-main-menu-mobile");
		mobileNavContainer.innerHTML = navContent;


		let arrow = $(".tp-main-menu-mobile .has-dropdown > a");

		arrow.each(function () {
			let self = $(this);
			let arrowBtn = document.createElement("BUTTON");
			arrowBtn.classList.add("dropdown-toggle-btn");
			arrowBtn.innerHTML = "<i class='fal fa-angle-right'></i>";

			self.append(function () {
				return arrowBtn;
			});

			self.find("button").on("click", function (e) {
				e.preventDefault();
				let self = $(this);
				self.toggleClass("dropdown-opened");
				self.parent().toggleClass("expanded");
				self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
				self.parent().parent().children(".tp-submenu").slideToggle();
			});

		});
	}

	////////////////////////////////////////////////////
	// 04. Body overlay Js
	$(".body-overlay").on("click", function () {
		$(".offcanvas__area").removeClass("offcanvas-opened");
		$(".cartmini__area").removeClass("cartmini-opened");
		$(".body-overlay").removeClass("opened");
	});


	$(".cartmini-open-btn").on("click", function () {
		$(".cartmini__area").addClass("cartmini-opened");
		$(".body-overlay").addClass("opened");
	});


	$(".cartmini-close-btn").on("click", function () {
		$(".cartmini__area").removeClass("cartmini-opened");
		$(".body-overlay").removeClass("opened");
	});



	////////////////////////////////////////////////////
	// 06. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 100) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});



	////////////////////////////////////////////////////
	// . ui slider Js

	/* Price filter active */

	if ($("#slider-range").length) {

		$("#slider-range").slider({

			range: true,

			min: 0,

			max: 500,

			values: [0, 300],

			slide: function (event, ui) {

				$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);

			}

		});

		$("#amount").val("$" + $("#slider-range").slider("values", 0) +

			" - $" + $("#slider-range").slider("values", 1));

		$('#filter-btn').on('click', function () {

			$('.filter-widget').slideToggle(1000);

		});

	}

	////////////////////////////////////////////////////
	// 03. Search Js
	$(".search-open-btn").on("click", function () {
		$(".search__popup").addClass("search-opened");
		$(".search-popup-overlay").addClass("search-popup-overlay-open");
	});


	$(".search-close-btn").on("click", function () {
		$(".search__popup").removeClass("search-opened");
		$(".search-popup-overlay").removeClass("search-popup-overlay-open");
	});

	////////////////////////////////////////////////////
	// 07. Data CSS Js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	// settings open btn
	$(".tp-theme-settings-open-btn").on("click", function () {
		$(".tp-theme-settings-area").toggleClass("settings-opened");
	});


	////////////////////////////////////////////////////
	// 07. Nice Select Js
	$('.active-class-select').niceSelect();

	////////////////////////////////////////////////////
	// 07. Smooth Scroll Js
	function smoothSctoll() {
		$('.smooth a').on('click', function (event) {
			var target = $(this.getAttribute('href'));
			if (target.length) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top - 120
				}, 1500);
			}
		});
	}
	smoothSctoll();

	function back_to_top() {
		var btn = $('#back_to_top');
		var btn_wrapper = $('.back-to-top-wrapper');

		windowOn.scroll(function () {
			if (windowOn.scrollTop() > 300) {
				btn_wrapper.addClass('back-to-top-btn-show');
			} else {
				btn_wrapper.removeClass('back-to-top-btn-show');
			}
		});

		btn.on('click', function (e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: 0 }, '300');
		});
	}
	back_to_top();

	var tp_rtl = localStorage.getItem('tp_dir');
	let rtl_setting = tp_rtl == 'rtl' ? true : false;

	////////////////////////////////////////////////////
	// 08. slider__active Slider Js
	if ($(".slider__active").length > 0) {
		let sliderActive1 = ".slider__active";
		let sliderInit1 = new Swiper(sliderActive1, {
			slidesPerView: 1,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			rtl: rtl_setting,
			effect: 'fade',

			autoplay: {
				delay: 5000000,
			},

			// If we need pagination
			pagination: {
				el: ".main-slider-dot",
				dynamicBullets: false,
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: ".slider-button-next",
				prevEl: ".slider-button-prev",
			},

			a11y: false,
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + " [data-animation]").each(function () {
					let anim = $(this).data("animation");
					let delay = $(this).data("delay");
					let duration = $(this).data("duration");

					$(this)
						.removeClass("anim" + anim)
						.addClass(anim + " animated")
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration,
						})
						.one(
							"webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
							function () {
								$(this).removeClass(anim + " animated");
							}
						);
				});
			};
			animated();
			// Make animated when slide change
			init.on("slideChange", function () {
				$(sliderActive1 + " [data-animation]").removeClass("animated");
			});
			init.on("slideChange", animated);
		}

		animated_swiper(sliderActive1, sliderInit1);
	}


	var slider = new Swiper('.active-class', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		rtl: rtl_setting,
		pagination: {
			el: ".testimonial-pagination-6",
			clickable: true,
			renderBullet: function (index, className) {
				return '<span class="' + className + '">' + '<button>' + (index + 1) + '</button>' + "</span>";
			},
		},
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
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	var postboxSlider = new Swiper('.postbox__slider', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		rtl: rtl_setting,
		autoplay: {
			delay: 3000,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".postbox-slider-button-next",
			prevEl: ".postbox-slider-button-prev",
		},
		breakpoints: {
			'1200': {
				slidesPerView: 1,
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
		},
	});

	////////////////////////////////////////////////////
	// 13. Masonary Js
	$('.grid').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: '.grid-item',
			}
		});


		// filter items on button click
		$('.masonary-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});

		//for menu active class
		$('.masonary-menu button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});

	/* magnificPopup img view */
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	/* magnificPopup video view */
	$(".popup-video").magnificPopup({
		type: "iframe",
	});

	////////////////////////////////////////////////////
	// 14. Wow Js
	new WOW().init();

	function tp_ecommerce() {
		$('.tp-cart-minus').on('click', function () {
			var $input = $(this).parent().find('input');
			var count = Number($input.val()) - 1;
			count = count < 1 ? 1 : count;
			$input.val(count);
			$input.change();
			return false;
		});

		$('.tp-cart-plus').on('click', function () {
			var $input = $(this).parent().find('input');
			$input.val(Number($input.val()) + 1);
			$input.change();
			return false;
		});


		////////////////////////////////////////////////////
		// 17. Show Login Toggle Js
		$('#showlogin').on('click', function () {
			$('#checkout-login').slideToggle(900);
		});

		////////////////////////////////////////////////////
		// 18. Show Coupon Toggle Js
		$('#showcoupon').on('click', function () {
			$('#checkout_coupon').slideToggle(900);
		});

		////////////////////////////////////////////////////
		// 19. Create An Account Toggle Js
		$('#cbox').on('click', function () {
			$('#cbox_info').slideToggle(900);
		});

		////////////////////////////////////////////////////
		// 20. Shipping Box Toggle Js
		$('#ship-box').on('click', function () {
			$('#ship-box-info').slideToggle(1000);
		});
	}
	tp_ecommerce();



	////////////////////////////////////////////////////
	// 21. Counter Js
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});

	// itCursor();
	// hero-active active
	if ($('.hero-active').length > 0) {
		var hero_slider = new Swiper('.hero-active', {
			slidesPerView: 1,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			effect: 'fade',
			centeredSlides: true,
			navigation: {
				nextEl: ".hero-button-next",
				prevEl: ".hero-button-prev",
			},
			breakpoints: {
				'991': {

				},
				'768': {
					slidesPerView: 1,
				},
				'767': {
					slidesPerView: 1,
				},
				'576': {
					slidesPerView: 1,
				},
				'0': {
					slidesPerView: 1,
				},
			},
		});
	}
	// hero-active active
	if ($('.hero-active-2').length > 0) {
		var hero_slider_2 = new Swiper('.hero-active-2', {
			slidesPerView: 1,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: ".tpslider__dots",
				clickable: true,
			},
			effect: 'fade',
			centeredSlides: true,
			breakpoints: {
				'991': {

				},
				'768': {
					slidesPerView: 1,
				},
				'767': {
					slidesPerView: 1,
				},
				'576': {
					slidesPerView: 1,
				},
				'0': {
					slidesPerView: 1,
				},
				pagination: {
					el: ".testimonial-slider-dots",
					clickable: true,
				},
			},
		});
	}
	// testimonial active
	var testimonials_swiper = new Swiper('.testimonials-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 2,
		spaceBetween: 30,
		pagination: {
			el: ".testimonial-slider-dots",
			clickable: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			'1199': {
				slidesPerView: 2,
				spaceBetween: 50,
			},
			'768': {
				slidesPerView: 2,
			},
			'600': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			nextEl: ".testimonial-button-next",
			prevEl: ".testimonial-button-prev",
		},
	});
	// testimonial 2 active
	var testimonials_2_swiper = new Swiper('.testimonials-2-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 3,
		spaceBetween: 30,
		pagination: {
			el: ".testimonial-2-slider-dots",
			clickable: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 3,
				spaceBetween: 30,
			},
			'1199': {
				slidesPerView: 3,
				spaceBetween: 50,
			},
			'768': {
				slidesPerView: 2,
			},
			'767': {
				slidesPerView: 1,
				spaceBetween: 15,
			},
			'0': {
				slidesPerView: 1,
				spaceBetween: 15,
			},
		},
	});
	// brand active
	var brand_swiper = new Swiper('.brand-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 5,
		spaceBetween: 30,
		breakpoints: {
			'1200': {
				slidesPerView: 4,
			},

			'1199': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 4,
			},
			'767': {
				slidesPerView: 4,
			},
			'576': {
				slidesPerView: 3,
			},
			'0': {
				slidesPerView: 2,
			},
			pagination: {
				el: ".testimonial-slider-dots",
				clickable: true,
			},
		},
		navigation: {
			nextEl: '.test-n',
			prevEl: '.test-p',
		},

	});
	// brand 2 active
	var brand_2_swiper = new Swiper('.brand-2-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 5,
		spaceBetween: 30,
		breakpoints: {
			'1200': {
				slidesPerView: 4,
			},

			'1199': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'767': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},

	});
	// project active
	var project_swiper = new Swiper('.project-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 4,
		spaceBetween: 0,
		pagination: {
			el: ".project-slider-dots",
			clickable: true,
		},
		breakpoints: {
			'1402': {
				slidesPerView: 4,
				spaceBetween: 0,
			},
			'1401': {
				slidesPerView: 3,
				spaceBetween: 0,
			},
			'1199': {
				slidesPerView: 3,
				spaceBetween: 0,
			},
			'768': {
				slidesPerView: 2,
			},
			'767': {
				slidesPerView: 2,
				spaceBetween: 0,
			},
			'0': {
				slidesPerView: 1,
				spaceBetween: 0,
			},
		},
	});
	// team active
	var team_swiper = new Swiper('.team-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 4,
		spaceBetween: 0,
		pagination: {
			el: ".team-slider-dots",
			clickable: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 4,
				spaceBetween: 0,
			},
			'1199': {
				slidesPerView: 4,
				spaceBetween: 0,
			},
			'768': {
				slidesPerView: 2,
			},
			'767': {
				slidesPerView: 2,
				spaceBetween: 0,
			},
			'0': {
				slidesPerView: 1,
				spaceBetween: 0,
			},
		},
		navigation: {
			nextEl: ".team-button-next",
			prevEl: ".team-button-prev",
		},
	});
	// team 3 active
	var team_3_swiper = new Swiper('.team-3-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 4,
		spaceBetween: 0,
		breakpoints: {
			'1200': {
				slidesPerView: 4,
				spaceBetween: 0,
			},
			'1199': {
				slidesPerView: 4,
				spaceBetween: 0,
			},
			'768': {
				slidesPerView: 1,
			},
			'767': {
				slidesPerView: 1,
				spaceBetween: 0,
			},
			'0': {
				slidesPerView: 1,
				spaceBetween: 0,
			},
		},
	});
	// process active
	var process_swiper = new Swiper('.process-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 3,
		spaceBetween: 0,
		padding: '25%',
		centeredSlides: true,
		speed: 1000,
		autoplay: true,
		pagination: {
			el: ".process-slider-dots",
			clickable: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 3,
				spaceBetween: 0,
			},
			'1199': {
				slidesPerView: 3,
				spaceBetween: 0,
			},
			'768': {
				slidesPerView: 3,
			},
			'767': {
				slidesPerView: 3,
				spaceBetween: 0,
			},
			'0': {
				slidesPerView: 2,
				spaceBetween: 0,
			},
		},
		navigation: {
			nextEl: ".process-button-next",
			prevEl: ".process-button-prev",
		},
	});

	////brand-slider
	var testimonial = new Swiper('.postbox__thumb-slider-active', {
		slidesPerView: 1,
		loop: true,
		autoplay: true,
		// effect:'fade',
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
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
		},
		// Navigation arrows
		navigation: {
			nextEl: '.postbox-arrow-next',
			prevEl: '.postbox-arrow-prev',
		},
		a11y: false,
	});

	// jarallax
	if ($('.jarallax').length > 0) {
		$('.jarallax').jarallax({
			speed: 0.2,
			imgWidth: 1366,
			imgHeight: 768,
		});
	};

})(jQuery);