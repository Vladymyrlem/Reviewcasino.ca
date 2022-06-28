<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Reviewcasino_CA
 */

get_header();
?>

    <main id="primary" class="site-main">
        <div class="mycontainer p-lg-0">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if ( function_exists( 'bcn_display' ) ) {
					bcn_display();
				} ?>
            </div>
        </div>
        <div class="mycontainer p-lg-0">
            <div class="main-content">

                <div class="left-content">
                    <h1 class="main-title post-title"><?php the_title() ?> Casino Reviews</h1>
                </div>
                <article class="full-content">
                    <section class="head-review-content top-info-block">
						<?php if ( have_rows( 'head_review_content' ) ) : ?>
							<?php while ( have_rows( 'head_review_content' ) ) : the_row(); ?>
								<?php global $post; ?>
                                <div class="logo-review-block">
									<?php get_the_post_thumbnail( $post->ID );
									if ( has_post_thumbnail() ) {
										the_post_thumbnail( "thumbnail" );
									}
									?>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/canada-flag.png"
                                         width="54" height="54" alt="flag-canada">
                                </div>
                                <div class="review-bonuses">
                                    <span class="top-info-name">Welcome Bonus</span>
									<?php if ( have_rows( 'bonuses' ) ) : ?>
										<?php while ( have_rows( 'bonuses' ) ) : the_row(); ?>
                                            <span id="bonus-value"> <?php the_sub_field( 'bonus_value' ); ?>
								            </span>
                                            <div id="bonus-share">
                                                <svg width="23" height="18" viewBox="0 0 23 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.43599 16.7143C1.43599 17.4254 2.07769 18 2.87197 18H10.0519V11.5714H1.43599V16.7143ZM12.9239 18H20.1038C20.8981 18 21.5398 17.4254 21.5398 16.7143V11.5714H12.9239V18ZM21.5398 5.14286H19.6506C19.9288 4.6567 20.1038 4.1183 20.1038 3.53571C20.1038 1.58705 18.3313 0 16.1548 0C14.2881 0 13.0809 0.855804 11.5328 2.7442C9.98459 0.855804 8.77747 0 6.91069 0C4.73427 0 2.96172 1.58705 2.96172 3.53571C2.96172 4.1183 3.13225 4.6567 3.41496 5.14286H1.43599C0.641706 5.14286 0 5.71741 0 6.42857V9.64286C0 9.99643 0.323097 10.2857 0.717993 10.2857H22.2578C22.6527 10.2857 22.9758 9.99643 22.9758 9.64286V6.42857C22.9758 5.71741 22.3341 5.14286 21.5398 5.14286ZM6.9062 5.14286C5.91447 5.14286 5.11121 4.42366 5.11121 3.53571C5.11121 2.64777 5.91447 1.92857 6.9062 1.92857C7.7992 1.92857 8.45886 2.06116 10.7699 5.14286H6.9062ZM16.1548 5.14286H12.2911C14.5977 2.0692 15.2394 1.92857 16.1548 1.92857C17.1466 1.92857 17.9498 2.64777 17.9498 3.53571C17.9498 4.42366 17.1466 5.14286 16.1548 5.14286Z"
                                                          fill="white"/>
                                                </svg>
                                                <span class="bonus-share">
                                            <?php the_sub_field( 'bonus_share' ); ?>
								        </span>
                                            </div>
                                            <span id="bonus-subtitle">
                                            <?php the_sub_field( 'bonus_subtitle' ); ?>
							            </span>
										<?php endwhile; ?>
									<?php endif; ?>
                                </div>
                                <div class="deposit-methods">
                                    <div class="deposits-method-grid" id="deposit-methods-list">
                                        <span class="top-info-name">Deposit methods</span>
										<?php $deposit_methods = get_sub_field( 'deposit_methods' ); ?>
										<?php if ( $deposit_methods ) : ?>
                                            <div class="deposit-method-list part-items">
												<?php foreach ( $deposit_methods as $deposit_post ) : ?>
													<?php $permalink = get_permalink( $deposit_post->ID ); ?>
													<?php setup_postdata( $deposit_post ); ?>
													<?php $payment = get_field( 'payment', $deposit_post->ID ); ?>

                                                    <a class="part-item"
                                                       href="<?php echo $permalink ?>"><?php //echo $top_post->post_title; ?>
														<?php if ( $payment ) : ?>
                                                            <img width="55px" height="38px"
                                                                 src="<?php echo esc_url( $payment['url'] ); ?>"
                                                                 alt="<?php echo esc_attr( $payment['alt'] ); ?>"/>
														<?php endif; ?>

                                                    </a>
													<?php $count = count( $deposit_post ) + 1; ?>
												<?php endforeach; ?>
                                                <div class="more-items"></div>
                                                <a href="#" class="ShowMore">+<?php echo $count; ?></a>
                                            </div>

											<?php wp_reset_postdata(); ?>
										<?php endif; ?>
                                        <!--                                        <button class="show-more">+5</button>-->
                                        <!--                                        <button class="show-less">hide</button>-->
                                    </div>
                                </div>
                                <div class="devices-block">
                                    <span class="top-info-name">Devices</span>
									<?php $devices_checked_values = get_sub_field( 'devices' ); ?>
									<?php if ( $devices_checked_values ) : ?>
                                        <!--				            --><?php //foreach ( $devices_checked_values as $devices_value ): ?>
                                        <!--					            --><?php //echo $devices_value['label']; ?>
                                        <!--				            --><?php //endforeach; ?>
									<?php endif; ?>
                                    <ul class="devices-list">
										<?php
										$phone_img  = '<svg width="16" height="25" viewBox="0 0 16 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.2812 0H2.34375C1.0498 0 0 1.0498 0 2.34375V22.6562C0 23.9502 1.0498 25 2.34375 25H13.2812C14.5752 25 15.625 23.9502 15.625 22.6562V2.34375C15.625 1.0498 14.5752 0 13.2812 0ZM7.8125 23.4375C6.94824 23.4375 6.25 22.7393 6.25 21.875C6.25 21.0107 6.94824 20.3125 7.8125 20.3125C8.67676 20.3125 9.375 21.0107 9.375 21.875C9.375 22.7393 8.67676 23.4375 7.8125 23.4375ZM13.2812 18.1641C13.2812 18.4863 13.0176 18.75 12.6953 18.75H2.92969C2.60742 18.75 2.34375 18.4863 2.34375 18.1641V2.92969C2.34375 2.60742 2.60742 2.34375 2.92969 2.34375H12.6953C13.0176 2.34375 13.2812 2.60742 13.2812 2.92969V18.1641Z" fill="white"/>
