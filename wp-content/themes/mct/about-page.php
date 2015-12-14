<?php
/**
 * Template Name: About page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mct
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="outter-wrapper" role="main">

		<?php if (have_posts()) : the_post(); ?>

		<!-- Hero section -->
		<section class="section-hero about-us__hero" <?php if ( $thumbnail_id = get_post_thumbnail_id() ) {
        	if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'desktop-largest' ) )
            	printf( ' style="background-image: url(%s);"', $image_src[0] );     
    		}?>>
			<div class="about-us__hero__mc-logo">
				<img src="<?php echo get_template_directory_uri();?>/images/mct-logo--white.png" alt=""/>
			</div>
		</section><!-- // Hero section -->
			
		<div class="about-purple__main-content">
			<!-- MCT mission statement -->
			<section class="about-purple__mission-statement">
				<article class="about-purple__mission-statement__text">

					<h2 class="about-purple__mission-statement__text__tagline"><?php bloginfo('description'); ?></h2>

					<p><?php the_content();?></p>

					<ul class="social-icons">
						<?php 
						$mct_facebook_link = get_field( 'mct_facebook_link', 'option' );
						$mct_twitter_link = get_field( 'mct_twitter_link', 'option' );
						$mct_instagram_link = get_field( 'mct_instagram_link', 'option' );	
						
						if ( $mct_facebook_link ) { ?>
						<a href="<?php echo $mct_facebook_link ?>" target="_blank" class="social-icons__icon">
							<svg class="social-icons__icon">
								<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-social-white_circle-facebook" />
							</svg>
						</a>
						<?php } ?>

						<?php if ($mct_twitter_link){ ?>
						<a href="<?php echo $mct_facebook_link ?>" target="_blank" class="social-icons__icon">
							<svg class="social-icons__icon">
								<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-social-white_circle-twitter" />
							</svg>
						</a>
						<?php } ?>
						<?php if ( $mct_instagram_link ) { ?>
							<a href="<?php echo $mct_instagram_link?>" target="_blank" class="social-icons__icon">
							<svg class="social-icons__icon">
								<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-social-white_circle-instagram" />
							</svg>
						</a>
						<?php } ?>
					</ul>
				</article>
			</section><!-- // MCT mission statement -->

			
			<!-- About Purple -->
			<section class="about-us__about-purple">
				<div class="main-wrapper">
					<div class="about-us__about-purple__partnership-logos">
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#purple_logo-black" />
						</svg>
					</div>
					<p class="about-us__about-purple__opening-para"><?php the_field('about_page_purple_text')?></p>
<!-- 					<p>Creating jobs for…</p>
 -->
					<div class="about-us__about-purple__job-sectors job-sectors">

						<?php if (have_rows('about_page_purple_job_cats')):?>

						<?php while (have_rows('about_page_purple_job_cats')): the_row();

							// Vars
							$link = get_sub_field('purple_job_cats_link');
							$image = get_sub_field('purple_job_cats_image');
							$title = get_sub_field('purple_job_cats_title');
						 ?> 

						<a href="<?php echo $link; ?>" target="_blank" class="job-sectors__sector">
							<img class="job-sectors__sector__image" src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>"/>
							<p class="job-sectors__sector__text"><?php echo $title; ?></p>
						</a>

					<?php endwhile;?>

					<?php endif;?>
					</div>

					<a href="http://www.purple-consultancy.com" class="button">
						<p class="button__text">View all jobs</p>
						<span class="button__first-color"></span>
					</a>
				</div>
			</section><!-- // About Purple -->
		</div><!-- // About-purple__main-content -->

	<?php endif; wp_reset_postdata();?>

	<?php $latest_news = new WP_Query(array( 'posts_per_page' => 3,)); ?>


		<div class="main-wrapper about-page-more-news-wrapper">

			<hgroup class="title-block">
				<h3 class="title-block__title  title-block__title--light-bg">Latest news</h3>
			</hgroup>

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

		<a href="<?php echo get_site_url(); ?>/blog" class="button">
			<p class="button__text">More news</p>
			<span class="button__first-color"></span>
		</a>

		</div>
	</section><!-- #Latest news -->
	</main>
</div>



<?php get_footer(); ?>
