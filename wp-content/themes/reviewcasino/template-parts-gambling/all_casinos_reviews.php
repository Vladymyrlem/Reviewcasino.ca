<section class="all-casino-review left-content">

	<?php $perfect_casinos_list = get_sub_field( 'perfect_casinos_list' ); ?>
	<?php $args = array(
		'post_type'      => 'reviews',
		'order'          => 'DESC',
		'order_by'       => 'date',
		'posts_per_page' => 2,
		'post__not_in'   => $perfect_casinos_list
	);
	$myposts2   = get_posts( $args ); ?>
	<?php //if ( $perfect_casinos_list ) : ?>
	<?php $i = 4; ?>
    <div class="all-reviews-list">
		<?php foreach ( $myposts2 as $all_post ) : ?>
			<?php setup_postdata( $all_post ); ?>
            <article class="dark-decor-section other-review-item">
                <div class="logo-review-block">
                    <span class="review-number"><?php echo $i ++; ?></span>

					<?php
					echo get_the_post_thumbnail( $all_post->ID );
					?>
                    <img class="country-flag" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/canada-flag.png"
                         width="54" height="54"
                         alt="flag-canada">
                </div>
                <div class="middle-block">
                    <div class="inform-review-results">
						<?php $plus_minus = get_sub_field( 'plus_and_minus' ); ?>
						<?php if ( have_rows( 'information_review', $all_post->ID ) ) : ?>
							<?php while ( have_rows( 'information_review', $all_post->ID ) ) : the_row(); ?>
								<?php $advantages_list = strval( get_sub_field( 'advantages' ) ); ?>
								<?php if ( have_rows( 'info_group', $all_post->ID ) ) : ?>
									<?php while ( have_rows( 'info_group', $all_post->ID ) ) : the_row(); ?>
										<?php if ( have_rows( 'info_table', $all_post->ID ) ) : ?>
											<?php while ( have_rows( 'info_table', $all_post->ID ) ) : the_row(); ?>

												<?php //echo get_sub_field( 'casino_name' ); ?>
												<?php //the_sub_field( 'owner' ); ?>
												<?php $value_1 = get_sub_field( 'casino_name' ); ?>
												<?php $value_2 = get_sub_field( 'owner' ); ?>
												<?php $value_3 = get_sub_field( 'year_established' ); ?>
												<?php $value_4 = get_sub_field( 'number_of_games' ); ?>
												<?php $value_5 = get_sub_field( 'games_offered' ); ?>
												<?php $value_6 = get_sub_field( 'software_used' ); ?>
												<?php $value_7 = get_sub_field( 'compatible_devices' ); ?>
												<?php $value_8 = get_sub_field( 'payout_percentage' ); ?>
												<?php $value_9 = get_sub_field( 'payout_days' ); ?>
												<?php $value_10 = get_sub_field( 'max_jackpot' ); ?>
												<?php $value_11 = get_sub_field( 'languages' ); ?>
												<?php $value_12 = get_sub_field( 'customer_support' ); ?>
												<?php $value_13 = get_sub_field( 'banking_options' ); ?>
												<?php $value_14 = get_sub_field( 'currencies_supported' ); ?>
												<?php
												$strings    = '3,5,8,9,11';
												$all_values = array(
													$value_1,
													$value_2,
													$value_3,
													$value_4,
													$value_5,
													$value_6,
													$value_7,
													$value_8,
													$value_9,
													$value_10,
													$value_11,
													$value_12,
													$value_13,
													$value_14
												);
												?>

												<?php $values = explode( ',', $advantages_list );
												$new          = array();
												foreach ( $values as $value ) {
													foreach ( $value as $inkey => $inval ) {
														$value[ $inkey ++ ] = $inval;
														unset( $value[ $inkey ] );
													}
													$new[ $value -- ] = $value;
												}
												$array  = $new;
												$result = array_intersect_key( $all_values, array_flip( $array ) );
												?>

												<?php
												for ( $i = 0; $i < count( $values ); $i ++ ) {
													if ( $values[ $i ] == key( $all_values ) ) {
														$array_final[ $all_values[ $i ++ ] ] = $all_values[ $values[ $i ++ ] ];
														next( $all_values );
													}
												}
												echo '<ul class="plus-minus-casinos bonus-decor-list">';
												foreach ( $result as $value ) {
													echo '<li><h3>' . $value . '</h3></li>';
												}
												echo '</ul>';
												?>
											<?php endwhile; ?>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
                    </div>

					<?php if ( have_rows( 'real_money_group', $all_post->ID ) ) : ?>
						<?php while ( have_rows( 'real_money_group', $all_post->ID ) ) : the_row(); ?>
							<?php $rm_image_for_casino = get_sub_field( 'rm_image_for_casino' ); ?>
							<?php if ( $rm_image_for_casino ) : ?>
                                <img class="real-money-thumb"
                                     src="<?php echo esc_url( $rm_image_for_casino['url'] ); ?>"
                                     alt="<?php echo esc_attr( $rm_image_for_casino['alt'] ); ?>"/>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>

                </div>
                <div class="right-review-block">
                    <div class="bottom-links">
						<?php $permalink = get_permalink( $all_post->ID ); ?>
						<?php if ( have_rows( 'head_review_content', $all_post->ID ) ) : ?>
							<?php while ( have_rows( 'head_review_content', $all_post->ID ) ) : the_row(); ?>
								<?php $play_link = get_sub_field( 'play_link' ); ?>
								<?php if ( $play_link ) : ?>
                                    <a class="red-btn" href="<?php echo esc_url( $play_link['url'] ); ?>"
                                       target="_blank"><?php echo esc_html( $play_link['title'] ); ?></a>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php else: ?>
                            <a class="red-btn" href="/" target="_blank">Play Now</a>
						<?php endif; ?>
                        <a class="read-review" href="<?php echo $permalink; ?>">Read
                            Review <?php echo $all_post->post_title; ?></a>
                    </div>
                </div>

            </article>
		<?php endforeach; ?>
    </div>
	<?php wp_reset_postdata(); ?>
	<?php //endif; ?>
    <a href="#" class="red-btn more-reviews">See over 50 Casino Reviews</a>
</section>