</svg>
';
										$pc_img     = '<svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M25.35 18.6875H15.5001C15.47 19.5774 14.9025 20.125 14.17 20.125H11.7C10.9407 20.125 10.3586 19.3402 10.3687 18.6875H0.65C0.2925 18.6875 0 19.0109 0 19.4062V20.125C0 21.7062 1.17 23 2.6 23H23.4C24.83 23 26 21.7062 26 20.125V19.4062C26 19.0109 25.7075 18.6875 25.35 18.6875ZM23.4 2.15625C23.4 0.970313 22.5225 0 21.45 0H4.55C3.4775 0 2.6 0.970313 2.6 2.15625V17.25H23.4V2.15625ZM20.8 14.375H5.2V2.875H20.8V14.375Z" fill="white"/>
</svg>
';
										$tablet_img = '<svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.5312 0H2.34375C1.0498 0 0 1.0498 0 2.34375V22.6562C0 23.9502 1.0498 25 2.34375 25H19.5312C20.8252 25 21.875 23.9502 21.875 22.6562V2.34375C21.875 1.0498 20.8252 0 19.5312 0ZM10.9375 23.4375C10.0732 23.4375 9.375 22.7393 9.375 21.875C9.375 21.0107 10.0732 20.3125 10.9375 20.3125C11.8018 20.3125 12.5 21.0107 12.5 21.875C12.5 22.7393 11.8018 23.4375 10.9375 23.4375ZM19.5312 18.1641C19.5312 18.4863 19.2676 18.75 18.9453 18.75H2.92969C2.60742 18.75 2.34375 18.4863 2.34375 18.1641V2.92969C2.34375 2.60742 2.60742 2.34375 2.92969 2.34375H18.9453C19.2676 2.34375 19.5312 2.60742 19.5312 2.92969V18.1641Z" fill="white"/>
</svg>
';
										if ( $devices_checked_values && in_array( "phone :Phone", $devices_checked_values ) ) {
											echo '<li class="devices-item" id="phone">' . $phone_img . '</li>';
										} else {
											echo '';
										}
										if ( $devices_checked_values && in_array( "computer :Сomputer", $devices_checked_values ) ) {
											echo '<li class="devices-item" id="pc">' . $pc_img . '</li>';
										} else {
											echo '';
										}
										if ( $devices_checked_values && in_array( "tablet :Tablet", $devices_checked_values ) ) {
											echo '<li class="devices-item" id="tablet">' . $tablet_img . '</li>';
										} else {
											echo '';
										}
										?>
                                    </ul>
                                </div>
                                <div class="games-block" id="games-grid">
                                    <span class="top-info-name">Games</span>
                                    <div class="games-type-list part-items">
										<?php $games = get_sub_field( 'games' ); ?>
										<?php if ( $games ) : ?>
											<?php foreach ( $games as $term ) : ?>
												<?php
												//                                  $taxonomy = 'games_categories';
