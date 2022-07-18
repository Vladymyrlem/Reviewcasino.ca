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
<div class="filter-overlay"></div>
<div class="search-overlay"></div>
<header id="masthead" class="site-header">
    <div class="hide filter">
		<?php echo do_shortcode( '[filter_shortcode]' ) ?>
    </div>
    <div class="mycontainer align-items-center">
        <div class="site-branding">
			<?php
			the_custom_logo();

			//			$reviewcasino_description = get_bloginfo( 'description', 'display' );
			//			if ( $reviewcasino_description || is_customize_preview() ) :
			//				?>
            <!--                <a class="site-description" href="/">-->
            <!--					--><?php //echo $reviewcasino_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			//					?>
            <!--                </a>-->
            <!--			--><?php //endif; ?>
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
        <div class="navigation">
            <nav class="vg-nav vg-nav-lg">
                <!--                <a href="#" class="vg-nav-hamburger"><span></span><span></span><span></span></a>-->
                <ul class="vg-nav-main-container" id="mob-head-menu">
					<?php $i = 1; ?>
                    <li class="active popular-page" id="popular-page">
                        <div class="menu-title">Popular Pages</div>
						<?php if ( have_rows( 'top_menu_group', 'header' ) ) : ?>
							<?php while ( have_rows( 'top_menu_group', 'header' ) ) : the_row(); ?>
								<?php if ( ( $i % 2 ) != 0 ) {
									echo '<div class="popular-group row no-gutters justify-content-between">';
								} ?>
								<?php $top_link = get_sub_field( 'top_link' ); ?>
								<?php if ( $top_link ) : ?>

                                    <a class="popular-link col-lg-5 col-md-5 justify-content-md-center"
                                       href="<?php echo esc_url( $top_link['url'] ); ?>"
                                       target="<?php echo esc_attr( $top_link['target'] ); ?>">
										<?php $top_image = get_sub_field( 'top_image' ); ?>
										<?php if ( $top_image ) : ?>
                                            <img src="<?php echo esc_url( $top_image['url'] ); ?>"
                                                 alt="<?php echo esc_attr( $top_image['alt'] ); ?>"/>
										<?php endif; ?>
										<?php echo esc_html( $top_link['title'] ); ?>
                                    </a>

								<?php endif; ?>
								<?php if ( ( $i % 2 ) == 0 ) {
									echo '</div>';
								}
								$i ++;
								?>
							<?php endwhile; ?>
						<?php endif; ?>
                    </li>
                    <li class="arrow-decor">
                        <svg width="24" height="36" viewBox="0 0 24 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.29289 6.29289C5.68342 5.90237 6.31658 5.90237 6.70711 6.29289L12 11.5858L17.2929 6.2929C17.6834 5.90237 18.3166 5.90237 18.7071 6.2929C19.0976 6.68342 19.0976 7.31658 18.7071 7.70711L12.7071 13.7071C12.3166 14.0976 11.6834 14.0976 11.2929 13.7071L5.29289 7.70711C4.90237 7.31658 4.90237 6.68342 5.29289 6.29289ZM5.29289 12.2929C5.68342 11.9024 6.31658 11.9024 6.70711 12.2929L12 17.5858L17.2929 12.2929C17.6834 11.9024 18.3166 11.9024 18.7071 12.2929C19.0976 12.6834 19.0976 13.3166 18.7071 13.7071L12.7071 19.7071C12.3166 20.0976 11.6834 20.0976 11.2929 19.7071L5.29289 13.7071C4.90237 13.3166 4.90237 12.6834 5.29289 12.2929Z"
                                  fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.29289 18.2929C5.68342 17.9024 6.31658 17.9024 6.70711 18.2929L12 23.5858L17.2929 18.2929C17.6834 17.9024 18.3166 17.9024 18.7071 18.2929C19.0976 18.6834 19.0976 19.3166 18.7071 19.7071L12.7071 25.7071C12.3166 26.0976 11.6834 26.0976 11.2929 25.7071L5.29289 19.7071C4.90237 19.3166 4.90237 18.6834 5.29289 18.2929ZM5.29289 24.2929C5.68342 23.9024 6.31658 23.9024 6.70711 24.2929L12 29.5858L17.2929 24.2929C17.6834 23.9024 18.3166 23.9024 18.7071 24.2929C19.0976 24.6834 19.0976 25.3166 18.7071 25.7071L12.7071 31.7071C12.3166 32.0976 11.6834 32.0976 11.2929 31.7071L5.29289 25.7071C4.90237 25.3166 4.90237 24.6834 5.29289 24.2929Z"
                                  fill="white"/>
                        </svg>
                    </li>
                    <li class="active decor-list">
                        <div class="categories-title">All categories</div>
                        <ul class="middle-menu row">
							<?php if ( have_rows( 'middle_menu', 'header' ) ) : ?>
								<?php while ( have_rows( 'middle_menu', 'header' ) ) : the_row(); ?>
                                    <li class="dropdown">
                                        <a class="open-menu" href="#"><?php the_sub_field( 'head_menu' ); ?></a>
                                        <ul class="left">
											<?php if ( have_rows( 'sub_menu' ) ) : ?>
												<?php while ( have_rows( 'sub_menu' ) ) : the_row(); ?>
                                                    <li>
														<?php $sub_menu_link = get_sub_field( 'sub_menu_link' ); ?>
														<?php if ( $sub_menu_link ) : ?>
                                                            <a href="<?php echo esc_url( $sub_menu_link['url'] ); ?>"
                                                               target="<?php echo esc_attr( $sub_menu_link['target'] ); ?>"><?php echo esc_html( $sub_menu_link['title'] ); ?></a>
														<?php endif; ?>
                                                    </li>
												<?php endwhile; ?>
											<?php endif; ?>
                                        </ul>
                                    </li>

								<?php endwhile; ?>

							<?php endif; ?>
                        </ul>
                    </li>
                    <li class="active bottom-links row no-gutters justify-content-between d-flex">
						<?php if ( have_rows( 'bottom_menu', 'header' ) ) : ?>
							<?php while ( have_rows( 'bottom_menu', 'header' ) ) : the_row(); ?>
								<?php $link_menu = get_sub_field( 'link_menu' ); ?>
								<?php if ( $link_menu ) : ?>
                                    <a class="btm-link-menu col-lg-4 col-md-6 col-sm-6"
                                       href="<?php echo esc_url( $link_menu['url'] ); ?>" target="_blank">
										<?php $menu_ico = get_sub_field( 'menu_ico' ); ?>
										<?php if ( $menu_ico ) : ?>
                                            <img src="<?php echo esc_url( $menu_ico['url'] ); ?>"
                                                 alt="<?php echo esc_attr( $menu_ico['alt'] ); ?>"/>
										<?php endif; ?>
										<?php echo esc_html( $link_menu['title'] ); ?>
                                    </a>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>

                    </li>
                    </li>
                    <button class="btn-top">
                        <svg width="15" height="21" viewBox="0 0 15 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.1875 9.84375L7.5 3.28125L2.8125 9.84375" stroke="black" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.5 4.59375L7.5 17.7187" stroke="black" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        Up
                    </button>
                </ul>

            </nav>
        </div>
		<?php get_search_form(); ?>
        <button class="open-search">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M6.91927 2.16634C4.29592 2.16634 2.16927 4.29299 2.16927 6.91634C2.16927 9.53969 4.29592 11.6663 6.91927 11.6663C9.54262 11.6663 11.6693 9.53969 11.6693 6.91634C11.6693 4.29299 9.54262 2.16634 6.91927 2.16634ZM0.585938 6.91634C0.585938 3.41854 3.42147 0.583008 6.91927 0.583008C10.4171 0.583008 13.2526 3.41854 13.2526 6.91634C13.2526 8.3799 12.7562 9.72752 11.9225 10.8L16.1874 15.0649C16.4966 15.374 16.4966 15.8753 16.1874 16.1845C15.8782 16.4936 15.377 16.4936 15.0678 16.1845L10.8029 11.9196C9.73045 12.7532 8.38283 13.2497 6.91927 13.2497C3.42147 13.2497 0.585938 10.4141 0.585938 6.91634Z"
                      fill="white"/>
            </svg>

        </button>
		<?php //echo do_shortcode('[wpdreams_ajaxsearchpro id=3]'); ?>
        <div class="language-switcher">
            <button class="current-lang">
                <li class="lang-item lang-item-2 lang-item-en current-lang lang-item-first">
                    <!--                    <a lang="en-US" hreflang="en-US" href="https://reviewcasino.ca.hudzhal.com.ua/">-->
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC"
                         title="En" alt="En" width="16" height="11" style="width: 16px; height: 11px;"><span
                            style="margin-left:0.3em;">En</span>
                    <!--                    </a>-->
                </li>
            </button>
            <!--            <ul class="languages">-->
            <!--			    --><?php
			//			    if ( function_exists( 'pll_the_languages' ) ) {
			//				    pll_the_languages( array( 'show_flags' => 1, 'show_names' => 1 ) );
			//			    }
			//			    ?>
            <!--            </ul>-->
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

