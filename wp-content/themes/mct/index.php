<?php
/**
 * The main template file.
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="outter-wrapper">

			<?php if ( wp_is_mobile() ) {

				}else{ ?>

					<?php $blog_hero = new WP_Query( array( 'posts_per_page' => 4) );?>
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
					<?php wp_reset_query();?>

				<?php }?>				

					

				<div class="latest-news">
					<div class="main-wrapper">

					<?php if ( have_posts() ) : ?>

						<?php if ( wp_is_mobile() ) { ?>
							<h1 class="latest-news__title">Latest news…</h1>
						<?php } else { ?>
							<h1 class="latest-news__title">More news…</h1>
						<?php } ?>

						<ul class="latest-news__items">
			
							<?php while( have_posts() ) : the_post();?>

								<?php if ($count == 1) : ?> 
									<a href="<?php the_field('mct_blog_advert_link','options');?>" class="latest-news__items__item latest-news__items__item--purple-ad all-blog-inline-purple-ad">
										<article class="all-blog-inline-purple-ad__text">
											<h4 class="all-blog-inline-purple-ad__text__news-title"><?php the_field('mct_blog_advert_title', 'options')?></h4>
											<?php the_field('mct_blog_advert_text', 'options')?>
											<p class="all-blog-inline-purple-ad__text__read-more">Read more</p>
										</article>
										<div class="all-blog-inline-purple-ad__powered-by-purple">
											<svg class="all-blog-inline-purple-ad__powered-by-purple__logo">
												<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#logo-purple" />
											</svg>
										</div>
										<img src="<?php the_field('mct_blog_advert_image', 'options')?>" alt="">
									</a>
								<?php endif; $count++; ?>

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
							
					<?php endif; ?>
					</div><!-- // Main wrapper -->
				</div>
			</div><!-- // Outter wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
