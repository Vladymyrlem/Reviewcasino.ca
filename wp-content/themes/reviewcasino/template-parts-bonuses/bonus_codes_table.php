<section class="dark-decor-section deposit-table-section full-content">
    <h2 class="middle-title">

		<?php the_sub_field( 'casino_codes_title' ); ?>
    </h2>
    <div class="bonus-descr-text">

		<?php the_sub_field( 'casino_codes_description' ); ?>
    </div>
    <div class="table-wrapper">
		<?php $i = 1; ?>
		<?php $casino_code_table = get_sub_field( 'casino_code_table' ); ?>
		<?php if ( $casino_code_table ) : ?>
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
				<?php foreach ( $casino_code_table as $post ) : ?>
					<?php setup_postdata( $post ); ?>
                    <tr>
                        <td data-label="Rank">#<?php echo $i ++; ?></td>

						<?php if ( have_rows( 'information_review', $post->ID ) ) : ?>
							<?php while ( have_rows( 'information_review', $post->ID ) ) : the_row(); ?>
								<?php if ( have_rows( 'info_group', $post->ID ) ) : ?>
									<?php while ( have_rows( 'info_group', $post->ID ) ) : the_row(); ?>
										<?php if ( have_rows( 'info_table', $post->ID ) ) : ?>
											<?php while ( have_rows( 'info_table', $post->ID ) ) : the_row(); ?>
												<?php $value_1 = get_sub_field( 'casino_name' ); ?>
												<?php $value_4 = get_sub_field( 'number_of_games' ); ?>
												<?php $value_8 = get_sub_field( 'payout_percentage' ); ?>
												<?php $value_9 = get_sub_field( 'payout_days' ); ?>

                                                <td c>        <?php echo $value_1; ?>
                                                </td>
											<?php endwhile; ?>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if ( have_rows( 'bonuses_group', $post->ID ) ) : ?>
							<?php while ( have_rows( 'bonuses_group', $post->ID ) ) : the_row(); ?>
                                <td class="bonus-offer" data-label="Bonus Offer">
			          <span>
			                <?php the_sub_field( 'bonus_offer' ); ?>
                 </span>
                                </td>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if ( have_rows( 'information_review', $post->ID ) ) : ?>
							<?php while ( have_rows( 'information_review', $post->ID ) ) : the_row(); ?>
			                <?php if ( have_rows( 'info_group', $post->ID ) ) : ?>
				                <?php while ( have_rows( 'info_group', $post->ID ) ) : the_row(); ?>
					                <?php if ( have_rows( 'info_table', $post->ID ) ) : ?>
						                <?php while ( have_rows( 'info_table', $post->ID ) ) : the_row(); ?>
                                                <td class="number-games"
                                                    data-label="Numbers of Games">        <?php echo $value_4 ?>
                                                </td>
                                                <td class="payout-speed"
                                                    data-label="Payout Speed">        <?php echo $value_9 ?>
                                                </td>
                                                <td class="win-rate"
                                                    data-label="Win Rate">        <?php echo $value_8 ?>
                                                </td>

											<?php endwhile; ?>
					                <?php endif; ?>
				                <?php endwhile; ?>
			                <?php endif; ?>
		                <?php endwhile; ?>
	                <?php endif; ?>
	                <?php if ( have_rows( 'head_review_content', $post->ID ) ) : ?>
		                <?php while ( have_rows( 'head_review_content', $post->ID ) ) : the_row(); ?>
                            <td data-label="Play online">
                                <!--                                <a class="red-btn" href="-->
				                <?php //the_permalink(); ?><!--">Play Now</a>-->
				                <?php $play_link = get_sub_field( 'play_link' ); ?>
				                <?php if ( $play_link ) : ?>
                                    <a class="red-btn" href="<?php echo esc_url( $play_link['url'] ); ?>"
                                       target="_blank"><?php echo esc_html( $play_link['title'] ); ?></a>
				                <?php endif; ?>
                            </td>

		                <?php endwhile; ?>
	                <?php endif; ?>
                </tr>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
            </tbody>
        </table>
	<?php endif; ?>
    </div>
</section>
