<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reviewcasino_CA
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="dark-decor-section other-review-item">
    <div class="logo-review-block">
        <span class="review-number"><?php echo $i ++; ?></span>

		<?php
		echo get_the_post_thumbnail( $all_post->ID );
		?>
        <img class="country-flag" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/canada-flag.png" width="54"
             height="54"
             alt="flag-canada">
    </div>
    <div class="middle-block">
        <div class="top-block">
            <div class="left-head-review">
                <span class="title-name">Game</span>
                <a class="game-link" href="<?php the_permalink(); ?>"><?php echo $all_post->post_title; ?></a>
            </div>
            <div class="payouts-block">
				<?php if ( have_rows( 'information_review', $all_post->ID ) ) : ?>
					<?php while ( have_rows( 'information_review', $all_post->ID ) ) : the_row(); ?>
						<?php if ( have_rows( 'info_group', $all_post->ID ) ) : ?>
							<?php while ( have_rows( 'info_group', $all_post->ID ) ) : the_row(); ?>
								<?php if ( have_rows( 'info_table', $all_post->ID ) ) : ?>
                                    <div class="bottom-top-three-block">
									<?php while ( have_rows( 'info_table', $all_post->ID ) ) : the_row(); ?>
										<?php $value_8 = get_sub_field( 'payout_percentage' ); ?>
										<?php $value_9 = get_sub_field( 'payout_days' ); ?>
                                        <div class="payout-data">
                                            <span>Payout</span>
                                            <svg width="14" height="21" viewBox="0 0 14 21" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
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
                                            <svg width="21" height="14" viewBox="0 0 21 14" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
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
                                </div>
							<?php endwhile; ?>
						<?php endif; ?><?php endwhile; ?>
				<?php endif; ?>
            </div>
        </div>
		<?php if ( have_rows( 'head_review_content', $all_post->ID ) ) : ?>
			<?php while ( have_rows( 'head_review_content', $all_post->ID ) ) : the_row(); ?>
                <div class="review-bonuses">
                    <span class="top-info-name">Bonus</span>
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

			<?php endwhile; ?>
		<?php endif; ?>
        <div class="bottom-links">
			<?php $permalink = get_permalink( $all_post->ID ); ?>
            <a class="red-btn" href="/">Play Now</a>
            <a class="read-review" href="<?php echo $permalink; ?>">Read Review <?php echo $all_post->post_title; ?></a>
        </div>
    </div>
	<?php if ( have_rows( 'head_review_content', $all_post->ID ) ) : ?>
		<?php while ( have_rows( 'head_review_content', $all_post->ID ) ) : the_row(); ?>
			<?php global $post; ?>
            <div class="right-review-block">
                <div class="deposits-method-grid" id="deposit-methods-list">
                    <div class="deposit-head">
                        <span class="top-info-name">Payment Methods</span>
                        <a href="<?php echo site_url(); ?>/payments">Show all</a>
                    </div>
					<?php $deposit_methods = get_sub_field( 'deposit_methods' ); ?>
					<?php if ( $deposit_methods ) : ?>
                        <div class="deposit-method-list">
							<?php foreach ( $deposit_methods as $deposit_post ) : ?>
								<?php $permalink = get_permalink( $deposit_post->ID ); ?>
								<?php setup_postdata( $deposit_post ); ?>
								<?php $payment = get_field( 'payment', $deposit_post->ID ); ?>

                                <a class="deposit-thumb"
                                   href="<?php echo $permalink ?>"><?php //echo $top_post->post_title; ?>
									<?php if ( $payment ) : ?>
                                        <img width="55px" height="38px"
                                             src="<?php echo esc_url( $payment['url'] ); ?>"
                                             alt="<?php echo esc_attr( $payment['alt'] ); ?>"/>
									<?php endif; ?>
                                </a>
							<?php endforeach; ?>
                        </div>

						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                    <!--                                        <button class="show-more">+5</button>-->
                    <!--                                        <button class="show-less">hide</button>-->
                </div>
                <div class="games-block" id="games-grid">
                    <div class="games-head">
                        <span class="top-info-name">Availible Games</span>
                        <a href="<?php echo site_url(); ?>/payments">Show all</a>
                    </div>
                    <div class="games-type-list">
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
                                <a class="game-item" href="<?php echo esc_url( get_term_link( $term ) ); ?>">
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
            </div>
		<?php endwhile; ?>
	<?php endif; ?>
</article>

