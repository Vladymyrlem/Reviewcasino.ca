<section class="how-much-bonuses full-content  dark-decor-section">
    <h2 class="middle-title"><?php the_sub_field( 'main_title' ); ?></h2>
    <div class="how-much-bonuses-descr">
		<?php the_sub_field( 'description' ); ?>
    </div>
	<?php if ( have_rows( 'how_much_table' ) ) : ?>
        <table class="how-much-table">
			<?php while ( have_rows( 'how_much_table' ) ) : the_row(); ?>
                <thead>
                <tr>
                    <th>        <?php the_sub_field( 'table_header' ); ?>
                    </th>
                    <th>Deposit</th>
                    <th>Bonus</th>
                </tr>
                </thead>
				<?php if ( have_rows( 'table_content' ) ) : ?>
                    <tbody>
					<?php while ( have_rows( 'table_content' ) ) : the_row(); ?>
                        <tr>
                            <td>                <?php the_sub_field( 'left_value' ); ?>
                            </td>
                            <td class="deposit-col">                <?php the_sub_field( 'deposit_value' ); ?>
                            </td>
                            <td class="bonus-col">                <?php the_sub_field( 'bonus_value' ); ?>
                            </td>
                        </tr>
					<?php endwhile; ?>
                    </tbody>
				<?php endif; ?>
			<?php endwhile; ?>
        </table>
	<?php endif; ?>
</section>
