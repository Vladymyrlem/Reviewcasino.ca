<section class="make-deposit left-content dark-decor-section">
    <h2 class="middle-title"><?php the_sub_field( 'main_title' ); ?></h2>
    <div class="terms-descr">
		<?php the_sub_field( 'main_descr' ); ?>
    </div>
	<?php if ( have_rows( 'conditions_list' ) ) : ?>
        <div class="terms-conditions-list-block">
            <ol class="terms-conditions-list">
				<?php while ( have_rows( 'conditions_list' ) ) : the_row(); ?>
                    <li class="terms-list-item">
                        <span>
						<?php the_sub_field( 'condition_value' ); ?>
                    </span>
                    </li>
				<?php endwhile; ?>
            </ol>
        </div>
	<?php endif; ?>
</section>
