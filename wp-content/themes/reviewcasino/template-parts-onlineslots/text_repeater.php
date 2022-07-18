<section class="text-repeater-section dark-decor-section full-content">
	<?php if ( have_rows( 'repeater_content' ) ) : ?>
        <div class="text-repeater-content">
			<?php while ( have_rows( 'repeater_content' ) ) : the_row(); ?>
                <div class="text-repeater-content-item">
                    <h2 class="middle-title">
						<?php the_sub_field( 'main_title' ); ?>
                    </h2>
                    <div class="text-repeater-content-text">

						<?php the_sub_field( 'text_content' ); ?>
                    </div>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
