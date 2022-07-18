<section class="best-casino-odds-section dark-decor-section full-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="best-casino-odds-descr">
		<?php the_sub_field( 'best_odds_descr' ); ?>
    </div>
	<?php if ( have_rows( 'best_odds_table' ) ) : ?>
        <table class="best-casino-odds-table">
            <thead>
            <tr>
                <th>Game</th>
                <th>Bet/Rules</th>
                <th>House Edge</th>
            </tr>
            </thead>
            <tbody>
			<?php while ( have_rows( 'best_odds_table' ) ) : the_row(); ?>
                <tr>
                    <td>        <?php the_sub_field( 'game_name' ); ?>
                    </td>
                    <td>        <?php the_sub_field( 'rules' ); ?>
                    </td>
                    <td>        <?php the_sub_field( 'house_edge' ); ?>
                    </td>
                </tr>
			<?php endwhile; ?>
            </tbody>
        </table>
	<?php endif; ?>
</section>
