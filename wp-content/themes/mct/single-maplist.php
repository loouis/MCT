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

            <section id="container" class="container">

    			<header class="header wow fadeIn" data-wow-duration="2s">

                    <?php if ( wp_is_mobile() ) { ?>
                        <div class="bg-img"<?php if ( $thumbnail_id = get_post_thumbnail_id() ) {
                        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'desktop-largest' ) )
                            printf( ' style="background-image: url(%s);"', $image_src[0] );     
                        }?>></div>
                    <?php }else{ ?>
                        <div class="bg-img"<?php if ( $thumbnail_id = get_post_thumbnail_id() ) {
                        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'desktop-largest' ) )
                            printf( ' style="background-image: url(%s);"', $image_src[0] );     
                        }?>></div>
                    <?php } ?>
    			</header>
                
                <div class="viewport-height"></div>


                <article class="content">

			        <div class="title">
                        <!-- Tags -->
                        <?php $posttags = wp_get_post_terms( get_the_ID() , 'post_tag' , 'fields=names' );?>

                        <?php if( $posttags ){ ?>
                            <p class="location-single__cat wow fadeInUp" data-wow-delay="1s">
                        <?php echo implode( ' / ' , $posttags );?>
                            </p>
                        <?php } else{ ?>

                        <?php } ?>
                        <!-- // Tags -->
                        
    					<h1 class="location-single__location-name wow fadeInUp" data-wow-delay="0.7s" data-wow-offset="-200"><?php the_title(); ?></h1>
    					<!-- <h2 class="location-single__subhead-call-out"></h2> -->

    					<div data-info="SCROLL TO READ" class="trigger wow fadeIn" data-wow-delay="1.4s" data-wow-offset="-2000">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/icon-scroll-to-read-more.png" alt="" class="trigger__icon"/>
				       </div>

			        </div><!-- //Title -->

                    <div class="social-and-review-container">

                        <div class="wow fadeIn" data-wow-delay="1.5s">
                            <?php echo do_shortcode("[wp-review]");?>
                        </div>

                        <div class="social-and-review-container__block">

                            <?php if ( get_field('single_location_twitter_link') ): ?>

                            <a href="<?php the_field('single_location_twitter_link');?>" class="social-and-review-container__link wow scale" data-wow-delay="1.2s">
                                <svg class="social-and-review-container__link__icon">
                                    <use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-twitter" />
                                </svg>
                            </a>

                            <?php endif;?>

                            <?php if ( get_field('single_location_facebook_link') ): ?>
                                <a href="<?php the_field('single_location_facebook_link');?>" class="social-and-review-container__link wow scale" data-wow-delay="1.35s">
                                    <svg class="social-and-review-container__link__icon">
                                        <use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-facebook" />
                                    </svg>
                                </a>
                            <?php endif;?>

                        </div>
                    </div>

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
                                    <p><?php echo substr($phone_number, 0, 3)." ".substr($phone_number, 3, 4)." ".substr($phone_number,7);?></p>
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

            $posts = get_field('related_locations');

            if( $posts ): ?>

            <ul class="related-locations__items">

            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>


                <a href="<?php the_permalink();?>" class="related-locations__items__item related-locations-cell">
                    <div class="related-locations-cell__container">


                        <div class="related-locations-cell__container__image">
                            <div class="related-locations-cell__container__image__read-more-button">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-scroll-down-arrow--white" />
                                </svg>
                            </div>
                            <?php the_post_thumbnail('smallest-news-cell');?>                        
                        </div>

                        <h4 class="related-locations-cell__title"><?php the_title(); ?></h4>
                    </div>
                </a>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>

            </ul>

            <a href="<?php echo get_site_url(); ?>/locations" class="button">
                <p class="button__text">View all</p>
                <span class="button__first-color"></span>
            </a>
        </div>
        
    </div>
</section>
<!-- // Related location in same category -->



<?php get_footer(); ?>
