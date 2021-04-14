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
		animationTime    : 800,
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
	

	const main = document.querySelector('.main');
	const tl = gsap.timeline();
	tl.fromTo(".main_carousel .carousel_item_title", { y: 0 }, { y: '-100%' });
	//tl.fromTo(".main_carousel .carousel_item", { y: 0 }, { y: '-100%' });
	//end: () => main.offsetWidth / 2;

	ScrollTrigger.create({
		animation: tl,
		trigger: '.main_carousel',
		start: 'top top',
		end: 'bottom',
		scrub: true,
		//pin: true
	});

	const tlAbout = gsap.timeline();
	tlAbout.fromTo(".about_img", { y: 0 }, { y: '-100%', duration: 1})
	tlAbout.fromTo(".about_text", { y: 0 }, { y: '-100%', duration: 1})
	tlAbout.fromTo(".about_bottom", { y: 0 }, { y: '-100%', duration: 1 });

	ScrollTrigger.create({
		animation: tlAbout,
		trigger: '.section_about',
		start: 'top top',
		end: 'bottom',
		scrub: true,
		//pin: true
	});
	


});