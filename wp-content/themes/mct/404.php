<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mct
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="outter-wrapper error-pg" role="main">
			
			<div class="error-pg__con">
				<h1 class="error-pg__con__title">…OOOPS!</h1>
				<p class="error-pg__con__text">Sorry, this wasn't the page you was looking for.</p>
				

				<div class="error-pg__con__links">
					<?php wp_nav_menu( 
						array( 
							'theme_location' => 'primary', 
							'menu_id' => 'error-menu',
							'menu_class' => 'error-pg__con__links__link' ) 
						); 
					?>
				</div>

			</div>
			


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