//			                            $terms = get_terms( $taxonomy, $my_args );
												$images_raw          = get_option( 'taxonomy_image_plugin' ); // получаем все изображения в виде массива
												$term_taxonomy_id    = $term->term_taxonomy_id; // узнаем ID категории
												$term_taxonomy_image = wp_get_attachment_image( $images_raw[ $term_taxonomy_id ], 'full' );    // получаем прикрепленное изображение
												?>
                                                <a class="part-item"
                                                   href="<?php echo esc_url( get_term_link( $term ) ); ?>">
													<?php
													echo '<div class="thumbnail">' . $term_taxonomy_image . '</div>';
													echo '<span>' . esc_html( $term->name ) . '</span>'; ?></a>
												<?php $term_count = count( $term ) + 1; ?>
											<?php endforeach; ?>
                                            <div class="more-items"></div>
                                            <a href="#" class="ShowMore">+<?php echo $term_count; ?></a>
                                            <!--                                    <a href="#" class="ShowLess">SHOW LESS</a>-->
										<?php endif; ?>
                                        <!--                                    <button class="show-more">+5</button>-->
                                        <!--                                    <button class="show-less">hide</button>-->
                                    </div>

                                </div>
                                <div class="certifications">
                                    <span class="top-info-name">Certifications</span>
									<?php $certifications = get_sub_field( 'certifications' ); ?>
									<?php if ( $certifications ) : ?>
                                        <img src="<?php echo esc_url( $certifications['url'] ); ?>"
                                             alt="<?php echo esc_attr( $certifications['alt'] ); ?>"/>
									<?php else: ?>
                                        <div class="empty-certificate"></div>
									<?php endif; ?>
                                </div>
								<?php $play_link = get_sub_field( 'play_link' ); ?>
								<?php if ( $play_link ) : ?>
                                    <a class="red-btn" href="<?php echo esc_url( $play_link['url'] ); ?>"
                                       target="_blank"><?php echo esc_html( $play_link['title'] ); ?></a>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
                    </section>
					<?php if ( have_rows( 'information_review' ) ) : ?>
						<?php while ( have_rows( 'information_review' ) ) : the_row(); ?>
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
                                                    <table class="info-table-list">
                                                        <tbody>
														<?php while ( have_rows( 'info_table' ) ) : the_row(); ?>
                                                            <tr>
                                                                <td class="info-table-item">
                        <span class="info-name">
                                                    <?php
                                                    $casino_name = get_field_object( 'field_62addd651a07f' );
                                                    echo $casino_name['label'];
                                                    ?>
                        </span>
                                                                    <span class="info-value">
                        <?php the_sub_field( 'casino_name' ); ?>
                    </span>
                                                                </td>
                                                                <td class="info-table-item">
                        <span class="info-name">
  <?php
  $owner = get_field_object( 'field_62addd9f1a080' );
  echo $owner['label'];
  ?>                                                </span>
                                                                    <span class="info-value">
                                                <?php the_sub_field( 'owner' ); ?>
                        </span>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="info-table-item">
                                            <span class="info-name">

  <?php
  $year_established = get_field_object( 'field_62adddb31a081' );
  echo $year_established['label'];
  ?>                                                                              </span>
                                                                    <span class="info-value">
                                                    <?php the_sub_field( 'year_established' ); ?>
                        </span>
                                                                </td>
                                                                <td class="info-table-item">
                        <span class="info-name">

  <?php
  $number_of_games = get_field_object( 'field_62adddbc1a082' );
  echo $number_of_games['label'];
  ?>                                                          </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'number_of_games' ); ?>
                        </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="info-table-item">
                        <span class="info-name">
  <?php
  $games_offered = get_field_object( 'field_62adddc71a083' );
  echo $games_offered['label'];
  ?>                                                          </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'games_offered' ); ?>
                        </span>
                                                                </td>
                                                                <td class="info-table-item">
                        <span class="info-name">
  <?php
  $software_used = get_field_object( 'field_62adddce1a084' );
  echo $software_used['label'];
  ?>                                                          </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'software_used' ); ?>
                        </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="info-table-item">
                        <span class="info-name">
  <?php
  $compatible_devices = get_field_object( 'field_62adddd81a085' );
  echo $compatible_devices['label'];
  ?>                                                          </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'compatible_devices' ); ?>
                        </span>
                                                                </td>
                                                                <td class="info-table-item">
                        <span class="info-name">
  <?php
  $payout_percentage = get_field_object( 'field_62addddf1a086' );
  echo $payout_percentage['label'];
  ?>                                                          </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'payout_percentage' ); ?>
                        </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="info-table-item">
                        <span class="info-name">
  <?php
  $payout_days = get_field_object( 'field_62addde81a087' );
  echo $payout_days['label'];
  ?>                                                          </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'payout_days' ); ?>
                        </span>
                                                                </td>
                                                                <td class="info-table-item">
                                                <span class="info-name">
  <?php
  $max_jackpot = get_field_object( 'field_62adddf11a088' );
  echo $max_jackpot['label'];
  ?>                                                                                  </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'max_jackpot' ); ?>
                        </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="info-table-item">
                        <span class="info-name">
  <?php
  $languages = get_field_object( 'field_62adddf81a089' );
  echo $languages['label'];
  ?>                                                          </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'languages' ); ?>
                        </span>
                                                                </td>
                                                                <td class="info-table-item">
                                                <span class="info-name">
  <?php
  $customer_support = get_field_object( 'field_62adde001a08a' );
  echo $customer_support['label'];
  ?>                                                  </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'customer_support' ); ?>
                        </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="info-table-item">
                                                <span class="info-name">
  <?php
  $banking_options = get_field_object( 'field_62adde071a08b' );
  echo $banking_options['label'];
  ?>                                                  </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'banking_options' ); ?>
                        </span>
                                                                </td>
                                                                <td class="info-table-item">
                                                <span class="info-name">
  <?php
  $currencies_supported = get_field_object( 'field_62adde0f1a08c' );
  echo $currencies_supported['label'];
  ?>                                                  </span>
                                                                    <span class="info-value">
                            					<?php the_sub_field( 'currencies_supported' ); ?>
                        </span>
                                                                </td>
                                                            </tr>
														<?php endwhile; ?>
                                                        </tbody>
                                                    </table>

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
                                                    <h5 class="advantages-title">Pros +</h5>
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
                                                    <h5 class="disadvantages-title">Cons -</h5>
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
											<?php endwhile; ?>
											<?php endif; ?>
                                        </div>
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
                                                                        <div class="ranks-wrap" itemprop="reviewRating"
                                                                             itemscope=""
                                                                             itemtype="https://schema.org/Game">
                                                                            <h5 itemprop="name" class="rating-title">
																				<?php the_sub_field( 'rating_title' ); ?>
                                                                            </h5>
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
                                                                            <div class="ranks-value"
                                                                                 itemprop="reviewRating" itemscope
                                                                                 itemtype="https://schema.org/Rating">
                                                                                <meta itemprop="worstRating"
                                                                                      content="75">
                                                                                <meta itemprop="ratingValue"
                                                                                      content="<?php echo $rating; ?>">
                                                                                <meta itemprop="bestRating" content="5">
                                                                                <span class="rank-name"
                                                                                      itemprop="name"></span>
                                                                                <span itemprop="bestRating"
                                                                                      content="100"></span>

                                                                                <span class="rank-name"><?php the_sub_field( 'rank_name' ); ?></span>
                                                                                <div class="rank-value"
                                                                                     itemprop="ratingValue"
                                                                                     content="<?php echo $rating; ?>"><?php echo $rating; ?>
                                                                                    /5
                                                                                </div>
                                                                            </div>
                                                                            <div itemprop="aggregateRating"
                                                                                 class="aggregate" itemscope=""
                                                                                 itemtype="https://schema.org/AggregateRating">
                                                                                <div>
                                                                                    <h3 itemprop="itemreviewed"
                                                                                        content="Reviewcasino"></h3>
                                                                                    <span itemprop="ratingValue"
                                                                                          content="4"></span>
                                                                                    <span itemprop="worstRating"
                                                                                          content="1"></span>
                                                                                    <span itemprop="bestRating"
                                                                                          content="5"></span>
                                                                                    <span itemprop="ratingCount"
                                                                                          content="894"></span>
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
													?>
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
                                    <img class="info-review-after"
                                         src="<?php echo esc_url( $info_image_after['url'] ); ?>"
                                         alt="<?php echo esc_attr( $info_image_after['alt'] ); ?>"/>
								<?php endif; ?>
                            </section>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php if ( have_rows( 'reviews_layout' ) ): ?>
						<?php while ( have_rows( 'reviews_layout' ) ) : the_row(); ?>

							<?php get_template_part( 'template-parts-reviews/' . get_row_layout() ); ?>

						<?php endwhile; ?>

					<?php endif; ?>
            </div>

        </div>
    </main><!-- #main -->


<?php
get_footer();
