<section class="information-review full-content dark-decor-section">
    <div class="left-info info-review-block">
        <div class="info-group">
			<?php if ( have_rows( 'info_group' ) ) : ?>
				<?php while ( have_rows( 'info_group' ) ) : the_row(); ?>
                    <h2 class="middle-title">
						<?php the_sub_field( 'main_title' ); ?>
                    </h2>
                    <div class="info-description">
						<?php the_sub_field( 'info_description' ); ?>
                    </div>
					<?php if ( have_rows( 'info_table' ) ) : ?>
                        <!--                        <table class="info-table-list">-->
                        <!--                            <tbody>-->
                        <!--							--><?php //while ( have_rows( 'info_table' ) ) : the_row(); ?>
                        <!---->
                        <!--                                <tr>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                        <span class="info-name">-->
                        <!--                                                    --><?php
//                                                    $casino_name = get_field_object( 'field_62addd651a07f' );
//                                                    echo $casino_name['label'];
//                                                    ?>
                        <!--                        </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                        --><?php //the_sub_field( 'casino_name' ); ?>
                        <!--                    </span>-->
                        <!--                                    </td>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                        <span class="info-name">-->
                        <!--  --><?php
//  $owner = get_field_object( 'field_62addd9f1a080' );
//  echo $owner['label'];
//  ?><!--                                                </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                                                --><?php //the_sub_field( 'owner' ); ?>
                        <!--                        </span>-->
                        <!---->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                                            <span class="info-name">-->
                        <!---->
                        <!--  --><?php
//  $year_established = get_field_object( 'field_62adddb31a081' );
//  echo $year_established['label'];
//  ?><!--                                                                              </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                                                    --><?php //the_sub_field( 'year_established' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                        <span class="info-name">-->
                        <!---->
                        <!--  --><?php
//  $number_of_games = get_field_object( 'field_62adddbc1a082' );
//  echo $number_of_games['label'];
//  ?><!--                                                          </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'number_of_games' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                        <span class="info-name">-->
                        <!--  --><?php
//  $games_offered = get_field_object( 'field_62adddc71a083' );
//  echo $games_offered['label'];
//  ?><!--                                                          </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'games_offered' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                        <span class="info-name">-->
                        <!--  --><?php
//  $software_used = get_field_object( 'field_62adddce1a084' );
//  echo $software_used['label'];
//  ?><!--                                                          </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'software_used' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                        <span class="info-name">-->
                        <!--  --><?php
//  $compatible_devices = get_field_object( 'field_62adddd81a085' );
//  echo $compatible_devices['label'];
//  ?><!--                                                          </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'compatible_devices' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                        <span class="info-name">-->
                        <!--  --><?php
//  $payout_percentage = get_field_object( 'field_62addddf1a086' );
//  echo $payout_percentage['label'];
//  ?><!--                                                          </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'payout_percentage' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                        <span class="info-name">-->
                        <!--  --><?php
//  $payout_days = get_field_object( 'field_62addde81a087' );
//  echo $payout_days['label'];
//  ?><!--                                                          </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'payout_days' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                                                <span class="info-name">-->
                        <!--  --><?php
//  $max_jackpot = get_field_object( 'field_62adddf11a088' );
//  echo $max_jackpot['label'];
//  ?><!--                                                                                  </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'max_jackpot' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                        <span class="info-name">-->
                        <!--  --><?php
//  $languages = get_field_object( 'field_62adddf81a089' );
//  echo $languages['label'];
//  ?><!--                                                          </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'languages' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                                                <span class="info-name">-->
                        <!--  --><?php
//  $customer_support = get_field_object( 'field_62adde001a08a' );
//  echo $customer_support['label'];
//  ?><!--                                                  </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'customer_support' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--                                <tr>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                                                <span class="info-name">-->
                        <!--  --><?php
//  $banking_options = get_field_object( 'field_62adde071a08b' );
//  echo $banking_options['label'];
//  ?><!--                                                  </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'banking_options' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                    <td class="info-table-item">-->
                        <!--                                                <span class="info-name">-->
                        <!--  --><?php
