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
	
});