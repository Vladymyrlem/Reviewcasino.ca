<section class="dark-decor-section full-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
	<?php the_sub_field( 'no_deposit_descr' ); ?>
	<?php the_sub_field( 'no_deposit_subtitle' ); ?>
	<?php the_sub_field( 'no_deposit_caption' ); ?>
	<?php if ( have_rows( 'different_list' ) ) : ?>
		<?php while ( have_rows( 'different_list' ) ) : the_row(); ?>
			<?php the_sub_field( 'different_list_title' ); ?>
			<?php the_sub_field( 'different_list_descr' ); ?>
		<?php endwhile; ?>

	<?php endif; ?>
</section>
