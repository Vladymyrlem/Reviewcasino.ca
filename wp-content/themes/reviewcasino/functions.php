<?php
/**
 * Reviewcasino CA functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Reviewcasino_CA
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
include( 'custom-post-type.php' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function reviewcasino_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Reviewcasino CA, use a find and replace
		* to change 'reviewcasino' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'reviewcasino', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'head-menu'     => esc_html__( 'Head menu', 'reviewcasino' ),
			'menu-2'        => esc_html__( 'Primary', 'reviewcasino' ),
			'sidebar-menu'  => esc_html__( 'Sidebar', 'reviewcasino' ),
			'head-mob-menu' => esc_html__( 'Head Mob', 'reviewcasino' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'reviewcasino_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'reviewcasino_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function reviewcasino_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'reviewcasino_content_width', 640 );
}

add_action( 'after_setup_theme', 'reviewcasino_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reviewcasino_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'reviewcasino' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'reviewcasino' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'reviewcasino_widgets_init' );
function is_post_type( $type ) {
	global $wp_query;
	if ( $type == get_post_type( $wp_query->post->ID ) ) {
		return true;
	}

	return false;
}

/**
 * Enqueue scripts and styles.
 */
function reviewcasino_scripts() {
	wp_enqueue_style( 'reviewcasino-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'reviewcasino-style', 'rtl', 'replace' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', '', '5.2.0' );
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.css', '', '5.2.0' );
//	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap-reboot.css', '', '4.3.1', '');
	if ( is_page( 117 ) || is_page( 121 ) || is_post_type( 'reviews' ) ) {
		wp_enqueue_style( 'reviewcasino-reviews-style', get_template_directory_uri() . '/css/reviews.css', array(), '1.0' );
	}
	if ( is_page( array( 349, 355 ) ) || is_post_type( 'bonuses' ) || is_tax( 'bonuses_cat' ) ) {
		wp_enqueue_style( 'reviewcasino-bonuses-style', get_template_directory_uri() . '/css/bonuses.css', array(), '1.0' );
	}
	if ( is_page( array( 351 ) ) ) {
		wp_enqueue_style( 'reviewcasino-real-money-style', get_template_directory_uri() . '/css/real-money.css', array(), '1.0' );
	}
	if ( is_page( array( 353 ) ) ) {
		wp_enqueue_style( 'reviewcasino-gambling-style', get_template_directory_uri() . '/css/gambling.css', array(), '1.0' );
	}
	if ( is_page( array( 1260 ) ) ) {
		wp_enqueue_style( 'reviewcasino-payouts-style', get_template_directory_uri() . '/css/payouts.css', array(), '1.0' );
	}
	if ( is_page( array( 335 ) ) || is_post_type( 'payments' ) ) {
		wp_enqueue_style( 'reviewcasino-payments-style', get_template_directory_uri() . '/css/payments.css', array(), '1.0' );
	}
	if ( is_page( array( 169 ) ) || is_post_type( 'games' ) ) {
		wp_enqueue_style( 'reviewcasino-games-style', get_template_directory_uri() . '/css/games.css', array(), '1.0' );
	}
	if ( is_page( array( 1643 ) ) ) {
		wp_enqueue_style( 'reviewcasino-online-slots-style', get_template_directory_uri() . '/css/online-slots.css', array(), '1.0' );
	}
	if ( is_page( array( 1766 ) ) ) {
		wp_enqueue_style( 'reviewcasino-roulette-style', get_template_directory_uri() . '/css/roulette.css', array(), '1.0' );
	}
	wp_enqueue_style( 'tables-style', get_template_directory_uri() . '/css/responsive-tables.min.css', '', '2.2.1', '' );

	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/slick-theme.css', '', '1.8.1', '' );
	wp_enqueue_style( 'vg-nav', get_template_directory_uri() . '/css/vgnav.css' );
	wp_enqueue_style( 'vg-nav-theme', get_template_directory_uri() . '/css/vgnav-theme.css' );

//	wp_enqueue_style('shor-more-style', get_template_directory_uri().'/css/show-more.min.css');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array( 'jquery' ), '3.4.1', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vgnav.min.js', '', '', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', '4.3.1', true );
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', '', '4.3.1', true );
	wp_enqueue_script( 'bootstrap-popper', get_template_directory_uri() . '/js/popper.js', '', '1.12.9', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array( 'jquery' ), '1.12.1', true );
	wp_enqueue_script( 'reviewcasino-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.8.1', true );
//	wp_enqueue_script( 'responsive-table', get_template_directory_uri() . '/js/jquery.responsive-tables.js', array( 'jquery' ), '2.2.1', true );
//	wp_enqueue_script( 'vue', 'https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js', [], '2.5.17' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'reviewcasino_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ) {

	// WP 5.1 +
	if ( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ) {
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	} else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, - 4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if ( $dosvg ) {

		// разрешим
		if ( current_user_can( 'manage_options' ) ) {

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		} // запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' => 'Footer',
		'menu_title' => 'Footer data',
		'menu_slug'  => 'acf-footer',
		'capability' => 'edit_posts',
		'post_id'    => 'footer',
		'redirect'   => false,
	) );
	acf_add_options_page( array(
		'page_title' => 'Header',
		'menu_title' => 'Header data',
		'menu_slug'  => 'acf-header',
		'capability' => 'edit_posts',
		'post_id'    => 'header',
		'redirect'   => false,
	) );
	acf_add_options_sub_page( [
		'page_title' => "Error page",
		'menu_title' => __( "Error page", 'national-casino' ),
		'menu_slug'  => "error-page",
		'post_id'    => 'error',
		'parent'     => 'acf-footer'
	] );

}
function wpforo_search_form( $html ) {

	$html = str_replace( 'placeholder="Search ', 'placeholder="Search for casinos, games and more', $html );

	return $html;
}

