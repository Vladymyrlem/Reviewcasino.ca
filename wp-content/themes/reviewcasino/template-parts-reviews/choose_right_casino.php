<section class="choose-right">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="right-descr">
		<?php the_sub_field( 'right_description' ); ?>
    </div>
    <ul class="choose-right-casinos-list">
		<?php if ( have_rows( 'choose_right_list' ) ) : ?>
			<?php while ( have_rows( 'choose_right_list' ) ) : the_row(); ?>
                <li class="choose-right-item dark-decor-section">
                    <div class="left-part">
                        <h3 class="choose-right-title">
							<?php the_sub_field( 'main_title' ); ?>
                        </h3>
                        <div class="content-right">
							<?php the_sub_field( 'content_right' ); ?>
                        </div>
                        <div class="img-right">
							<?php $image_right = get_sub_field( 'image_right' ); ?>
							<?php if ( $image_right ) : ?>
                                <img src="<?php echo esc_url( $image_right['url'] ); ?>"
                                     alt="<?php echo esc_attr( $image_right['alt'] ); ?>"/>
							<?php endif; ?>
                        </div>
                    </div>
                </li>
			<?php endwhile; ?>
		<?php endif; ?>
    </ul>
</section>
