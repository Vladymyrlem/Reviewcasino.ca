<section class="play-free-section left-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="game-descr">
		<?php the_sub_field( 'game_descr' ); ?>
    </div>
	<?php if ( have_rows( 'news_free_group' ) ) : ?>
        <div class="play-free-games-grid">
			<?php while ( have_rows( 'news_free_group' ) ) : the_row(); ?>
                <div class="play-free-grid-item">
                    <div class="game-thumb-block">
						<?php $newest_free_image = get_sub_field( 'newest_free_image' ); ?>

						<?php if ( $newest_free_image ) : ?>
                            <img class="game-thumb" src="<?php echo esc_url( $newest_free_image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $newest_free_image['alt'] ); ?>"/>
						<?php endif; ?>

                        <div class="hide-modal-group">
							<?php $free_link = get_sub_field( 'free_link' ); ?>
							<?php if ( $free_link ) : ?>
                                <a class="free-game-link" href="<?php echo esc_url( $free_link['url'] ); ?>"
                                   target="_blank">
                                    <span>
                                        <?php echo esc_html( $free_link['title'] ); ?>
                                    </span>
                                </a>
							<?php endif; ?>
							<?php $game_link = get_sub_field( 'game_link' ); ?>
							<?php if ( $game_link ) : ?>
                                <a class="site-game-link" href="<?php echo esc_url( $game_link['url'] ); ?>"
                                   target="<?php echo esc_attr( $game_link['target'] ); ?>"><?php echo esc_html( $game_link['title'] ); ?></a>
							<?php endif; ?>
                        </div>
                    </div>
                    <footer>
						<?php $game_logo = get_sub_field( 'game_logo' ); ?>
						<?php if ( $game_logo ) : ?>
                            <img class="game-logo-img" src="<?php echo esc_url( $game_logo['url'] ); ?>"
                                 alt="<?php echo esc_attr( $game_logo['alt'] ); ?>"/>
						<?php endif; ?>
                    </footer>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
