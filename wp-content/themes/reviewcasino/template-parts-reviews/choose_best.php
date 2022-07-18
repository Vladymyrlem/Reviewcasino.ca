<section class="choose-best left-content dark-decor-section">
    <div class="left-choose">
        <h3 class="small-title">
			<?php the_sub_field( 'main_title' ); ?>
        </h3>
        <div class="choose-best-content">
			<?php the_sub_field( 'content' ); ?>
        </div>
    </div>
	<?php $image_after = get_sub_field( 'image_after' ); ?>
	<?php if ( $image_after ) : ?>
        <img src="<?php echo esc_url( $image_after['url'] ); ?>" alt="<?php echo esc_attr( $image_after['alt'] ); ?>"/>
	<?php endif; ?>
</section>
