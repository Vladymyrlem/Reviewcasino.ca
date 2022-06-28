<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reviewcasino_CA
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="masthead" class="site-header">
    <div class="mycontainer align-items-center">
        <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                          rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			else :
				?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                         rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			$reviewcasino_description = get_bloginfo( 'description', 'display' );
			if ( $reviewcasino_description || is_customize_preview() ) :
				?>
                <p class="site-description"><?php echo $reviewcasino_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					?></p>
			<?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span>
            </button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'head-menu',
					'menu_id'        => 'head-menu',
				)
			);
			?>
        </nav><!-- #site-navigation -->
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'head-mob-menu',
				'menu_id'        => 'head-mob-menu',
			)
		);
		?>
		<?php get_search_form(); ?>
        <div class="language-switcher">
            <button class="current-lang"></button>
            <ul class="languages">
				<?php
				if ( function_exists( 'pll_the_languages' ) ) {
					pll_the_languages( array( 'show_flags' => 1, 'show_names' => 1 ) );
				}
				?>
            </ul>
        </div>
    </div>
    <div class="bottom-menu">
        <div class="mycontainer">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'middle-menu',
				)
			);
			?>

        </div>
    </div>
</header><!-- #masthead -->

<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#primary"><?php esc_html_e( 'Skip to content', 'reviewcasino' ); ?></a>

