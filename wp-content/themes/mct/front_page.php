<?php
/**
 * Template Name: Front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mct
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Video hero -->
			<section class="home-hero">
				<div class="home-hero__grad-overlay"></div>
				<div class="outter-wrapper">
					<div class="home-hero__text">
						<h1 class="home-hero__text__title wow fadeIn">My<br/>Creative<br/> Town</h1>
						<p class="home-hero__text__tagline wow fadeIn"><?php bloginfo('description'); ?></p>
					</div>
					<div class="home-hero__scroll-down-arrow">
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-scroll-down-arrow--white" />
						</svg>
					</div>
				</div>

				<video autoplay="autoplay" loop="loop" poster="<?php echo get_template_directory_uri();?>/images/home-hero-video-image-fallback.jpg" id="bgvid" class="home-hero__video wow fadeIn" data-wow-delay="1.2s">
					<source src="https://s3-eu-west-1.amazonaws.com/my-creative-town/home-hero-video.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'/>
					<!-- <source src="https://s3-eu-west-1.amazonaws.com/my-creative-town/home-hero-video.mov" type="video/mp4"/> -->
					<source src="https://s3-eu-west-1.amazonaws.com/my-creative-town/home-hero-video.webm" type='video/webm;codecs="vp8, vorbis"'/>
					<source src="https://s3-eu-west-1.amazonaws.com/my-creative-town/home-hero-video.ogv" type="video/ogv; codecs=dirac, speex"/>
				</video>
			</section><!-- #video hero -->

			<section class="image-location-filter ilf">
				<div class="main-wrapper">

					<hgroup class="title-block">
						<h3 class="title-block__title small-underline wow fadeInDown"><?php the_field('section1__locations__title');?></h3>
						<p class="title-block__sub-text wow fadeInDown"><?php the_field('section1__locations__text');?></p>
					</hgroup>
					

					<div class="ilf__container">

						<!-- Top conatiner -->
						<div class="ilf__container--top">

							<div class="ilf__container__split ilf__cells">
								<div class="ilf__cells__cell ilf__cells__cell--large-square wow fadeIn" data-wow-delay="0.5s">
									<article class="ilf__cells__cell__text">
										<h2 class="ilf__cells__cell__text__sub-title">Fancy</h2>
										<ul class="ilf__cells__cell__text__slider">
											<li class="ilf__cells__cell__text__slider__slide">
												<?php the_field('rotating_text_1');?>
											</li>
											<li class="ilf__cells__cell__text__slider__slide">
												<?php the_field('rotating_text_2');?>
											</li>
											<li class="ilf__cells__cell__text__slider__slide">
												<?php the_field('rotating_text_3');?>
											</li>
											<li class="ilf__cells__cell__text__slider__slide">
												<?php the_field('rotating_text_4');?>
											</li>
										</ul>
									</article>

									<a href="<?php echo site_url();?>/locations" class="ilf__cells__cell__locations-link">
										<span class="ilf__cells__cell__locations-link__link">View all locations</span>
									</a>

									<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--large-text-block.jpg" alt=""/>
								</div>
							</div>

							<div class="ilf__container__split ilf__cells">

								<!-- Bars -->
								<a href="<?php echo get_site_url(); ?>/locations/?locationSearchTerms=bars">
									<div class="ilf__cells__cell ilf__cells__cell--long-thin wow fadeIn" data-wow-delay="0.1s">
										<figure class="ilf__cells__cell__fig">
											<div class="ilf__cells__cell__fig__text-con">
												<div class="ilf__cells__cell__fig__text-con__image">
													<svg class="ilf__cells__cell__fig__text-con__image__icon">
														<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-bars" />
													</svg>
												</div>
												<div class="ilf__cells__cell__fig__text-con__title">Bars</div>
											</div>
											<picture>
												<source media="(min-width: 500px)"
												srcset="<?php echo get_template_directory_uri();?>/images/ilf-images--bar.jpg 1x">
												<source 
												srcset="<?php echo get_template_directory_uri();?>/images/ilf-images--bar-small.jpg 1x">
												<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--bar.jpg" alt="" class="ilf__cells__cell__fig__image">
											</picture>
										</figure>
									</div>
								</a><!-- //Bars -->
								
								<!-- Restaurants -->
								<a href="<?php echo get_site_url(); ?>/locations/?locationSearchTerms=restaurants">
									<div class="ilf__cells__cell ilf__cells__cell--normal-sqaure wow fadeIn" data-wow-delay="0.3s">
										<figure class="ilf__cells__cell__fig">
											<div class="ilf__cells__cell__fig__text-con">
												<div class="ilf__cells__cell__fig__text-con__image">
													<svg class="ilf__cells__cell__fig__text-con__image__icon">
														<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-restaurant" />
													</svg>
												</div>
												<div class="ilf__cells__cell__fig__text-con__title">Restaurants</div>
											</div>
											<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--restaurants.jpg" alt="" class="ilf__cells__cell__fig__image"/>
										</figure>
									</div>
								</a><!-- //Restaurants -->
								
								<!-- Entertainment -->
								<a href="<?php echo get_site_url(); ?>/locations/?locationSearchTerms=entertainment">
									<div class="ilf__cells__cell ilf__cells__cell--normal-sqaure ilf__cells__cell--normal-sqaure-right wow fadeIn" data-wow-delay="0.5s">
										<figure class="ilf__cells__cell__fig">
											<div class="ilf__cells__cell__fig__text-con">
												<div class="ilf__cells__cell__fig__text-con__image">
													<svg class="ilf__cells__cell__fig__text-con__image__icon">
														<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-entertainment" />
													</svg>
												</div>
												<div class="ilf__cells__cell__fig__text-con__title">Entertainment</div>
											</div>
											<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--entertainment.jpg" alt="" class="ilf__cells__cell__fig__image"/>
										</figure>
									</div>
								</a><!-- //Entertainment -->

							</div>
						</div><!-- #Top conatiner -->

						<!-- Bottom conatiner -->
						<div class="ilf__container--bottom">

							<!-- Night Clubs -->
							<a href="<?php echo get_site_url(); ?>/locations/?locationSearchTerms=night%20clubs">
								<div class="ilf__cells__cell ilf__cells__cell--normal-sqaure wow fadeIn" data-wow-delay="0.2s">
									<figure class="ilf__cells__cell__fig">
										<div class="ilf__cells__cell__fig__text-con">
											<div class="ilf__cells__cell__fig__text-con__image">
												<svg class="ilf__cells__cell__fig__text-con__image__icon">
													<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-nightclubs" />
												</svg>
											</div>
											<div class="ilf__cells__cell__fig__text-con__title">Night clubs</div>
										</div>
										<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--night-clubs.jpg" alt="" class="ilf__cells__cell__fig__image"/>
									</figure>
								</div>
							</a><!-- //Night Clubs -->
							
							<!-- Cafes -->
							<a href="<?php echo get_site_url(); ?>/locations/?locationSearchTerms=cafes">
								<div class="ilf__cells__cell ilf__cells__cell--long-thin wow fadeIn" data-wow-delay="0.4s">
									<figure class="ilf__cells__cell__fig">
										<div class="ilf__cells__cell__fig__text-con">
											<div class="ilf__cells__cell__fig__text-con__image">
												<svg class="ilf__cells__cell__fig__text-con__image__icon">
													<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-cafes" />
												</svg>
											</div>
											<div class="ilf__cells__cell__fig__text-con__title">Cafes</div>
										</div>
										<picture>
											<source media="(min-width: 960px)"
											srcset="<?php echo get_template_directory_uri();?>/images/ilf-images--cafes.jpg 1x, <?php echo get_template_directory_uri();?>/images/ilf-images--cafes.jpg 2x">
											<source 
											srcset="<?php echo get_template_directory_uri();?>/images/ilf-images--cafes-small.jpg 1x, <?php echo get_template_directory_uri();?>/images/ilf-images--cafes-small.jpg 2x">
											<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--cafes.jpg" alt="" class="ilf__cells__cell__fig__image">
										</picture>
									</figure>
								</div>
							</a><!-- //Cafes -->
							
							<!-- Hotels -->
							<a href="<?php echo get_site_url(); ?>/locations/?locationSearchTerms=hotels">
								<div class="ilf__cells__cell ilf__cells__cell--normal-sqaure ilf__cells__cell--normal-sqaure-right wow fadeIn" data-wow-delay="0.2s">
									<figure class="ilf__cells__cell__fig">
										<div class="ilf__cells__cell__fig__text-con">
											<div class="ilf__cells__cell__fig__text-con__image">
												<svg class="ilf__cells__cell__fig__text-con__image__icon">
													<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-hotels" />
												</svg>
											</div>
											<div class="ilf__cells__cell__fig__text-con__title">Hotels</div>
										</div>
										<picture>
											<source media="(min-width: 960px)"
											srcset="<?php echo get_template_directory_uri();?>/images/ilf-images--hotels.jpg 1x">
											<source media="(min-width: 500px)"
											srcset="<?php echo get_template_directory_uri();?>/images/ilf-images--hotels-small.jpg 1x">
											<source 
											srcset="<?php echo get_template_directory_uri();?>/images/ilf-images--hotels.jpg 1x">
											<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--hotels.jpg" alt="" class="ilf__cells__cell__fig__image">
										</picture>
									</figure>
								</div>
							</a><!-- //Hotels -->
						</div>
					</div>
				</div>
			</section><!-- #Location filter -->

			<!-- Trending locations -->
			<section class="trending-locations">
				<div class="outter-wrapper">

					<hgroup class="title-block">
						<h3 class="title-block__title small-underline"><?php the_field('section2__trending__title');?></h3>
						<p class="title-block__sub-text"><?php the_field('section2__trending__text');?></p>
					</hgroup>
					
					<div>
						<div class="trending-locations__slider-container trend-loc">

							<?php $featured_locations = new WP_Query(array( 
								'post_type' => 'maplist',
								'map_location_categories' => 'featured',
								// 'taxonomy=map_location_categories&tag_ID=3',
								'orderby' => 'rand',
							 	'posts_per_page' => 6)); 
							 	?>


							<ul id="trend-loc" class="trend-loc__slider">

								<?php while($featured_locations->have_posts() ) : $featured_locations->the_post();?>

								<li class="trend-loc__slider__slide">
									<div>
										<a href="<?php the_permalink();?>">
											<div class="trend-loc__slider__slide__text">
												<p class="trend-loc__slider__slide__text__location">
												<!-- Query post tags -->
												<?php $posttags = wp_get_post_terms( get_the_ID() , 'post_tag' , 'fields=names' );?>
													<?php if( $posttags ){ ?>
										            	<?php echo implode( ' / ' , $posttags );?>
										          	<?php } else{ ?><?php } ?>
												</p><!-- // Tags -->
												<h3 class="trend-loc__slider__slide__text__title"><?php the_title();?></h3>
												<p class="trend-loc__slider__slide__text__para"><?php echo(get_the_excerpt()); ?></p>

												<div class="trend-loc__slider__slide__read-more-button">
													<p class="trend-loc__slider__slide__read-more-button__text">Read more</p> 
													<svg>
														<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-scroll-down-arrow--white" />
													</svg>
												</div>
											</div>
										</a>
									</div>
									<?php
										$thumb_id = get_post_thumbnail_id();

										$large_thumb_url = wp_get_attachment_image_src($thumb_id,'desktop-largest', true);

										$thumb_url = wp_get_attachment_image_src($thumb_id,'retina-smallest', true);

										// get alt
										$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
									?>

									<picture>
										<source media="(min-width: 800px)"
										srcset="<?php echo $large_thumb_url[0]; ?> 1x">
										<source 
										srcset="<?php echo $thumb_url[0]; ?> 1x">
										<img src="<?php echo $large_thumb_url[0]; ?>" alt="<?php echo $alt;?>" class="trend-loc__slider__slide__image-con__image">
									</picture>
								</li>

								<?php endwhile;?>
								<?php wp_reset_postdata(); ?>

							</ul>
						</div>
					</div>
				</div>
			</section><!-- #Trending locations -->


			<!-- Latest news -->
			<section class="latest-news">

				<?php $latest_news = new WP_Query(array( 'posts_per_page' => 3,)); ?>

				<div class="outter-wrapper">

					<div class="main-wrapper">

						<hgroup class="title-block">
							<h3 class="title-block__title  title-block__title--light-bg">Latest news</h3>
						</hgroup>

						<ul class="latest-news__items">

							<?php while($latest_news->have_posts() ) : $latest_news->the_post();?>

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

					<?php wp_reset_postdata(); ?>

					<a href="<?php echo get_site_url(); ?>/blog" class="button">
						<p class="button__text">See all news</p>
						<span class="button__first-color"></span>
					</a>

					</div>
				</div><!-- // Outter wrapper -->
			</section><!-- #Latest news -->

			<!-- Jobs board -->
			<section class="home-jobs-board hjb">
				<div class="outter-wrapper">
					<div class="main-wrapper">

						<hgroup class="title-block title-block--light-bg">
							<h3 class="title-block--light-bg__title small-underline"><?php the_field('section4__jobs__title');?></h3>
							<?php the_field('section4__jobs__text');?>
						</hgroup>

						<nav class="hjb__purple-links">
							<ul>
								<a href="http://www.purple-consultancy.com/jobs/"><li class="hjb__purple-links__link hjb__purple-links__link--active">View all</li></a>
								<a href="http://www.purple-consultancy.com/studio-jobs/"><li class="hjb__purple-links__link">Studio</li></a>
								<a href="http://www.purple-consultancy.com/planning-strategy-jobs/"><li class="hjb__purple-links__link">Planning & Strategy</li></a>
								<a href="http://www.purple-consultancy.com/technology-jobs/"><li class="hjb__purple-links__link">Tech & dev</li></a>
								<a href="http://www.purple-consultancy.com/client-services-jobs/"><li class="hjb__purple-links__link">Client services</li></a>
								<a href="http://www.purple-consultancy.com/creative-services-production-jobs/"><li class="hjb__purple-links__link">Creative services</li></a>
								<a href="http://www.purple-consultancy.com/creative-services-production-jobs/"><li class="hjb__purple-links__link">Production</li></a>
								<a href="http://www.purple-consultancy.com/creative-design-jobs/"><li class="hjb__purple-links__link">Creative & Design</li></a>
							</ul>
						</nav>

						<ul class="hjb__jobs">

							<?php
								if ( wp_is_mobile() ) {
									$purple_jobs = new WP_Query(array( 'post_type' => 'purple_job', 'posts_per_page' => 3, 'orderby' => 'rand'));
								}else{
									$purple_jobs = new WP_Query(array( 'post_type' => 'purple_job', 'posts_per_page' => 6, 'orderby' => 'rand'));
								}
							?>



							<?php while($purple_jobs->have_posts() ) : $purple_jobs->the_post();?>

								<?php if( $purple_jobs->current_post%3 == 0 ) echo "\n".'<div class="wrap">'."\n"; ?>
							
							<?php $jobs_link = get_field('purple_jobs_direct_link');

							if( $jobs_link ){ ?>
								<a href="<?php echo $jobs_link?>" class="hjb__jobs__cell">
							<?php } else{ ?>
								<a href="http://www.purple-consultancy.com/jobs/" class="hjb__jobs__cell">
							<?php } ?>
							
								<p class="hjb__jobs__cell__money p-small-title-highlight"><?php the_field('purple_jobs_money')?></p>
								<h5 class="hjb__jobs__cell__job-role"><?php the_title();?></h5>
								<p class="hjb__jobs__cell__desc"><?php the_content();?></p>
								<div class="hjb__jobs__cell__read-more-button">
									<svg>
										<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-scroll-down-arrow--white" />
									</svg>
								</div>
							</a>

							<?php if( $purple_jobs->current_post%3 == 2 || $purple_jobs->current_post == $purple_jobs->post_count-1 ) echo '</div> <!--/.wrap-->'."\n"; ?>

						<?php endwhile;?>
						<?php wp_reset_postdata(); ?>

						</ul>

						<a href="http://www.purple-consultancy.com" class="button hjb__read-more-button">
							<p class="button__text">View more jobs</p>
							<span class="button__first-color"></span>
						</a>
					</div>
				</div>
			</section><!-- #Jobs board -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