add_filter( 'get_search_form', 'wpforo_search_form' );
function check_mail_send_contactform( $cf7 ) {
	$submission = WPCF7_Submission::get_instance();
	if ( $submission ) {
		$posted_data = $submission->get_posted_data();
	}
	$mail = $cf7->prop( 'mail' );

	if ( $posted_data['newsletter'][0] ) {
		$mail2              = $cf7->prop( 'mail_2' );
		$mail2['recipient'] = $posted_data['your-email'];
		$cf7->set_properties( array( 'mail_2' => $mail2 ) );
	}

	return $cf7;
}

add_action( 'wpcf7_before_send_mail', 'check_mail_send_contactform' );
add_action( 'acf/register_fields', 'my_register_fields' );

function my_register_fields() {
	include_once( 'acf-field-video/acf-video.php' );
}

function import_cf_from_cpt( $atts ) {
	// import custom fields from other custom post types that are connected via a relationship to the calling custom post type
	// shortcode: [import <field from calling CPT of type relationship> <field name from field from other CPT>]
	// ex [import person last_name] --> Doe

	$postID = do_shortcode( "[acf field={$atts[0]}]" );
	// we use the first attribute to get the ID of the object
	$postField = get_field( $atts[1], $postID );

	// next, using the ID we look for the field of the second attribute.
	return $postField;
}

add_shortcode( 'import', 'import_cf_from_cpt' );


