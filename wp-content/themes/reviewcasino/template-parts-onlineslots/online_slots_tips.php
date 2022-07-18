<section class="onlineslots-tips-section dark-decor-section full-content">
	<?php if ( have_rows( 'head_gambling_tips' ) ) : ?>
		<?php while ( have_rows( 'head_gambling_tips' ) ) : the_row(); ?>
            <div class="onlineslots-tips-head-content">

                <h2 class="middle-title">
					<?php the_sub_field( 'tips_title' ); ?>
                </h2>
                <div class="onlineslots-tips-content">

					<?php the_sub_field( 'tips_head_content' ); ?>
                </div>
            </div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if ( have_rows( 'online_slots_content' ) ) : ?>
		<?php while ( have_rows( 'online_slots_content' ) ) : the_row(); ?>
            <div class="onlineslots-tips-content-item">
                <h3 class="onlineslots-tips-subtitle">
            <span class="onlineslots-tips-number">
                	<?php $slots_tips_ico = get_sub_field( 'slots_tips_ico' ); ?>
	            <?php if ( $slots_tips_ico ) : ?>
                    <img class="onlineslots-tips-ico" src="<?php echo esc_url( $slots_tips_ico['url'] ); ?>"
                         alt="<?php echo esc_attr( $slots_tips_ico['alt'] ); ?>"/>
	            <?php endif; ?>
            </span>
					<?php the_sub_field( 'slots_tips_title' ); ?>
                </h3>
                <div class="onlineslots-tips-content">
					<?php the_sub_field( 'slots_tips_content' ); ?>
                </div>
            </div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
