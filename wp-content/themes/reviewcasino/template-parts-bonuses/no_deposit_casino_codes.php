<section class="dark-decor-section full-content">
    <h2 class="bonus-title">
		<?php the_sub_field( 'casino_codes_title' ); ?>
    </h2>
    <div class="bonus-descr-text">
		<?php the_sub_field( 'casino_codes_description' ); ?>
    </div>
	<?php $i = 1; ?>
	<?php if ( have_rows( 'casino_code_table' ) ) : ?>
        <table class="bonus-casino-table">
            <thead>
            <tr>
                <th>Rank</th>
                <th>Casino</th>
                <th>Bonus Offer</th>
                <th>Numbers of Games</th>
                <th>Payout Speed</th>
                <th>Win Rate</th>
                <th>Play online</th>
            </tr>
            </thead>
            <tbody>
			<?php while ( have_rows( 'casino_code_table' ) ) : the_row(); ?>
                <tr>
                    <td>#<?php echo $i ++; ?></td>
                    <td>        <?php the_sub_field( 'casino_title' ); ?>
                    </td>
                    <td>        <?php the_sub_field( 'bonus_offer' ); ?>
                    </td>
                    <td>        <?php the_sub_field( 'numbers_of_games' ); ?>
                    </td>
                    <td>        <?php the_sub_field( 'payout_speed' ); ?>
                    </td>
                    <td>        <?php the_sub_field( 'win_rate' ); ?>
                    </td>
                    <td>
						<?php $casino_link = get_sub_field( 'casino_link' ); ?>
						<?php if ( $casino_link ) : ?>
                            <a href="<?php echo esc_url( $casino_link['url'] ); ?>"
                               target="<?php echo esc_attr( $casino_link['target'] ); ?>"><?php echo esc_html( $casino_link['title'] ); ?></a>
						<?php endif; ?></td>
                </tr>

			<?php endwhile; ?>
            </tbody>
        </table>
	<?php endif; ?>
</section>
