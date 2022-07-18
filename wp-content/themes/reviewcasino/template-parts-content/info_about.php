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
<path d="M21.7071 10.2929C22.0976 10.6834 22.0976 11.3166 21.7071 11.7071C21.3466 12.0676 20.7794 12.0953 20.3871 11.7903L20.2929 11.7071L11 2.415L1.70711 11.7071C1.34662 12.0676 0.779391 12.0953 0.3871 11.7903L0.292892 11.7071C-0.0675915 11.3466 -0.0953195 10.7794 0.209705 10.3871L0.292892 10.2929L10.2929 0.292893C10.6534 -0.0675907 11.2206 -0.0953203 11.6129 0.209705L11.7071 0.292893L21.7071 10.2929Z"
      fill="#6667AB"/>
<path d="M21.7071 10.2929C22.0976 10.6834 22.0976 11.3166 21.7071 11.7071C21.3466 12.0676 20.7794 12.0953 20.3871 11.7903L20.2929 11.7071L11 2.415L1.70711 11.7071C1.34662 12.0676 0.779391 12.0953 0.3871 11.7903L0.292892 11.7071C-0.0675915 11.3466 -0.0953195 10.7794 0.209705 10.3871L0.292892 10.2929L10.2929 0.292893C10.6534 -0.0675907 11.2206 -0.0953203 11.6129 0.209705L11.7071 0.292893L21.7071 10.2929Z"
      fill="url(#paint0_linear_3667_15156)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_3667_15156" x1="18.649" y1="6" x2="2.18543" y2="6" gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
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
