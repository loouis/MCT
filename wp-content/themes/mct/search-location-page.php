<?php
/**
 * Template Name: Search page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mct
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="outter-wrapper">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content();?>

				<?php endwhile; // End of the loop. ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php include (TEMPLATEPATH . '/locations-footer.php'); ?>