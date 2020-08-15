<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Default_Mag
 */

get_header();
$i = 1;
?>

    <div class="twp-archive-post-list">
        <div class="twp-row">
            <?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post(); ?>
						<article class="faq">
                            <div class="tick-num"><?php echo $i; $i++; ?></div>
                            <h2><?php echo get_the_title( get_the_ID() ) ?></h2>
                            <?php the_content() ?>
                        </article>
                    <?php endwhile;

					do_action('default_mag_action_posts_navigation');

				?>
        </div>
    </div>

<?php
get_footer();
