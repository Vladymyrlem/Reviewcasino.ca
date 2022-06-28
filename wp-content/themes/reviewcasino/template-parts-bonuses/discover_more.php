<section class="dark-decor-section full-content">
	<?php the_sub_field( 'discover_title' ); ?>
	<?php if ( have_rows( 'discover_grid' ) ) : ?>
		<?php while ( have_rows( 'discover_grid' ) ) : the_row(); ?>
			<?php $discover_image = get_sub_field( 'discover_image' ); ?>
			<?php if ( $discover_image ) : ?>
                <img src="<?php echo esc_url( $discover_image['url'] ); ?>"
                     alt="<?php echo esc_attr( $discover_image['alt'] ); ?>"/>
			<?php endif; ?>
			<?php the_sub_field( 'discover_title' ); ?>
			<?php the_sub_field( 'discover_descr' ); ?>
			<?php $discover_link = get_sub_field( 'discover_link' ); ?>
			<?php if ( $discover_link ) : ?>
                <a href="<?php echo esc_url( $discover_link['url'] ); ?>"
                   target="<?php echo esc_attr( $discover_link['target'] ); ?>"><?php echo esc_html( $discover_link['title'] ); ?></a>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
