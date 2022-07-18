<section class="better-payout left-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="dark-decor-section better-payout-content">
        <h3 class="better-subtitle">            <?php the_sub_field( 'better_subtitle' ); ?>
        </h3>
        <div class="right-block alignright">
			<?php if ( have_rows( 'right_block' ) ) : ?>
				<?php while ( have_rows( 'right_block' ) ) : the_row(); ?>
					<?php $right_image = get_sub_field( 'right_image' ); ?>
					<?php if ( $right_image ) : ?>
                        <img src="<?php echo esc_url( $right_image['url'] ); ?>"
                             alt="<?php echo esc_attr( $right_image['alt'] ); ?>"/>
					<?php endif; ?>
					<?php the_sub_field( 'right_content' ); ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
		<?php the_sub_field( 'better_content' ); ?>
    </div>
</section>
