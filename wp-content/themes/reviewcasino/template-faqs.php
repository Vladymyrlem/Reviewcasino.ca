<?php
/**
 * Template Name: Faqs Page
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
		<?php if ( have_rows( 'news_layouts' ) ): ?>
			<?php while ( have_rows( 'news_layouts' ) ) : the_row(); ?>

				<?php get_template_part( 'template-parts-news/' . get_row_layout() ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
