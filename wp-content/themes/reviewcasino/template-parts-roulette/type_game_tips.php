<section class="type-game-tips-section type-game-section full-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'type_game_tips_title' ); ?>
    </h2>
	<?php if ( have_rows( 'type_game_tips_grid' ) ) : ?>
        <div class="type-game-grid">
			<?php while ( have_rows( 'type_game_tips_grid' ) ) : the_row(); ?>
                <div class="type-game-item">
                    <header class="type-game-top">
						<?php $type_game_tips_image = get_sub_field( 'type_game_tips_image' ); ?>
						<?php if ( $type_game_tips_image ) : ?>
                            <img class="type-game-image" src="<?php echo esc_url( $type_game_tips_image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $type_game_tips_image['alt'] ); ?>"/>
						<?php endif; ?>
                    </header>
                    <h3 class="type-game-name">
						<?php the_sub_field( 'type_game_tips_name' ); ?>
                    </h3>
                    <div class="type-game-descr">
						<?php the_sub_field( 'type_game_tips_descr' ); ?>
                    </div>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
