$(document).ready(function () {
	$('.main_carousel').slick({
		dots: true,
		infinite: true,
		speed: 1000,
		fade: true,
		slidesToShow: 1,
		adaptiveHeight: true
	});
	$('.catalog_carousel').slick({
		dots: false,
		arrows: false,
		infinite: true,
		speed: 1000,
		slidesToShow: 1,
		//centerMode: true,
		//adaptiveHeight: true
	});

	$('.partners_for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
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
	
	new WOW().init();


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
	
// Animation

	const mainTl = gsap.timeline();

	ScrollTrigger.create({
		animation: mainTl,
		start: "top top", 
    	end: "bottom top",
		trigger: '.main_carousel',
		scrub: true,
	});

	mainTl.fromTo(".main_carousel .slick-arrow", { opacity: 1 }, { opacity: 0 }, 0.1)
			.fromTo(".main_carousel .slick-dots", { opacity: 1 }, { opacity: 0 }, 0.1);


	gsap.to(".main_carousel .carousel_item_title", {
		yPercent: -100,
		ease: "none",
		scrollTrigger: {
			trigger: ".main_carousel",
			start: "top top", 
    		end: "bottom top",
		  	scrub: true
		}, 
	});
	

	gsap.to(".bottom_scroll", {
		yPercent: 50,
		ease: "none",
		scrollTrigger: {
		  trigger: ".main_carousel",
		  scrub: true
		}, 
	});




	gsap.to(".section_catalog .carousel_item_title", {
		yPercent: -100,
		ease: "none",
		scrollTrigger: {
			trigger: ".section_catalog",
			start: "top top", 
    		end: "bottom top",
		  scrub: true
		}, 
	});


	gsap.to(".section_catalog .carousel_item_img", {
		yPercent: 20,
		ease: "none",
		scrollTrigger: {
			trigger: ".section_catalog",
			start: "top top",
			end: "bottom top",
			scrub: true
		}, 
	});

	// var catalogTl = gsap.timeline();
	
	// ScrollTrigger.create({
	// 	animation: catalogTl,
	// 	trigger: '.section_catalog',
	// 	start: "top top",
	// 	end: "bottom top",
	// 	scrub: true,

	// });
	
	// catalogTl.to(".section_catalog .carousel_item_title", { duration: 5, y: '-100%' });
		// .to(".section_catalog .carousel_item_img", { duration: 5, y: '20%' });
	
	
	
	
	

	// gsap.to(".section_about .about_img", {
	// 	yPercent: -100,
	// 	ease: "none",
	// 	scrollTrigger: {
	// 	start: "top top", 
	// 	  trigger: ".section_about",
	// 	  scrub: true
	// 	}, 
	// });
	// gsap.to(".section_about .about_text", {
	// 	yPercent: -100,
	// 	delay: 0.2,
	// 	ease: "none",
	// 	scrollTrigger: {
	// 		start: "top top", 
	// 	  trigger: ".section_about",
	// 		scrub: true,
			
	// 	}, 
	// });
	// gsap.to(".section_about .about_bottom", {
	// 	yPercent: -50,
	// 	ease: "none",
	// 	scrollTrigger: {
	// 		start: "top top", 
	// 	  trigger: ".section_about",
	// 	  scrub: true
	// 	}, 
	// });




	
	
// CURSOR
var cursor = $(".cursor");

	function moveCircle(e) {
		TweenLite.to(cursor, 0.3, {
		  css: {
			left: e.clientX,
			top: e.clientY,
			opacity: 1,
				
		  }
		});
	 }

$(".catalog_carousel .slick-list").on("mouseover", function() {
	gsap.to(cursor, 0.4, { scale: 1, autoAlpha: 1 });

	$(".section_catalog .slick-list").on("mousemove", moveCircle);
 });

 $(".section_catalog .slick-list").on("mouseout", function() {
	gsap.to(cursor, 0.4, { scale: 0.4, autoAlpha: 0 });
 });
	
	

	
	
	
 gsap.fromTo($('.carousel_item_img'), {duration: 3, y: 0, x: "100%", opacity: 0}, {duration: 3, ease: "expo.out", x: 0, opacity: 1});
 $('.main_carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	 gsap.fromTo($('.carousel_item_img'), { duration: 3, x: "100%", opacity: 0 }, { duration: 3, ease: "expo.out", x: 0, opacity: 1 });
	 Splitting();
 });



	//() => document.querySelector('.section_catalog').offsetHeight / 2
	/*
	const catalogStartTl = gsap.timeline();
	const catalogEndTl = gsap.timeline();
	ScrollTrigger.create({
		animation: catalogStartTl,
		trigger: '.section_catalog',
		start: '-40%',
		end: 'top',
		scrub: true,

	});
	ScrollTrigger.create({
		animation: catalogEndTl,
		trigger: '.section_catalog',
		start: 'top',
		end: 'bottom',
		scrub: true,
		//pin: true
	});
	catalogStartTl.fromTo(".section_catalog .carousel_item_img", { duration: 5, y: '20%'}, { duration: 5, y: '0'}, 0);
	
	catalogEndTl.fromTo(".section_catalog .carousel_item_top", { duration: 5, y: 0 }, { duration: 5, y: '-100%' })
	.fromTo(".section_catalog .carousel_item_title", { duration: 5, y: 0}, { duration: 5, y: '-100%'},0);
*/




const aboutTl = gsap.timeline();
	ScrollTrigger.create({
		animation: aboutTl,
		trigger: '.section_about',
		start: 'top top',
		//end: 'bottom',
		ease: "none",
		scrub: true,
		//pin: true
	});



	aboutTl.to(".about_img", { y: '-50%', duration: 3})
			 .to(".about_text",  { y: '-50%', duration: 3})
			 .to(".about_bottom",  { y: '-50%', duration: 3 });




/*
	

	const servStartTl = gsap.timeline();
	const servEndTl = gsap.timeline();
	
	ScrollTrigger.create({
		animation: servStartTl,
		trigger: '.section_service',
		start: '-40%',
		end: 'top',
		scrub: true,
		//pin: true
	});
	ScrollTrigger.create({
		animation: servEndTl,
		trigger: '.section_service',
		start: '5%',
		end: 'bottom',
		scrub: true,
		//pin: true
	});
	servStartTl.fromTo(".service_img", { x: "200%", duration: 6, opacity: 0 }, { x: 0, duration: 6, opacity: 1 });
		
	servEndTl.fromTo(".section_service .service_top", { duration: 5, y: 0, opacity: 1 }, { duration: 5, y: '-100%', opacity: 0 }, 0)
	.fromTo(".section_service .section_title", { duration: 5, y: 0 }, { duration: 5, y: '-100%'},0);
*/
	
	


	// const char = document.querySelectorAll('.char'),
	// delayTime = 0,
	// animationTime = 0.1,
	// tlchar = new TimelineMax();
	
		
	// TweenMax.set(char, {opacity: 0, y: '1.1em'});
	// TweenMax.to(char[0], animationTime, {opacity: 1, y: '0' });
	

	// for (var i = 1; i < char.length; i++) {
	// 	tlchar.to(char[i], animationTime, {opacity: 1, y: '0'}, (i-1) * (animationTime + delayTime));
	// 	//after the new image animates in, we can hide the old one that's behind it (aids browser performance)
	// 	//tlchar.set(char[i-1], {opacity: 0, y: '-150%'});
	// }
	// tlchar.fromTo(char[0], animationTime, {zIndex:100}, {delay:delayTime});


		
	// const tlchar = gsap.timeline();
	// gsap.fromTo(".char", { opacity: 0, y: '-150%' }, { duration: 1.5, width: 100, height: 200 });
	// tlchar.fromTo(".char",  { opacity: 0, y: '-150%' }, { duration: 1.5, width: 100, height: 200 });
	// char.forEach(function(item, i) {
	// 	alert( i + ": " + item + " (массив:" + arr + ")" );
	// });
	

// Wrap every letter in a span
// var textWrapper = document.querySelector('.ml2');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

// anime.timeline({loop: true})
//   .add({
//     targets: '.ml2 .letter',
//     rotateY: [-90, 0],
//     duration: 1300,
//     delay: (el, i) => 45 * i
//   }).add({
//     targets: '.ml2',
//     opacity: 0,
//     duration: 1000,
//     easing: "easeOutExpo",
//     delay: 1000
//   });
	
Splitting()
	
  });