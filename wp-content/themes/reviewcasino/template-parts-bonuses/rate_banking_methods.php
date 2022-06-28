<section class="dark-decor-section full-content">
    <h2 class="bonus-title">
		<?php the_sub_field( 'rate_title' ); ?>
    </h2>
	<?php the_sub_field( 'rate_subtitle' ); ?>
	<?php if ( have_rows( 'banking_method_group' ) ) : ?>
		<?php while ( have_rows( 'banking_method_group' ) ) : the_row(); ?>
			<?php the_sub_field( 'banking_method_title' ); ?>
			<?php the_sub_field( 'banking_method_descr' ); ?>
			<?php if ( have_rows( 'banking_method_gallery' ) ) : ?>
				<?php while ( have_rows( 'banking_method_gallery' ) ) : the_row(); ?>
					<?php $no_deposit_image = get_sub_field( 'no_deposit_image' ); ?>
					<?php if ( $no_deposit_image ) : ?>
                        <img src="<?php echo esc_url( $no_deposit_image['url'] ); ?>"
                             alt="<?php echo esc_attr( $no_deposit_image['alt'] ); ?>"/>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if ( have_rows( 'middle_banking_method_group' ) ) : ?>
		<?php while ( have_rows( 'middle_banking_method_group' ) ) : the_row(); ?>
			<?php the_sub_field( 'method_title' ); ?>
			<?php the_sub_field( 'method_descr' ); ?>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if ( have_rows( 'bottom_banking_method_group' ) ) : ?>
		<?php while ( have_rows( 'bottom_banking_method_group' ) ) : the_row(); ?>
			<?php the_sub_field( 'bank_method_title' ); ?>
			<?php the_sub_field( 'bank_method_descr' ); ?>
			<?php the_sub_field( 'bank_rating_value' ); ?>
			<?php $bank_rating_link = get_sub_field( 'bank_rating_link' ); ?>
			<?php if ( $bank_rating_link ) : ?>
                <a href="<?php echo esc_url( $bank_rating_link['url'] ); ?>"
                   target="<?php echo esc_attr( $bank_rating_link['target'] ); ?>"><?php echo esc_html( $bank_rating_link['title'] ); ?></a>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
