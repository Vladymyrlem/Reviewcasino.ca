<section class="payments-three-section full-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <ul class="payments-list">
		<?php $payments_list = get_sub_field( 'payments_list' ); ?>
		<?php if ( $payments_list ) : ?>
		<?php foreach ( $payments_list as $post ) : ?>
			<?php setup_postdata( $post ); ?>
            <li>
                <div class="top-payment">
					<?php reviewcasino_post_thumbnail(); ?>

                </div>
                <div class="payment-content">
                    <h3 class="payments-cat-title">
						<?php the_title(); ?>
                    </h3>
                    <div class="payments-cat-descr">
						<?php the_excerpt(); ?>
                    </div>
                    <a class="red-btn payments-post-link"
                       href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            </li>
            <!--		<a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a>-->
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
    </ul>
	<?php endif; ?>
</section>
