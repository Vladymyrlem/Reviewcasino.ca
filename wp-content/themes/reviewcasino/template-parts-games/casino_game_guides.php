<section class="game-guides-section left-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="casino-guides-grid">
		<?php if ( have_rows( 'game_guides_group' ) ) : ?>
			<?php while ( have_rows( 'game_guides_group' ) ) : the_row(); ?>
                <div class="casino-guide-item">
					<?php $game_image = get_sub_field( 'game_image' ); ?>
                    <div class="top-casino-guides">
						<?php if ( $game_image ) : ?>
                            <img src="<?php echo esc_url( $game_image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $game_image['alt'] ); ?>"/>
						<?php endif; ?>
                    </div>
                    <h3 class="casino-guide-title">

						<?php the_sub_field( 'game_name' ); ?>
                    </h3>

					<?php $game_link = get_sub_field( 'game_link' ); ?>
					<?php if ( $game_link ) : ?>
                        <a class="red-btn casino-guide-link" href="<?php echo esc_url( $game_link['url'] ); ?>"
                           target="<?php echo esc_attr( $game_link['target'] ); ?>"><?php echo esc_html( $game_link['title'] ); ?></a>
					<?php endif; ?>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
</section>
