<section class="payout-odds-section dark-decor-section left-content">
	<?php if ( have_rows( 'odds_header' ) ) : ?>
        <div class="payouts-odds-head">
			<?php while ( have_rows( 'odds_header' ) ) : the_row(); ?>
                <h2 class="middle-title">
					<?php the_sub_field( 'head_title' ); ?>
                </h2>
                <div class="head-odds-content">
					<?php the_sub_field( 'head_content' ); ?>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
	<?php if ( have_rows( 'odds_list' ) ) : ?>
        <div class="odds-list-content">
			<?php while ( have_rows( 'odds_list' ) ) : the_row(); ?>
                <div class="odds-list-item">
                    <h3 class="odds-list-content-title">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34 17C34 26.3911 26.3911 34 17 34C7.60887 34 0 26.3911 0 17C0 7.60887 7.60887 0 17 0C26.3911 0 34 7.60887 34 17ZM18.1653 24.8077L27.4536 15.5194C28.098 14.875 28.098 13.8331 27.4536 13.1956L26.2883 12.0302C25.644 11.3859 24.602 11.3859 23.9645 12.0302L17 18.9948L10.0355 12.0302C9.39113 11.3859 8.34919 11.3859 7.71169 12.0302L6.54637 13.1956C5.90202 13.8399 5.90202 14.8819 6.54637 15.5194L15.8347 24.8077C16.479 25.452 17.521 25.452 18.1653 24.8077Z"
                                  fill="white"/>
                        </svg>
						<?php the_sub_field( 'odds_title' ); ?>
                    </h3>
                    <div class="odds-list-content-block">
						<?php the_sub_field( 'odds_content' ); ?>
                    </div>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
	<?php if ( have_rows( 'odds_table_list' ) ) : ?>
		<?php while ( have_rows( 'odds_table_list' ) ) : the_row(); ?>
			<?php if ( have_rows( 'odds_table' ) ) : ?>
                <table class="odds-table">
					<?php while ( have_rows( 'odds_table' ) ) : the_row(); ?>
						<?php if ( have_rows( 'table_header' ) ) : ?>
                            <thead>
                            <tr>

								<?php while ( have_rows( 'table_header' ) ) : the_row(); ?>
                                    <th><?php the_sub_field( 'left_col' ); ?>
                                    </th>
                                    <th><?php the_sub_field( 'right_col' ); ?>
                                    </th>
								<?php endwhile; ?>
                            </tr>
                            </thead>
						<?php endif; ?>
						<?php if ( have_rows( 'table_content' ) ) : ?>
                            <tbody>
							<?php while ( have_rows( 'table_content' ) ) : the_row(); ?>
                                <tr>
                                    <td>                        <?php the_sub_field( 'left_col' ); ?>
                                    </td>
                                    <td>                        <?php the_sub_field( 'right_col' ); ?>
                                    </td>
                                </tr>

							<?php endwhile; ?>
                            </tbody>
						<?php endif; ?>
					<?php endwhile; ?>

                </table>
			<?php endif; ?>
			<?php if ( have_rows( 'table_list_content' ) ) : ?>
				<?php while ( have_rows( 'table_list_content' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'title' ) ): ?>
                        <div class="table-list-content">

                        <h3 class="list-title">
							<?php $title_image = get_sub_field( 'title_image' ); ?>
							<?php if ( $title_image ) : ?>
                                <img src="<?php echo esc_url( $title_image['url'] ); ?>"
                                     alt="<?php echo esc_attr( $title_image['alt'] ); ?>"/>
							<?php endif; ?>
							<?php the_sub_field( 'title' ); ?>
                        </h3>
					<?php
					else:
						echo '';
					endif;
					?>
					<?php if ( get_sub_field( 'table_text_content' ) ): ?>
                        <div class="list-content">
							<?php the_sub_field( 'table_text_content' ); ?>
                        </div>
                        </div>

					<?php
					else:
						echo '';
					endif;
					?>

				<?php endwhile; ?>
			<?php else: ?>
                <div class="table-list-content p-0">
                </div>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
