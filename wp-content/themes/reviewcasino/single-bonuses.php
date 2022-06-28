<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Reviewcasino_CA
 */

get_header();
?>

    <main id="primary" class="site-main">
        <div class="container">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if ( function_exists( 'bcn_display' ) ) {
					bcn_display();
				} ?>
            </div>
        </div>
        <div class="container">
            <div class="main-content">
				<?php
				get_sidebar(); ?>
				<?php if ( have_rows( 'bonus_layout' ) ): ?>
					<?php while ( have_rows( 'bonus_layout' ) ) : the_row(); ?>
						<?php get_template_part( 'template-parts-bonuses/' . get_row_layout() ); ?>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>
        </div>
    </main><!-- #main -->


<?php
get_footer();
