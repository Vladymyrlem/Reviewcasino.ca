<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reviewcasino_CA
 */

get_header();
?>

    <main id="primary" class="site-main home-main">
		<?php if ( have_rows( 'home_layout' ) ): ?>
			<?php while ( have_rows( 'home_layout' ) ) : the_row(); ?>

				<?php get_template_part( 'template-parts-content/' . get_row_layout() ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
