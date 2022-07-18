<section class="payments-tips-section dark-decor-section left-content">
	<?php if ( have_rows( 'head_gambling_tips' ) ) : ?>
		<?php while ( have_rows( 'head_gambling_tips' ) ) : the_row(); ?>
            <div class="payments-tips-head-content">

                <h2 class="middle-title">
					<?php the_sub_field( 'tips_title' ); ?>
                </h2>
                <div class="payments-tips-content">

					<?php the_sub_field( 'tips_head_content' ); ?>
                </div>
            </div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if ( have_rows( 'gambling_tips_content' ) ) : ?>
		<?php $i = 1; ?>
		<?php while ( have_rows( 'gambling_tips_content' ) ) : the_row(); ?>
            <div class="payments-tips-content-item">
                <h3 class="payments-tips-subtitle">
                    <span class="payments-tips-number"><?php echo $i ++; ?></span>
					<?php the_sub_field( 'main_title' ); ?>
                </h3>
                <div class="payments-tips-content">
					<?php the_sub_field( 'text_content' ); ?>
                </div>
            </div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
