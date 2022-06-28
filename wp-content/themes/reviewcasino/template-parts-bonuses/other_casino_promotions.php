<section class="full-content dark-decor-section other-casino-promotions">
    <h2 class="middle-title"><?php the_sub_field( 'main_title' ); ?></h2>
    <div class="other-casino-content">
		<?php the_sub_field( 'other_casino_content' ); ?>
    </div>
	<?php $other_casino_image_after = get_sub_field( 'other_casino_image_after' ); ?>
	<?php if ( $other_casino_image_after ) : ?>
        <img class="other-image-after" src="<?php echo esc_url( $other_casino_image_after['url'] ); ?>"
             alt="<?php echo esc_attr( $other_casino_image_after['alt'] ); ?>"/>
	<?php endif; ?>
</section>