add_shortcode( 'review_right_shortcode', 'review_right_widget_shortcode' );
function review_right_widget_shortcode() {
	global $post;
	ob_start();
	if ( is_post_type( 'reviews' ) ) {
		?>
		<?php if ( have_rows( 'head_review_content' ) ) : ?>
			<?php while ( have_rows( 'head_review_content' ) ) : the_row(); ?>
                <div class="review-sidebar-widget">
                    <h3 class="sidebar-title">
                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.35 6.75H16.2683C16.7045 7.79027 16.5131 9.04219 15.6839 9.89016L11 14.6805V16.3125C11 17.2445 11.7387 18 12.65 18H20.35C21.2613 18 22 17.2445 22 16.3125V8.4375C22 7.50551 21.2613 6.75 20.35 6.75ZM16.5 13.2188C16.0445 13.2188 15.675 12.8408 15.675 12.375C15.675 11.9088 16.0445 11.5312 16.5 11.5312C16.9555 11.5312 17.325 11.9088 17.325 12.375C17.325 12.8408 16.9555 13.2188 16.5 13.2188ZM14.906 6.65508L8.89281 0.505195C8.23419 -0.168398 7.16616 -0.168398 6.50753 0.505195L0.493969 6.65508C-0.164656 7.32867 -0.164656 8.42098 0.493969 9.09457L6.50719 15.2448C7.16581 15.9184 8.23384 15.9184 8.89247 15.2448L14.906 9.09492C15.5647 8.42098 15.5647 7.32867 14.906 6.65508ZM3.3 8.71875C2.84453 8.71875 2.475 8.34082 2.475 7.875C2.475 7.40883 2.84453 7.03125 3.3 7.03125C3.75547 7.03125 4.125 7.40883 4.125 7.875C4.125 8.34082 3.75547 8.71875 3.3 8.71875ZM7.7 13.2188C7.24453 13.2188 6.875 12.8408 6.875 12.375C6.875 11.9088 7.24453 11.5312 7.7 11.5312C8.15547 11.5312 8.525 11.9088 8.525 12.375C8.525 12.8408 8.15547 13.2188 7.7 13.2188ZM7.7 8.71875C7.24453 8.71875 6.875 8.34082 6.875 7.875C6.875 7.40883 7.24453 7.03125 7.7 7.03125C8.15547 7.03125 8.525 7.40883 8.525 7.875C8.525 8.34082 8.15547 8.71875 7.7 8.71875ZM7.7 4.21875C7.24453 4.21875 6.875 3.84082 6.875 3.375C6.875 2.90883 7.24453 2.53125 7.7 2.53125C8.15547 2.53125 8.525 2.90883 8.525 3.375C8.525 3.84082 8.15547 4.21875 7.7 4.21875ZM12.1 8.71875C11.6445 8.71875 11.275 8.34082 11.275 7.875C11.275 7.40883 11.6445 7.03125 12.1 7.03125C12.5555 7.03125 12.925 7.40883 12.925 7.875C12.925 8.34082 12.5555 8.71875 12.1 8.71875Z"
                                  fill="white"/>
                        </svg>
                        Games
                    </h3>
                    <div class="games-type-list part-items">
						<?php $games = get_sub_field( 'games' ); ?>
						<?php if ( $games ) : ?>
							<?php foreach ( $games as $term ) : ?>
								<?php
								//                                  $taxonomy = 'games_categories';
//			                            $terms = get_terms( $taxonomy, $my_args );
								$images_raw          = get_option( 'taxonomy_image_plugin' ); // получаем все изображения в виде массива
								$term_taxonomy_id    = $term->term_taxonomy_id; // узнаем ID категории
								$term_taxonomy_image = wp_get_attachment_image( $images_raw[ $term_taxonomy_id ], 'full' );    // получаем прикрепленное изображение
								?>
                                <a class="part-item" href="<?php echo esc_url( get_term_link( $term ) ); ?>">
									<?php
									echo '<div class="thumbnail">' . $term_taxonomy_image . '</div>';
									echo '<span>' . esc_html( $term->name ) . '</span>'; ?></a>
							<?php endforeach; ?>
                            <div class="more-items"></div>

						<?php endif; ?>
                        <!--                                    <button class="show-more">+5</button>-->
                        <!--                                    <button class="show-less">hide</button>-->
                    </div>


                    <h3 class="sidebar-title">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.1 0H0.9C0.403031 0 0 0.383839 0 0.857143V11.1429C0 11.6162 0.403031 12 0.9 12H17.1C17.597 12 18 11.6162 18 11.1429V0.857143C18 0.383839 17.597 0 17.1 0ZM4.95 7.92536V8.35714C4.95 8.47554 4.84931 8.57143 4.725 8.57143H4.275C4.15069 8.57143 4.05 8.47554 4.05 8.35714V7.9208C3.73247 7.90527 3.42366 7.79973 3.16772 7.61679C3.05803 7.5383 3.05241 7.38188 3.15169 7.29161L3.48216 6.99134C3.56006 6.92063 3.67594 6.91741 3.76706 6.97179C3.87591 7.03661 3.99937 7.07143 4.12762 7.07143H4.91822C5.10103 7.07143 5.25009 6.91286 5.25009 6.71812C5.25009 6.55875 5.14856 6.41839 5.00344 6.37714L3.73781 6.01554C3.21497 5.86607 2.84962 5.38821 2.84962 4.8533C2.84962 4.19652 3.38541 3.66295 4.04972 3.64607V3.21429C4.04972 3.09589 4.15041 3 4.27472 3H4.72472C4.84903 3 4.94972 3.09589 4.94972 3.21429V3.65062C5.26725 3.66616 5.57606 3.77143 5.832 3.95464C5.94169 4.03312 5.94731 4.18955 5.84803 4.27982L5.51756 4.58009C5.43966 4.6508 5.32378 4.65402 5.23266 4.59964C5.12381 4.53455 5.00034 4.5 4.87209 4.5H4.0815C3.89869 4.5 3.74963 4.65857 3.74963 4.8533C3.74963 5.01268 3.85116 5.15304 3.99628 5.19429L5.26191 5.55589C5.78475 5.70536 6.15009 6.18321 6.15009 6.71812C6.15009 7.37518 5.61431 7.90848 4.95 7.92536ZM11.7 7.5C11.7 7.61839 11.5993 7.71429 11.475 7.71429H8.325C8.20069 7.71429 8.1 7.61839 8.1 7.5V7.07143C8.1 6.95304 8.20069 6.85714 8.325 6.85714H11.475C11.5993 6.85714 11.7 6.95304 11.7 7.07143V7.5ZM16.2 7.5C16.2 7.61839 16.0993 7.71429 15.975 7.71429H13.725C13.6007 7.71429 13.5 7.61839 13.5 7.5V7.07143C13.5 6.95304 13.6007 6.85714 13.725 6.85714H15.975C16.0993 6.85714 16.2 6.95304 16.2 7.07143V7.5ZM16.2 4.92857C16.2 5.04696 16.0993 5.14286 15.975 5.14286H8.325C8.20069 5.14286 8.1 5.04696 8.1 4.92857V4.5C8.1 4.38161 8.20069 4.28571 8.325 4.28571H15.975C16.0993 4.28571 16.2 4.38161 16.2 4.5V4.92857Z"
                                  fill="white"/>
                        </svg>
                        Banking Options
                    </h3>
                    <div class="deposits-method-grid" id="deposit-methods-list">
						<?php $deposit_methods = get_sub_field( 'deposit_methods' ); ?>
						<?php if ( $deposit_methods ) : ?>
							<?php foreach ( $deposit_methods as $deposit_post ) : ?>
								<?php $permalink = get_permalink( $deposit_post->ID ); ?>
								<?php setup_postdata( $deposit_post ); ?>
								<?php $payment = get_field( 'payment', $deposit_post->ID ); ?>

                                <a class="deposit-link"
                                   href="<?php echo $permalink ?>"><?php //echo $top_post->post_title; ?>
									<?php if ( $payment ) : ?>
                                        <img width="55px" height="38px" src="<?php echo esc_url( $payment['url'] ); ?>"
                                             alt="<?php echo esc_attr( $payment['alt'] ); ?>"/>
									<?php endif; ?>

                                </a>

							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
                    </div>

                </div>
			<?php endwhile; ?>

		<?php endif;
	} else {
		echo '';
	} ?>
	<?php
	$myvariable = ob_get_clean();

	return $myvariable;
}

