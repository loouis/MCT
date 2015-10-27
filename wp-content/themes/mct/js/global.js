$(document).ready(function(){

	// Home tranding locations sliders
	// $('#trend-loc').bxSlider({
	//   mode: 'horizontal',
	// });
	
	$('#trend-loc').bxSlider({
	    mode: 'horizontal',
	    pagerType: 'short',
	    onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
	        // console.log(currentSlideHtmlObject);
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
  		autoControls: true
	});

	// Sticky social links in single blog posts
	$(".share-social-links").stick_in_parent();

	// Hamburger menu
	var $hamburger = $(".header-main__nav__hamburger-menu"),
		$logo = $(".logo"),
		$openNav = $(".logo, .header-main__nav__hamburger-menu"),
		$siteNav = $(".site-nav"),
		$mainHeader = $(".header-main");

	$openNav.on("click", function(){
		$siteNav.toggleClass("site-nav--active");
		$("body").toggleClass("body--is-fixed");
		$mainHeader.toggleClass("header-main--active");
	});


	$(window).on('resize scroll', function(){
		 var scroll = $(window).scrollTop(),
		 	winHeight = $(window).height(),
		 	mainHeader = $(".header-main__nav");


		 if (scroll >= winHeight - 140){
		 	mainHeader.addClass("has-solid-background");
		 }else{
			mainHeader.removeClass("has-solid-background");
		 }
	});


	// Mobile locations page ShowFilter button - toggle show categories

	var showFilterBtn       = $('.showFilterBtn'),
		showFilterUl        = $('.customCategoryList ul'),
		locationsMapView    = $('.locations-map-view'),
		locationsListView   = $('.locations-list-view'),
		locationsMap        = $('#map-canvas0'),
		locationsFilterView = $('.filterView');

	function locationsMobileMenuHide(){
		showFilterUl.removeClass("show-cat-filter");
		locationsFilterView.removeClass("show-location-view-options");
	}


	showFilterBtn.on('click', function(){
		showFilterUl.toggleClass("show-cat-filter");
		locationsFilterView.toggleClass("show-location-view-options");
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







	//set animation timing
	var animationDelay = 2500,
		//loading bar effect
		barAnimationDelay = 3800,
		barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
		//letters effect
		lettersDelay = 50,
		//type effect
		typeLettersDelay = 150,
		selectionDuration = 500,
		typeAnimationDelay = selectionDuration + 800,
		//clip effect 
		revealDuration = 600,
		revealAnimationDelay = 1500;
	
	initHeadline();
	

	function initHeadline() {
		//insert <i> element for each letter of a changing word
		singleLetters($('.cd-headline.letters').find('b'));
		//initialise headline animation
		animateHeadline($('.cd-headline'));
	}

	function singleLetters($words) {
		$words.each(function(){
			var word = $(this),
				letters = word.text().split(''),
				selected = word.hasClass('is-visible');
			for (i in letters) {
				if(word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
				letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
			}
		    var newLetters = letters.join('');
		    word.html(newLetters).css('opacity', 1);
		});
	}

	function animateHeadline($headlines) {
		var duration = animationDelay;
		$headlines.each(function(){
			var headline = $(this);
			
			if(headline.hasClass('loading-bar')) {
				duration = barAnimationDelay;
				setTimeout(function(){ headline.find('.cd-words-wrapper').addClass('is-loading') }, barWaiting);
			} else if (headline.hasClass('clip')){
				var spanWrapper = headline.find('.cd-words-wrapper'),
					newWidth = spanWrapper.width() + 10;
				// spanWrapper.css('width', newWidth);
			} else if (!headline.hasClass('type') ) {
				//assign to .cd-words-wrapper the width of its longest word
				var words = headline.find('.cd-words-wrapper b'),
					width = 0;
				words.each(function(){
					var wordWidth = $(this).width();
				    if (wordWidth > width) width = wordWidth;
				});
				// headline.find('.cd-words-wrapper').css('width', width);
			}

			//trigger animation
			setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
		});
	}

	function hideWord($word) {
		var nextWord = takeNext($word);
		
		if($word.parents('.cd-headline').hasClass('type')) {
			var parentSpan = $word.parent('.cd-words-wrapper');
			parentSpan.addClass('selected').removeClass('waiting');	
			setTimeout(function(){ 
				parentSpan.removeClass('selected'); 
				$word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
			}, selectionDuration);
			setTimeout(function(){ showWord(nextWord, typeLettersDelay) }, typeAnimationDelay);
		
		} else if($word.parents('.cd-headline').hasClass('letters')) {
			var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
			hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
			showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

		}  else if($word.parents('.cd-headline').hasClass('clip')) {
			$word.parents('.cd-words-wrapper').animate({ width : '2px' }, revealDuration, function(){
				switchWord($word, nextWord);
				showWord(nextWord);
			});

		} else if ($word.parents('.cd-headline').hasClass('loading-bar')){
			$word.parents('.cd-words-wrapper').removeClass('is-loading');
			switchWord($word, nextWord);
			setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay);
			setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('is-loading') }, barWaiting);

		} else {
			switchWord($word, nextWord);
			setTimeout(function(){ hideWord(nextWord) }, animationDelay);
		}
	}

	function showWord($word, $duration) {
		if($word.parents('.cd-headline').hasClass('type')) {
			showLetter($word.find('i').eq(0), $word, false, $duration);
			$word.addClass('is-visible').removeClass('is-hidden');

		}  else if($word.parents('.cd-headline').hasClass('clip')) {
			$word.parents('.cd-words-wrapper').animate({ 'width' : $word.width() + 10 }, revealDuration, function(){ 
				setTimeout(function(){ hideWord($word) }, revealAnimationDelay); 
			});
		}
	}

	function hideLetter($letter, $word, $bool, $duration) {
		$letter.removeClass('in').addClass('out');
		
		if(!$letter.is(':last-child')) {
		 	setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);  
		} else if($bool) { 
		 	setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay);
		}

		if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
			var nextWord = takeNext($word);
			switchWord($word, nextWord);
		} 
	}

	function showLetter($letter, $word, $bool, $duration) {
		$letter.addClass('in').removeClass('out');
		
		if(!$letter.is(':last-child')) { 
			setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration); 
		} else { 
			if($word.parents('.cd-headline').hasClass('type')) { setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('waiting'); }, 200);}
			if(!$bool) { setTimeout(function(){ hideWord($word) }, animationDelay) }
		}
	}

	function takeNext($word) {
		return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
	}

	function takePrev($word) {
		return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
	}

	function switchWord($oldWord, $newWord) {
		$oldWord.removeClass('is-visible').addClass('is-hidden');
		$newWord.removeClass('is-hidden').addClass('is-visible');
	}
});