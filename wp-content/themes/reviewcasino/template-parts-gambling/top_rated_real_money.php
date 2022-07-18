<section class="top-rated-real-money left-content dark-decor-section">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="top-rated-content">
		<?php the_sub_field( 'top_rated_content' ); ?>

    </div>
	<?php $top_rated_link = get_sub_field( 'top_rated_link' ); ?>
	<?php if ( $top_rated_link ) : ?>
        <a class="top-rated-link" href="<?php echo esc_url( $top_rated_link['url'] ); ?>"
           target="<?php echo esc_attr( $top_rated_link['target'] ); ?>"><?php echo esc_html( $top_rated_link['title'] ); ?></a>
	<?php endif; ?>

	<?php $top_rated_img = get_sub_field( 'top_rated_img' ); ?>
	<?php if ( $top_rated_img ) : ?>
        <img class="top-real-image-after" src="<?php echo esc_url( $top_rated_img['url'] ); ?>"
             alt="<?php echo esc_attr( $top_rated_img['alt'] ); ?>"/>
	<?php endif; ?>
</section>
