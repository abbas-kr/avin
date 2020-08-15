<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Default_Mag
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} ?>

<div id="page" class="site full-screen-layout">
	<header id="masthead" class="site-header">		
		<div class="twp-site-branding data-bg">
			<div class="container twp-no-space">
				<div class="twp-wrapper">

					<div class="twp-logo">
						<span class="twp-image-wrapper"><?php the_custom_logo(); ?></span>					
					</div><!--/twp-logo-->
                    <div class="twp-support">
                        <p>0913 606 6964 <span>پشتیبانی</span></p>
                        <p>0913 606 6964 <span>فروش</span></p>
                    </div><!--/twp-logo-->
                </div><!--/twp-wrapper-->
			</div><!--/container-->
		</div><!-- .site-branding -->
			

		<nav id="site-navigation" class="main-navigation twp-navigation twp-default-bg">
			<div class="twp-nav-menu">
				<div class="container twp-left-space">
					<div class="clearfix">

						<div class="twp-nav-left-content float-left twp-d-flex">
							<div class="twp-nav-sidebar-menu">
								<div class="twp-mobile-menu-icon">
									<div class="twp-menu-icon" id="twp-menu-icon">
										<span></span>
									</div>
								</div>
							</div>

							<div class="twp-menu-section">
								<?php
								if (has_nav_menu('primary-nav')) {
									wp_nav_menu(array(
										'theme_location' => 'primary-nav',
										'menu_id' => 'primary-nav-menu',
										'container' => 'div',
										'container_class' => 'menu',
										'depth' => 4,
									));
								} else {
									wp_nav_menu(array(
										'theme_location' => 'primary',
										'menu_id' => 'primary-nav-menu',
										'container' => 'div',
										'container_class' => 'menu',
										'depth' => 1,
									));
								} ?>
							</div><!--/twp-menu-section-->
						</div>

						<div class="twp-nav-right-content float-right twp-d-flex">
                            <div class="theme-mode header-theme-mode"></div>

                            <div class="twp-latest-news-button-section" id="nav-latest-news">
                                <div class="twp-nav-button twp-primary-bg" id="trending-btn">
                                    <span><i class="fal fa-bolt"></i></span>
                                </div>
                            </div><!--/latest-news-section-->

                            <div class="twp-search-section" id="search">
                                <i class="fal fa-search"></i>
                            </div><!--/twp-search-section-->

                            <a href="#" class="financial"> حسابداری </a>

						</div>
	
					</div><!--/twp-navigation-->
				</div><!--/container-->
			</div>

			<div class="twp-search-field-section" id="search-field">
				<div class="container">
					<div class="twp-search-field-wrapper">
						<div class="twp-search-field">
							<?php get_search_form(); ?>
						</div>
						<div class="twp-close-icon-section">
							<span class="twp-close-icon" id="search-close">
								<span></span>
								<span></span>
							</span>
						</div>
					</div>

				</div>
			</div>
			<?php if (default_mag_get_option('show_trending_on_nav') == 1) { ?>
				<div class="twp-articles-list" id="nav-latest-news-field">
					<div class="container">
						<?php
        					$default_mag_trending_category = esc_attr(default_mag_get_option('select_category_for_trending_section'));
							$args = array(
								'posts_per_page' => 12,
								'order' => 'ASC',
                				'cat' => esc_attr($default_mag_trending_category),
							);
							$twp_recent_nav_posts = new WP_Query($args);
							if($twp_recent_nav_posts->have_posts()):?>
								<section id="related-articles" class="page-section">
									<header class="twp-article-header twp-default-bg clearfix">
										<h3 class="twp-section-title primary-font">
											<?php echo esc_html(default_mag_get_option('trending_section_title'));?>
										</h3>
										<div class="twp-close-icon-section">
											<span class="twp-close-icon" id="latest-news-close">
												<span></span>
												<span></span>
											</span>
										</div>
									
									</header>
									<div class="entry-content">
										<div class="row">
											<?php while ($twp_recent_nav_posts->have_posts()):$twp_recent_nav_posts->the_post();?>
												<div class="col-lg-4 col-sm-6 twp-articles-border">
													<div class="twp-articles">
														<?php if(has_post_thumbnail()){ ?>
															<div class="twp-image-section">
																<a href="<?php the_permalink(); ?>" class="bg-image-- data-bg-- data-bg-xs-- bg-opacity-- d-block">
																	<?php the_post_thumbnail(get_the_ID(), 'thumbnail'); ?>
																</a>
															</div>
														<?php } ?>
														<div class="twp-description">
															<h4 class="primary-font">
																<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
															</h4>
															<div class="twp-meta-style-1  twp-author-desc twp-primary-color">
																<?php default_mag_post_date(); ?>
															</div>
														</div><!-- .related-article-title -->
													</div>
												</div>
											<?php endwhile;wp_reset_postdata();?>
										</div>
									</div><!-- .entry-content-->
								</section>
							<?php endif; ?>
					</div>
				</div><!--/latest-news-section-->
			<?php } ?>
			
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
	<div class="twp-mobile-menu">
		<div class="twp-mobile-close-icon">
			<span class="twp-close-icon twp-close-icon-sm" id="twp-mobile-close">
				<span></span>
				<span></span>
			</span>
		</div>
		
	</div>
	
	<?php if (default_mag_get_option('enable_preloader') == 1) { ?>
		<div class="twp-overlay" id="overlay"></div>
		<div id="preloader">
			<div id="status">&nbsp;</div>
		</div>
	<?php } ?>
	
	<?php do_action( 'default_mag_action_get_breadcrumb' ); ?>

	<div id="content" class="site-content clearfix">