//  $currencies_supported = get_field_object( 'field_62adde0f1a08c' );
//  echo $currencies_supported['label'];
//  ?><!--                                                  </span>-->
                        <!--                                        <span class="info-value">-->
                        <!--                            					--><?php //the_sub_field( 'currencies_supported' ); ?>
                        <!--                        </span>-->
                        <!--                                    </td>-->
                        <!--                                </tr>-->
                        <!--								--><?php //$value_1 = get_sub_field( 'casino_name' ); ?>
                        <!--								--><?php //$value_2 = get_sub_field( 'owner' )['value']; ?>
                        <!--								--><?php //$value_3 = get_sub_field( 'year_established' )['value']; ?>
                        <!--								--><?php //$value_4 = get_sub_field( 'number_of_games' ); ?>
                        <!--								--><?php //$value_5 = get_sub_field( 'games_offered' ); ?>
                        <!--								--><?php //$value_6 = get_sub_field( 'software_used' ); ?>
                        <!--								--><?php //$value_7 = get_sub_field( 'compatible_devices' ); ?>
                        <!--								--><?php //$value_8 = get_sub_field( 'payout_percentage' ); ?>
                        <!--								--><?php //$value_9 = get_sub_field( 'payout_days' ); ?>
                        <!--								--><?php //$value_10 = get_sub_field( 'max_jackpot' ); ?>
                        <!--								--><?php //$value_11 = get_sub_field( 'languages' ); ?>
                        <!--								--><?php //$value_12 = get_sub_field( 'customer_support' ); ?>
                        <!--								--><?php //$value_13 = get_sub_field( 'banking_options' ); ?>
                        <!--								--><?php //$value_14 = get_sub_field( 'currencies_supported' ); ?>
                        <!--								--><?php
//								$all_values = array(
//									1  => $value_1,
//									2  => $value_2,
//									3  => $value_3,
//									4  => $value_4,
//									5  => $value_5,
//									6  => $value_6,
//									7  => $value_7,
//									8  => $value_8,
//									9  => $value_9,
//									10 => $value_10,
//									11 => $value_11,
//									12 => $value_12,
//									13 => $value_13,
//									14 => $value_14
//								);
//								print_r( $all_values );
//								?>
                        <!--								--><?php //$arr = array( "$value_1", "$value_2" );
