<?php
/**
 * Template Name: Blog archive
 *
 *
 * @package mct
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>

			<?php $blog_cells = new WP_Query(array('posts_per_page' => -1)); ?>
			<?php if($blog_cells->have_posts() ) : $blog_cells->the_post();?>
				
				<ul class="latest-news__items">

					<?php while($blog_cells->have_posts() ) : $blog_cells->the_post();?>

						<?php if ($count == 2) : ?> 
							<a href="" class="latest-news__items__item news-cell">
								<div class="news-cell__image">
									<article class="news-cell__text">
										
										<h4 class="news-cell__text__news-title"> Ad here</h4>
									</article>
									<span class="news-cell__text__excerpt"></span>
									
								</div>
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

				<?php wp_reset_postdata(); ?>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>