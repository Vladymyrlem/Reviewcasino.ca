<section class="type-game-guide-section type-game-section full-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'types_game_guides_title' ); ?>
    </h2>
	<?php if ( have_rows( 'type_game_guides_group' ) ) : ?>
        <div class="type-game-grid">

			<?php while ( have_rows( 'type_game_guides_group' ) ) : the_row(); ?>
                <div class="type-game-item">

                    <header class="type-game-top">

						<?php $type_game_guides_image = get_sub_field( 'type_game_guides_image' ); ?>
						<?php if ( $type_game_guides_image ) : ?>
                            <img src="<?php echo esc_url( $type_game_guides_image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $type_game_guides_image['alt'] ); ?>"/>
						<?php endif; ?>
                    </header>
                    <h3 class="type-game-name">
						<?php the_sub_field( 'type_game_guides_name' ); ?>
                    </h3>
                    <div class="type-game-descr">

						<?php the_sub_field( 'type_game_guides_descr' ); ?>
                    </div>
					<?php $type_game_guides_link = get_sub_field( 'type_game_guides_link' ); ?>
					<?php if ( $type_game_guides_link ) : ?>
                        <a class="type-game-link red-btn" href="<?php echo esc_url( $type_game_guides_link['url'] ); ?>"
                           target="<?php echo esc_attr( $type_game_guides_link['target'] ); ?>"><?php echo esc_html( $type_game_guides_link['title'] ); ?></a>
					<?php endif; ?>
                    <footer>
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.69533 0.521791L4.86449 4.40022L0.768236 5.02416C0.0336581 5.13548 -0.260734 6.08165 0.271975 6.62358L3.23552 9.64078L2.53459 13.9029C2.40842 14.6734 3.18505 15.2504 3.83552 14.8901L7.5 12.8777L11.1645 14.8901C11.8149 15.2475 12.5916 14.6734 12.4654 13.9029L11.7645 9.64078L14.728 6.62358C15.2607 6.08165 14.9663 5.13548 14.2318 5.02416L10.1355 4.40022L8.30467 0.521791C7.97664 -0.169529 7.02617 -0.178317 6.69533 0.521791Z"
                                  fill="white"/>
                        </svg>
                        <span>
        Best for all New Players
    </span>
                    </footer>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
