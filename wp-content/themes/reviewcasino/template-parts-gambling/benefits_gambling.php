<section class="benefits-gambling-section dark-decor-section full-content">
	<?php if ( have_rows( 'head_benefits' ) ) : ?>
		<?php while ( have_rows( 'head_benefits' ) ) : the_row(); ?>
            <div class="benefits-head-content">
                <h2 class="middle-title">
					<?php the_sub_field( 'benefits_title' ); ?>
                </h2>
                <div class="benefits-content">
					<?php the_sub_field( 'benefits_head_content' ); ?>
                </div>
				<?php $benefits_head_img = get_sub_field( 'benefits_head_img' ); ?>
				<?php if ( $benefits_head_img ) : ?>
                    <img class="benefits-image" src="<?php echo esc_url( $benefits_head_img['url'] ); ?>"
                         alt="<?php echo esc_attr( $benefits_head_img['alt'] ); ?>"/>
				<?php endif; ?>
            </div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if ( have_rows( 'benefits_content' ) ) : ?>
		<?php while ( have_rows( 'benefits_content' ) ) : the_row(); ?>
            <div class="benefits-content-item">
                <h3 class="benefits-middle-title">
					<?php the_sub_field( 'main_title' ); ?>
                </h3>
                <div class="benefits-content">

					<?php the_sub_field( 'text_content' ); ?>
                </div>
            </div>
		<?php endwhile; ?>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>
</section>
