<?php
/**
 * Template Name: About page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mct
 */

get_header(); ?>

	<?php if (have_posts()) : the_post(); ?>

		<!-- Hero section -->
		<section class="section-hero about-us__hero" <?php if ( $thumbnail_id = get_post_thumbnail_id() ) {
        	if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'desktop-largest' ) )
            	printf( ' style="background-image: url(%s);"', $image_src[0] );     
    		}?>>
			<div class="about-us__hero__mc-logo">
				<img src="images/" alt=""/>
			</div>
		</section><!-- // Hero section -->
		
		<!-- MCT mission statement -->
		<section class="about-purple__mission-statement">
			<article class="about-purple__mission-statement__text">
				<p><?php the_content();?></p>
			</article>
		</section><!-- // MCT mission statement -->

		
		<!-- About Purple -->
		<section class="about-us__about-purple">
			<div class="main-wrapper">
				<div class="about-us__about-purple__partnership-logos"></div>
				<p class="about-us__about-purple__opening-para"><?php the_field('about_page_purple_text')?></p>
				<p>Creating jobs for…</p>

				<div class="about-us__about-purple__job-sectors job-sectors">

					<?php if (have_rows('about_page_purple_job_cats')):?>

					<?php while (have_rows('about_page_purple_job_cats')): the_row();

						// Vars
						$link = get_sub_field('purple_job_cats_link');
						$image = get_sub_field('purple_job_cats_image');
						$title = get_sub_field('purple_job_cats_title');
					 ?> 

					<a href="<?php echo $link; ?>" target="_blank" class="job-sectors__sector">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
						<p class="job-sectors__sector__text"><?php echo $title; ?></p>
					</a>

				<?php endwhile;?>

				<?php endif;?>
				</div>
			</div>
		</section><!-- // About Purple -->

	<?php endif; wp_reset_postdata();?>

	<?php $latest_news = new WP_Query(array( 'posts_per_page' => 6,)); ?>

		<div class="main-wrapper">
			<ul class="latest-news__items">

				<?php while($latest_news->have_posts() ) : $latest_news->the_post();?>

				<a href="<?the_permalink()?>" class="latest-news__items__item news-cell">
					<div class="news-cell__image">
						<article class="news-cell__text">
							<h4 class="news-cell__text__news-title"><?php the_title(); ?></h4>
						</article>
						<span class="news-cell__text__excerpt"><?php the_excerpt(); ?></span>
						<?php the_post_thumbnail('retina-smallest');?>
					</div>
				</a>

				<?php endwhile; ?>

			</ul>

		<?php wp_reset_postdata(); ?>

		</div>
	</section><!-- #Latest news -->



<?php get_footer(); ?>
