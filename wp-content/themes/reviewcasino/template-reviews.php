<?php
/**
 * Template Name: Reviews Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NationalCasino
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
				<?php if ( have_rows( 'reviews_layout' ) ): ?>
					<?php while ( have_rows( 'reviews_layout' ) ) : the_row(); ?>

						<?php get_template_part( 'template-parts-reviews/' . get_row_layout() ); ?>

					<?php endwhile; ?>

				<?php endif; ?>

            </div>

        </div>
    </main><!-- #main -->

<?php
get_footer();
