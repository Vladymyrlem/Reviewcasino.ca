<section class="review-criteria left-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'criteria_title' ); ?>
    </h2>
    <div class="description">
		<?php the_sub_field( 'criteria_descr' ); ?>
    </div>
    <ul class="criteria-list">

		<?php if ( have_rows( 'criterias_list' ) ) : ?>
			<?php while ( have_rows( 'criterias_list' ) ) : the_row(); ?>
                <li class="dark-decor-section criteria-list-item">
                    <div class="left-criteria">
                        <h3 class="criteria-title">
							<?php the_sub_field( 'criteria_title' ); ?>
                        </h3>
                        <div class="criteria-content">
							<?php the_sub_field( 'criteria_content' ); ?>
                        </div>
						<?php $criteria_icon = get_sub_field( 'criteria_icon' ); ?>
						<?php if ( $criteria_icon ) : ?>
                            <img src="<?php echo esc_url( $criteria_icon['url'] ); ?>"
                                 alt="<?php echo esc_attr( $criteria_icon['alt'] ); ?>"/>
						<?php endif; ?>
                    </div>
                </li>
			<?php endwhile; ?>
		<?php endif; ?>
    </ul>

</section>
