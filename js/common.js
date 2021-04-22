$(document).ready(function () {
	$('.main_carousel').slick({
		dots: true,
		//arrows: false,
		prevArrow: $('.main_carousel_wrap .s-prev'),
   	nextArrow: $('.main_carousel_wrap .s-next'),
		infinite: true,
		speed: 1000,
		fade: true,
		slidesToShow: 1,
		adaptiveHeight: true
	});

	// $('.main_carousel_nav .s-next').on('click', function() {
	// 	$('.main_carousel').slick('slickPrev');
	// });

	// $('.main_carousel_nav .s-prev').on('click', function() {
	// 	$('.main_carousel').slick('slickPrev');
	// });
	

	$('.catalog_carousel').slick({
		dots: false,
		arrows: false,
		infinite: true,
		speed: 1000,
		slidesToShow: 1,
		variableWidth: true
		//centerMode: true,
		//adaptiveHeight: true
	});

	$('.partners_for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		//arrows: true,
		prevArrow: $('.partners_nav_wrap .s-prev'),
   	nextArrow: $('.partners_nav_wrap .s-next'),
		dots: false,
		fade: true,
		asNavFor: '.partners_nav'
	 });
	 $('.partners_nav').slick({
		 slidesToShow: 3,
		 arrows: false,
		slidesToScroll: 1,
		asNavFor: '.partners_for',
		dots: false,
		focusOnSelect: true
	 });
	
	
	
	$('.category_item_name').click(function () {
		var href = $(this).attr('href');
		if ($(this).hasClass('active')) {
			
		} else {
			$('.category_item_name').removeClass('active');
			$('.category_item_img').removeClass('active');
			$(this).addClass('active');
			$(href).addClass('active');
		}
		return false;
	});
	
	// new WOW().init();


	SmoothScroll({
		// Время скролла 400 = 0.4 секунды
		animationTime    : 1000,
		// Размер шага в пикселях 
		stepSize         : 75,
  
		// Дополнительные настройки:
		
		// Ускорение 
		accelerationDelta : 30,  
		// Максимальное ускорение
		accelerationMax   : 2,   
  
		// Поддержка клавиатуры
		keyboardSupport   : true,  
		// Шаг скролла стрелками на клавиатуре в пикселях
		arrowScroll       : 50,
  
		// Pulse (less tweakable)
		// ratio of "tail" to "acceleration"
		pulseAlgorithm   : true,
		pulseScale       : 4,
		pulseNormalize   : 1,
  
		// Поддержка тачпада
		touchpadSupport   : true,
	});
	

	window.onresize = function (event) {
		var viewportOffset = $('.offset-2')[0].getBoundingClientRect();
		var left = viewportOffset.left;
		//console.log(left);
		$('.pl-js').css( "padding-left", left);
	};
	var viewportOffset = $('.offset-2')[0].getBoundingClientRect();
	var left = viewportOffset.left;
	//console.log(left);
	$('.pl-js').css( "padding-left", left);









// Animation

// 	const mainTl = gsap.timeline();

// 	ScrollTrigger.create({
// 		animation: mainTl,
// 		start: "top top", 
//     	end: "bottom top",
// 		trigger: '.main_carousel',
// 		scrub: true,
// 	});

// 	mainTl.fromTo(".main_carousel .slick-arrow", { opacity: 1 }, { opacity: 0 }, 0.1)
// 			.fromTo(".main_carousel .slick-dots", { opacity: 1 }, { opacity: 0 }, 0.1);

// 	gsap.to(".main_carousel .carousel_item_title", {
// 		yPercent: -100,
// 		ease: "none",
// 		scrollTrigger: {
// 			trigger: ".main_carousel",
// 			start: "top top", 
//     		end: "bottom top",
// 		  	scrub: true
// 		}, 
// 	});

// 	gsap.to(".bottom_scroll", {
// 		yPercent: 50,
// 		ease: "none",
// 		scrollTrigger: {
// 		  trigger: ".main_carousel",
// 		  scrub: true
// 		}, 
// 	});

// 	gsap.to(".section_catalog .carousel_item_title", {
// 		yPercent: -100,
// 		ease: "none",
// 		scrollTrigger: {
// 			trigger: ".section_catalog",
// 			start: "top top", 
//     		end: "bottom top",
// 		  scrub: true
// 		}, 
// 	});


// 	gsap.to(".section_catalog .carousel_item_img", {
// 		yPercent: 20,
// 		ease: "none",
// 		scrollTrigger: {
// 			trigger: ".section_catalog",
// 			start: "top top",
// 			end: "bottom top",
// 			scrub: true
// 		}, 
// 	});

	
// // CURSOR
// var cursor = $(".cursor");

// 	function moveCircle(e) {
// 		TweenLite.to(cursor, 0.3, {
// 		  css: {
// 			left: e.clientX,
// 			top: e.clientY,
// 			opacity: 1,
				
// 		  }
// 		});
// 	 }

// $(".catalog_carousel .slick-list").on("mouseover", function() {
// 	gsap.to(cursor, 0.4, { scale: 1, autoAlpha: 1 });

// 	$(".section_catalog .slick-list").on("mousemove", moveCircle);
//  });

//  $(".section_catalog .slick-list").on("mouseout", function() {
// 	gsap.to(cursor, 0.4, { scale: 0.4, autoAlpha: 0 });
//  });

	
//  gsap.fromTo($('.carousel_item_img'), {duration: 3, y: 0, x: "100%", opacity: 0}, {duration: 3, ease: "expo.out", x: 0, opacity: 1});
//  $('.main_carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide){
// 	 gsap.fromTo($('.carousel_item_img'), { duration: 3, x: "100%", opacity: 0 }, { duration: 3, ease: "expo.out", x: 0, opacity: 1 });
// 	 Splitting();
//  });


// const aboutTl = gsap.timeline();
// 	ScrollTrigger.create({
// 		animation: aboutTl,
// 		trigger: '.section_about',
// 		start: 'top top',
// 		//end: 'bottom',
// 		ease: "none",
// 		scrub: true,
// 		//pin: true
// 	});

// 	aboutTl.to(".about_img", { y: '-50%', duration: 3})
// 			 .to(".about_text",  { y: '-50%', duration: 3})
// 			 .to(".about_bottom",  { y: '-50%', duration: 3 });




	
// Splitting()
	
	
	
	
  });