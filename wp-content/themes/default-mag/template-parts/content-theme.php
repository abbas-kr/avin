<?php
$argstheme = array(
	'post_type' => 'avinthemes',
    'order' => 'asc'
);
$themequery = new WP_Query( $argstheme );
?>
<div class="product-showcase">
	<div class="desc-product">
        <h1><i class="fal fa-chevron-up"></i><i class="fal fa-chevron-down"></i><i class="fal fa-chevron-up"></i><i class="fal fa-chevron-down"></i><i class="fal fa-chevron-up"></i><span>طراحی اختصاصی سایت و قالب وردپرس</span><br/> گروه طراحی آوین </h1>
		<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
        <a href="#" class="solid-btn-green"> سفارش طراحی اختصاصی </a>
        <a href="#" class="border-btn-gray"> نمایش همه محصولات </a>
	</div>
	<div class="avin-themes">
		<!-- Swiper -->
		<div class="theme-slider">
			<div class="swiper-wrapper">
                <?php
                while ( $themequery->have_posts() ) {
	                $themequery->the_post();
	                $price = get_post_meta( get_the_ID() , 'product_price' , true );
	                $sale = get_post_meta( get_the_ID() , 'product_sale' , true );
	                $featured_img_url = get_the_post_thumbnail_url( get_the_ID(),'full' );
	                echo '<div class="swiper-slide">
	                        <h2>'.get_the_title( get_the_ID() ).'</h2>
	                        <img src="'.$featured_img_url.'"/>
	                        <span class="price">قیمت : '.$price.' تومان </span><span class="sale-num">'.$sale.'</span>
	                        <a href="'.get_permalink().'" > اطلاعات بیشتر </a>
	                      </div>';
                }
                wp_reset_postdata();
                ?>
			</div>
			<!-- Add Arrows -->
			<div class="theme-btn-next"><i class="fal fa-long-arrow-right"></i></div>
			<div class="theme-btn-prev"><i class="fal fa-long-arrow-left"></i></div>
		</div>
	</div>
</div>
