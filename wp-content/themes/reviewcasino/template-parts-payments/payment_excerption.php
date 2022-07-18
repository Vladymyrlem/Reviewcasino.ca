<section class="payment-excerption-section left-content dark-decor-section">
	<?php $excerption_image = get_sub_field( 'excerption_image' ); ?>
	<?php if ( $excerption_image ) : ?>
        <img class="citation-image" src="<?php echo esc_url( $excerption_image['url'] ); ?>"
             alt="<?php echo esc_attr( $excerption_image['alt'] ); ?>"/>
	<?php endif; ?>
    <div class="excerption-content">

		<?php the_sub_field( 'excerption_content' ); ?>
    </div>
</section>
