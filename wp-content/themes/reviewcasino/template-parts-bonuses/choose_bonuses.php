<section class="dark-decor-section full-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'choose_title' ); ?>
    </h2>
	<?php the_sub_field( 'choose_descr' ); ?>
	<?php if ( have_rows( 'choose_bonuses_list' ) ) : ?>
		<?php while ( have_rows( 'choose_bonuses_list' ) ) : the_row(); ?>
			<?php the_sub_field( 'choose_bonuses_title' ); ?>
			<?php the_sub_field( 'choose_bonuses_subtitle' ); ?>
			<?php $choose_bonuses_img = get_sub_field( 'choose_bonuses_img' ); ?>
			<?php if ( $choose_bonuses_img ) : ?>
                <img src="<?php echo esc_url( $choose_bonuses_img['url'] ); ?>"
                     alt="<?php echo esc_attr( $choose_bonuses_img['alt'] ); ?>"/>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
