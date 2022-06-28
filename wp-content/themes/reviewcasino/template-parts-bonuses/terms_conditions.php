<section class="terms-conditions full-content dark-decor-section">
    <h2 class="middle-title"><?php the_sub_field( 'main_title' ); ?></h2>
    <div class="terms-descr">
		<?php the_sub_field( 'main_descr' ); ?>
    </div>
	<?php if ( have_rows( 'conditions_list' ) ) : ?>
        <div class="terms-conditions-list-block">
            <ol class="terms-conditions-list">
				<?php while ( have_rows( 'conditions_list' ) ) : the_row(); ?>
                    <li class="terms-list-item">
						<?php the_sub_field( 'condition_value' ); ?>
                    </li>
				<?php endwhile; ?>
            </ol>
        </div>
	<?php endif; ?>
    <div class="terms-conditions-content">
		<?php the_sub_field( 'conditions_content' ); ?>
    </div>
	<?php $conditions_image_after = get_sub_field( 'conditions_image_after' ); ?>
	<?php if ( $conditions_image_after ) : ?>
        <img class="term-image-after" src="<?php echo esc_url( $conditions_image_after['url'] ); ?>"
             alt="<?php echo esc_attr( $conditions_image_after['alt'] ); ?>"/>
	<?php endif; ?>
</section>
