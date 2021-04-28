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
			  breakpoint: 767,
			  settings: {
					variableWidth: false,
				 
			  }
			}
		 ]
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
		 focusOnSelect: true,
		 responsive: [
			{
			  breakpoint: 1920,
			  settings: {
				 slidesToShow: 3,
				 
			  }
			},
			{
			  breakpoint: 1199,
			  settings: {
				 slidesToShow: 2,
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				 slidesToShow: 1,
				 slidesToScroll: 1
			  }
			}
		 ]
		
	 });
	 


	 $('.recomended_carousel').slick({
		prevArrow: $('.card_recomended_nav .arrow-prev'),
		nextArrow: $('.card_recomended_nav .arrow-next'),
		dots: false,
	
		infinite: true,
		speed: 1000,
		slidesToShow: 4,
		variableWidth: true
		//centerMode: true,
		//adaptiveHeight: true
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
		if ($(".pl-js").length){
			var viewportOffset = $('.offset-xxl-2')[0].getBoundingClientRect();
			var left = viewportOffset.left;
			//console.log(left);
			$('.pl-js').css( "padding-left", left);
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


	var $tabs = function (target) {
		var
			_elemTabs = (typeof target === 'string' ? document.querySelector(target) : target),
			_eventTabsShow,
			_showTab = function (tabsLinkTarget) {
				var tabsPaneTarget, tabsLinkActive, tabsPaneShow;
				tabsPaneTarget = document.querySelector(tabsLinkTarget.getAttribute('href'));
				tabsLinkActive = tabsLinkTarget.parentElement.querySelector('.tabs__link_active');
				tabsPaneShow = tabsPaneTarget.parentElement.querySelector('.tabs__pane_show');
				// если следующая вкладка равна активной, то завершаем работу
				if (tabsLinkTarget === tabsLinkActive) {
					return;
				}
				// удаляем классы у текущих активных элементов
				if (tabsLinkActive !== null) {
					tabsLinkActive.classList.remove('tabs__link_active');
				}
				if (tabsPaneShow !== null) {
					tabsPaneShow.classList.remove('tabs__pane_show');
				}
				// добавляем классы к элементам (в завимости от выбранной вкладки)
				tabsLinkTarget.classList.add('tabs__link_active');
				tabsPaneTarget.classList.add('tabs__pane_show');
				document.dispatchEvent(_eventTabsShow);
			},
			_switchTabTo = function (tabsLinkIndex) {
				var tabsLinks = _elemTabs.querySelectorAll('.tabs__link');
				if (tabsLinks.length > 0) {
					if (tabsLinkIndex > tabsLinks.length) {
						tabsLinkIndex = tabsLinks.length;
					} else if (tabsLinkIndex < 1) {
						tabsLinkIndex = 1;
					}
					_showTab(tabsLinks[tabsLinkIndex - 1]);
				}
			};
		
		_eventTabsShow = new CustomEvent('tab.show', { detail: _elemTabs });
		
		_elemTabs.addEventListener('click', function (e) {
			var tabsLinkTarget = e.target;
			// завершаем выполнение функции, если кликнули не по ссылке
			if (!tabsLinkTarget.classList.contains('tabs__link')) {
				return;
			}
			// отменяем стандартное действие
			e.preventDefault();
			_showTab(tabsLinkTarget);
		});
		
		return {
			showTab: function (target) {
				_showTab(target);
			},
			switchTabTo: function (index) {
				_switchTabTo(index);
			}
		}
		
		};
		
		$tabs('.tabs');




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