//								var_dump( $arr ); ?>
                        <!--							--><?php //endwhile; ?>
                        <!--                            </tbody>-->
                        <!--                        </table>-->
                        <ul class="info-table-list">
							<?php while ( have_rows( 'info_table' ) ) : the_row(); ?>
                                <li class="info-table-item">
                        <span class="info-name">
                                                    <?php
                                                    $casino_name = get_field_object( 'field_62addd651a07f' );
                                                    echo $casino_name['label'];
                                                    ?>
                        </span>
                                    <span class="info-value">
                        <?php the_sub_field( 'casino_name' ); ?>
                    </span>
                                </li>
                                <li class="info-table-item">
                        <span class="info-name">
  <?php
  $owner = get_field_object( 'field_62addd9f1a080' );
  echo $owner['label'];
  ?>                                                </span>
                                        <span class="info-value">
                                                <?php the_sub_field( 'owner' ); ?>
                        </span>

                                </li>

                                <li class="info-table-item">
                                            <span class="info-name">

  <?php
  $year_established = get_field_object( 'field_62adddb31a081' );
  echo $year_established['label'];
  ?>                                                                              </span>
                                        <span class="info-value">
                                                    <?php the_sub_field( 'year_established' ); ?>
                        </span>
                                </li>
                                <li class="info-table-item">
                        <span class="info-name">

  <?php
  $number_of_games = get_field_object( 'field_62adddbc1a082' );
  echo $number_of_games['label'];
  ?>                                                          </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'number_of_games' ); ?>
                        </span>
                                </li>

                                <li class="info-table-item">
                        <span class="info-name">
  <?php
  $games_offered = get_field_object( 'field_62adddc71a083' );
  echo $games_offered['label'];
  ?>                                                          </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'games_offered' ); ?>
                        </span>
                                </li>
                                <li class="info-table-item">
                        <span class="info-name">
  <?php
  $software_used = get_field_object( 'field_62adddce1a084' );
  echo $software_used['label'];
  ?>                                                          </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'software_used' ); ?>
                        </span>
                                </li>

                                <li class="info-table-item">
                        <span class="info-name">
  <?php
  $compatible_devices = get_field_object( 'field_62adddd81a085' );
  echo $compatible_devices['label'];
  ?>                                                          </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'compatible_devices' ); ?>
                        </span>
                                </li>
                                <li class="info-table-item">
                        <span class="info-name">
  <?php
  $payout_percentage = get_field_object( 'field_62addddf1a086' );
  echo $payout_percentage['label'];
  ?>                                                          </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'payout_percentage' ); ?>
                        </span>
                                </li>

                                <li class="info-table-item">
                        <span class="info-name">
  <?php
  $payout_days = get_field_object( 'field_62addde81a087' );
  echo $payout_days['label'];
  ?>                                                          </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'payout_days' ); ?>
                        </span>
                                </li>
                                <li class="info-table-item">
                                                <span class="info-name">
  <?php
  $max_jackpot = get_field_object( 'field_62adddf11a088' );
  echo $max_jackpot['label'];
  ?>                                                                                  </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'max_jackpot' ); ?>
                        </span>
                                </li>

                                <li class="info-table-item">
                        <span class="info-name">
  <?php
  $languages = get_field_object( 'field_62adddf81a089' );
  echo $languages['label'];
  ?>                                                          </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'languages' ); ?>
                        </span>
                                </li>
                                <li class="info-table-item">
                                                <span class="info-name">
  <?php
  $customer_support = get_field_object( 'field_62adde001a08a' );
  echo $customer_support['label'];
  ?>                                                  </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'customer_support' ); ?>
                        </span>
                                </li>

                                <li class="info-table-item">
                                                <span class="info-name">
  <?php
  $banking_options = get_field_object( 'field_62adde071a08b' );
  echo $banking_options['label'];
  ?>                                                  </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'banking_options' ); ?>
                        </span>
                                </li>
                                <li class="info-table-item">
                                                <span class="info-name">
  <?php
  $currencies_supported = get_field_object( 'field_62adde0f1a08c' );
  echo $currencies_supported['label'];
  ?>                                                  </span>
                                        <span class="info-value">
                            					<?php the_sub_field( 'currencies_supported' ); ?>
                        </span>
                                </li>

								<?php $value_1 = get_sub_field( 'casino_name' ); ?>
								<?php $value_2 = get_sub_field( 'owner' )['value']; ?>
								<?php $value_3 = get_sub_field( 'year_established' )['value']; ?>
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
								$all_values = array(
									1  => $value_1,
									2  => $value_2,
									3  => $value_3,
									4  => $value_4,
									5  => $value_5,
									6  => $value_6,
									7  => $value_7,
									8  => $value_8,
									9  => $value_9,
									10 => $value_10,
									11 => $value_11,
									12 => $value_12,
									13 => $value_13,
									14 => $value_14
								);
								print_r( $all_values );
								?>
								<?php $arr = array( "$value_1", "$value_2" );
								var_dump( $arr ); ?>
							<?php endwhile; ?>
                        </ul>

					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
        <div class="advantages-grid">
			<?php if ( have_rows( 'advantages_disadvantages' ) ) : ?>
			<?php while ( have_rows( 'advantages_disadvantages' ) ) :
			the_row(); ?>
            <h2 class="middle-title">
				<?php the_sub_field( 'main_title' ); ?>
            </h2>
            <div class="advantages-section">
                <div class="advantages-block">
					<?php if ( have_rows( 'advantages' ) ) : ?>
                        <h3 class="advantages-title">Pros +</h3>
                        <ul class="advantages-list">
							<?php while ( have_rows( 'advantages' ) ) : the_row(); ?>
                                <li class="advantages-item">
						<span class="advantages-value">
                        <?php the_sub_field( 'advantage' ); ?>
                </span>
                                </li>
							<?php endwhile; ?>
                        </ul>
					<?php endif; ?>
                </div>

                <div class="disadvantages-block">
					<?php if ( have_rows( 'disadvantages' ) ) : ?>
                        <div class="disadvantages-title">Cons -</div>
                        <ul class="disadvantages-list">
							<?php while ( have_rows( 'disadvantages' ) ) : the_row(); ?>
                                <li class="disadvantages-item">
						<span class="advantages-value">
                        <?php the_sub_field( 'disadvantage' ); ?>
                    </span>
                                </li>
							<?php endwhile; ?>
                        </ul>
					<?php endif; ?>
                </div>
            </div>

				<?php endwhile; ?>
				<?php endif; ?>
        </div>
    </div>
    <div class="right-info info-review-block">
        <div class="editors-verdict">
			<?php if ( have_rows( 'editors_verdict' ) ) : ?>
				<?php while ( have_rows( 'editors_verdict' ) ) : the_row(); ?>
                    <h2 class="middle-title">
						<?php the_sub_field( 'main_title' ); ?>
                    </h2>
					<?php if ( have_rows( 'verdicts_group' ) ) : ?>
						<?php $new_array = array() ?>
                        <div class="editors-verdict-list accordion-grid">
							<?php while ( have_rows( 'verdicts_group' ) ) : the_row(); ?>

                                <div class="editors-verdict-block accord-block light-block">
                                    <div class="editors-verdict-name accord-title">
                                        <div class="verdict-head">
                                            <span class="verdict-name">
											<?php the_sub_field( 'verdict_name' ); ?>
											</span>
											<?php $rows = get_sub_field( 'rank_count' ); ?>
											<?php array_push( $new_array, $rows ) ?>
                                            <div class="ranks-wrap" itemprop="reviewRating" itemscope=""
                                                 itemtype="https://schema.org/Game">
                                                <p itemprop="name" class="rating-title">
													<?php the_sub_field( 'rating_title' ); ?>
                                                </p>
                                                <div class="rating-group">
													<?php
													$rating = get_sub_field( 'rank_count' );
													if ( $rating ) {
														$average_stars = $rating * 20;
														$drawn         = 5;
														echo '<div class="star-rating" itemscope="" itemprop="image" itemtype="http://schema.org/ImageObject">';
														// full stars.
														echo '<div style="width:' . $average_stars . '%" id="star"><img alt="full-star" class="star" itemprop="' . get_stylesheet_directory_uri() . '/imgs/star-full.png"  src="' . get_stylesheet_directory_uri() . '/imgs/star-full.png"></div>';
														echo '<img   class="empty-stars" alt="empty-star" itemprop="' . get_stylesheet_directory_uri() . '/imgs/star-empty.png" src="' . get_stylesheet_directory_uri() . '/imgs/star-empty.png">';
														echo '</div>';
													}
													?>
                                                </div>
                                                <div class="ranks-value" itemprop="reviewRating" itemscope
                                                     itemtype="https://schema.org/Rating">
                                                    <meta itemprop="worstRating" content="75">
                                                    <meta itemprop="ratingValue" content="<?php echo $rating; ?>">
                                                    <meta itemprop="bestRating" content="5">
                                                    <span class="rank-name" itemprop="name"></span>
                                                    <span itemprop="bestRating" content="100"></span>

                                                    <span class="rank-name"><?php the_sub_field( 'rank_name' ); ?></span>
                                                    <div class="rank-value" itemprop="ratingValue"
                                                         content="<?php echo $rating; ?>"><?php echo $rating; ?>/5
                                                    </div>
                                                </div>
                                                <div itemprop="aggregateRating" class="aggregate" itemscope=""
                                                     itemtype="https://schema.org/AggregateRating">
                                                    <div>
                                                        <h3 itemprop="itemreviewed" content="Reviewcasino"></h3>
                                                        <span itemprop="ratingValue" content="4"></span>
                                                        <span itemprop="worstRating" content="1"></span>
                                                        <span itemprop="bestRating" content="5"></span>
                                                        <span itemprop="ratingCount" content="894"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span>
                            <button class="open-block" type="button">