add_shortcode( 'filter_shortcode', 'sidebar_filter_shortcode' );
function sidebar_filter_shortcode() {
	ob_start(); ?>
    <div class="filter-sidebar">
        <h3 class="filter-head sidebar-title">
            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.4369 0.828125H0.563154C0.0635131 0.828125 -0.188604 1.44265 0.165419 1.80152L4.5 6.19604V11.0916C4.5 11.2777 4.58955 11.452 4.73993 11.5587L6.61493 12.8887C6.98484 13.1512 7.5 12.8852 7.5 12.4216V6.19604L11.8347 1.80152C12.188 1.44336 11.9376 0.828125 11.4369 0.828125Z"
                      fill="white"/>
            </svg>
            Filter Casinos
            <button class="close-filter">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.375 4.375L15.625 15.625" stroke="#6667AB" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M4.375 4.375L15.625 15.625" stroke="url(#paint0_linear_3_3020)" stroke-opacity="0.2"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.625 4.375L4.375 15.625" stroke="#6667AB" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M15.625 4.375L4.375 15.625" stroke="url(#paint1_linear_3_3020)" stroke-opacity="0.2"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                        <linearGradient id="paint0_linear_3_3020" x1="10" y1="6.08858" x2="10" y2="14.5075"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0.421875" stop-color="#A119E0"/>
                            <stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_3_3020" x1="10" y1="6.08858" x2="10" y2="14.5075"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0.421875" stop-color="#A119E0"/>
                            <stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
                        </linearGradient>
                    </defs>
                </svg>
            </button>
        </h3>
        <div id="accordion" class="myaccordion ">

            <div class="card">
                <div class="card-header" id="headingOne">
                    <div class="mb-0">
                        <button class="d-flex align-items-center btn collapsed"
                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne">
                            <svg class="left-ico" width="14" height="24" viewBox="0 0 14 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.03958 14.0174C4.03958 10.6794 8.9343 8.47678 8.9343 4.83581C8.9343 2.7055 7.35085 0.855621 7.11333 0.74707C7.13196 0.896327 7.14128 1.05011 7.14128 1.19936C7.14128 5.36499 0.290527 8.16017 0.290527 13.348C0.290527 15.6004 1.79015 16.9302 3.38757 18.2463C6.41941 20.3585 7.02485 21.4757 7.02485 22.1632C7.02485 22.62 6.8013 22.9321 6.8013 23.1718C7.41139 22.4165 7.61165 21.729 7.61631 21.0732C7.61631 19.7344 6.6057 18.5267 5.55783 17.1608C4.81267 16.1522 4.03958 15.234 4.03958 14.0174ZM13.6008 12.2534C13.0373 9.23211 9.9682 6.62689 9.19045 6.3329L9.37673 6.65855C9.48851 6.88922 9.53508 7.15155 9.53508 7.43198C9.53508 9.45373 7.01087 12.4615 6.8991 12.7102C6.79664 12.9409 6.75007 13.1852 6.75007 13.4249C6.75007 14.334 7.45797 15.329 7.58371 15.329C7.69548 15.329 10.2197 12.8233 10.2895 11.3624C10.5876 11.8916 10.7134 12.3846 10.7134 12.8731C10.7134 14.7365 8.76664 17.2558 8.76664 17.2558C8.76664 17.7805 10.2523 19.662 10.4199 19.662C10.4665 19.662 10.5224 19.5987 10.569 19.5535C12.3341 17.7759 13.7033 15.709 13.7033 13.3661C13.7033 13.0042 13.6707 12.6334 13.6008 12.2534Z"
                                      fill="white"/>
                            </svg>
                            <span class="filter-name">Popular filters</span>
                            <span class="fa-stack">
                                <svg class="sidebar-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
<path d="M5.36703 7.72701L0.265434 2.46079C-0.087176 2.09681 -0.087176 1.50823 0.265434 1.14811L1.1132 0.272991C1.46581 -0.0909971 2.03599 -0.0909971 2.38485 0.272991L6.00098 4.00581L9.61711 0.272991C9.96972 -0.0909971 10.5399 -0.0909971 10.8888 0.272991L11.7365 1.14811C12.0891 1.5121 12.0891 2.10068 11.7365 2.46079L6.63493 7.72701C6.28982 8.091 5.71964 8.091 5.36703 7.72701Z"
      fill="white"/>
</svg>
         <svg class="filter-arrow" width="12" height="9" viewBox="0 0 12 9" fill="none"
              xmlns="http://www.w3.org/2000/svg">
<path d="M5.36703 8.47506L0.265434 3.20884C-0.087176 2.84485 -0.087176 2.25627 0.265434 1.89616L1.1132 1.02104C1.46581 0.65705 2.03599 0.65705 2.38485 1.02104L6.00098 4.75386L9.61711 1.02104C9.96972 0.65705 10.5399 0.65705 10.8888 1.02104L11.7365 1.89616C12.0891 2.26015 12.0891 2.84872 11.7365 3.20884L6.63493 8.47506C6.28982 8.83904 5.71964 8.83904 5.36703 8.47506Z"
      fill="#6667AB"/>
<path d="M5.36703 8.47506L0.265434 3.20884C-0.087176 2.84485 -0.087176 2.25627 0.265434 1.89616L1.1132 1.02104C1.46581 0.65705 2.03599 0.65705 2.38485 1.02104L6.00098 4.75386L9.61711 1.02104C9.96972 0.65705 10.5399 0.65705 10.8888 1.02104L11.7365 1.89616C12.0891 2.26015 12.0891 2.84872 11.7365 3.20884L6.63493 8.47506C6.28982 8.83904 5.71964 8.83904 5.36703 8.47506Z"
      fill="url(#paint0_linear_3_2989)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_3_2989" x1="6.00098" y1="1.96659" x2="6.00098" y2="7.95334"
                gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>

</span>
                        </button>
                    </div>
                    <span>Slots, Roulette, Blackjack,Betting Vid...</span>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li><input type="checkbox">Computer Science</li>
                            <li><input type="checkbox">Economics</li>
                            <li><input type="checkbox">Sociology</li>
                            <li><input type="checkbox">Nursing</li>
                            <li><input type="checkbox">English</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <div class="mb-0">
                        <button class="d-flex align-items-center btn collapsed"
                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                            <svg class="left-ico" width="22" height="18" viewBox="0 0 22 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.351 6.75H16.2693C16.7055 7.79027 16.514 9.04219 15.6849 9.89016L11.001 14.6805V16.3125C11.001 17.2445 11.7397 18 12.651 18H20.351C21.2623 18 22.001 17.2445 22.001 16.3125V8.4375C22.001 7.50551 21.2623 6.75 20.351 6.75ZM16.501 13.2187C16.0455 13.2187 15.676 12.8408 15.676 12.375C15.676 11.9088 16.0455 11.5312 16.501 11.5312C16.9564 11.5312 17.326 11.9088 17.326 12.375C17.326 12.8408 16.9564 13.2187 16.501 13.2187ZM14.907 6.65508L8.89379 0.505195C8.23516 -0.168398 7.16713 -0.168398 6.50851 0.505195L0.494945 6.65508C-0.16368 7.32867 -0.16368 8.42098 0.494945 9.09457L6.50816 15.2448C7.16679 15.9184 8.23482 15.9184 8.89344 15.2448L14.907 9.09492C15.5656 8.42098 15.5656 7.32867 14.907 6.65508ZM3.30098 8.71875C2.84551 8.71875 2.47598 8.34082 2.47598 7.875C2.47598 7.40883 2.84551 7.03125 3.30098 7.03125C3.75645 7.03125 4.12598 7.40883 4.12598 7.875C4.12598 8.34082 3.75645 8.71875 3.30098 8.71875ZM7.70098 13.2187C7.24551 13.2187 6.87598 12.8408 6.87598 12.375C6.87598 11.9088 7.24551 11.5312 7.70098 11.5312C8.15645 11.5312 8.52598 11.9088 8.52598 12.375C8.52598 12.8408 8.15645 13.2187 7.70098 13.2187ZM7.70098 8.71875C7.24551 8.71875 6.87598 8.34082 6.87598 7.875C6.87598 7.40883 7.24551 7.03125 7.70098 7.03125C8.15645 7.03125 8.52598 7.40883 8.52598 7.875C8.52598 8.34082 8.15645 8.71875 7.70098 8.71875ZM7.70098 4.21875C7.24551 4.21875 6.87598 3.84082 6.87598 3.375C6.87598 2.90883 7.24551 2.53125 7.70098 2.53125C8.15645 2.53125 8.52598 2.90883 8.52598 3.375C8.52598 3.84082 8.15645 4.21875 7.70098 4.21875ZM12.101 8.71875C11.6455 8.71875 11.276 8.34082 11.276 7.875C11.276 7.40883 11.6455 7.03125 12.101 7.03125C12.5564 7.03125 12.926 7.40883 12.926 7.875C12.926 8.34082 12.5564 8.71875 12.101 8.71875Z"
                                      fill="white"/>
                            </svg>

                            <span class="filter-name">Casino Games</span>
                            <span class="fa-stack">                      <svg class="sidebar-arrow" width="12"
                                                                              height="8" viewBox="0 0 12 8" fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg">
<path d="M5.36703 7.72701L0.265434 2.46079C-0.087176 2.09681 -0.087176 1.50823 0.265434 1.14811L1.1132 0.272991C1.46581 -0.0909971 2.03599 -0.0909971 2.38485 0.272991L6.00098 4.00581L9.61711 0.272991C9.96972 -0.0909971 10.5399 -0.0909971 10.8888 0.272991L11.7365 1.14811C12.0891 1.5121 12.0891 2.10068 11.7365 2.46079L6.63493 7.72701C6.28982 8.091 5.71964 8.091 5.36703 7.72701Z"
      fill="white"/>
</svg>
          <svg class="filter-arrow" width="12" height="9" viewBox="0 0 12 9" fill="none"
               xmlns="http://www.w3.org/2000/svg">
<path d="M5.36703 8.47506L0.265434 3.20884C-0.087176 2.84485 -0.087176 2.25627 0.265434 1.89616L1.1132 1.02104C1.46581 0.65705 2.03599 0.65705 2.38485 1.02104L6.00098 4.75386L9.61711 1.02104C9.96972 0.65705 10.5399 0.65705 10.8888 1.02104L11.7365 1.89616C12.0891 2.26015 12.0891 2.84872 11.7365 3.20884L6.63493 8.47506C6.28982 8.83904 5.71964 8.83904 5.36703 8.47506Z"
      fill="#6667AB"/>
<path d="M5.36703 8.47506L0.265434 3.20884C-0.087176 2.84485 -0.087176 2.25627 0.265434 1.89616L1.1132 1.02104C1.46581 0.65705 2.03599 0.65705 2.38485 1.02104L6.00098 4.75386L9.61711 1.02104C9.96972 0.65705 10.5399 0.65705 10.8888 1.02104L11.7365 1.89616C12.0891 2.26015 12.0891 2.84872 11.7365 3.20884L6.63493 8.47506C6.28982 8.83904 5.71964 8.83904 5.36703 8.47506Z"
      fill="url(#paint0_linear_3_2989)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_3_2989" x1="6.00098" y1="1.96659" x2="6.00098" y2="7.95334"
                gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>

</span>
                        </button>
                    </div>
                    <span>Slots, Roulette, Blackjack,Betting Vid...</span>

                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li><input type="checkbox">Informatics</li>
                            <li><input type="checkbox">Mathematics</li>
                            <li><input type="checkbox">Greek</li>
                            <li><input type="checkbox">Biostatistics</li>
                            <li><input type="checkbox">English</li>
                            <li><input type="checkbox">Nursing</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <div class="mb-0">
                        <button class="d-flex align-items-center justify-content-between btn collapsed"
                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                            <svg class="left-ico" width="22" height="18" viewBox="0 0 22 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.351 6.75H16.2693C16.7055 7.79027 16.514 9.04219 15.6849 9.89016L11.001 14.6805V16.3125C11.001 17.2445 11.7397 18 12.651 18H20.351C21.2623 18 22.001 17.2445 22.001 16.3125V8.4375C22.001 7.50551 21.2623 6.75 20.351 6.75ZM16.501 13.2187C16.0455 13.2187 15.676 12.8408 15.676 12.375C15.676 11.9088 16.0455 11.5312 16.501 11.5312C16.9564 11.5312 17.326 11.9088 17.326 12.375C17.326 12.8408 16.9564 13.2187 16.501 13.2187ZM14.907 6.65508L8.89379 0.505195C8.23516 -0.168398 7.16713 -0.168398 6.50851 0.505195L0.494945 6.65508C-0.16368 7.32867 -0.16368 8.42098 0.494945 9.09457L6.50816 15.2448C7.16679 15.9184 8.23482 15.9184 8.89344 15.2448L14.907 9.09492C15.5656 8.42098 15.5656 7.32867 14.907 6.65508ZM3.30098 8.71875C2.84551 8.71875 2.47598 8.34082 2.47598 7.875C2.47598 7.40883 2.84551 7.03125 3.30098 7.03125C3.75645 7.03125 4.12598 7.40883 4.12598 7.875C4.12598 8.34082 3.75645 8.71875 3.30098 8.71875ZM7.70098 13.2187C7.24551 13.2187 6.87598 12.8408 6.87598 12.375C6.87598 11.9088 7.24551 11.5312 7.70098 11.5312C8.15645 11.5312 8.52598 11.9088 8.52598 12.375C8.52598 12.8408 8.15645 13.2187 7.70098 13.2187ZM7.70098 8.71875C7.24551 8.71875 6.87598 8.34082 6.87598 7.875C6.87598 7.40883 7.24551 7.03125 7.70098 7.03125C8.15645 7.03125 8.52598 7.40883 8.52598 7.875C8.52598 8.34082 8.15645 8.71875 7.70098 8.71875ZM7.70098 4.21875C7.24551 4.21875 6.87598 3.84082 6.87598 3.375C6.87598 2.90883 7.24551 2.53125 7.70098 2.53125C8.15645 2.53125 8.52598 2.90883 8.52598 3.375C8.52598 3.84082 8.15645 4.21875 7.70098 4.21875ZM12.101 8.71875C11.6455 8.71875 11.276 8.34082 11.276 7.875C11.276 7.40883 11.6455 7.03125 12.101 7.03125C12.5564 7.03125 12.926 7.40883 12.926 7.875C12.926 8.34082 12.5564 8.71875 12.101 8.71875Z"
                                      fill="white"/>
                            </svg>
                            <span class="filter-name">Casino games</span>
                            <span class="fa-stack">                      <svg class="sidebar-arrow" width="12"
                                                                              height="8" viewBox="0 0 12 8" fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg">
<path d="M5.36703 7.72701L0.265434 2.46079C-0.087176 2.09681 -0.087176 1.50823 0.265434 1.14811L1.1132 0.272991C1.46581 -0.0909971 2.03599 -0.0909971 2.38485 0.272991L6.00098 4.00581L9.61711 0.272991C9.96972 -0.0909971 10.5399 -0.0909971 10.8888 0.272991L11.7365 1.14811C12.0891 1.5121 12.0891 2.10068 11.7365 2.46079L6.63493 7.72701C6.28982 8.091 5.71964 8.091 5.36703 7.72701Z"
      fill="white"/>
</svg>
           <svg class="filter-arrow" width="12" height="9" viewBox="0 0 12 9" fill="none"
                xmlns="http://www.w3.org/2000/svg">
<path d="M5.36703 8.47506L0.265434 3.20884C-0.087176 2.84485 -0.087176 2.25627 0.265434 1.89616L1.1132 1.02104C1.46581 0.65705 2.03599 0.65705 2.38485 1.02104L6.00098 4.75386L9.61711 1.02104C9.96972 0.65705 10.5399 0.65705 10.8888 1.02104L11.7365 1.89616C12.0891 2.26015 12.0891 2.84872 11.7365 3.20884L6.63493 8.47506C6.28982 8.83904 5.71964 8.83904 5.36703 8.47506Z"
      fill="#6667AB"/>
<path d="M5.36703 8.47506L0.265434 3.20884C-0.087176 2.84485 -0.087176 2.25627 0.265434 1.89616L1.1132 1.02104C1.46581 0.65705 2.03599 0.65705 2.38485 1.02104L6.00098 4.75386L9.61711 1.02104C9.96972 0.65705 10.5399 0.65705 10.8888 1.02104L11.7365 1.89616C12.0891 2.26015 12.0891 2.84872 11.7365 3.20884L6.63493 8.47506C6.28982 8.83904 5.71964 8.83904 5.36703 8.47506Z"
      fill="url(#paint0_linear_3_2989)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_3_2989" x1="6.00098" y1="1.96659" x2="6.00098" y2="7.95334"
                gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>


</span>
                        </button>
                    </div>
                    <span>Slots, Roulette, Blackjack,Betting Vid...</span>

                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li><input type="checkbox">Astrophysics</li>
                            <li><input type="checkbox">Informatics</li>
                            <li><input type="checkbox">Criminology</li>
                            <li><input type="checkbox">Economics</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
	$myvariable = ob_get_clean();

	return $myvariable;
}

