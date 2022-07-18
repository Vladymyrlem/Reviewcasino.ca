<section class="roulette-variations-tabs full-content dark-decor-section">
    <h2 class="middle-title">
		<?php the_sub_field( 'type_slots_title' ); ?>
    </h2>
    <div class="roulette-variations-descr">
		<?php the_sub_field( 'type_slots_descr' ); ?>

    </div>
	<?php if ( have_rows( 'tabs_list' ) ) : ?>
        <ul class="nav nav-tabs">
			<?php $i = 1;
			$j       = 1 ?>
			<?php while ( have_rows( 'tabs_list' ) ) : the_row(); ?>
                <li class="nav-item">
					<?php if ( $i == 1 ) { ?>
                        <a class="nav-link active" data-toggle="tab" href="#tab-content-<?php echo $i ++; ?>">
							<?php the_sub_field( 'tab_name' ); ?>
                        </a>
					<?php } else { ?>
                        <a class="nav-link" data-toggle="tab" href="#tab-content-<?php echo $i ++; ?>">
							<?php the_sub_field( 'tab_name' ); ?>
                        </a>
					<?php } ?>
                </li>

			<?php endwhile; ?>
        </ul>
	<?php endif; ?>
	<?php if ( have_rows( 'type_slots_tabs_group' ) ) : ?>
        <div class="tab-content">

			<?php while ( have_rows( 'type_slots_tabs_group' ) ) : the_row(); ?>
				<?php if ( $j == 1 ) { ?>

                    <div class="tab-pane fade show active" id="tab-content-<?php echo $j ++; ?>">
                        <h2 class="middle-title">
							<?php the_sub_field( 'tab_title' ); ?>
                        </h2>
						<?php the_sub_field( 'tab_text_content' ); ?>
						<?php $tab_image = get_sub_field( 'tab_image' ); ?>
						<?php if ( $tab_image ) : ?>
                            <img src="<?php echo esc_url( $tab_image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $tab_image['alt'] ); ?>"/>
						<?php endif; ?>
						<?php $tab_link = get_sub_field( 'tab_link' ); ?>
						<?php if ( $tab_link ) : ?>
                            <a href="<?php echo esc_url( $tab_link['url'] ); ?>"
                               target="<?php echo esc_attr( $tab_link['target'] ); ?>"><?php echo esc_html( $tab_link['title'] ); ?></a>
						<?php endif; ?>
                    </div>
				<?php } else { ?>
                    <div class="tab-pane fade" id="tab-content-<?php echo $j ++; ?>">
                        <h2 class="middle-title">
							<?php the_sub_field( 'tab_title' ); ?>
                        </h2>
						<?php the_sub_field( 'tab_text_content' ); ?>
						<?php $tab_image = get_sub_field( 'tab_image' ); ?>
						<?php if ( $tab_image ) : ?>
                            <img src="<?php echo esc_url( $tab_image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $tab_image['alt'] ); ?>"/>
						<?php endif; ?>
						<?php $tab_link = get_sub_field( 'tab_link' ); ?>
						<?php if ( $tab_link ) : ?>
                            <a href="<?php echo esc_url( $tab_link['url'] ); ?>"
                               target="<?php echo esc_attr( $tab_link['target'] ); ?>"><?php echo esc_html( $tab_link['title'] ); ?></a>
						<?php endif; ?>
                    </div>
				<?php } ?>

			<?php endwhile; ?>
        </div>
	<?php endif; ?>

</section>