<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.653377 -0.0675907 1.22061 -0.0953207 1.6129 0.209704L1.70711 0.292893L11 9.585L20.2929 0.292893C20.6534 -0.0675907 21.2206 -0.0953207 21.6129 0.209704L21.7071 0.292893C22.0676 0.653378 22.0953 1.22061 21.7903 1.6129L21.7071 1.70711L11.7071 11.7071C11.3466 12.0676 10.7794 12.0953 10.3871 11.7903L10.2929 11.7071L0.292893 1.70711Z"
      fill="url(#paint0_linear_2335_9308)"/>
<defs>
<linearGradient id="paint0_linear_2335_9308" x1="0" y1="12" x2="22" y2="12" gradientUnits="userSpaceOnUse">
<stop offset="0.00169362" stop-color="#A300FF"/>
<stop offset="1" stop-color="#2C00FF"/>
</linearGradient>
</defs>
</svg>
</button>
                            </span>
                                    </div>

                                    <div class="editors-verdict-descr hidden-block">
										<?php the_sub_field( 'verdict_descr' ); ?>
                                    </div>
                                </div>
							<?php endwhile; ?>
                        </div>
						<?php
						$array   = array_filter( $new_array );  // если используете php7.4+ то array_filter($array, fn($item) => $item !== '');
						$average = array_sum( $array ) / count( $array );
//echo $average;
						print_r( $new_array ); ?>
					<?php endif; ?>
                    <div class="verdict-middle">
                        <h3 class="verdict-middle-title">
							<?php the_sub_field( 'verdicts_middle' ); ?>
                        </h3>
                        <div class="editors-verdict-middle-group">
							<?php echo '<span class="verdict-middle-value">' . $average . '/5</span>'; ?>
                        </div>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
            <div class="info-description">
				<?php the_sub_field( 'info_description' ); ?>
            </div>
        </div>
    </div>
	<?php $info_image_after = get_sub_field( 'info_image_after' ); ?>
	<?php if ( $info_image_after ) : ?>
        <img class="info-review-after" src="<?php echo esc_url( $info_image_after['url'] ); ?>"
             alt="<?php echo esc_attr( $info_image_after['alt'] ); ?>"/>
	<?php endif; ?>
</section>
