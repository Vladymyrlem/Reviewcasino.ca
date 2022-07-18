<section class="most-popular-games-section dark-decor-section full-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="most-popular-descr">
		<?php the_sub_field( 'most_popular_description' ); ?>
    </div>
	<?php if ( have_rows( 'most_popular_games_table' ) ) : ?>
        <table class="real-money-games-table">
            <tbody>
			<?php while ( have_rows( 'most_popular_games_table' ) ) : the_row(); ?>
                <tr>
                    <td class="casino-name">        <?php the_sub_field( 'casino_name' ); ?>
                    </td>
                    <td class="game-value">        <?php the_sub_field( 'popular_game_value' ); ?>
                    </td>
                </tr>

			<?php endwhile; ?>
            </tbody>
        </table>
	<?php endif; ?>
</section>
