<section class="dark-decor-section deposit-table-section left-content">
    <h2 class="bonus-title">
		<?php the_sub_field( 'table_title' ); ?>
    </h2>
    <div class="bonus-descr-text">
		<?php the_sub_field( 'table_description' ); ?>
    </div>
    <div class="table-wrapper">
		<?php $i = 1; ?>
        <table class="bonus-casino-table">
            <thead>
            <tr>
                <th>Rank</th>
                <th>Slot Game</th>
                <th>RTP</th>
                <th>PLAY ONLINE</th>
            </tr>
            </thead>
            <tbody>
			<?php if ( have_rows( 'slots_table' ) ) : ?>
				<?php while ( have_rows( 'slots_table' ) ) : the_row(); ?>
                    <tr>
                        <td data-label="Rank">#<?php echo $i ++; ?></td>

                        <td data-label="Casino">
							<?php the_sub_field( 'slot_game_val' ); ?>

                        </td>


                        <td class="bonus-offer" data-label="Bonus Offer">
			          <span>
					<?php the_sub_field( 'rtp_value' ); ?>
                 </span>
                        </td>
                        <td>
							<?php $read_more_link = get_sub_field( 'read_more_link' ); ?>
							<?php if ( $read_more_link ) : ?>
                                <a class="red-btn" href="<?php echo esc_url( $read_more_link['url'] ); ?>"
                                   target="<?php echo esc_attr( $read_more_link['target'] ); ?>"><?php echo esc_html( $read_more_link['title'] ); ?></a>
							<?php endif; ?>
                        </td>

                    </tr>
				<?php endwhile; ?>
			<?php endif; ?>
            </tbody>
        </table>
    </div>
</section>
