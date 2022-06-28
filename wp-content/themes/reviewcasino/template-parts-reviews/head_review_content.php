<article class="full-content">
    <section class="head-review-content top-info-block">
        <div class="deposit-methods-block">
			<?php $deposit_methods = get_sub_field( 'deposit_methods' ); ?>
			<?php if ( $deposit_methods ) : ?>
				<?php foreach ( $deposit_methods as $post ) : ?>
					<?php setup_postdata( $post ); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </div>
		<?php $bonuses = get_sub_field( 'bonuses' ); ?>
		<?php if ( $bonuses ) : ?>
			<?php foreach ( $bonuses as $post ) : ?>
				<?php setup_postdata( $post ); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $devices_checked_values = get_sub_field( 'devices' ); ?>
		<?php if ( $devices_checked_values ) : ?>
			<?php foreach ( $devices_checked_values as $devices_value ): ?>
				<?php echo esc_html( $devices_value ); ?>
			<?php endforeach; ?>
		<?php endif; ?>
		<?php $games = get_sub_field( 'games' ); ?>
		<?php if ( $games ) : ?>
			<?php foreach ( $games as $post ) : ?>
				<?php setup_postdata( $post ); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $play_link = get_sub_field( 'play_link' ); ?>
		<?php if ( $play_link ) : ?>
            <a class="red-btn" href="<?php echo esc_url( $play_link['url'] ); ?>"
               target="_blank"><?php echo esc_html( $play_link['title'] ); ?></a>
		<?php endif; ?>
    </section>
