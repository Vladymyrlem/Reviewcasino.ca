<section class="popular-gambling-games">
    <div class="mycontainer">
        <div class="gambling-game-block">
            <h2 class="main-title">    <?php the_sub_field( 'title' ); ?>
            </h2>
            <div id="gambling-game-descr"><?php the_sub_field( 'gambling_games_descr' ); ?>
            </div>
			<?php if ( have_rows( 'gambling_games_link' ) ) : ?>
                <div class="gambling-games-list">
					<?php while ( have_rows( 'gambling_games_link' ) ) : the_row(); ?>
						<?php $game_link = get_sub_field( 'game_link' ); ?>
						<?php if ( $game_link ) : ?>

                            <a class="gambling-link" href="<?php echo esc_url( $game_link['url'] ); ?>"
                               target="<?php echo esc_attr( $game_link['target'] ); ?>">
								<?php $game_image = get_sub_field( 'game_image' ); ?>
								<?php if ( $game_image ) : ?>
                                    <img src="<?php echo esc_url( $game_image['url'] ); ?>"
                                         alt="<?php echo esc_attr( $game_image['alt'] ); ?>"/>
								<?php endif; ?>
                                <span>
        <?php echo esc_html( $game_link['title'] ); ?>
            </span>
                            </a>
						<?php endif; ?>
                        <!--    --><?php //the_sub_field( 'game_name' ); ?>

					<?php endwhile; ?>
                </div>

			<?php endif; ?>
        </div>
    </div>
	<?php $gambling_image_after = get_sub_field( 'gambling_image_after' ); ?>
	<?php if ( $gambling_image_after ) : ?>
        <img class="gambling-image-after" src="<?php echo esc_url( $gambling_image_after['url'] ); ?>"
             alt="<?php echo esc_attr( $gambling_image_after['alt'] ); ?>"/>
	<?php endif; ?>
</section>
