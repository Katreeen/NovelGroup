jQuery(document).ready(function ($) {
  // ANIMATIONS
 
  wow = new WOW(
    {
      boxClass: 'wow',
      animateClass: 'animate__animated',
      offset: 0,
      mobile: true,
      live: true,
      scrollContainer: null,
      resetAnimation: true,
    }
  )
  wow.init();
  Splitting({
		target: "[data-splitting]",
		by: "chars",
		key: null
	});
	
  


  
  var checkExistnav = setInterval(function () {

    clearInterval(checkExistnav);

    let split;
    let animation = gsap.timeline({});

    // navigation
    counter = .2;
    $.each($('.menu-item'), function (i, val) {
      $(val).css('animation-delay', counter + 's');
      $(val).css('display', 'block');
      counter += .2;
    });

    gsap.set("#fix-menu", { autoAlpha: 1 });
    split_menu = $("#fix-menu a span");
    animation.from(split_menu.chars, {
      opacity: 0,
      y: 50,
      ease: "power4",
      stagger: {
        from: "start",
        each: 0.03,
        delay: 0.5,
      }
    });

    gsap.set(".carousel_item_title", { autoAlpha: 1 });
   
    split = $(".carousel_item_title span");
    animation.from(split.chars, {
      opacity: 0,
      y: 20,
      ease: "power4",
      stagger: {
        from: "start",
        each: 0.05
      }
    });


    
    gsap.utils.toArray(".main_content h1").forEach(function(elem) {
      var box = $(elem).parents('.section');
      splitTimeline = gsap.timeline({
        /*scrollTrigger: {
          //trigger: box,
          once: true,
          start: "top top",
          end: "+=200 ",
          scrub: true
        }*/
      });
    
      
      var title = Splitting({ target: elem, by: "chars" });
      

      splitTimeline.from(title[0].chars, 1,  {
        duration: 1.1,
        opacity: 0, 
        x: 10, 
        y: 0, 
        ease: "Power3.easeOut", 
        stagger: {
          from:"start",
          amount: 0.3,
        },
        
      });
    });




  

    gsap.utils.toArray(".section_title").forEach(function(elem) {
      var box = $(elem).parents('.section');
      splitTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: box,
          once: true,
          start: "top bottom-=200px",
          end: "+=200 ",
          scrub: true
        }
      });
    
      var newglobalsplitText = Splitting({ target: elem, by: "chars" });
     
      

      splitTimeline.from(newglobalsplitText[0].chars, 1,  {
        duration: 1.1,
        opacity: 0, 
        x: 10, 
        y: 0, 
        ease: "Power3.easeOut", 
        stagger: {
          from:"start",
          amount: 0.3,
        },
        
      });

    });
    


    gsap.utils.toArray(".about_desc p").forEach(function(elem) {
      splitTimeline = gsap.timeline({
        scrollTrigger: {
          once: true,
          trigger: '.section_about',
          start: "top 80%",
          end: "bottom 10%",
        }
      });
      var newsplitText = Splitting({ target: elem, by: "chars" });
      splitTimeline.from(newsplitText[0].chars, 1, { 
        opacity: 0, 
        x: 10, 
        y: 0, 
        ease: "Power3.easeOut", 
        stagger: {
          from:"start",
          amount: 0.6,
        },
      });
    });




    


  }, 100);



  gsap.from(".service_item_main img", {
    scrollTrigger: {
      trigger: ".section_service", 
      toggleActions: "play none none none", 
      start: "top bottom", 
      end: "bottom top"
    },
    yPercent: -50,
    opacity: 0,
    duration: 0.3,
    delay: 3.2, 
    ease: "none"
  });


  gsap.from(".main_carousel_wrap .carousel_item_img img", {
    scrollTrigger: {
      trigger: ".main_carousel_wrap", 
      toggleActions: "play none none none", 
      start: "top bottom", 
      end: "bottom top"
    },
    xPercent: 100,
    duration: 1, 
    ease: "none"
  });

  gsap.from(".catalog_carousel .carousel_item_img img", {
    scrollTrigger: {
      trigger: ".catalog_carousel", 
      toggleActions: "play none none none", 
      start: "top bottom", 
      end: "bottom top"
    },
    xPercent: 100,
    duration: 1, 
    ease: "none"
  });

  gsap.from(".about_img img", {
    scrollTrigger: {
      trigger: ".section_about", 
      toggleActions: "play none none none", 
      start: "top bottom", 
      end: "bottom top"
    },
    xPercent: 100,
    duration: 0.6, 
    ease: "none"
  });

  gsap.from(".about_bottom_img img", {
    scrollTrigger: {
      trigger: ".section_about", 
      toggleActions: "play none none none", 
      start: "top bottom", 
      end: "bottom top"
    },
    yPercent: 100,
    duration: 0.6, 
    ease: "none"
  });




});





