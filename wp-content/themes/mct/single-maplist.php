<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mct
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section id="container" class="container intro-effect-sidefixed">

					<header class="header">
						<div class="bg-img">
							<img src="assets/images/trending-locations-slide-image.jpg" alt=""/>
						</div>
					</header>

					<article class="content">

						<div class="title">
							<p class="location-single__cat">Drinks / Food / Music</p>
							<h1 class="location-single__location-name"><?php the_title(); ?></h1>
							<h2 class="location-single__subhead-call-out"></h2>
							
							<div data-info="SCROLL TO READ" class="trigger">
								<img src="assets/images/icon-scroll-to-read-more.png" alt="" class="trigger__icon"/>
							</div>
						</div>

						<div>

							<section class="location-single-meta">

								<article class="location-single-meta__address">
									<div class="location-single-meta__address__title">location</div>
									<address class="location-single-meta__address__address"></address><a href="tel:<?php the_field('location_single_telephone_number')?>" target="_blank" class="location-single-meta__address__telephone"><?php the_field('location_single_telephone_number')?></a>
								</article>
							

								<article class="location-single-meta__nearest-tube">

									<div class="location-single-meta__nearest-tube__icon">
										<p><?php the_field('single_location_underground_line')?></p>
									</div>

									<div class="location-single-meta__nearest-tube__name"><?php the_field('single_location_underground_station')?></div>
								</article>

								<article class="location-single-meta__opening-times opening-times">
									<div class="location-single-meta__opening-times__title">Opening times</div>
									<ul class="opening-times__cells">
									<li class="opening-times__cells__cell"><span class="opening-times__cells__cell__date">Mon:</span>
									<time class="opening-times__cells__cell__time"><?php the_field('single_location_monday_opening_time');?> - <?php the_field('single_location_monday_closing_time');?></time>
									</li>
									<li class="opening-times__cells__cell"><span class="opening-times__cells__cell__date">Tues:</span>
									<time class="opening-times__cells__cell__time"><?php the_field('single_location_tuesday_opening_time');?> - <?php the_field('single_location_tuesday_closing_time');?></time>
									</li>
									<li class="opening-times__cells__cell"><span class="opening-times__cells__cell__date">Wed:</span>
									<time class="opening-times__cells__cell__time"><?php the_field('single_location_wednesday_opening_time');?> - <?php the_field('single_location_wednesday_closing_time');?></time>
									</li>
									<li class="opening-times__cells__cell"><span class="opening-times__cells__cell__date">Thurs:</span>
									<time class="opening-times__cells__cell__time"><?php the_field('single_location_thursday_opening_time');?> - <?php the_field('single_location_thursday_closing_time');?></time>
									</li>
									<li class="opening-times__cells__cell"><span class="opening-times__cells__cell__date">Fri:</span>
									<time class="opening-times__cells__cell__time"><?php the_field('single_location_friday_opening_time');?> - <?php the_field('single_location_friday_closing_time');?></time>
									</li>
									<li class="opening-times__cells__cell"><span class="opening-times__cells__cell__date">Sat:</span>
									<time class="opening-times__cells__cell__time"><?php the_field('single_location_saturday_opening_time');?> - <?php the_field('single_location_saturday_closing_time');?></time>
									</li>
									<li class="opening-times__cells__cell"><span class="opening-times__cells__cell__date">Sun:</span>
									<time class="opening-times__cells__cell__time"><?php the_field('single_location_sunday_opening_time');?> - <?php the_field('single_location_sunday_closing_time');?></time>
									</li>
									</ul>
								</article>

								<div class="location-single-meta__map">
									<a href="#" target="_blank">View map</a>
								</div>

							</section>
						</div>
					</article>
				</section>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


	<script>
  (function() {
  	// detect if IE : from http://stackoverflow.com/a/16657946		
  	var ie = (function(){
  		var undef,rv = -1; // Return value assumes failure.
  		var ua = window.navigator.userAgent;
  		var msie = ua.indexOf('MSIE ');
  		var trident = ua.indexOf('Trident/');
  
  		if (msie > 0) {
  			// IE 10 or older => return version number
  			rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
  		} else if (trident > 0) {
  			// IE 11 (or newer) => return version number
  			var rvNum = ua.indexOf('rv:');
  			rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
  		}
  
  		return ((rv > -1) ? rv : undef);
  	}());
  
  
  	// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179					
  	// left: 37, up: 38, right: 39, down: 40,
  	// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
  	var keys = [32, 37, 38, 39, 40], wheelIter = 0;
  
  	function preventDefault(e) {
  		e = e || window.event;
  		if (e.preventDefault)
  		e.preventDefault();
  		e.returnValue = false;  
  	}
  
  	function keydown(e) {
  		for (var i = keys.length; i--;) {
  			if (e.keyCode === keys[i]) {
  				preventDefault(e);
  				return;
  			}
  		}
  	}
  
  	function touchmove(e) {
  		preventDefault(e);
  	}
  
  	function wheel(e) {
  		// for IE 
  		//if( ie ) {
  			//preventDefault(e);
  		//}
  	}
  
  	function disable_scroll() {
  		window.onmousewheel = document.onmousewheel = wheel;
  		document.onkeydown = keydown;
  		document.body.ontouchmove = touchmove;
  	}
  
  	function enable_scroll() {
  		window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
  	}
  
  	var docElem = window.document.documentElement,
  		scrollVal,
  		isRevealed, 
  		noscroll, 
  		isAnimating,
  		container = document.getElementById( 'container' ),
  		trigger = container.querySelector( '.trigger' );
  
  	function scrollY() {
  		return window.pageYOffset || docElem.scrollTop;
  	}
  	
  	function scrollPage() {
  		scrollVal = scrollY();
  		
  		if( noscroll && !ie ) {
  			if( scrollVal < 0 ) return false;
  			// keep it that way
  			window.scrollTo( 0, 0 );
  		}
  
  		if( classie.has( container, 'notrans' ) ) {
  			classie.remove( container, 'notrans' );
  			return false;
  		}
  
  		if( isAnimating ) {
  			return false;
  		}
  		
  		if( scrollVal <= 0 && isRevealed ) {
  			toggle(0);
  		}
  		else if( scrollVal > 0 && !isRevealed ){
  			toggle(1);
  		}
  	}
  
  	function toggle( reveal ) {
  		isAnimating = true;
  		
  		if( reveal ) {
  			classie.add( container, 'modify' );
  		}
  		else {
  			noscroll = true;
  			disable_scroll();
  			classie.remove( container, 'modify' );
  		}
  
  		// simulating the end of the transition:
  		setTimeout( function() {
  			isRevealed = !isRevealed;
  			isAnimating = false;
  			if( reveal ) {
  				noscroll = false;
  				enable_scroll();
  			}
  		}, 600 );
  	}
  
  	// refreshing the page...
  	var pageScroll = scrollY();
  	noscroll = pageScroll === 0;
  	
  	disable_scroll();
  	
  	if( pageScroll ) {
  		isRevealed = true;
  		classie.add( container, 'notrans' );
  		classie.add( container, 'modify' );
  	}
  	
  	window.addEventListener( 'scroll', scrollPage );
  	trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
  })();
  
  
</script>

<?php get_footer(); ?>
