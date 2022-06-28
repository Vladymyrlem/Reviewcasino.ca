<section class="conclusion-section dark-decor-section">
    <div class="top-conclusion">
        <h2 class="middle-title"><?php the_sub_field( 'main_title' ); ?>
        </h2>
		<?php if ( have_rows( 'information_review' ) ) : ?>
		<?php while ( have_rows( 'information_review' ) ) :
		the_row(); ?>
        <div class="editors-verdict">
			<?php if ( have_rows( 'editors_verdict' ) ) : ?>
				<?php while ( have_rows( 'editors_verdict' ) ) : the_row(); ?>
					<?php $new_array = array() ?>
					<?php while ( have_rows( 'verdicts_group' ) ) : the_row(); ?>

						<?php $rows = get_sub_field( 'rank_count' ); ?>
						<?php array_push( $new_array, $rows ) ?>
					<?php endwhile; ?>
					<?php
					$array   = array_filter( $new_array );  // если используете php7.4+ то array_filter($array, fn($item) => $item !== '');
					$average = array_sum( $array ) / count( $array );
					?>
                    <div class="verdict-middle">
                        <div class="editors-verdict-middle-group">
							<?php echo '<span class="verdict-middle-value">' . $average . '/5</span>'; ?>
                        </div>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
        </div>
        <div class="info-description">
			<?php the_sub_field( 'content' ); ?>
        </div>

</section>
</article>
