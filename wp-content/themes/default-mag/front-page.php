<?php
/**
 * The template for displaying home page.
 * @package Default Mag
 */

get_header();?>
<?php if ( is_paged()) { ?>

<?php } else { ?>

    <div class="home-under-header">
        <!-- Swiper -->
        <div class="home-silder">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="silde-box">
                        <img src="<?php echo esc_url( get_theme_mod( 'customizer_setting_one' ) ); ?>" alt="Product 1">
                        <a class="silder-btn" href="http://boomweb.ir"> اطلاعات بیشتر <i class="fal fa-arrow-left"></i></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="silde-box">
                        <img src="<?php echo esc_url( get_theme_mod( 'customizer_setting_one' ) ); ?>" alt="Product 1">
                        <a class="silder-btn" href="http://boomweb.ir"> اطلاعات بیشتر <i class="fal fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
        </div>
    </div>
    <?php get_template_part('template-parts/content', 'theme'); ?>
	<?php get_template_part('template-parts/content', 'faq'); ?>
	<?php get_template_part('template-parts/content', 'avnpost'); ?>
<?php } ?>

<?php get_footer();
