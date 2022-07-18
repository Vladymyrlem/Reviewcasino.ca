<section class="top-tips-section dark-decor-section full-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'top_tips_title' ); ?>
    </h2>
    <div class="top-tips-descr">
		<?php the_sub_field( 'top_tips_descr' ); ?>
    </div>
    <ol class="top-tips-list">
		<?php if ( have_rows( 'top_tips_list' ) ) : ?>
		<?php while ( have_rows( 'top_tips_list' ) ) : the_row(); ?>
            <li class="top-list-item">
				<?php the_sub_field( 'top_tips_value' ); ?>
            </li>
		<?php endwhile; ?>
    </ol>
	<?php endif; ?>
</section>
