<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reviewcasino_CA
 */

?>

<footer id="colophon" class="site-footer">
    <div class="top-foot">
        <div class="mycontainer foot-container">
            <div class="site-info">
				<?php the_custom_logo(); ?>
                <div id="foot-descr">
					<?php the_field( 'foot_descr', 'footer' ); ?>
                </div>
                <div class="follow-us">
					<?php if ( have_rows( 'follow_us', 'footer' ) ) : ?>
						<?php while ( have_rows( 'follow_us', 'footer' ) ) : the_row(); ?>
                            <span class="follow-title">
                                <?php the_sub_field( 'follow_title' ); ?>
						        </span>
							<?php if ( have_rows( 'follow_links' ) ) : ?>
                                <div class="follow-us-list">
									<?php while ( have_rows( 'follow_links' ) ) : the_row(); ?>
										<?php $follow_link = get_sub_field( 'follow_link' ); ?>
										<?php if ( $follow_link ) : ?>
                                            <a href="<?php echo esc_url( $follow_link['url'] ); ?>"
                                               target="<?php echo esc_attr( $follow_link['target'] ); ?>">
												<?php $link_image = get_sub_field( 'link_image' ); ?>
												<?php if ( $link_image ) : ?>
                                                    <img src="<?php echo esc_url( $link_image['url'] ); ?>"
                                                         alt="<?php echo esc_attr( $link_image['alt'] ); ?>"/>
												<?php endif; ?>
                                            </a>
										<?php endif; ?>
									<?php endwhile; ?>
                                </div>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
                </div>
            </div><!-- .site-info -->
            <div class="foot-categories-menu">
				<?php if ( have_rows( 'foot_menu', 'footer' ) ) : ?>
					<?php while ( have_rows( 'foot_menu', 'footer' ) ) : the_row(); ?>
						<?php if ( have_rows( 'menu' ) ) : ?>
							<?php while ( have_rows( 'menu' ) ) : the_row(); ?>
                                <div class="foot-menu-item">
                                    <div class="foot-menu-parent">
										<?php $parent_ico = get_sub_field( 'parent_ico' ); ?>
										<?php if ( $parent_ico ) : ?>
                                            <img src="<?php echo esc_url( $parent_ico['url'] ); ?>"
                                                 alt="<?php echo esc_attr( $parent_ico['alt'] ); ?>"/>
										<?php endif; ?>
										<?php $parent_item = get_sub_field( 'parent_item' ); ?>
										<?php if ( $parent_item ) : ?>
                                            <a class="foot-parent-item-link"
                                               href="<?php echo esc_url( $parent_item['url'] ); ?>"
                                               target="<?php echo esc_attr( $parent_item['target'] ); ?>"><?php echo esc_html( $parent_item['title'] ); ?></a>
										<?php endif; ?>
                                    </div>
									<?php if ( have_rows( 'sub_menu' ) ) : ?>
                                        <div class="foot-submenu-list">
											<?php while ( have_rows( 'sub_menu' ) ) : the_row(); ?>
                                                <div class="foot-submenu-item">
													<?php $sub_ico = get_sub_field( 'sub_ico' ); ?>
													<?php if ( $sub_ico ) : ?>
                                                        <img src="<?php echo esc_url( $sub_ico['url'] ); ?>"
                                                             alt="<?php echo esc_attr( $sub_ico['alt'] ); ?>"/>
													<?php endif; ?>
													<?php $sub_menu_link = get_sub_field( 'sub_menu_link' ); ?>
													<?php if ( $sub_menu_link ) : ?>
                                                        <a class="foot-submenu-link"
                                                           href="<?php echo esc_url( $sub_menu_link['url'] ); ?>"
                                                           target="<?php echo esc_attr( $sub_menu_link['target'] ); ?>"><?php echo esc_html( $sub_menu_link['title'] ); ?></a>
													<?php endif; ?>
                                                </div>
											<?php endwhile; ?>
                                        </div>
									<?php endif; ?>
                                </div>
							<?php endwhile; ?>
						<?php endif; ?>
					<?php endwhile; ?>

				<?php endif; ?>
            </div>
            <div class="foot-links">
				<?php if ( have_rows( 'foot_links', 'footer' ) ) : ?>
					<?php while ( have_rows( 'foot_links', 'footer' ) ) : the_row(); ?>
						<?php $foot_link = get_sub_field( 'foot_link' ); ?>
						<?php if ( $foot_link ) : ?>
                            <a href="<?php echo esc_url( $foot_link['url'] ); ?>"
                               target="_blank"><?php echo esc_html( $foot_link['title'] ); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>
        </div>
    </div>
    <div class="bottom-foot">
        <div class="mycontainer news-subscribe">
			<?php echo do_shortcode( '[contact-form-7 id="37" title="Subscription"]' ); ?>
        </div>
        <div class="mycontainer copyright">
			<?php the_field( 'copyright', 'footer' ); ?>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