//add_action( 'add_attachment', 'pami_set_image_meta_upon_upload' );
//
//# Helper function
//if ( ! function_exists( 'pami_image_meta_first' ) ) {
//
//	function pami_image_meta_first( $my_image_title, $encoding = 'UTF-8' ) {
//
//		$my_image_title = mb_ereg_replace( '^[\ ]+', '', $my_image_title );
//		$my_image_title = mb_strtoupper( mb_substr( $my_image_title, 0, 1, $encoding ), $encoding ) . mb_substr( $my_image_title, 1, mb_strlen( $my_image_title ), $encoding );
//
//		return $my_image_title;
//
//	}
//
//}
//
//# Main function
//function pami_set_image_meta_upon_upload( $post_ID ) {
//
//	if ( ! wp_attachment_is_image( $post_ID ) ) {
//		return;
//	}
//
//	$my_image_title = get_post( $post_ID )->post_title;
//
//	// Sanitize the title: remove hyphens, underscores & extra spaces:
//	$my_image_title = preg_replace( '%\s*[-_\s]+\s*%', ' ', $my_image_title );
//
//	// Sanitize the title: capitalize first letter of every word (other letters lower case):
//	$my_image_title = str_replace( '"', '', $my_image_title );
//	$my_image_title = str_replace( '«', '', $my_image_title );
//	$my_image_title = str_replace( '»', '', $my_image_title );
//	$my_image_title = str_replace( '—', '', $my_image_title );
//	$my_image_title = str_replace( ':', '', $my_image_title );
//	$my_image_title = str_replace( '  ', ' ', $my_image_title );
//	$my_image_title = str_replace( '   ', ' ', $my_image_title );
//
//	$my_image_title = pami_image_meta_first( mb_strtolower( $my_image_title ) );
//
//	// Set the image Alt-Text
//	update_post_meta( $post_ID, '_wp_attachment_image_alt', $my_image_title );
//
//	$my_image_title = mb_strtolower( $my_image_title );
//
//	$my_image_meta = [
//		'ID'         => $post_ID,
//		'post_title' => 'Image — ' . $my_image_title, // Set image Title to sanitized title
//	];
//
//	// Set the image meta (e.g. Title, Excerpt, Content)
//	wp_update_post( $my_image_meta );
//
//}
//function misha_my_load_more_scripts() {
//
//	global $wp_query;
//
//	// In most cases it is already included on the page and this line can be removed
//	wp_enqueue_script('jquery');
//
//	// register our main script but do not enqueue it yet
//	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery') );
//
//	// now the most interesting part
//	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
//	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
//	wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
//		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
//		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
//		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 5,
//		'max_page' => $wp_query->max_num_pages
//	) );
//
//	wp_enqueue_script( 'my_loadmore' );
//}
//
////add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );
//function misha_loadmore_ajax_handler(){
//	$perfect_casinos_list = get_sub_field( 'perfect_casinos_list' );
//	// prepare our arguments for the query
//	$args = json_decode( stripslashes( $_POST['query'] ), true );
//	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
//	$args['post_status'] = 'publish';
//
//	// it is always better to use WP_Query but not here
//	query_posts( $args );
//	$args     = array(
//		'post_type'      => 'reviews',
//		'order'          => 'DESC',
//		'order_by'       => 'date',
//		'posts_per_page' => 5,
//		'post__not_in'   => $perfect_casinos_list
//	);
//	$myposts2 = get_posts( $args );
//	if( have_posts() ) :
//
//		// run the loop
//		 foreach ( $myposts2 as $all_post ) :
//
//			// look into your theme code how the posts are inserted, but you can use your own HTML of course
//			// do you remember? - my example is adapted for Twenty Seventeen theme
//			get_template_part( 'template-parts/content', 'reviews' );
//			// for the test purposes comment the line above and uncomment the below one
//			// the_title();
//
//
//		 endforeach;
//
//	endif;
//	die; // here we exit the script and even no wp_reset_query() required!
//}
//
//
//
//add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
//add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
function assets() {

	wp_enqueue_script( 'tuts/js', get_template_directory_uri() . '/js/tuts.js', [ 'jquery' ], null, true );

	wp_localize_script( 'tuts/js', 'bobz', array(
		'nonce'    => wp_create_nonce( 'bobz' ),
		'ajax_url' => admin_url( 'admin-ajax.php' )
	) );
}

