<?php
/**
 * Template Name: Game type Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reviewcasino
 */

get_header();
?>
    <main id="primary" class="site-main">

        <div class="mycontainer ">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if ( function_exists( 'bcn_display' ) ) {
					bcn_display();
				} ?>
            </div>
        </div>
        <div class="mycontainer ">
            <div class="main-content">
				<?php
				get_sidebar(); ?>
				<?php if ( is_page( 1766 ) ) { ?>
					<?php if ( have_rows( 'roulette_layout' ) ): ?>
						<?php while ( have_rows( 'roulette_layout' ) ) : the_row(); ?>

							<?php get_template_part( 'template-parts-roulette/' . get_row_layout() ); ?>

						<?php endwhile; ?>

					<?php endif; ?>
				<?php } elseif ( is_page( 1768 ) ) {
					if ( have_rows( 'video_poker_layout' ) ): ?>
						<?php while ( have_rows( 'video_poker_layout' ) ) : the_row(); ?>

							<?php get_template_part( 'template-parts-videopoker/' . get_row_layout() ); ?>

						<?php endwhile; ?>

					<?php endif;
				} elseif ( is_page( 1770 ) ) {
					if ( have_rows( 'live_dealer_layout' ) ): ?>
						<?php while ( have_rows( 'live_dealer_layout' ) ) : the_row(); ?>

							<?php get_template_part( 'template-parts-livedealer/' . get_row_layout() ); ?>

						<?php endwhile; ?>

					<?php endif;
				} else {
					echo 'Template Not Found';
				} ?>
            </div>

        </div>
    </main><!-- #main -->

<?php
get_footer();
