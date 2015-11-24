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
        <div class="outter-wrapper">

            <?php while ( have_posts() ) : the_post(); ?>

            <section id="container" class="container intro-effect-sidefixed">

    			<header class="header">
    				<div class="bg-img"><?php the_post_thumbnail('desktop-largest');?></div>

                    <div class="social-and-review-container">
                          <?php echo do_shortcode("[wp-review]");?>

                        <?php 
                            $facebook_social_link = get_field('single_location_facebook_link');
                            $twitter_social_link = get_field('single_location_twitter_link');

                            if ($twitter_social_link): 
                        ?>

                        <a href="<?php the_field('single_location_twitter_link');?>" class="social-and-review-container__link">
                            <svg class="social-and-review-container__link__icon">
                                <use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-twitter" />
                            </svg>
                        </a>

                        <?php endif;?>

                        <?php if ( $facebook_social_link): ?>
                            <a href="<?php the_field('single_location_facebook_link');?>" class="social-and-review-container__link">
                                <svg class="social-and-review-container__link__icon">
                                    <use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-facebook" />
                                </svg>
                            </a>
                        <?php endif;?>
                    </div>
    			</header>
                
                <article class="content">
			        <div class="title">

                        <!-- Tags -->
                        <?php $posttags = wp_get_post_terms( get_the_ID() , 'post_tag' , 'fields=names' );?>

                        <?php if( $posttags ){ ?>
                            <p class="location-single__cat">
                        <?php echo implode( ' / ' , $posttags );?>
                            </p>
                        <?php } else{ ?>

                        <?php } ?>
                        <!-- // Tags -->
                        
    					<h1 class="location-single__location-name"><?php the_title(); ?></h1>
    					<!-- <h2 class="location-single__subhead-call-out"></h2> -->

    					<div data-info="SCROLL TO READ" class="trigger">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/icon-scroll-to-read-more.png" alt="" class="trigger__icon"/>
				       </div>

			        </div><!-- //Title -->


			        <div class="content-container">

                        <?php the_field('locations__the_content');?>

                        <?php wp_reset_postdata();?>


                        <!-- Carousel -->
                        <?php if (have_rows('locations_single__carousel')):?>

                            <ul class="location-single-slider" id="location-single-slider">

                                <?php while (have_rows('locations_single__carousel')): the_row();

                                // Vars
                                    $image = get_sub_field('locations-carousel__image');
                                ?> 

                                <li class="location-single-slider__slide">
                                    <img src="<?php echo $image; ?>" alt="">
                                </li>

                            <?php endwhile;?>

                            </ul>

                        <?php endif;?><!-- // Carousel -->

                        <?php wp_reset_postdata();?>

                        <!-- Purple inline job -->
                        <?php $purple_jobs = new WP_Query(array( 
                            'post_type' => 'purple_job', 
                            'posts_per_page' => 1,
                            'orderby' => 'rand')); 
                        ?>

                        <?php while($purple_jobs->have_posts() ) : $purple_jobs->the_post();?>
              
                        <section class="inline-jobs">
                            <div>
                                <p class="inline-jobs__latest-job-title">Latest Purple job</p>
                                <a href="http://www.purple-consultancy.com" target="_blank" class="inline-jobs__purple-view-all-jobs-link">
                                    <img src="<?php echo get_template_directory_uri();?>/images/powered-by-purple-lock-up.png" alt=""/>
                                </a>
                            </div>
                  
                            <a href="<?php the_field('purple_jobs_direct_link');?>">
                                <article class="inline-jobs__cell">
                                    <p class="inline-jobs__cell__money"><?php the_field('purple_jobs_money')?></p>
                                    <h5 class="inline-jobs__cell__job-role"><?php the_title();?></h5>
                                    <div class="inline-jobs__cell__desc"><?php the_content();?></div>
                                    <div class="inline-jobs__cell__direct-link">Read more</div>
                                </article>
                            </a>
                        </section>

                        <?php endwhile;?>
                        <?php wp_reset_postdata();?><!-- // Purple inline job -->


                    <div class="location-content-container">

                    <?php the_content();?> 
                
                        <section class="location-single-meta">

                            <article class="location-single-meta__address">
                                <a href="tel:<?php the_field('location_single_telephone_number')?>" target="_blank" class="location-single-meta__address__telephone">
                                    <?php 
                                    $phone_number = get_field('location_single_telephone_number');
                                    ?>
                                    <p><?php echo substr($phone_number, 0, 3)." ".substr($phone_number, 4, 4)." ".substr($phone_number,6);?></p>
                                </a>
                            </article>

                            <article class="location-single-meta__opening-times opening-times">
                                <h5 class="location-single-meta__title">Opening times</h5>
                                <ul class="opening-times__cells">

                                    <li class="opening-times__cells__cell">
                                        <span class="opening-times__cells__cell__date">Mon</span>
                                        <time class="opening-times__cells__cell__time">
                                            <p><?php the_field('single_location_monday_opening_time');?> - <?php the_field('single_location_monday_closing_time');?><?php if( get_field('single_location_monday_opening_time_2') ):?>
                                            , <?php the_field('single_location_monday_opening_time_2');?> - <?php the_field('single_location_monday_closing_time_2');?><?php endif; ?></p>
                                        </time>
                                    </li>

                                    <li class="opening-times__cells__cell">
                                        <span class="opening-times__cells__cell__date">Tues</span>
                                        <time class="opening-times__cells__cell__time">
                                            <p><?php the_field('single_location_tuesday_opening_time');?> - <?php the_field('single_location_tuesday_closing_timee');?><?php if( get_field('single_location_monday_opening_time_2') ):?>
                                            , <?php the_field('single_location_tuesday_opening_time_2');?> - <?php the_field('single_location_tuesday_closing_timee_2');?><?php endif; ?></p>
                                        </time>

                                    </li>
                                            
                                    <li class="opening-times__cells__cell">
                                        <span class="opening-times__cells__cell__date">Wed</span>
                                        <time class="opening-times__cells__cell__time">
                                            <p><?php the_field('single_location_wednesday_opening_time');?> - <?php the_field('single_location_wednesday_closing_time');?><?php if( get_field('single_location_monday_opening_time_2') ):?>
                                            , <?php the_field('single_location_wednesday_opening_time_2');?> - <?php the_field('single_location_wednesday_closing_time_2');?><?php endif; ?></p>
                                        </time>

                                    </li>
                                    
                                    <li class="opening-times__cells__cell">
                                        <span class="opening-times__cells__cell__date">Thurs</span>
                                        <time class="opening-times__cells__cell__time">
                                            <p><?php the_field('single_location_thursday_opening_time');?> - <?php the_field('single_location_thursday_closing_time');?><?php if( get_field('single_location_monday_opening_time_2') ):?>
                                            , <?php the_field('single_location_thursday_opening_time_2');?> - <?php the_field('single_location_thursday_closing_time_2');?><?php endif; ?></p>
                                        </time>

                                    </li>

                                    <li class="opening-times__cells__cell">
                                        <span class="opening-times__cells__cell__date">Fri</span>
                                        <time class="opening-times__cells__cell__time">
                                            <p><?php the_field('single_location_friday_opening_time');?> - <?php the_field('single_location_friday_closing_time');?><?php if( get_field('single_location_monday_opening_time_2') ):?>
                                            , <?php the_field('single_location_friday_opening_time_2');?> - <?php the_field('single_location_friday_closing_time_2');?><?php endif; ?></p>
                                        </time>
                                    </li>

                                    <li class="opening-times__cells__cell">
                                        <span class="opening-times__cells__cell__date">Sat</span>
                                        <time class="opening-times__cells__cell__time">
                                            <p><?php the_field('single_location_saturday_opening_time');?> - <?php the_field('single_location_saturday_closing_time');?><?php if( get_field('single_location_monday_opening_time_2') ):?>
                                            , <?php the_field('single_location_saturday_opening_time_2');?> - <?php the_field('single_location_saturday_closing_time_2');?><?php endif; ?></p>
                                        </time>
                                    </li>

                                    <li class="opening-times__cells__cell">
                                        <span class="opening-times__cells__cell__date">Sun</span>
                                        <time class="opening-times__cells__cell__time">
                                            <p><?php the_field('single_location_sunday_opening_time');?> - <?php the_field('single_location_sunday_closing_time');?><?php if( get_field('single_location_monday_opening_time_2') ):?>
                                            , <?php the_field('single_location_sunday_opening_time_2');?> - <?php the_field('single_location_sunday_closing_time_2');?><?php endif; ?></p>
                                        </time>
                                    </li>      
                                </ul>
                            </article>

                            <article class="location-single-meta__nearest-tube">
                                <h5 class="location-single-meta__title">Nearest tube</h5>
                                <p class="location-single-meta__nearest-tube__name"><?php the_field('single_location_underground_station')?></p>
                            </article>
            
                        </section><!-- // Location-single-meta -->
                    </div><!-- // Location-content-container -->
    			</div><!-- // Content-container -->
    		</article><!-- // Content -->
    	</section><!-- // Container -->
        <?php endwhile;?>
        <?php wp_reset_postdata(); ?>
    </main><!-- #main -->
