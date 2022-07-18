<section class="best-casino-section">
    <div class="mycontainer">
        <div class="bonuses-list accordion-grid">
            <h2 class="middle-title">
				<?php the_sub_field( 'mian_title' ); ?>
            </h2>
            <div class="bonuses-descr">
				<?php the_sub_field( 'best_description' ); ?>
            </div>
			<?php if ( have_rows( 'best_casino' ) ) : ?>

				<?php while ( have_rows( 'best_casino' ) ) : the_row(); ?>
                    <div class="best-bonuses-block accord-block dark-block">
                        <div class="best-bonus-name accord-title">
                            <span class="bonus-title">
		<?php the_sub_field( 'bonus_title' ); ?>
                            </span>
                            <span>
                            <button class="open-block" type="button">
<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683418 0.292893 0.292893C0.653377 -0.0675906 1.22061 -0.0953205 1.6129 0.209704L1.70711 0.292893L11 9.585L20.2929 0.292893C20.6534 -0.0675906 21.2206 -0.0953205 21.6129 0.209704L21.7071 0.292893C22.0676 0.653377 22.0953 1.22061 21.7903 1.6129L21.7071 1.70711L11.7071 11.7071C11.3466 12.0676 10.7794 12.0953 10.3871 11.7903L10.2929 11.7071L0.292893 1.70711Z"
      fill="white"/>
</svg>
</button>
                            </span>
                        </div>
                        <div class="bonus-descr hidden-block">
							<?php the_sub_field( 'bonus_descr' ); ?>
                        </div>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php $best_link = get_sub_field( 'best_link' ); ?>
			<?php if ( $best_link ) : ?>
                <a class="red-btn" href="<?php echo esc_url( $best_link['url'] ); ?>"
                   target="_blank"><?php echo esc_html( $best_link['title'] ); ?></a>
			<?php endif; ?>
        </div>

    </div>
	<?php $best_image_after = get_sub_field( 'best_image_after' ); ?>
	<?php if ( $best_image_after ) : ?>
        <img class="best-image-after" src="<?php echo esc_url( $best_image_after['url'] ); ?>"
             alt="<?php echo esc_attr( $best_image_after['alt'] ); ?>"/>
	<?php endif; ?>
</section>