add_action( 'wp_enqueue_scripts', 'assets', 100 );
add_action( 'wp_ajax_nopriv_codyshop_ajax_search', 'codyshop_ajax_search' );
add_action( 'wp_ajax_codyshop_ajax_search', 'codyshop_ajax_search' );
function codyshop_ajax_search() {
	$args  = array(
		'post_type'      => 'reviews',
		'post_status'    => 'publish',
		'order'          => 'DESC',
		'orderby'        => 'date',
		's'              => $_POST['term'],
		'posts_per_page' => 5
	);
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post(); ?>
            <li class="review-post">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
		<?php }
	} else { ?>
        <li><a href="#">Ничего не найдено, попробуйте другой запрос</a></li>
	<?php }
	exit;
}

function vb_filter_posts_sc( $atts ) {

	$a = shortcode_atts( array(
		'post_type' => 'games',
		'tax'       => 'games_categories', // Taxonomy
		'terms'     => false, // Get specific taxonomy terms only
		'active'    => false, // Set active term by ID
		'per_page'  => 4, // How many posts per page,
		'pager'     => 'pager' // 'pager' to use numbered pagination || 'infscr' to use infinite scroll
	), $atts );

	$result = null;
	$terms  = get_terms( $a['tax'] );
	global $post;
	if ( ! $post ) {
		$post = get_the_ID();
	}
	if ( count( $terms ) ) :
		ob_start(); ?>
        <div id="container-async" data-paged="<?php echo $a['per_page']; ?>" class="sc-ajax-filter">
            <ul class="nav-filter row flex-wrap">
                <li class="col-4 active">
                    <a href="#" data-filter="<?= $terms[0]->taxonomy; ?>" data-term="all-terms" data-page="1">
                        Play all free games
                        <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.74365 9.02384L3.10303 15.2886C2.64404 15.7216 1.90186 15.7216 1.44775 15.2886L0.344238 14.2475C-0.114746 13.8145 -0.114746 13.1143 0.344238 12.686L5.05127 8.24536L0.344238 3.80476C-0.114746 3.37176 -0.114746 2.67158 0.344238 2.24318L1.44287 1.19292C1.90186 0.759913 2.64404 0.759913 3.09814 1.19292L9.73877 7.45766C10.2026 7.89066 10.2026 8.59084 9.74365 9.02384Z"
                                  fill="white"/>
                        </svg>

                    </a>
                </li>
				<?php foreach ( $terms as $term ) : ?>
                    <li<?php if ( $term->term_id == $a['active'] ) : ?> class="col-4"<?php endif; ?>>
                        <a href="<?php echo get_term_link( $term, $term->taxonomy ); ?>"
                           data-filter="<?php echo $term->taxonomy; ?>" data-term="<?php echo $term->slug; ?>"
                           data-page="1">
							<?php echo $term->name; ?>
                        </a>
                    </li>
				<?php endforeach; ?>
            </ul>

            <div class="status"></div>
            <div class="content all-games-grid"></div>

			<?php if ( $a['pager'] == 'infscr' ) : ?>
                <nav class="pagination infscr-pager">
                    <a href="#page-2" class="btn btn-primary">Load More</a>
                </nav>
			<?php endif; ?>
        </div>

		<?php $result = ob_get_clean();
	endif;

	return $result;
}

