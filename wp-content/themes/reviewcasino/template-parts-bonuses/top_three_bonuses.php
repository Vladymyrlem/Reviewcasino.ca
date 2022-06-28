<?php if ( get_row_layout() == 'top_three_bonuses' ) : ?>
    <section class="top-casinos left-content">
        <div class="container">
            <h2 class="middle-title">
                <h2 class="middle-title"><?php the_sub_field( 'main_title' ); ?></h2>
            </h2>
            <div class="top-casinos-grid">
				<?php //global $post;
				$i = 1;
				$j = 1;
				?>
				<?php if ( have_rows( 'top_three_group' ) ) : ?>
					<?php while ( have_rows( 'top_three_group' ) ) : the_row(); ?>
						<?php $top_three_casinos = get_sub_field( 'top_three_casinos' ); ?>
						<?php if ( $top_three_casinos ) : ?>
							<?php foreach ( $top_three_casinos as $top_post ) : ?>
								<?php setup_postdata( $top_post ); ?>
                                <div class="top-casino-item" id="top-casino-<?php echo $i ++; ?>">
									<?php //echo $top_post->ID; ?>
                                    <div class="top-title">
                                        <h3>#<?php echo $j ++; ?>Top Rated Casino</h3>
                                    </div>
                                    <div class="logo-casino">
										<?php echo get_the_post_thumbnail( $top_post->ID );  // The thumbnail?>
										<?php if ( has_post_thumbnail() ) {
											//the_post_thumbnail("thumbnail");
										}
										?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/canada-flag.png"
                                             width="54" height="54" alt="flag-canada">

                                    </div>
                                    <div class="top-game-block">
                                        <h5 class="game-title top-game-title">Game</h5>
										<?php $games = get_sub_field( 'games', $top_post ); ?>
										<?php if ( $games ) : ?>
											<?php foreach ( $games as $post ) : ?>
												<?php setup_postdata( $post ); ?>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											<?php endforeach; ?>
											<?php wp_reset_postdata(); ?>
										<?php endif; ?>
                                        <span>
											<?php echo $top_post->post_title; ?>
                                        </span>
                                    </div>
                                    <div class="top-bonuses-block">
                                        <h5 class="top-bonuses-title">Bonus</h5>
										<?php if ( have_rows( 'head_review_content', $top_post->ID ) ) : ?>
											<?php while ( have_rows( 'head_review_content', $top_post->ID ) ) : the_row(); ?>
												<?php if ( have_rows( 'bonuses', $top_post->ID ) ) : ?>
													<?php while ( have_rows( 'bonuses', $top_post->ID ) ) : the_row(); ?>
                                                        <span class="bonus-value">
                                                    <?php the_sub_field( 'bonus_value' ); ?>
												</span>
													<?php endwhile; ?>
												<?php endif; ?>
											<?php endwhile; ?>
										<?php endif; ?>

                                    </div>
									<?php $permalink = get_permalink( $top_post->ID ); ?>
                                    <a class="red-btn" href="<?php echo $permalink ?>">Play Now</a>
                                    <div class="bottom-top-three-block">

										<?php if ( have_rows( 'information_review', $top_post->ID ) ) : ?>
											<?php while ( have_rows( 'information_review', $top_post->ID ) ) : the_row(); ?>
												<?php if ( have_rows( 'info_group', $top_post->ID ) ) : ?>
													<?php while ( have_rows( 'info_group', $top_post->ID ) ) : the_row(); ?>
														<?php if ( have_rows( 'info_table', $top_post->ID ) ) : ?>
															<?php while ( have_rows( 'info_table', $top_post->ID ) ) : the_row(); ?>
																<?php $value_8 = get_sub_field( 'payout_percentage' ); ?>
																<?php $value_9 = get_sub_field( 'payout_days' ); ?>
                                                                <div class="payout-data">
                                                                    <span>Payout</span>
                                                                    <svg width="14" height="21" viewBox="0 0 14 21"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M13.125 2.625C13.6083 2.625 14 2.18429 14 1.64062V0.984375C14 0.440713 13.6083 0 13.125 0H0.875C0.391745 0 0 0.440713 0 0.984375V1.64062C0 2.18429 0.391745 2.625 0.875 2.625C0.875 6.35599 2.73496 9.50471 5.2807 10.5C2.73496 11.4953 0.875 14.644 0.875 18.375C0.391745 18.375 0 18.8157 0 19.3594V20.0156C0 20.5593 0.391745 21 0.875 21H13.125C13.6083 21 14 20.5593 14 20.0156V19.3594C14 18.8157 13.6083 18.375 13.125 18.375C13.125 14.644 11.265 11.4953 8.7193 10.5C11.265 9.50471 13.125 6.35599 13.125 2.625ZM7 8.53125C4.89318 8.53125 3.20833 5.80297 3.20833 2.625H10.7917C10.7917 5.82196 9.09599 8.53125 7 8.53125Z"
                                                                              fill="white"/>
                                                                    </svg>
																	<?php
																	if ( $value_9 ) {
																		echo $value_9;
																	} else {
																		echo 'N/A';
																	} ?>
                                                                </div>
                                                                <div class="win-rate-data">
                                                                    <span>Win rate</span>
                                                                    <svg width="21" height="14" viewBox="0 0 21 14"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M13.65 9.33333H15.225C15.4875 9.33333 15.75 9.1 15.75 8.86667V3.96667C15.75 3.73333 15.4875 3.5 15.225 3.5H13.65C13.3875 3.5 13.125 3.73333 13.125 3.96667V8.86667C13.125 9.1 13.3875 9.33333 13.65 9.33333ZM17.5875 9.33333H19.1625C19.425 9.33333 19.6875 9.1 19.6875 8.86667V0.466667C19.6875 0.233333 19.425 0 19.1625 0H17.5875C17.325 0 17.0625 0.233333 17.0625 0.466667V8.86667C17.0625 9.1 17.325 9.33333 17.5875 9.33333ZM5.775 9.33333H7.35C7.6125 9.33333 7.875 9.1 7.875 8.86667V6.3C7.875 6.06667 7.6125 5.83333 7.35 5.83333H5.775C5.5125 5.83333 5.25 6.06667 5.25 6.3V8.86667C5.25 9.1 5.5125 9.33333 5.775 9.33333ZM9.7125 9.33333H11.2875C11.55 9.33333 11.8125 9.1 11.8125 8.86667V1.63333C11.8125 1.4 11.55 1.16667 11.2875 1.16667H9.7125C9.45 1.16667 9.1875 1.4 9.1875 1.63333V8.86667C9.1875 9.1 9.45 9.33333 9.7125 9.33333ZM20.3438 11.6667H2.625V0.583333C2.625 0.261042 2.33133 0 1.96875 0H0.65625C0.293672 0 0 0.261042 0 0.583333V12.8333C0 13.4776 0.587754 14 1.3125 14H20.3438C20.7063 14 21 13.739 21 13.4167V12.25C21 11.9277 20.7063 11.6667 20.3438 11.6667Z"
                                                                              fill="white"/>
                                                                    </svg>

																	<?php
																	if ( $value_8 ) {
																		echo $value_8;
																	} else {
																		echo 'N/A';
																	} ?>
                                                                </div>
															<?php endwhile; ?>
														<?php endif; ?>
													<?php endwhile; ?>
												<?php endif; ?>
											<?php endwhile; ?>
										<?php endif; ?>
                                    </div>

                                    <div class="hidden-info">
                                        <div class="deposit-methods">
                                            <span>Deposit options include:</span>
                                            <div class="deposits-method-grid part-items" id="deposit-methods">
												<?php if ( have_rows( 'head_review_content', $top_post->ID ) ) : ?>
													<?php while ( have_rows( 'head_review_content', $top_post->ID ) ) : the_row(); ?>
														<?php $deposit_methods = get_sub_field( 'deposit_methods' ); ?>
														<?php if ( $deposit_methods ) : ?>
															<?php foreach ( $deposit_methods as $deposit_post ) : ?>
																<?php $permalink = get_permalink( $deposit_post->ID ); ?>
																<?php setup_postdata( $deposit_post ); ?>
																<?php $payment = get_field( 'payment', $deposit_post->ID ); ?>
                                                                <a class="deposit-link part-item"
                                                                   href="<?php echo $permalink ?>"><?php //echo $top_post->post_title; ?>
																	<?php if ( $payment ) : ?>
                                                                        <img width="55px" height="38px"
                                                                             src="<?php echo esc_url( $payment['url'] ); ?>"
                                                                             alt="<?php echo esc_attr( $payment['alt'] ); ?>"/>
																	<?php endif; ?>

                                                                </a>

															<?php endforeach; ?>
															<?php wp_reset_postdata(); ?>
														<?php endif; ?>
													<?php endwhile; ?>
												<?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="inform-review-results">
											<?php $plus_minus = get_sub_field( 'plus_and_minus' ); ?>
											<?php if ( have_rows( 'information_review', $top_post->ID ) ) : ?>
												<?php while ( have_rows( 'information_review', $top_post->ID ) ) : the_row(); ?>
													<?php $advantages_list = strval( get_sub_field( 'advantages' ) ); ?>
													<?php if ( have_rows( 'info_group', $top_post->ID ) ) : ?>
														<?php while ( have_rows( 'info_group', $top_post->ID ) ) : the_row(); ?>
															<?php if ( have_rows( 'info_table', $top_post->ID ) ) : ?>
																<?php while ( have_rows( 'info_table', $top_post->ID ) ) : the_row(); ?>

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
																	echo '<ul class="plus-minus-casinos">';
																	foreach ( $result as $value ) {
																		echo '<li><h3>' . $value . '</h3></li>';
																	}
																	echo '</ul>';
																	?>
																	<?php $permalink = get_permalink( $top_post->ID ); ?>
                                                                    <a href="<?php echo $permalink; ?>" class="red-btn">Play
                                                                        Now</a>

                                                                    <a href="<?php echo $permalink ?>">Read
																		<?php echo $top_post->post_title; ?> Review
                                                                    </a>
																<?php endwhile; ?>
															<?php endif; ?>
														<?php endwhile; ?>
													<?php endif; ?>
												<?php endwhile; ?>
											<?php endif; ?>
                                        </div>
                                    </div>
                                    <button class="open-details">More details</button>
                                </div>

							<?php endforeach; ?>

							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
                <!--	        --><?php //$top_three_casinos = get_sub_field( 'top_three_casinos' ); ?>
                <!--	        --><?php //if ( $top_three_casinos ) : ?>
                <!--		        --><?php //foreach ( $top_three_casinos as $post ) :  ?>
                <!--			        --><?php //setup_postdata( $post ); ?>
                <!--                    <a href="--><?php //the_permalink(); ?><!--">-->
				<?php //the_title(); ?><!--</a>-->
                <!--		        --><?php //endforeach; ?>
                <!--		        --><?php //wp_reset_postdata(); ?>
                <!--	        --><?php //endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

