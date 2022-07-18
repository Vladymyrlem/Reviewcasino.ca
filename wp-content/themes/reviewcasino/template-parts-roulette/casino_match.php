<section class="casino-match dark-decor-section full-content">
	<?php if ( have_rows( 'casino_match_head' ) ) : ?>
        <div class="casino-match-head">
			<?php while ( have_rows( 'casino_match_head' ) ) : the_row(); ?>
                <div class="left-match-head">
                    <h2 class="casinomatch-title middle-title">
						<?php the_sub_field( 'match_title' ); ?>
                    </h2>
                    <h6 class="casino-match-subtitle">
						<?php the_sub_field( 'match_subtitle' ); ?>
                    </h6>
                </div>
				<?php $match_logo_image = get_sub_field( 'match_logo_image' ); ?>
				<?php if ( $match_logo_image ) : ?>
                    <img width="" class="cas-match-logo" src="<?php echo esc_url( $match_logo_image['url'] ); ?>"
                         alt="<?php echo esc_attr( $match_logo_image['alt'] ); ?>"/>
				<?php endif; ?>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
	<?php if ( have_rows( 'casino_match_content' ) ) : ?>
        <div class="casino-match-content">
			<?php while ( have_rows( 'casino_match_content' ) ) : the_row(); ?>
                <h3 class="middle-title">
					<?php the_sub_field( 'main_title' ); ?>
                </h3>
                <div class="casino-match-descr">
					<?php the_sub_field( 'content_descr' ); ?>
                </div>
				<?php if ( have_rows( 'most_popular_games_list' ) ) : ?>
                    <div class="casino-match-grid">
						<?php while ( have_rows( 'most_popular_games_list' ) ) : the_row(); ?>
                            <div class="casino-match-item">
								<?php $most_image = get_sub_field( 'most_image' ); ?>
								<?php if ( $most_image ) : ?>
                                    <img class="casino-image" src="<?php echo esc_url( $most_image['url'] ); ?>"
                                         alt="<?php echo esc_attr( $most_image['alt'] ); ?>"/>
								<?php endif; ?>
                                <span class="casino-name">
                    <?php the_sub_field( 'most_title' ); ?>
                </span>
                            </div>
						<?php endwhile; ?>
                    </div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php $image_before = get_sub_field( 'image_before' ); ?>
			<?php if ( $image_before ) : ?>
                <img class="casino-match-img-before" src="<?php echo esc_url( $image_before['url'] ); ?>"
                     alt="<?php echo esc_attr( $image_before['alt'] ); ?>"/>
			<?php endif; ?>
			<?php $image_after = get_sub_field( 'image_after' ); ?>
			<?php if ( $image_after ) : ?>
                <img class="casino-match-img-after" src="<?php echo esc_url( $image_after['url'] ); ?>"
                     alt="<?php echo esc_attr( $image_after['alt'] ); ?>"/>
			<?php endif; ?>
        </div>
	<?php endif; ?>
</section>
