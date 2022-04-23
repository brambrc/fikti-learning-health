jQuery(function ($) {
	'use strict';

	// Start Menu 
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 50) {
			$('.main-nav').addClass('menu-shrink');
		} else {
			$('.main-nav').removeClass('menu-shrink');
		}
	});				

    // Mean Menu
	jQuery('.mean-menu').meanmenu({
		meanScreenWidth: '991'
	});

	// Modal Video JS
	$('.js-modal-btn').modalVideo();

	// Home Slider 
	$('.home-slider').owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		nav: false,
		dots: true,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 9000,
		autoplayHoverPause: true,
		navText: [
			"<i class='icofont-simple-left'></i>",
			"<i class='icofont-simple-right'></i>"
		],
	});

	// Home Slider Two
	$('.home-slider-two').owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 9000,
		autoplayHoverPause: true,
		navText: [
			"<i class='icofont-simple-left'></i>",
			"<i class='icofont-simple-right'></i>"
		],
	});

	// Testimonial Slider JS
	$('.testimonials-slider').owlCarousel({
		items:1,
		loop:true,
		margin:0,
		nav: false,
		dots: true,
		smartSpeed: 1000,
		autoplay:false,
		autoplayTimeout:9000,
		autoplayHoverPause:true,
	});
	
	// Odometer 
	$('.odometer').appear(function(e) {
		var odo = $('.odometer');
		odo.each(function() {
			var countNumber = $(this).attr('data-count');
			$(this).html(countNumber);
		});
	});

	// Tabs
	$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
	$('.tab ul.tabs li a').on('click', function (g) {
		var tab = $(this).closest('.tab'), 
		index = $(this).closest('li').index();
		tab.find('ul.tabs > li').removeClass('current');
		$(this).closest('li').addClass('current');
		tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
		tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
		g.preventDefault();
	});

	// Nice Select
	$('select').niceSelect();

	// Accordion 
	$('.accordion > li:eq(0) .faq-head').addClass('active').next().slideDown();
	$('.accordion .faq-head').on('click', function(j) {
		var dropDown = $(this).closest('li').find('.faq-content');
		$(this).closest('.accordion').find('.faq-content').not(dropDown).slideUp(300);
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).closest('.accordion').find('.faq-head.active').removeClass('active');
			$(this).addClass('active');
		}
		dropDown.stop(false, true).slideToggle(300);
		j.preventDefault();
	});

	// Timer 
	let getDaysId = document.getElementById('days');
	if(getDaysId !== null){
		
		const second = 1000;
		const minute = second * 60;
		const hour = minute * 60;
		const day = hour * 24;

		let countDown = new Date('July 30, 2021 00:00:00').getTime();
		setInterval(function() {
			let now = new Date().getTime();
			let distance = countDown - now;

			document.getElementById('days').innerText = Math.floor(distance / (day)),
			document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
			document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
			document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
		}, second);
	};

	// Loader
	jQuery(window).on('load', function(){
		jQuery('.loader').fadeOut(500);
    });

	// Wow JS
	new WOW().init();

	// Go Top
	$(window).on('scroll', function(){
		var scrolled = $(window).scrollTop();
		if (scrolled > 100) $('.go-top').addClass('active');
		if (scrolled < 100) $('.go-top').removeClass('active');
	});  
	$('.go-top').on('click', function() {
		$('html, body').animate({ scrollTop: '0' },  500);
	});

	// Subscribe form
	$(".newsletter-form").validator().on("submit", function (event) {
		if (event.isDefaultPrevented()) {
		// handle the invalid form...
		formErrorSub();
		submitMSGSub(false, "Please enter your email correctly.");
		} else {
		// everything looks good!
		event.preventDefault();
		}
	});
	function callbackFunction (resp) {
		if (resp.result === "success") {
		formSuccessSub();
		}
		else {
		formErrorSub();
		}
	}
	function formSuccessSub(){
		$(".newsletter-form")[0].reset();
		submitMSGSub(true, "Thank you for subscribing!");
		setTimeout(function() {
		$("#validator-newsletter").addClass('hide');
		}, 4000)
	}
	function formErrorSub(){
		$(".newsletter-form").addClass("animated shake");
		setTimeout(function() {
		$(".newsletter-form").removeClass("animated shake");
		}, 1000)
	}
	function submitMSGSub(valid, msg){
		if(valid){
		var msgClasses = "validation-success";
		} else {
		var msgClasses = "validation-danger";
		}
		$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
	}
	
	// AJAX MailChimp
	$(".newsletter-form").ajaxChimp({
		url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
		callback: callbackFunction
	});	
}(jQuery));

