<section class="game-guides-section">
    <h2 class="middle-title">
		<?php the_sub_field( 'guide_title' ); ?>
    </h2>
    <div class="game-guide-content">
		<?php the_sub_field( 'guide_subtitle' ); ?>
    </div>
	<?php if ( have_rows( 'game_guide_grid' ) ) : ?>
        <div class="game-guides-grid">
			<?php while ( have_rows( 'game_guide_grid' ) ) : the_row(); ?>
                <div class="game-guide-item">
					<?php $game_guide_image = get_sub_field( 'game_guide_image' ); ?>
					<?php if ( $game_guide_image ) : ?>
                        <img class="game-guide-img" src="<?php echo esc_url( $game_guide_image['url'] ); ?>"
                             alt="<?php echo esc_attr( $game_guide_image['alt'] ); ?>"/>
					<?php endif; ?>
					<?php $game_guide_link = get_sub_field( 'game_guide_link' ); ?>
					<?php if ( $game_guide_link ) : ?>
                        <a class="game-guide-link" href="<?php echo esc_url( $game_guide_link['url'] ); ?>"
                           target="_blank"><?php echo esc_html( $game_guide_link['title'] ); ?>
                            <svg width="11" height="16" viewBox="0 0 11 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.74365 8.64502L3.10303 15.2856C2.64404 15.7446 1.90186 15.7446 1.44775 15.2856L0.344238 14.1821C-0.114746 13.7231 -0.114746 12.981 0.344238 12.5269L5.05127 7.81982L0.344238 3.11279C-0.114746 2.65381 -0.114746 1.91162 0.344238 1.45752L1.44287 0.344238C1.90186 -0.114746 2.64404 -0.114746 3.09814 0.344238L9.73877 6.98486C10.2026 7.44385 10.2026 8.18604 9.74365 8.64502Z"
                                      fill="#6667AB"/>
                                <path d="M9.74365 8.64502L3.10303 15.2856C2.64404 15.7446 1.90186 15.7446 1.44775 15.2856L0.344238 14.1821C-0.114746 13.7231 -0.114746 12.981 0.344238 12.5269L5.05127 7.81982L0.344238 3.11279C-0.114746 2.65381 -0.114746 1.91162 0.344238 1.45752L1.44287 0.344238C1.90186 -0.114746 2.64404 -0.114746 3.09814 0.344238L9.73877 6.98486C10.2026 7.44385 10.2026 8.18604 9.74365 8.64502Z"
                                      fill="url(#paint0_linear_1757_22580)" fill-opacity="0.2"/>
                                <defs>
                                    <linearGradient id="paint0_linear_1757_22580" x1="5.04364" y1="2.38071" x2="5.04364"
                                                    y2="14.0772" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.421875" stop-color="#A119E0"/>
                                        <stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
                                    </linearGradient>
                                </defs>
                            </svg>

                        </a>
					<?php endif; ?>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
