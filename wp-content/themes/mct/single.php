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

		<!-- Hero section -->
		<!-- BG image -->
		<section class="news-single-hero section-hero"<?php if ( $thumbnail_id = get_post_thumbnail_id() ) {
        	if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'desktop-largest' ) )
            	printf( ' style="background-image: url(%s);"', $image_src[0] );     
    		}?>>

			<div class="news-single-hero__slide">
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
				    	<?php echo do_shortcode("[ssba]"); ?>
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

												<p class="inline-jobs__title">Latest Purple job</p>
												<a href="http://www.purple-consultancy.com" target="_blank" class="inline-jobs__purple-view-all-jobs-link">
													<img src="<?php echo get_template_directory_uri();?>/images/powered-by-purple-lock-up.png" alt=""/>
												</a>
												
												<a href="<?php the_field('purple_jobs_direct_link');?>">
													<article class="inline-jobs__cell">
														<p class="inline-jobs__cell__money"><?php the_field('purple_jobs_money')?></p>
														<h5 class="inline-jobs__cell__job-role"><?php the_title();?></h5>
														<div class="inline-jobs__cell__desc"><?php the_content();?></div>
														<a href="<?php the_field('purple_jobs_direct_link');?>" target="_blank" class="inline-jobs__cell__direct-link">
															Read more
														</a>
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
	    	<h4 class="news-single__more-news__title">Other news you may be interested in…</h4>
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

				<a href="<? the_permalink()?>" class="latest-news__items__item news-cell">
					<div class="news-cell__image">
						<article class="news-cell__text">
							<!-- <p class="news-cell__text__news-type">Purple blog</p> -->
							<h4 class="news-cell__text__news-title"><?php the_title(); ?></h4>
						</article>
						<span class="news-cell__text__excerpt"><?php the_excerpt(); ?></span>
						<?php the_post_thumbnail('retina-smallest');?>
					</div>
				</a>
	     
				<? }
					}
				$post = $orig_post;
				wp_reset_query();
				?>
			</ul>	
		</div>
	</section>




<?php get_footer(); ?>