</div><!-- #primary -->

<!-- Related location in same category -->
<section class="location-single__related-locations related-locations">
    <div class="outter-wrapper">
        <div class="main-wrapper">

            <hgroup class="title-block">
                <h3 class="title-block__title title-block__title--light-bg">You may also like…</h3>
            </hgroup>

            <?php 


            if ( wp_is_mobile() ) {
                $related_locations = new WP_Query(
                    array(
                        'post_type' => 'maplist',
                        // 'map_location_categories' => 'featured',
                        // 'taxonomy=map_location_categories&tag_ID=3',
                        'orderby' => 'rand',
                        'posts_per_page' => 3);
                    )
                );
            }else{
                $related_locations = new WP_Query(
                    array(
                        'post_type' => 'maplist',
                        // 'map_location_categories' => 'featured',
                        // 'taxonomy=map_location_categories&tag_ID=3',
                        'orderby' => 'rand',
                        'posts_per_page' => 6);
                    )
                );
            }

            // echo "$current_post_category";
            
            // echo "$getCatID[0]->cat_name;"
            ?>

            <ul class="related-locations__items">

                <?php while ($related_locations->have_posts() ) : $related_locations->the_post(); ?>

                <a href="<?the_permalink()?>" class="related-locations__items__item related-locations-cell">
                    <div class="related-locations-cell__container">
                        <?php the_post_thumbnail('smallest-news-cell');?>
                        <h4 class="related-locations-cell__title"><?php the_title(); ?></h4>
                    </div>
                </a>
            </ul>

            <?php endwhile;?>
            <?php wp_reset_postdata(); ?>
        </div>
        
    </div>
