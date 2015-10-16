<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php $blog_hero = new WP_Query( array( 'posts_per_page' => 4) );?>
			<?php if($blog_hero->have_posts() ) : $blog_hero->the_post(); ?>

				<section id="news-all-hero-slider" class="news-single-hero section-hero">

					<?php while($blog_hero->have_posts()) : $blog_hero->the_post();?>

						<div class="news-single-hero__slide" <?php if ( $thumbnail_id = get_post_thumbnail_id() ) {
				        	if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'desktop-largest' ) )
				            	printf( ' style="background-image: url(%s);"', $image_src[0] );     
				    		}?>>
							<div class="main-wrapper">
								<div class="news-single-hero__slide__text">
									<!-- Category-->
									<p class="news-single-hero__slide__text__news-cat">
										<?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory;?>
									</p>
									<!-- Title -->
									<h3 class="news-single-hero__slide__text__title"><?php the_title();?></h3>
								</div>
							</div>
						</div>

					<?php endwhile;?>
				</section>
			<?php endif;?>

			<?php wp_reset_query();?>

			<div class="latest-news">

				<?php if ( have_posts() ) : ?>

					<h1 class="latest-news__title">More news…</h1>

					<ul class="latest-news__items">
		
						<?php while( have_posts() ) : the_post();?>

							<?php if ($count == 1) : ?> 
								<a href="" class="latest-news__items__item latest-news__items__item--purple-ad all-blog-inline-purple-ad">
									<article class="all-blog-inline-purple-ad__text">
										<h4 class="all-blog-inline-purple-ad__text__news-title">SEEKING WORK  IN LONDON?</h4>
										<p class="all-blog-inline-purple-ad__text__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
									</article>
									<img src="<?php echo get_template_directory_uri();?>/images/all-blog-inline-purple-ad-image.jpg" alt="">
								</a>
							<?php endif; $count++; ?>

							<a href="<?the_permalink()?>" class="latest-news__items__item news-cell">
								<div class="news-cell__image">
									<article class="news-cell__text">
										<!-- <p class="news-cell__text__news-type">Purple blog</p> -->
										<h4 class="news-cell__text__news-title"><?php the_title(); ?></h4>
									</article>
									
									<?php the_post_thumbnail('retina-smallest');?>

								</div>
								<span class="news-cell__excerpt"><?php the_excerpt(); ?></span>
							</a>

						<?php endwhile; ?>
						
					</ul>
						
				<?php endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
