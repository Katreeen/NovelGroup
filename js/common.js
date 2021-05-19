$(document).ready(function () {
	$('.main_carousel').slick({
		dots: true,
		//arrows: false,
		prevArrow: $('.main_carousel_wrap .s-prev'),
   	nextArrow: $('.main_carousel_wrap .s-next'),
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1
		//adaptiveHeight: true
	});
	

	


	$('.catalog_carousel').slick({
		dots: false,
		arrows: false,
		infinite: true,
		speed: 1000,
		slidesToShow: 1,
		responsive: [
			{
			  breakpoint: 1920,
			  settings: {
					variableWidth: true,
			  }
			},
			{
			  breakpoint: 575,
			  settings: {
					variableWidth: false,
				 
			  }
			}
		 ]
	});
	$('.catalog_image_carousel').slick({
		dots: false,
		//arrows: false,
		prevArrow: $('.catalog_image_carousel_nav .s-prev'),
   	nextArrow: $('.catalog_image_carousel_nav .s-next'),
		infinite: true,
		speed: 1000,
		fade: true,
		slidesToShow: 1,
		//adaptiveHeight: true
	});
	$('.catalog_image_carousel').on('afterChange', function (event, slick, currentSlide, nextSlide) {
		$('.catalog_info .catalog_items .catalog_item_title').removeClass('active');
		console.log(currentSlide);
		if (currentSlide == '0') {
			$('.catalog_info .catalog_items .catalog_item_title').first().addClass('active');
		} else {
			$('.catalog_info .catalog_items .catalog_item_title').last().addClass('active');
		}
		
	});
	



	$('.partners_carousel').slick({
		dots: false,
		prevArrow: $('.partners_carousel_nav .s-prev'),
   	nextArrow: $('.partners_carousel_nav .s-next'),
		infinite: true,
		speed: 800,
		variableWidth: true,
		responsive: [
			{
			  breakpoint: 1920,
			  settings: {
					variableWidth: true,
					slidesToShow: 4,
			  }
			},
			{
			  breakpoint: 1199,
			  settings: {
					variableWidth: false,
					slidesToShow: 4,
				 
			  }
			},
			{
			  breakpoint: 767,
			  settings: {
					variableWidth: false,
					slidesToShow: 3,
				 
			  }
			},
			{
			  breakpoint: 575,
			  settings: {
					variableWidth: true,
					slidesToShow: 1,
					//centerMode: true,
				 
			  }
			}
		 ]
	});

	$('.partners_item.slick-active').first().find('.partners_item_info').css({"opacity" : "1"});
	$('.partners_carousel').on('afterChange', function(){
		$('.partners_item').find('.partners_item_info').css({"opacity" : "0"});
		$('.partners_item.slick-active').first().find('.partners_item_info').css({"opacity" : "1"});
	});
	$('.partners_carousel').on('beforeChange', function(){
		$('.partners_item').find('.partners_item_info').css({"opacity" : "0"});
		
	});

	 $('.recomended_carousel').slick({
		prevArrow: $('.card_recomended_nav .arrow-prev'),
		nextArrow: $('.card_recomended_nav .arrow-next'),
		dots: false,
	
		infinite: false,
		speed: 1000,
		slidesToShow: 2,
		responsive: [
			{
			  breakpoint: 1920,
			  settings: {
				
					slidesToShow: 2,
			  }
			},
			
			{
			  breakpoint: 767,
			  settings: {
				
					slidesToShow: 1,
				 
			  }
			},

		 ]
	 });
	
	 $('.news_carousel').slick({
		prevArrow: $('.news_carousel_nav .arrow-prev'),
		nextArrow: $('.news_carousel_nav .arrow-next'),
		dots: false,
	
		infinite: true,
		speed: 1000,
		slidesToShow: 1,
		variableWidth: true,
		centerMode: true,
		//adaptiveHeight: true
	});
	$('#vacancies_list_name').selectmenu({
		change: function (event, ui) {
			let filter = ui.item.value;
			//console.log(filter);
			if (filter == 'all') {
				$('.vacancies_item').removeClass('hide');	
			} else {
				$('.vacancies_item').addClass('hide');
				$('.vacancies_item[data-name="' + filter + '"]').removeClass('hide');
			}
			
		}
	 });

	if ($('#map').length) {
		mapboxgl.accessToken = 'pk.eyJ1IjoiZWthdGVyZWVlbmEiLCJhIjoiY2tvdTFheDQ1MDJmYjJ2cGYyaXBqdHBieSJ9.XDRLOqrNfGxYgqByJ5zQCg';
		var map = new mapboxgl.Map({
			container: 'map',
			style: 'mapbox://styles/mapbox/streets-v11',
			center: [50.12975967591858, 53.09823883237333],
			zoom: 9
		});

		// Create a default Marker and add it to the map.
		var marker1 = new mapboxgl.Marker()
			.setLngLat([50.12975967591858, 53.09823883237333])
			.addTo(map);
	
	}

	
 

	
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

	if ($(window).width() < 576) {
		$('.header_drop_col_search').prependTo($('.header_drop_bottom .container'));
	}
	else {
		$(".header_drop_col_search").insertAfter($(".header_drop_col_logo"));
	}

	window.onresize = function (event) {
		if ($(".pl-js").length){
			var viewportOffset = $('.offset-xxl-2')[0].getBoundingClientRect();
			var left = viewportOffset.left;
			//console.log(left);
			$('.pl-js').css( "padding-left", left);
		}
		if ($(window).width() < 575) {
			$('.header_drop_col_search').prependTo($('.header_drop_bottom .container'));
		}
		else {
			$(".header_drop_col_search").insertAfter($(".header_drop_col_logo"));
		}
	
	};
	if ($(".pl-js").length){
		var viewportOffset = $('.offset-xxl-2')[0].getBoundingClientRect();
		var left = viewportOffset.left;
		//console.log(left);
		$('.pl-js').css( "padding-left", left);
	}
	
	$('.navbar-toggler').click(function () {
		$('.header_drop').slideDown();
	})
	$('.navbar-toggler-close').click(function () {
		$('.header_drop').slideUp();
	})


		
	$("#product_sort").selectmenu();
	
	



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