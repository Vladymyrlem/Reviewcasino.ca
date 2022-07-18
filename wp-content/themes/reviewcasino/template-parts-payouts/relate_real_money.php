<section class="related-real-money-section left-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
	<?php if ( have_rows( 'realte_real_money_grid' ) ) : ?>
        <div class="casino-guides-grid">
			<?php while ( have_rows( 'realte_real_money_grid' ) ) : the_row(); ?>
                <div class="casino-guide-item">
					<?php $relate_real_img = get_sub_field( 'relate_real_img' ); ?>
					<?php if ( $relate_real_img ) : ?>
                        <img class="casino-guide-img" src="<?php echo esc_url( $relate_real_img['url'] ); ?>"
                             alt="<?php echo esc_attr( $relate_real_img['alt'] ); ?>"/>
					<?php endif; ?>
                    <h3 class="casino-guide-title">
						<?php the_sub_field( 'related_real_title' ); ?>
                    </h3>
                    <div class="casino-guide-descr">
						<?php the_sub_field( 'related_real_excerpt' ); ?>
                    </div>
					<?php $relate_real_link = get_sub_field( 'relate_real_link' ); ?>
					<?php if ( $relate_real_link ) : ?>
                        <a class="red-btn casino-guide-link" href="<?php echo esc_url( $relate_real_link['url'] ); ?>"
                           target="<?php echo esc_attr( $relate_real_link['target'] ); ?>"><?php echo esc_html( $relate_real_link['title'] ); ?></a>
					<?php endif; ?>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
