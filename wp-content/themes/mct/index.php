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
 * @package mct
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<section class="latest-news latest-news--results">
	  				<div class="main-wrapper">

	  					<h3 class="latest-news__title">Latest news</h3>

						<?php if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php endif; ?>

						<ul class="latest-news__items">

							<?php while ( have_posts() ) : the_post(); ?>

	  						<a href="<?php the_permalink();?>" class="latest-news__items__item news-cell">
								<div class="news-cell__image">
									<article class="news-cell__text">
										<p class="news-cell__text__news-type">Purple blog</p>
										<h4 class="news-cell__text__news-title"><?php the_title();?></h4>
									</article>
									<p class="news-cell__text__excerpt"> <?php the_content();?></p>
									<img src="assets/images/blog-preview.png" alt=""/>
								</div>
							</a>

							<?php endwhile; ?>
							
						</ul>

	  				</div>
	  			<section>

	  		<?php else : ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
