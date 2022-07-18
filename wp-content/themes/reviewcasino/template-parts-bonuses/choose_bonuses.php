<section class="dark-decor-section full-content choose-bonuses">
    <h2 class="middle-title">
		<?php the_sub_field( 'choose_title' ); ?>
    </h2>
    <div class="choose-bonus-descr">
		<?php the_sub_field( 'choose_descr' ); ?>
    </div>
	<?php if ( have_rows( 'choose_bonuses_list' ) ) : ?>
        <div class="choose-bonus-grid">
			<?php while ( have_rows( 'choose_bonuses_list' ) ) : the_row(); ?>
                <div class="choose-bonus-item">
					<?php $choose_bonuses_img = get_sub_field( 'choose_bonuses_img' ); ?>
					<?php if ( $choose_bonuses_img ) : ?>
                        <img class="choose-bonus-img" src="<?php echo esc_url( $choose_bonuses_img['url'] ); ?>"
                             alt="<?php echo esc_attr( $choose_bonuses_img['alt'] ); ?>"/>
					<?php endif; ?>
                    <h3 class="choose-bonus-title">
						<?php the_sub_field( 'choose_bonuses_title' ); ?>
                    </h3>
                    <h6 class="choose-bonus-subtitle">
						<?php the_sub_field( 'choose_bonuses_subtitle' ); ?>
                    </h6>

                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
