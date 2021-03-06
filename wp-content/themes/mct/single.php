<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mct
 */

get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="outter-wrapper">
					<!-- Hero section -->
					<!-- BG image -->
					<section class="news-single-hero section-hero">

						<?php
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'desktop-largest', true);
							// get alt
							$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
						?>
						<img src="<?php echo $thumb_url[0]; ?>" class="section-hero__bg__con__img myBackgroundImage wow fadeIn" data-wow-duration="2s" alt="<?php echo $alt;?>"/>


						<div class="news-single-hero__slide">
							<div class="main-wrapper">
								<div class="news-single-hero__slide__text">
									<!-- Category-->
									<p class="news-single-hero__slide__text__news-cat wow fadeIn" data-wow-delay="1.4s">
										<?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory;?>
									</p>
									<!-- Title -->
									<h3 class="news-single-hero__slide__text__title wow fadeInUp" data-wow-delay="1s"><?php the_title();?></h3>
								</div>
							</div>

						</div>


					</section>
					<!-- // Hero section -->
					<section class="news-single-post">
			  			<div class="main-wrapper">

							<!-- Author -->
						  	<div class="meta">
						      <div class="meta__avatar">
						      	<?php echo get_avatar( get_the_author_meta('user_email'), $size = '140'); ?>
						      </div>
						      <p class="meta__writers-name"><?php the_author() ?> / &nbsp;</p>
						      <p class="meta__date-posted"><?php the_date(); ?></p>
						    </div>


							<!-- The content -->
							<article class="news-single-post__content">

								<!-- Social share -->
							    <aside class="share-social-links">

							    	<div class="share-social-links__button">
							    		<img src="<?php echo get_template_directory_uri();?>/images/icon-cross-white.png" alt="">
							    	</div>

							    	<div class="share-social-links__container">
							    		<?php echo do_shortcode("[ssba]"); ?>
							    	</div>
							    </aside><!-- // Social share -->
								
								<div class="wrapper">

									<!-- Pull Purple advert at random and place after second paragraph -->
									<?php
										$content = apply_filters('the_content', get_the_content());

										$paragraphAfter = 3; 
			    						$content = explode("</p>", $content);

			    						for ($i = 0; $i < count($content); $i++) {
									        if ($i == $paragraphAfter) {?>

									        <?php wp_reset_postdata();?>

									            <?php $purple_jobs = new WP_Query(array( 
									            	'post_type' => 'purple_job', 
									            	'posts_per_page' => 1,
									            	'orderby' => 'rand')); ?>

													<?php while($purple_jobs->have_posts() ) : $purple_jobs->the_post();?>
														<section class="inline-jobs">
															<div>
																<p class="inline-jobs__latest-job-title">Latest Purple job</p>
																<a href="http://www.purple-consultancy.com" target="_blank" class="inline-jobs__purple-view-all-jobs-link">
																	<img src="<?php echo get_template_directory_uri();?>/images/powered-by-purple-lock-up.png" alt=""/>
																</a>
															</div>
															
															<a href="<?php the_field('purple_jobs_direct_link');?>" onClick="_gaq.push([‘_trackEvent’, ‘Purple jobs’, ‘Clicking job’, ‘Jobs’, ‘0’]);">
																<article class="inline-jobs__cell">
																	<p class="inline-jobs__cell__money"><?php the_field('purple_jobs_money')?></p>
																	<h5 class="inline-jobs__cell__job-role"><?php the_title();?></h5>
																	<div class="inline-jobs__cell__desc"><?php the_content();?></div>
																	<div class="inline-jobs__cell__direct-link">Read more</div>
																</article>
															</a>

														</section>

													<?php endwhile;?>
													<?php wp_reset_postdata();?>

									       <?php }

									        echo $content[$i] . "</p>";
									    } wp_reset_postdata();?>
								</div>
							</article>

						</div>
					</section>

				<?php endwhile; else: ?>

					<p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p>

				<?php endif; ?>

				<!-- Show related posts -->
				<section class="news-single__more-news">
				    
			    	<div class="main-wrapper">

				    	<h4 class="news-single__more-news__title">Other news…</h4>
				    	
					    <ul class="news-single__more-news__items">
					    	<?php $orig_post = $post;
						    global $post;
						    $tags = wp_get_post_tags($post->ID);
						     
						    if ($tags) {
						    	$tag_ids = array();
						    	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
						    	$args=array(
							    'tag_in' => $tag_ids,
							    'post_not_in' => array($post->ID),
							    'posts_per_page'=>3, // Number of related posts to display.
							    'caller_get_posts'=>1
						    );
						     
						    $my_query = new wp_query( $args );
						 
						    while( $my_query->have_posts() ) {
						    	$my_query->the_post();
						    ?>

							<a href="<?the_permalink()?>" class="latest-news__items__item news-cell">
								<div class="news-cell__image">
									<article class="news-cell__text">
										<!-- <p class="news-cell__text__news-type">Purple blog</p> -->
										<h4 class="news-cell__text__news-title"><?php the_title(); ?></h4>
									</article>
									<div class="news-cell__text__read-more-button">
										<svg>
											<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-scroll-down-arrow--white" />
										</svg>
									</div>
									
									<?php the_post_thumbnail('retina-smallest');?>

								</div>
								<span class="news-cell__excerpt"><?php the_excerpt(); ?></span>
							</a>
				     
							<? }
								}
							$post = $orig_post;
							wp_reset_query();
							?>
						</ul>

						<a href="<?php echo get_site_url(); ?>/blog" class="button news-single__read-more-button">
							<p class="button__text">see all news</p>
							<span class="button__first-color"></span>
						</a>
							
					</div>
				</section>
			</div>
		</main>
	</div>




<?php get_footer(); ?>
