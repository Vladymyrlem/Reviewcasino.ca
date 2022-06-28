<section class="most-popular-games">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
	<?php if ( have_rows( 'most_popular' ) ) : ?>
		<?php while ( have_rows( 'most_popular' ) ) : the_row(); ?>
			<?php $popular_link = get_sub_field( 'popular_link' ); ?>
			<?php if ( $popular_link ) : ?>
                <a href="<?php echo esc_url( $popular_link['url'] ); ?>" target="_blank">
					<?php $popular_image = get_sub_field( 'popular_image' ); ?>
					<?php if ( $popular_image ) : ?>
                        <img src="<?php echo esc_url( $popular_image['url'] ); ?>"
                             alt="<?php echo esc_attr( $popular_image['alt'] ); ?>"/>
					<?php endif; ?>
                </a>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
