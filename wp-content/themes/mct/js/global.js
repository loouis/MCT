$(function() {


/*---------------------------------------------- Init */

	// Wow
	// wow = new WOW({
	//     mobile: false
	// });
	// wow.init();

	// init wow js - page animations
	new WOW().init();

	// Fitvids init
	$(".news-single-post__content, .content").fitVids();

	
	$('#trend-loc').bxSlider({
	    mode: 'horizontal',
	    pagerType: 'short',
	    onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
	        $('.active-slide').removeClass('active-slide');
	        $('#trend-loc > li').eq(currentSlideHtmlObject + 1).addClass('active-slide');
	    },
	    onSliderLoad: function () {
	        $('#trend-loc > li').eq(1).addClass('active-slide');
	    },
	});

	$('#news-all-hero-slider').bxSlider({
	    mode: 'horizontal',
	    auto: true,
  		autoControls: true,
  		onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
  			$('.active-slide').removeClass('active-slide');
	        $('#news-all-hero-slider > li').eq(currentSlideHtmlObject + 1).addClass('active-slide');
  		},
  		onSliderLoad: function () {
	        $('#news-all-hero-slider > li').eq(1).addClass('active-slide');
	    },
	});


	// Homepage rotating location text hinting
	$('.ilf__cells__cell__text__slider').bxSlider({
	    mode: 'fade',
	    auto: true,
	    controls: false,
  		autoControls: false,
  		pager: false,

  		onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
	        // console.log(currentSlideHtmlObject);
	        // $('.ilf__cells__cell__text__slider__slide--active').removeClass('ilf__cells__cell__text__slider__slide--active');
	        // $('.ilf__cells__cell__text__slider > li').eq(currentSlideHtmlObject + 1).addClass('ilf__cells__cell__text__slider__slide--active');
	    },
	    onSliderLoad: function () {
	    },
	});


 //    $('.ilf__cells__cell__slider--active span').each(function(i){
 //        var ilfLetter = $(this);
 //        ilfLetter.removeClass('ilf-letter-animate-in');
 //        setTimeout(function(){ ilfLetter.toggleClass('ilf-letter-animate-in'); }, (i+1) * 60);
 //    });

	$('#location-single-slider').bxSlider({
	    mode: 'fade',
	    auto: true,
  		autoControls: true
	});

	// Sticky social links in single blog posts
	$(".share-social-links").stick_in_parent();



/*---------------------------------------------- Header & Navigation */

	// Hamburger menu
	var $hamburger = $(".header-main__nav__hamburger-menu"),
		$logo = $(".logo"),
		$openNav = $(".header-main, .header-main__nav__hamburger-menu"),
		$siteNav = $(".site-nav"),
		$mainHeader = $(".header-main"),
		$closeNav = $('.header-main__close-button'),
		$this = $(this),
		$menuItem = $('.menu-item');

	$openNav.on("click", function(){
		$hamburger.toggleClass("header-main__nav__hamburger-menu--active");
		$siteNav.toggleClass("site-nav--active");
		$("body").toggleClass("body--is-fixed");
		$mainHeader.toggleClass("header-main--active");
		$logo.toggleClass("logo--nav-open");
		
		// Animate each menu item
		$menuItem.each(function(i){
			var item = $(this);

			setTimeout(function(){
				item.toggleClass('menu-item--animate');
			}, (i+1) * 50);
		});

		// Change data-explore attr to close when main nav is active 
		if($logo.hasClass("logo--nav-open")) {
			$logo.attr('data-explore', 'exit');
		} else {
			$logo.attr('data-explore', 'menu');
		}

	});


	function closeNav(){
		$siteNav.removeClass("site-nav--active");
		$("body").removeClass("body--is-fixed");
		$mainHeader.removeClass("header-main--active");
		// Remove data attr from exit to explore 
		$logo.attr('data-explore', 'menu');
		$menuItem.removeClass('menu-item--animate');
	}

	// Close button for main navigation
	$closeNav.on('click', function(){
		closeNav();
	});

	// Close nav using escape key
	$(document).keyup(function(e) { 
	  if (e.keyCode === 27) { 
	    closeNav();
	  }
	});

	// Hamburger menu



	// $(window).on('resize scroll', function(){
	// 	 var scroll = $(window).scrollTop(),
	// 	 	winHeight = $(window).height(),
	// 	 	mainHeader = $(".header-main__nav");


	// 	 if (scroll >= winHeight - 140){
	// 	 	mainHeader.addClass("has-solid-background");
	// 	 }else{
	// 		mainHeader.removeClass("has-solid-background");
	// 	 }
	// });

	// $('.site-nav__top-bar__search input').blur(function() {
	// 	if(!$.trim(this.value).length) { // zero-length string AFTER a trim
	// 	    $('.site-nav__top-bar__helper').removeClass("site-nav__top-bar__helper--show");
	// 	}
	// });



/*---------------------------------------------- Home hero */
	
	/* Scroll down arrow  */
	$('.home-hero__scroll-down-arrow').on('click', function(){
		$('html, body').animate({scrollTop: $('.image-location-filter').offset().top-1}, 800);
	});


/*---------------------------------------------- Mobile blog single */
	
	/* Toggle social share - show & hide  */
	$('.share-social-links__button').on('click', function(){
		$(this).toggleClass("share-social-links__button--active");
		$('.share-social-links__container').toggleClass("share-social-links__container--active");
	});



/*---------------------------------------------- Mobile location buttons */

	var showFilterBtn       = $('.showFilterBtn'),
		showFilterUl        = $('.customCategoryList ul'),
		locationsMapView    = $('.locations-map-view'),
		locationsListView   = $('.locations-list-view'),
		locationsMap        = $('#map-canvas0'),
		locationsFilterView = $('.filterView'),
		locationsFilterOverlay = $('.customCategoryListOverlay');

	function locationsMobileMenuHide(){
		showFilterUl.removeClass("show-cat-filter");
		locationsFilterOverlay.removeClass("customCategoryListOverlay--visible");
		locationsFilterView.removeClass("show-location-view-options");

	}


	showFilterBtn.on('click', function(){
		showFilterUl.toggleClass("show-cat-filter");
		locationsFilterView.toggleClass("show-location-view-options");
		locationsFilterOverlay.toggleClass("customCategoryListOverlay--visible");
	});

	// Show map or list view on mobile
	locationsListView.on('click', function(){
		locationsMap.removeClass("show-mobile-map");
		locationsMobileMenuHide()
	});
	
	locationsMapView.on('click', function(){
		locationsMap.addClass("show-mobile-map");
		locationsMobileMenuHide()
	});

});