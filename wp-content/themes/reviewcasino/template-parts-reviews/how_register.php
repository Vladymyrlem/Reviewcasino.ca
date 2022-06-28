<article class="left-content">
    <section class="how-register dark-decor-section">
        <h2 class="middle-title">
			<?php the_sub_field( 'main_title' ); ?>
        </h2>
        <div class="content">
			<?php the_sub_field( 'top_text' ); ?>
        </div>
		<?php if ( have_rows( 'user_data_list' ) ) : ?>
            <ul class="users-data-list">
				<?php while ( have_rows( 'user_data_list' ) ) : the_row(); ?>
                    <li>
						<?php the_sub_field( 'user_data' ); ?>
                    </li>
				<?php endwhile; ?>
            </ul>
		<?php endif; ?>
        <div class="content">
			<?php the_sub_field( 'bottom_text' ); ?>
        </div>
		<?php $reg_image_after = get_sub_field( 'reg_image_after' ); ?>
		<?php if ( $reg_image_after ) : ?>
            <img class="register-img-after" src="<?php echo esc_url( $reg_image_after['url'] ); ?>"
                 alt="<?php echo esc_attr( $reg_image_after['alt'] ); ?>"/>
		<?php endif; ?>
    </section>
