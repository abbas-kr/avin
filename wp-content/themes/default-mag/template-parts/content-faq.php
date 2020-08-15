<?php
$argsfaq = array(
	'post_type' => 'avinfaq',
    'order' => 'asc',
	'posts_per_page' => 10,
);
$faqquery = new WP_Query( $argsfaq );
$i = 10;
?>
<div class="faq-showcase">
    <h2 style="padding-right: 6%;padding-left: 3%;">
        <i class="fal fa-chevron-up"></i><i class="fal fa-chevron-down"></i><i class="fal fa-chevron-up"></i><i class="fal fa-chevron-down"></i><i class="fal fa-chevron-up"></i>
        <span>سوالات متداولی که در تیکت ها پرسیده میشود</span><br> تیکت های پرتکرار <a href="http://avin-tarh.ir/avinfaq/" style="float: left;font-size: 14px;border-bottom: 1px dashed #999;padding-bottom: 6px;">نمایش همه</a></h2>
	<div class="avin-faq">
		<!-- Swiper -->
		<div class="faq-slider">
			<div class="swiper-wrapper">
                <?php
                while ( $faqquery->have_posts() ) {
	                $faqquery->the_post(); ?>
	                <article class="swiper-slide">
                        <div class="tick-num"><?php echo $i; $i--; ?></div>
                        <h2><?php echo get_the_title( get_the_ID() ) ?></h2>
                        <?php the_content() ?>
                    </article>
                <?php
                }
                wp_reset_postdata();
                ?>
			</div>
		</div>
	</div>
</div>
