<section class="left-content game-type-section">
    <h2 class="middle-title game-type-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
	<?php if ( have_rows( 'popular_game_types_slider' ) ) : ?>
        <div class="game-type-grid games-type-slider">
			<?php while ( have_rows( 'popular_game_types_slider' ) ) : the_row(); ?>
                <div class="game-type-item slide">
                    <div class="game-type-top">
						<?php $game_image = get_sub_field( 'game_image' ); ?>
						<?php if ( $game_image ) : ?>
                            <img src="<?php echo esc_url( $game_image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $game_image['alt'] ); ?>"/>
						<?php endif; ?>
                    </div>
                    <h3 class="game-type-title">
						<?php the_sub_field( 'game_name' ); ?>
                    </h3>
                    <div class="game-type-excerpt">
						<?php the_sub_field( 'game_descr' ); ?>
                    </div>
					<?php $game_link = get_sub_field( 'game_link' ); ?>
					<?php if ( $game_link ) : ?>
                        <a class="red-btn game-type-link" href="<?php echo esc_url( $game_link['url'] ); ?>"
                           target="_blank">Play real money <?php the_sub_field( 'game_name' ); ?>
                        </a>
					<?php endif; ?>
					<?php $yes_free_checked_values = get_sub_field( 'yes_free' ); ?>
					<?php if ( $yes_free_checked_values ) : ?>
                        <!--						--><?php //foreach ( $yes_free_checked_values as $yes_free_value ): ?>
                        <!--							--><?php //echo esc_html( $yes_free_value ); ?>
                        <!--						--><?php //endforeach; ?>
						<?php $game_free_link = get_sub_field( 'game_free_link' ); ?>
						<?php if ( $game_free_link ) : ?>
                            <a class="game-type-free-link" href="<?php echo esc_url( $game_free_link['url'] ); ?>"
                               target="_blank">Play free <?php the_sub_field( 'game_name' ); ?>
                            </a>
						<?php endif; ?>
					<?php endif; ?>

                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
