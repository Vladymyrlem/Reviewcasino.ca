<section class="info-about">
    <div class="mycontainer">
		<?php if ( have_rows( 'info_block' ) ) : ?>
            <div class="info-block">
				<?php while ( have_rows( 'info_block' ) ) : the_row(); ?>
                    <h2 class="middle-title">
						<?php the_sub_field( 'info_title' ); ?>
                    </h2>
                    <div class="info-descr">
						<?php the_sub_field( 'info_descr' ); ?>
                    </div>
					<?php if ( have_rows( 'casino_games_list' ) ) : ?>
                        <div class="casino-games-list">
							<?php while ( have_rows( 'casino_games_list' ) ) : the_row(); ?>
                                <div class="casino-game-item">
									<?php $game_ico = get_sub_field( 'game_ico' ); ?>
									<?php if ( $game_ico ) : ?>
                                        <img src="<?php echo esc_url( $game_ico['url'] ); ?>"
                                             alt="<?php echo esc_attr( $game_ico['alt'] ); ?>"/>
									<?php endif; ?>
									<?php $game_link = get_sub_field( 'game_link' ); ?>
									<?php if ( $game_link ) : ?>
                                        <a class="violet-btn game-link"
                                           href="<?php echo esc_url( $game_link['url'] ); ?>"
                                           target="_blank"><?php echo esc_html( $game_link['title'] ); ?></a>
									<?php endif; ?>
                                </div>
							<?php endwhile; ?>
							<?php $all_casino_link = get_sub_field( 'all_casino_link' ); ?>
							<?php if ( $all_casino_link ) : ?>
                                <a class="red-btn view-all-games-link"
                                   href="<?php echo esc_url( $all_casino_link['url'] ); ?>"
                                   target="_blank"><?php echo esc_html( $all_casino_link['title'] ); ?></a>
							<?php endif; ?>
                        </div>
					<?php endif; ?>

				<?php endwhile; ?>
            </div>
		<?php endif; ?>
        <div class="play-casino">
			<?php if ( have_rows( 'play_casino' ) ) : ?>
				<?php while ( have_rows( 'play_casino' ) ) : the_row(); ?>
                    <h2 class="middle-title">
						<?php the_sub_field( 'main_title' ); ?>
                    </h2>
                    <div class="info-descr">
						<?php the_sub_field( 'casino_descr' ); ?>
                    </div>
					<?php if ( have_rows( 'casinos_list' ) ) : ?>
                        <div class="play-casino-list accordion-grid">
							<?php while ( have_rows( 'casinos_list' ) ) : the_row(); ?>
                                <div class="play-casino-block accord-block light-block">
                                    <div class="play-casino-name accord-title">
                            <span class="casino-name accord-name">
			            <?php the_sub_field( 'casino_name' ); ?>
                            </span>
                                        <span>
                            <button class="open-block" type="button">

<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.653377 -0.0675907 1.22061 -0.0953207 1.6129 0.209704L1.70711 0.292893L11 9.585L20.2929 0.292893C20.6534 -0.0675907 21.2206 -0.0953207 21.6129 0.209704L21.7071 0.292893C22.0676 0.653378 22.0953 1.22061 21.7903 1.6129L21.7071 1.70711L11.7071 11.7071C11.3466 12.0676 10.7794 12.0953 10.3871 11.7903L10.2929 11.7071L0.292893 1.70711Z"
      fill="url(#paint0_linear_2335_9308)"/>
<defs>
<linearGradient id="paint0_linear_2335_9308" x1="0" y1="12" x2="22" y2="12" gradientUnits="userSpaceOnUse">
<stop offset="0.00169362" stop-color="#A300FF"/>
<stop offset="1" stop-color="#2C00FF"/>
</linearGradient>
</defs>
</svg>
</button>
                            </span>
                                    </div>
                                    <div class="play-casino-descr hidden-block">
										<?php the_sub_field( 'casino_caption' ); ?>
                                    </div>
                                </div>
							<?php endwhile; ?>
                        </div>
					<?php endif; ?>
					<?php $play_link = get_sub_field( 'play_link' ); ?>
					<?php if ( $play_link ) : ?>
                        <a class="red-btn play-casino-link" href="<?php echo esc_url( $play_link['url'] ); ?>"
                           target="_blank"><?php echo esc_html( $play_link['title'] ); ?></a>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
	<?php $info_image_after = get_sub_field( 'info_image_after' ); ?>
	<?php if ( $info_image_after ) : ?>
        <img class="info-image-after" src="<?php echo esc_url( $info_image_after['url'] ); ?>"
             alt="<?php echo esc_attr( $info_image_after['alt'] ); ?>"/>
	<?php endif; ?>
</section>