add_shortcode( 'ajax_filter_posts', 'vb_filter_posts_sc' );
function vb_ajax_pager( $query = null, $paged = 4 ) {

	if ( ! $query ) {
		return;
	}

	$paginate = paginate_links( [
		'base'      => '%_%',
		'type'      => 'array',
		'total'     => $query->max_num_pages,
		'format'    => '#page=%#%',
		'current'   => max( 1, $paged ),
		'prev_text' => 'Prev',
		'next_text' => 'Next'
	] );

	if ( $query->max_num_pages > 1 ) : ?>
        <ul class="pagination">
			<?php foreach ( $paginate as $page ) : ?>
                <li><?php echo $page; ?></li>
			<?php endforeach; ?>
        </ul>
	<?php endif;
}

function vb_filter_posts() {

	if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'bobz' ) ) {
		die( 'Permission denied' );
	}

	/**
	 * Default response
	 */
	$response = [
		'status'  => 500,
		'message' => 'Something is wrong, please try again later ...',
		'content' => false,
		'found'   => 0
	];

	$tax  = sanitize_text_field( $_POST['params']['tax'] );
	$term = sanitize_text_field( $_POST['params']['term'] );
	$page = intval( $_POST['params']['page'] );
	$qty  = intval( $_POST['params']['qty'] );

	/**
	 * Check if term exists
	 */
	if ( ! term_exists( $term, $tax ) && $term != 'all-terms' ) :
		$response = [
			'status'  => 501,
			'message' => 'Term doesn\'t exist',
			'content' => 0
		];

		die( json_encode( $response ) );
	endif;

	/**
	 * Tax query
	 */
	if ( $term == 'all-terms' ) :

		$tax_qry[] = [
			'taxonomy' => $tax,
			'field'    => 'slug',
			'terms'    => $term,
			'operator' => 'NOT IN'
		];
	else :

		$tax_qry[] = [
			'taxonomy' => $tax,
			'field'    => 'slug',
			'terms'    => $term,
		];
	endif;

	/**
	 * Setup query
	 */
	$args = [
		'paged'          => $page,
		'post_type'      => 'games',
		'post_status'    => 'publish',
		'posts_per_page' => $qty,
		'tax_query'      => $tax_qry
	];

	$qry = new WP_Query( $args );

	ob_start();
	if ( $qry->have_posts() ) :
		while ( $qry->have_posts() ) : $qry->the_post(); ?>
			<?php $post_id = get_the_ID(); ?>
            <article class="loop-item play-free-grid-item">
                <div class="game-thumb-block">
					<?php reviewcasino_post_thumbnail(); ?>
                    <div class="hide-modal-group">
						<?php $free_link = get_sub_field( 'free_link', $post_id ); ?>
						<?php if ( $free_link ) : ?>
                            <a class="free-game-link" href="<?php echo esc_url( $free_link['url'] ); ?>"
                               target="_blank">
                                    <span>
                                        <?php echo esc_html( $free_link['title'] ); ?>
                                    </span>
                            </a>
						<?php endif; ?>
						<?php $game_link = get_sub_field( 'game_link', $post_id ); ?>
						<?php if ( $game_link ) : ?>
                            <a class="site-game-link" href="<?php echo esc_url( $game_link['url'] ); ?>"
                               target="_blank"><?php echo esc_html( $game_link['title'] ); ?></a>
						<?php endif; ?>
                    </div>
                </div>
                <footer>
                    <a href="<?php the_permalink(); ?>">
						<?php $game_logo = get_field( 'game_logo', $post_id ); ?>
						<?php if ( $game_logo ) : ?>
                            <img src="<?php echo esc_url( $game_logo['url'] ); ?>"
                                 alt="<?php echo esc_attr( $game_logo['alt'] ); ?>"/>
						<?php endif; ?>
                    </a>
                </footer>
            </article>

		<?php endwhile;

		/**
		 * Pagination
		 */
		vb_ajax_pager( $qry, $page );

		$response = [
			'status' => 200,
			'found'  => $qry->found_posts
		];


	else :

		$response = [
			'status'  => 201,
			'message' => 'No posts found'
		];

	endif;

	$response['content'] = ob_get_clean();

	die( json_encode( $response ) );

}

add_action( 'wp_ajax_do_filter_posts', 'vb_filter_posts' );
add_action( 'wp_ajax_nopriv_do_filter_posts', 'vb_filter_posts' );
