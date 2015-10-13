<?php
/**
 * Template Name: Blog archive
 *
 *
 * @package mct
 */

get_header(); ?>

<?php 
	$temp = $wp_query; $wp_query= null;
	$wp_query = new WP_Query(); $wp_query->query('showposts=-1' . '&paged='.$paged);
?>

<?php if ($wp_query->have_posts()) : $wp_query->the_post(); ?>

	<!-- Hero section -->
	<!-- BG image -->
	<section class="news-single-hero section-hero">
		<div class="news-single-hero__slide">
			<div class="main-wrapper">
				<div class="news-single-hero__slide__text">
					<!-- Category-->
					<p class="news-single-hero__slide__text__news-cat">
					<?php the_field('featured_blog_posts');?>
					</p>
					<!-- Title -->
					<h3 class="news-single-hero__slide__text__title"><?php the_title();?></h3>
				</div>
			</div>
		</div>
	</section>
	<!-- // Hero section -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<ul class="latest-news__items">

					<?php while ( have_posts() ) : the_post(); ?>

					<a href="<?the_permalink()?>" class="latest-news__items__item news-cell">
						<div class="news-cell__image">
							<article class="news-cell__text">
								<!-- <p class="news-cell__text__news-type">Purple blog</p> -->
								<h4 class="news-cell__text__news-title"><?php the_title(); ?></h4>
							</article>
							<span class="news-cell__text__excerpt"><?php the_excerpt(); ?></span>
							<?php the_post_thumbnail('retina-smallest');?>
						</div>
					</a>

					<?php endwhile; ?>
					
				</ul>

				<?php endif; ?>



				<?php wp_reset_postdata(); ?>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>