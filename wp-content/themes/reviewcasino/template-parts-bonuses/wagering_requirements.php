<section class="wagering-requirements dark-decor-section full-content">
    <h2 class="bonus-title"><?php the_sub_field( 'main_title' ); ?></h2>
    <div class="wagering-content">
		<?php the_sub_field( 'wagering_content' ); ?>
    </div>
	<?php if ( have_rows( 'wagering_list' ) ) : ?>
        <div class="wagering-list">
			<?php while ( have_rows( 'wagering_list' ) ) : the_row(); ?>
                <div class="wagering-item">
                    <div class="wagering-value-block">
                <span>
			<?php the_sub_field( 'wagering_value' ); ?>
            </span>
                    </div>
                    <span class="wagering-title">
            <?php the_sub_field( 'wagering_title' ); ?>
        </span>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
    <div class="wagering-btm-content">
		<?php the_sub_field( 'bottom_content' ); ?>
    </div>
</section>