$(document).ready(function () {
	  $(this).scrollTop(0);



	SmoothScroll({
		// Время скролла 400 = 0.4 секунды
		animationTime: 1000,
		// Размер шага в пикселях 
		stepSize: 75,

		// Дополнительные настройки:

		// Ускорение 
		accelerationDelta: 30,
		// Максимальное ускорение
		accelerationMax: 2,

		// Поддержка клавиатуры
		keyboardSupport: true,
		// Шаг скролла стрелками на клавиатуре в пикселях
		arrowScroll: 50,

		// Pulse (less tweakable)
		// ratio of "tail" to "acceleration"
		pulseAlgorithm: true,
		pulseScale: 4,
		pulseNormalize: 1,

		// Поддержка тачпада
		touchpadSupport: true,
	});





gsap.fromTo($('.carousel_item_img'), {duration: 3, y: 0, x: "100%", opacity: 0}, {duration: 3, ease: "expo.out", x: 0, opacity: 1});
$('.main_carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide){
 gsap.fromTo($('.carousel_item_img'), { duration: 3, x: "100%", opacity: 0 }, { duration: 3, ease: "expo.out", x: 0, opacity: 1 });
 Splitting();
});
	
	
// main_carousel
	
const mainTl = gsap.timeline();
ScrollTrigger.create({
	animation: mainTl,
	trigger: '.main_carousel',
	start: "top top", 
	end: "bottom top",
	scrub: true,
});

	mainTl.to(".main_carousel .carousel_item_title", { yPercent: -100, duration: 1 })
		.to(".bottom_scroll", {yPercent: 50, duration:1});

	
// section_catalog
	
const catalogTl = gsap.timeline();
ScrollTrigger.create({
	animation: catalogTl,
	trigger: '.section_catalog',
	start: "top top", 
	end: "bottom top",
	scrub: true,
});

catalogTl.to(".section_catalog .carousel_item_title", { yPercent: -100})
		.to(".section_catalog .carousel_item_img", {yPercent: 50, duration:0.5});


	
// section_about
const aboutTl = gsap.timeline();
ScrollTrigger.create({
	animation: aboutTl,
	trigger: '.section_about',
	start: "top top", 
	end: "bottom top",
	scrub: true,
});

aboutTl.to(".about_img", { yPercent: -50, duration: 3})
		.to(".about_text",  { yPercent: -50, duration: 3})
		.to(".about_bottom", { yPercent: -50, duration: 3 });
	
	
// section_service
const serviceTl = gsap.timeline();
ScrollTrigger.create({
	animation: serviceTl,
	trigger: '.section_service',
	start: "top top", 
	end: "bottom top",
	scrub: true,
});
	serviceTl.to(".section_service .section_title", { yPercent: -100, duration: 3 });
	serviceTl.to(".section_service .service_row", { yPercent: -20, duration: 5 });

	

	
  const partnersTl = gsap.timeline();
  const partnersOpacity = gsap.timeline();
	var tl = gsap.timeline();
	ScrollTrigger.create({
		animation: partnersTl,
		trigger: '.section_partners',
		start: "-=500", 
		end: "bottom top",
		scrub: true,
		//onEnter: partners,
		
  });
  ScrollTrigger.create({
		animation: partnersOpacity,
		trigger: '.section_partners',
		start: "top", 
		end: "bottom top",
		//scrub: true,
		//onEnter: partners,
		
	});

  partnersOpacity.from(".partners_carousel_wrap", { opacity: 0 });
	partnersTl.to(".section_partners .section_title", { yPercent: -100 })
		.to(".partners_carousel_wrap", { yPercent: -20 });



});