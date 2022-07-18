<section class="games-no-deposit full-content">
    <h2 class="middle-title games-deposit-title">
		<?php the_sub_field( 'discover_title' ); ?>
    </h2>
    <div class="games-deposit-description">
		<?php the_sub_field( 'no_deposit_descr' ); ?>
    </div>
	<?php if ( have_rows( 'discover_grid' ) ) : ?>
        <div class="games-deposit-grid">
			<?php while ( have_rows( 'discover_grid' ) ) : the_row(); ?>
                <div class="games-deposit-item">
                    <div class="games-deposit-top">
						<?php $discover_image = get_sub_field( 'discover_image' ); ?>
						<?php if ( $discover_image ) : ?>
                            <img src="<?php echo esc_url( $discover_image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $discover_image['alt'] ); ?>"/>
						<?php endif; ?>
                    </div>
                    <h3 class="games-deposit-title">
						<?php the_sub_field( 'discover_title' ); ?>
                    </h3>
                    <div class="games-deposit-excerpt">
						<?php the_sub_field( 'discover_descr' ); ?>
                    </div>
					<?php $discover_link = get_sub_field( 'discover_link' ); ?>
					<?php if ( $discover_link ) : ?>
                        <a class="red-btn games-deposit-link" href="<?php echo esc_url( $discover_link['url'] ); ?>"
                           target="<?php echo esc_attr( $discover_link['target'] ); ?>"><?php echo esc_html( $discover_link['title'] ); ?></a>
					<?php endif; ?>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
