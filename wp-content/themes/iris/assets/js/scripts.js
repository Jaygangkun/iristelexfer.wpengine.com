(function($, window, document) {
	
	$(document).on('change', '[name="i_am"]', function(){
		var val = $(this).val().toLowerCase();
		var hbspt_place_for_warning = $(this).closest('form').find('.actions');
		// var hbspt_place_for_warning = $(this).closest('.hs-form-field');

		var hbspt_warning = '<p class="hbspt-form-iam-warning">';
				hbspt_warning += 'We are a not a direct-to-consumer service. Please reach out to your local mental health treatment facility or visit ';
					hbspt_warning += '<a href="https://www.mhanational.org/finding-help" target="_blank" style="color:#f434a6">Mental Health America’s website</a> ';
				hbspt_warning += 'to find help.';
			hbspt_warning += '</p>';
		if (val == 'a patient looking to see a healthcare provider' && hbspt_place_for_warning.find('.hbspt-form-iam-warning').length < 1) {
			hbspt_place_for_warning.append(hbspt_warning);
		} else {
			hbspt_place_for_warning.find('.hbspt-form-iam-warning').remove();
		}
	});
	// determine navbar color
	const darkNav = document.querySelector("main").firstElementChild.classList.contains("dark");
	if (darkNav) {
		$("#header, #mobile-header").addClass("dark");
	}

	// determine centered position for submenus
	let previousId;
	$(".menu > .no-link > a").mouseenter(function() {
		const id = $(this).parent().attr("id");
		if (id != previousId) {

			gsap.to("#header .sub-menu", 0.4, {autoAlpha: 0});

			$subMenu = $(this).next(".sub-menu");
			$menuWidth = $(this).width();
			$subMenuWidth = $subMenu.width() + 80; //.width() ignores padding
			$offset = ($subMenuWidth - $menuWidth) / 2 + $menuWidth;

			const pos = "translateX(calc(-100% + " + $offset + "px))";
			$subMenu.css("transform", pos);

			previousId = id;
			gsap.fromTo($subMenu, 0.4, {y: 25, autoAlpha: 0}, {y: 0, autoAlpha: 1});

		}
	});

	// remove href attributes from menu items with submenus
	const parentLinks = document.querySelectorAll(".no-link");
	parentLinks.forEach((element) => {
		element.firstElementChild.removeAttribute("href");
	});

	// close any open submenus when the user clicks outside of them
	$(document).on("click", function(e) {
		const classNames = ["no-link", "sub-menu", "menu-item-description"];

		if (classNames.some(className => e.target.classList.contains(className))
			|| e.target.parentElement.classList.contains("no-link")) {

		} else {
			gsap.to("#header .sub-menu", 0.4, {autoAlpha: 0, onComplete: function() {
				previousId = null;
			}});
		}
	});

	$("#toggle").click(function() {
		$mobileMenu = $("#mobile-menu");
		$mobileMenu.addClass("visible");
		gsap.to($mobileMenu, 0.3, {autoAlpha: 1});
	});

	$("#mobile-menu .menu-close").click(function() {
		$mobileMenu = $("#mobile-menu");
		$mobileMenu.addClass("visible");
		gsap.to($mobileMenu, 0.3, {autoAlpha: 0});
	});

	$("#mobile-menu .no-link").click(function() {
		const $subMenu = $(this).find(".sub-menu");
		const height = $subMenu[0].scrollHeight;

		if ($subMenu.hasClass("visible")) {
			gsap.to($subMenu, 0.2, {maxHeight: 0, onComplete: function() {
				$subMenu.removeClass("visible");
			}})
		} else {
			gsap.to($subMenu, 0.4, {maxHeight: height, onComplete: function() {
				$subMenu.addClass("visible");
			}})
		}
	});

	// homepage hero animation
	const home = document.querySelector(".home.intro");
	if (home) {

		gsap.defaults({ ease: "none" });

		const vw = 960;
		const vh = 445;
		let masterTl = null;
		let firstRun = true;

		$(".cloud").each(function(i, cloud) {
			animateCloud(cloud);
		});

		firstRun = false;
		// gsap.set(".hero-img", { attr: { viewBox: [0, 0, vw, vh].join(" ") }});

		function animateCloud(cloud) {

			const dur  = random(25, 50);
			const delay = random(3);
			const width = cloud.getBoundingClientRect().width * 2; // multiplier = maximum scale
			const dist  = vw + width;  
			const speed = dist / dur;
			const fade  = width / speed;

			gsap.set(cloud, {
				autoAlpha: 0,
				scale: random(1, 2),
				x: -width,
				// y: random(180, vh - 180)
			});

			var tl = gsap.timeline({
				onComplete: animateCloud,
				onCompleteParams: [cloud]
			});

			tl.add("start", delay)
				.to(cloud, dur, { x: dist }, "start")
				.to(cloud, fade, { autoAlpha: 1 }, "start+=" + fade / 2)
				.to(cloud, fade, { autoAlpha: 0 }, "-=" + fade * 2.5);

			if (firstRun) tl.progress(random(0.9));
		}

		function random(min, max) {
			if (max == null) { max = min; min = 0; }
			return Math.random() * (max - min) + min;
		}

		const float = gsap.timeline()
				.to(".zoom-left", {duration: 2.5, y: 15, ease: "power1.inOut", yoyo: true, repeat: -1 })
				.to(".zoom-right", {duration: 2.5, y: -15, ease: "power1.inOut", yoyo: true, repeat: -1 }, "-=2.5");

		const svgAnimation = document.querySelector('.hero-img');
		let svgObserver = new IntersectionObserver((entries, observer) => { 
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					if (masterTl) {
						masterTl.play();
						float.play();
					}
				} else {
					masterTl = gsap.exportRoot();
					masterTl.pause();
					float.pause();
				}
			});
		});
		svgObserver.observe(svgAnimation);

	}

	// about us 'our vision' parallax
	const vision = document.querySelector(".our-vision");
	if (vision) {

		let rotate = 0;
		let lastScroll = $(window).scrollTop();
		let direction = 0;

		function parallaxScroll() {
			let scrolled = $(window).scrollTop();
			let blue = scrolled / 5 * 1 - 275;
			let purp = scrolled / 10 * -1 + 125;
			let pink = scrolled / 15 * 1 - 100;

			if (scrolled > lastScroll) {
				rotate += 1;
			} else {
				rotate -= 1;
			}

			gsap.defaults({ease: "power1.out" })
			gsap.to('.blob.blue', 1.5, {y: blue, rotate: rotate, transformOrigin: "center center"});
			gsap.to('.blob.purple', 1.5, {y: purp, rotate: rotate, transformOrigin: "center center"});
			gsap.to('.blob.pink', 1.5, {y: pink, rotate: rotate * -1, transformOrigin: "center center"});

			lastScroll = scrolled;
		}

		window.addEventListener('scroll', parallaxScroll);

	}

	const map = document.querySelector(".map");
	if (map) {
		$(window).on('load', function(){
			setTimeout(function(){
				$('.map-loader').remove();
			}, 2000);
		});

		let states = [];
		$.ajax('/wp-json/wp/v2/states?_embed=1&per_page=99', {
			success: function(data) {
				data.forEach(getStateData);
			}
		});
		function getStateData(data) {
			const regArray = data._embedded['wp:term'][0];
			const regulations = [];
			const pageLink = [];

			for (let i = 0; i < regArray.length; i++) {
				regulations.push(regArray[i].name);
			}

			const state = {
				state: data.slug,
				regulations: regulations,
				link: data.link
			}

			states.push(state);
		}
		function getRegulations(state, arr) {
			for (let i = 0; i < arr.length; i++) {
				if (arr[i].state === state) {
					return arr[i].regulations;
				}
			}
		}
		function getLink(state, arr) {
			for (let i = 0; i < arr.length; i++) {
				if (arr[i].state === state) {
					return arr[i].link;
				}
			}
		}

		// click handlers
		$("#states-select").change(getMapId);
		$(".state").click(function() {
			const id = $(this).attr("id");
			parseState(id);
			syncMapSelection(id);
			$("#states-select option[value=" + id + "]").prop("selected", true);
			var scroll_to = $("#states-select").closest('.white-block').offset().top;

			$("html, body").animate(
				{
					scrollTop: scroll_to - 15
				},
				1000
			);
		});

		// keep dropdown and map in sync
		function getMapId() {
			const id = $("#states-select").val();
			parseState(id);
			syncMapSelection(id);
		}
		function parseState(id) {
			const state = $("#states-select option[value=" + id + "]").text();
			const parsed = state.replace(/\s+/g, '-').toLowerCase();
			const regulations = getRegulations(parsed, states);
			const link = getLink(parsed, states);
			$(".fetched").fadeIn();
			$(".animation-container").fadeOut(function() {
				buildMapHtml(state, regulations, link);	
			});
			
		}
		function syncMapSelection(id) {
			$(".state").removeClass("active");
			$("#" + id).addClass("active");
		}
		// output to DOM
		function buildMapHtml(state, regulations, link) {
			$(".fetched h2").text(state);
			if (regulations) {
				$(".no-data").hide();
				$(".has-data").show();
				$(".fetched .icon").removeClass("check");
				$(".fetched .regulation").each(function() {
					const regulation = $(this).text();
					if (regulations.includes(regulation)) {
						$(this).prev().addClass("check");
					}
				});
				$(".fetched .link").attr("href", link);
			} else {
				$(".has-data").hide();
				$(".no-data").show();
			}
			$(".animation-container").fadeIn();
		}

	}

	// accordions
	const acc = document.getElementsByClassName("definition");
	for (let i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			const panel = this.querySelectorAll(".panel")[0];
			
			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
				panel.style.paddingTop = "0";
			} else {
				panel.style.maxHeight = panel.scrollHeight + 32 + "px";
				panel.style.paddingTop = "32px";
			}
		});
	}

	const testimonials = document.querySelector('.glide.testimonials');
	if (testimonials) {
		const glide = new Glide(testimonials, {
			type: 'carousel',
			startAt: 0,
			perView: 1,
			animationDuration: 0,
			swipeThreshold: false,
			dragThreshold: false,
			// rewind: true,
		});

		const $quote = $(".glide__slide .glide__slide__text");
		const $image = $(".glide__slide .glide__slide__image");
		const total = $quote.length;
		const ease = "power1.inOut";

		$(".testimonials .glide__arrow--right").click(function() {

			//if (glide.index < (total - 1)) { // This condition was preventing slider from looping

				const tl = gsap.timeline()
					.to($quote, 0.4, {x: -50, autoAlpha: 0, ease: ease})
					.to($image, 0.4, {y: -100, autoAlpha: 0, ease: ease}, "-=0.4")
					.set($quote, {x: 50})
					.set($image, {x: 50, y: 50, onComplete: function() { glide.go('>'); }})
					.to($quote, 0.4, {x: 0, autoAlpha: 1, ease: ease})
					.to($image, 0.4, {x: 0, y: 0, autoAlpha: 1, ease: ease}, "-=0.4");
			//}

		});

		$(".testimonials .glide__arrow--left").click(function() {

			//if (glide.index > 0) { // This condition was preventing slider from looping

				const tl = gsap.timeline()
					.to($quote, 0.4, {x: -50, autoAlpha: 0, ease: ease})
					.to($image, 0.4, {y: -100, autoAlpha: 0, ease: ease}, "-=0.4")
					.set($quote, {x: 50})
					.set($image, {x: 50, y: 50, onComplete: function() { glide.go('<'); }})
					.to($quote, 0.4, {x: 0, autoAlpha: 1, ease: ease})
					.to($image, 0.4, {x: 0, y: 0, autoAlpha: 1, ease: ease}, "-=0.4");

			//}

		});

		glide.mount();
	}


	const cards = document.querySelector('.glide.cards');
	if (cards) {
		const glide = new Glide(cards, {
			type: 'carousel',
			startAt: 0,
			perView: 1,
			focusAt: 'center',
			animationDuration: 600,
			animationTimingFunc: 'ease',
			peek: {
				before: 290,
				after: 290
			},
			breakpoints: {
				991: {
					peek: {
						before: 0,
						after: 0
					}
				}
			}
		});

		let currentSlide = glide.index;
		glide.on('run', function() {

			const $slides = $(".cards .glide__slide");
			const total = $slides.length - 4;
			const idx = glide.index;
			let $next;

			if (idx > currentSlide) {
				if (currentSlide === 0 && idx >= (total - 1)) {
					$next = $(".cards .glide__slide").eq(total + 1);
				} else {
					$next = $(".cards .glide__slide--active").next();
				}
			} else {
				if (currentSlide === (total - 1) && idx === 0) {
					$next = $(".cards .glide__slide").eq(2);
				} else {
					$next = $(".cards .glide__slide--active").prev();
				}
			}

			$slides.removeClass("active");
			$next.addClass("active");

			currentSlide = idx;
		})

		glide.mount();

		$(".cards .glide__slide--active").addClass("active");

	}

	const people = document.querySelector('.profiles');
	if (people) {
		$body = $("body");
		$dimmer = $(".modal-dimmer");

		$(".profiles").on("click", ".people-photo, .bio", function() {
			$modal = $(this).closest(".column").next(".modal");

			$body.addClass("locked");
			$dimmer.fadeIn();
			$modal.fadeIn();
		});

		$(".profiles").on("click", ".modal-close", function() {
			$modal = $(".modal");

			$dimmer.fadeOut();
			$modal.fadeOut().promise().done(function() {
				$body.removeClass("locked");
			});
		});
	}

	let pull_page = 1;
	let jsonFlag = true;
	const assets = "/wp-content/themes/iris/assets/img/";
	$(".view-more").click(function() {

		if (jsonFlag) {
			jsonFlag = false;
			pull_page++;
			$.getJSON("/wp-json/people/all-posts?paged=" + pull_page, function(data) {
				if (Object.keys(data).length) {
					let profiles = [];
					$.each(data, function(key, val) {
						const profile = $.map(val, function(el) { return el });
						profiles.push(profile);
					}); 

					gsap.to(".view-more", 0.4, {autoAlpha: 0});
					if (Object.keys(data).length) {
						for (let i = 0; i < profiles.length; i++) {

							const template = `
								<div class="flex column profile fetched">
									<div class="flex column">
										<div class="people-photo" style="background-image: url('${profiles[i][0]}');"></div>
										<p class="people-name">${profiles[i][1]}</p>
										<p class="people-title">${profiles[i][2]}</p>
										<div class="flex people-links">
											<a class="people-link" href="${profiles[i][3].url}" target="${profiles[i][3].target}">${profiles[i][3] ? '<img src="/wp-content/themes/iris/assets/img/icon-linkedin.svg">' : ''}</a>
											<a class="people-link bio" tabindex="0">View bio</a>
										</div>
									</div>
									<div class="flex column modal">
										<img class="modal-close" src="${assets}/icon-x.svg">
										<div class="flex column modal-content">
											<img class="modal-photo" src="${profiles[i][0]}" alt="${profiles[i][1]}">
											<h4 class="modal-name">${profiles[i][1]}</h4>
											<h4 class="modal-title">${profiles[i][2]}</h4>
											<p>${profiles[i][4]}</p>
											<a class="flex people-link" href="${profiles[i][3].url}" target="${profiles[i][3].target}">
												${profiles[i][3] ? '<img src="/wp-content/themes/iris/assets/img/icon-linkedin.svg">' : ""}
											</a>
										</div>
									</div>
								</div>
							`

							$('.profiles').append(template);
							// $('.fetched').hide().css("display", "flex").hide().fadeIn();
							gsap.to(".fetched, .view-more", 0.4, {autoAlpha: 1});
						}
						if (profiles.length < 6) {
							gsap.to(".view-more", 0.4, {autoAlpha: 0});
						}
					} else {
						gsap.to(".view-more", 0.4, {autoAlpha: 0});
					}
				} else {
					gsap.to(".view-more", 0.4, {autoAlpha: 0});
				}
			}).done(function(data) {
				if (Object.keys(data).length) {
					jsonFlag = true;
				}
			});
		}
	});

	
	iFrameResize();


	/***************************************************************
		*
		ADD IE CLASS TO BODY FOR BROWSER SPECIFIC STYLING
		*
	***************************************************************/

	function detectIE() {
		var ua = window.navigator.userAgent;

		var trident = ua.indexOf("Trident/");
		if (trident > 0) {
			// IE 11 => return version number
			var rv = ua.indexOf("rv:");
			return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
		}
		var edge = ua.indexOf('Edge/');
		if (edge > 0) {
			 // Edge (IE 12+) => return version number
			 return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
		}

		// other browser
		return false;
	}

	// Get IE or Edge browser version
	var version = detectIE();

	if (version == 11) {
		$("body").addClass("ie-11 is-ie");
	} else if (version >= 12) {
		$("body").addClass("ie-edge is-ie");
	}

	/***************************************************************
		*
		DEBOUNCE
		*
	***************************************************************/

	function debounce(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this,
				args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	}

	/***************************************************************
		*
		CLICK TOGGLE
		*
	***************************************************************/

	$.fn.clickToggle = function(func1, func2) {
		var funcs = [func1, func2];
		this.data('toggleclicked', 0);
		this.click(function() {
				var data = $(this).data();
				var tc = data.toggleclicked;
				$.proxy(funcs[tc], this)();
				data.toggleclicked = (tc + 1) % 2;
		});
		return this;
	};

	/***************************************************************
		*
		EQUAL HEIGHT DIVS
		*
	***************************************************************/

	equalheight = function(container){

		var currentTallest = 0,
				 currentRowStart = 0,
				 rowDivs = new Array(),
				 $el,
				 topPosition = 0;
		$(container).each(function() {

			 $el = $(this);
			 $($el).height('auto')
			 topPostion = $el.position().top;

			 if (currentRowStart != topPostion) {
				 for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
					 rowDivs[currentDiv].height(currentTallest);
				 }
				 rowDivs.length = 0; // empty the array
				 currentRowStart = topPostion;
				 currentTallest = $el.outerHeight();
				 rowDivs.push($el);
			 } else {
				 rowDivs.push($el);
				 currentTallest = (currentTallest < $el.outerHeight()) ? ($el.outerHeight()) : (currentTallest);
			}
			 for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
				 rowDivs[currentDiv].outerHeight(currentTallest);
			 }
		});
	}

	function hash_to_scroll(hash) {
        hash = hash === undefined ? "" : hash;
        if($(hash).length > 0) {
            var navbar_gap = 0;
            $('html, body').animate({
                scrollTop: ($(hash).offset().top - navbar_gap)
            }, 1000, 'swing');
        }
    }

    $(window).on('load', function(){
    	var hash = window.location.hash;
	    hash_to_scroll(hash);
    });

	/***************************************************************
		*
		LISTEN FOR JQUERY DOM READY
		*
	***************************************************************/

	$(function() {

		/***************************************************************
			*
			SMOOTH SCROLLING LINKS
			*
		***************************************************************/

		$("a.jump-link").on("click", function(event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, "") ==
					this.pathname.replace(/^\//, "") &&
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length
					? target
					: $("[name=" + this.hash.slice(1) + "]");
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$("html, body").animate(
						{
							scrollTop: target.offset().top - 80
						},
						1000
					);
				}
			}
		});

		/***************************************************************
			*
			DISABLED LINKS
			*
		***************************************************************/

		$('a.no-click').on('click', function(e) {
			e.preventDefault();
		});

		/***************************************************************
			*
			SCROLL ANIMATIONS
			*
		***************************************************************/

		// $('.animate-in').attr({
		// 	'data-aos' : 'fade-in',
		// 	'data-aos-duration' : '1000'
		// });

		// AOS.init();

		/***************************************************************
			*
			CONDITIONAL HEADER
			*
		***************************************************************/


		// const iOSSafari = /iP(ad|od|hone)/i.test(window.navigator.userAgent) && /WebKit/i.test(window.navigator.userAgent) && !(/(CriOS|FxiOS|OPiOS|mercury)/i.test(window.navigator.userAgent));
		const $header = $('#header');
		window.onscroll = function(e) {
			const scrollY = this.scrollY;
			const scrollingUp = this.oldScroll > scrollY;

			// direction
			if (scrollingUp) {
				$header.removeClass('scrollDown');
			} else {
				if (scrollY >= 5) {
					$header.addClass('scrollDown');
					previousId = null;
					gsap.to("#header .sub-menu", 0.4, {autoAlpha: 0});
				}
			}

			// at the top
			if (scrollY > 5) {
				$header.addClass('shadow');
			} else {
				$header.removeClass('shadow');
			}

			this.oldScroll = scrollY;
		}


		/***************************************************************
			*
			RESPONSIVE TABLES
			*
		***************************************************************/

		var $allTables = $('table');

		$allTables.wrap('<div class="responsive-tables"></div>');

		/***************************************************************
			*
			IE POLYFILL FOR POSITION STICKY
			*
		***************************************************************/

		var elements = $('.sticky');
		Stickyfill.add(elements);

	});
	
	
	// Insights Share Fixed Positioning
	if ( $('body').hasClass('single-insights') || $('body').hasClass('single-post') ) {
		
		// Blog Conditional
		if ( $('body').hasClass('single-insights') ) {
			var contentHeight = ($('.insight-content .post-content').offset().top + $('.insight-content .post-content').outerHeight()) - 100;
		} else {
			var contentHeight = ($('.insight-content .post-content').offset().top + $('.insight-content .post-content').outerHeight()) - 300;
		}
		
		$(window).scroll(function() {
			if ($(window).width() > 991) {
		
				var contentTop    = $('.insight-content').offset().top - 75;
				var userScrollPos = $(this).scrollTop();
				
				if (userScrollPos > contentTop) {
					$('.insight-content .share').addClass('fixed');
					
					if ( userScrollPos > contentHeight ) {
						$('.insight-content .share').fadeOut();
					} else {
						$('.insight-content .share').fadeIn();
					}
					
				} else {
					$('.insight-content .share').removeClass('fixed');
				}
				
			}
		});
	}
	
	// Social Share Buttons on Single Insight Page
	$('.social-share').click(function(e) {
		e.preventDefault();
		window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
		return false;
	});
	
	
	// Insights Center AJAX
	if($('.insights-posts').length){
		getInsights(1);
	}
	
	$('.insight-cat, .insight-topic').on('change', function(){
		getInsights(1);
	});

	function getInsights( paged ){
		$.ajax({ // you can also use $.post here
			url : '/wp-admin/admin-ajax.php', // AJAX handler
			data : {
				action:'loadmore',
				paged: paged,
				category: $('.insight-cat').val(),
				topic: $('.insight-topic').val()
			},
			type : 'POST',
			beforeSend : function ( xhr ) {
				
				$('.insights-posts .posts-grid')
				.addClass('loading')
				.html('<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
			},
			success : function( data ){
				//console.log(data)
				
				if( data ) { 
					
					// Scroll Up
					$('body, html').animate({
						scrollTop: $('.insights-filter').offset().top - $('header#header').outerHeight()
					}, 200);
					
					// Populate Data
					$('.insights-posts .posts-grid').removeClass('loading').html(data);
					
					// Pagination
					$('.insights-pagination a').on('click', function(e){
						e.preventDefault();
						var url = $(this).attr('href').split('/');
						var page = url[url.length-2];
						getInsights(page);
					});
					
				}
			}
		});
	}
	
	$('.related-posts .posts-grid').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		nextArrow: '<button type="button" class="slick-next"><img src="/wp-content/themes/iris/assets/img/arrow-right.svg" alt="Next Post" /></button>',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	
	
})(window.jQuery, window, document);