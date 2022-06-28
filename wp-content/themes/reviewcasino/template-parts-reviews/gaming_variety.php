<section class="game-variety">
    <table class="table-variety">
        <caption><?php the_sub_field( 'table_title' ); ?></caption>
        <thead>
        <tr>
            <th class="fixed-side" scope="col">&nbsp;</th>
            <th scope="col">
                Ruby Fortune Games
            </th>
            <th scope="col">Game type</th>
            <th scope="col">Number of games</th>
            <th scope="col">Most played games</th>
        </tr>
        </thead>
        <tbody>
		<?php if ( have_rows( 'variety_table_content' ) ) : ?>
			<?php $i = 1; ?>

			<?php while ( have_rows( 'variety_table_content' ) ) : the_row(); ?>
                <tr>
                    <td class="fixed-side"><span class="row-number"><?php echo $i ++ ?></span></td>
                    <td class="ruby-games">        <?php the_sub_field( 'game_name' ); ?>
                    </td>
                    <td class="game-type">        <?php the_sub_field( 'game_type' ); ?>
                    </td>
                    <td class="number-games">        <?php the_sub_field( 'number_of_games' ); ?>
                    </td>
                    <td class="most-played-games">        <?php the_sub_field( 'most_played' ); ?>
                    </td>
                </tr>
			<?php endwhile; ?>
		<?php endif; ?>
        </tbody>
    </table>
</section>
