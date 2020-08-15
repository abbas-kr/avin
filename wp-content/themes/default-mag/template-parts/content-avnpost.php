<?php
$argspost = array(
	'post_type' => 'post',
    'order' => 'asc',
	'posts_per_page' => 10,
);
$postquery = new WP_Query( $argspost );
?>
<div class="post-showcase">
    <h2>
        <i class="fal fa-chevron-up"></i><i class="fal fa-chevron-down"></i><i class="fal fa-chevron-up"></i><i class="fal fa-chevron-down"></i><i class="fal fa-chevron-up"></i>
        <span>آموزش و نکات کاربری قالب ها</span><br> جدیدترین آموزش ها <a href="#" style="float: left;font-size: 14px;border-bottom: 1px dashed #999;padding-bottom: 6px;">نمایش همه</a></h2>
	<div class="avin-post">
		<!-- Swiper -->
		<div class="post-slider">
			<div class="swiper-wrapper">
                <?php
                while ( $postquery->have_posts() ) {
	                $postquery->the_post(); ?>
	                <article class="swiper-slide">
                        <div class="twp-image-section data-bg-lg">
	                        <?php if ( has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
			                        <?php the_post_thumbnail(); ?>
                                </a>
	                        <?php endif; ?>
                        </div>
                        <div class="twp-articles-title"><?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );?></div>
                        <div class="entry-content">
			                <?php the_excerpt(); ?>
                        </div><!-- .entry-content -->
                    </article>
                <?php
                }
                wp_reset_postdata();
                ?>
			</div>
		</div>
	</div>
</div>
