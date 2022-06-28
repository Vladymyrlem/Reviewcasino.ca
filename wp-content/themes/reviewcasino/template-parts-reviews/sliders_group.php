<section class="sliders-group dark-decor-section mycontainer">
    <h2 class="middle-title">                    <?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="video-slider">
		<?php if ( have_rows( 'left_slider' ) ) : ?>
			<?php while ( have_rows( 'left_slider' ) ) : the_row(); ?>
                <div class="slide">
					<?php if ( get_sub_field( 'video_item' ) ) : ?>
						<?php the_sub_field( 'video_item' ); ?>
					<?php endif; ?>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
    <div class="images-slider">
		<?php $right_slider_images = get_sub_field( 'right_slider' ); ?>
		<?php if ( $right_slider_images ) : ?>
			<?php foreach ( $right_slider_images as $right_slider_image ): ?>
                <div class="slide">
                    <a href="<?php echo esc_url( $right_slider_image['url'] ); ?>">
                        <img class="img-slide" src="<?php echo esc_url( $right_slider_image['sizes']['thumbnail'] ); ?>"
                             alt="<?php echo esc_attr( $right_slider_image['alt'] ); ?>"/>
                    </a>
                    <p><?php echo esc_html( $right_slider_image['caption'] ); ?></p>
                </div>
			<?php endforeach; ?>
		<?php endif; ?>
    </div>
</section>
</article>