</section>
<!-- // Related location in same category -->

	<!-- Latest news -->
<section class="location-single__latest-news latest-news">
    <div class="outter-wrapper">
        <div class="main-wrapper">

            <hgroup class="title-block">
                <h3 class="title-block__title title-block__title--light-bg">Latest news</h3>
            </hgroup>

            <?php
                if ( wp_is_mobile() ) {
                    $latest_news = new WP_Query(array( 'posts_per_page' => 3));
                }else{
                    $latest_news = new WP_Query(array( 'posts_per_page' => 3));
                }
            ?>

            <ul class="latest-news__items">

                <?php while($latest_news->have_posts() ) : $latest_news->the_post();?>

                <a href="<?the_permalink()?>" class="latest-news__items__item news-cell">
                    <div class="news-cell__image">
                        <article class="news-cell__text">
                            <h4 class="news-cell__text__news-title"><?php the_title(); ?></h4>
                        </article>
                        <div class="news-cell__text__read-more-button">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-scroll-down-arrow--white" />
                            </svg>
                        </div>
                            
                        <?php
                            $thumb_id = get_post_thumbnail_id();

                            $smallest_thumb_url = wp_get_attachment_image_src($thumb_id,'smallest-news-cell', true);

                            $thumb_url = wp_get_attachment_image_src($thumb_id,'retina-smallest', true);

                            // get alt
                            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                        ?>

                        <picture>
                            <source media="(min-width: 960px)"
                            srcset="<?php echo $thumb_url[0]; ?> 1x">
                            <source 
                            srcset="<?php echo $smallest_thumb_url[0]; ?> 1x">
                            <img src="<?php echo $thumb_url[0]; ?>" alt="<?php echo $alt;?>">
                        </picture>
                        
                    </div>
                    <span class="news-cell__excerpt"><?php the_excerpt(); ?></span>
                </a>
                <?php endwhile; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
                    
        </div>
    </div>
</section><!-- #Latest news -->

<script>
	/* Blog single page hero animation */
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
