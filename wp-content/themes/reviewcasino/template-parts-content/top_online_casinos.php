<section class="top-online-casinos">
    <div class="mycontainer p-0">
        <div class="top-three">
			<?php if ( have_rows( 'top_three' ) ) : ?>
				<?php while ( have_rows( 'top_three' ) ) : the_row(); ?>
                    <h2 class="middle-title">
						<?php the_sub_field( 'top_title' ); ?>
                    </h2>
                    <div class="description">
						<?php the_sub_field( 'top_descr' ); ?>
                    </div>
					<?php $top_grid = get_sub_field( 'top_grid' ); ?>
					<?php if ( $top_grid ) : ?>
                        <div class="top-games">
							<?php foreach ( $top_grid as $post ) : ?>
                                <div class="top-game">
									<?php setup_postdata( $post ); ?>
                                    <a class="top-game-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <div class="country-image">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/imgs/canada-flag.png"
                                             width="50px" height="50px" alt="">
                                    </div>
                                    <div class="rating-top-block">
										<?php //the_field('rating_count', $post->ID);?>
                                        <div class="top-rating-block">
                                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.3113 5.80206C12.382 5.92336 12.5004 6.00937 12.6376 6.03908L17.2373 7.03514C17.6118 7.11624 17.7597 7.5712 17.5043 7.85696L14.3685 11.3664C14.275 11.4711 14.2298 11.6103 14.2439 11.75L14.718 16.4324C14.7566 16.8136 14.3696 17.0948 14.0189 16.9403L9.71219 15.0425C9.58373 14.9858 9.4374 14.9858 9.30894 15.0425L5.0022 16.9403C4.65153 17.0948 4.26452 16.8136 4.30312 16.4324L4.77721 11.75C4.79135 11.6103 4.74613 11.4711 4.6526 11.3664L1.5168 7.85696C1.26147 7.5712 1.4093 7.11624 1.78382 7.03514L6.38357 6.03908C6.52076 6.00937 6.63915 5.92336 6.7098 5.80206L9.07851 1.73524C9.27138 1.4041 9.74975 1.4041 9.94262 1.73524L12.3113 5.80206Z"
                                                      fill="#FFF500" stroke="#FFF500" stroke-linejoin="round"/>
                                            </svg>
											<?php if ( have_rows( 'information_review', $post->ID ) ) : ?>
												<?php while ( have_rows( 'information_review', $post->ID ) ) : the_row(); ?>
                                                    <div class="editors-verdict">
														<?php if ( have_rows( 'editors_verdict', $post->ID ) ) : ?>
															<?php while ( have_rows( 'editors_verdict', $post->ID ) ) : the_row(); ?>
																<?php if ( have_rows( 'verdicts_group', $post->ID ) ) : ?>
																	<?php $new_array = array() ?>
																	<?php while ( have_rows( 'verdicts_group', $post->ID ) ) : the_row(); ?>
																		<?php $rows = get_sub_field( 'rank_count' ); ?>
																		<?php array_push( $new_array, $rows ) ?>

																	<?php endwhile; ?>
																	<?php
																	$array   = array_filter( $new_array );  // если используете php7.4+ то array_filter($array, fn($item) => $item !== '');
																	$average = array_sum( $array ) / count( $array );
																	?>
																<?php endif; ?>
                                                                <div class="verdict-middle">
																	<?php echo '<span class="verdict-middle-value">' . $average . '</span>/5'; ?>
                                                                </div>
															<?php endwhile; ?>
														<?php endif; ?>
                                                    </div>

												<?php endwhile; ?>
											<?php endif; ?>
                                        </div>


                                        <div class="rating-name">Expert rating</div>
                                    </div>
                                    <div class="links-group">
										<?php //$play_link = get_sub_field( 'play_link' ); ?>
										<?php //if ( $play_link ) : ?>
										<?php $permalink = get_permalink( $post->ID ); ?>

                                        <a class="violet-btn play-btn" href="<?php echo $permalink; ?>" target="_blank">Play
                                            Now</a>
										<?php //endif; ?>
                                        <a class="title-link"
                                           href="<?php the_permalink(); ?>">Reviews <?php the_title(); ?></a>
                                    </div>
                                </div>
							<?php endforeach; ?>
                        </div>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>

					<?php $casino_review_link = get_sub_field( 'casino_review_link' ); ?>
					<?php if ( $casino_review_link ) : ?>
                        <a class="red-btn" href="<?php echo esc_url( $casino_review_link['url'] ); ?>"
                           target="_blank"><?php echo esc_html( $casino_review_link['title'] ); ?></a>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>

        <div class="online-casino-reviews">
			<?php if ( have_rows( 'online_casino_reviews' ) ) : ?>
				<?php while ( have_rows( 'online_casino_reviews' ) ) : the_row(); ?>
                    <h2 class="middle-title">
						<?php the_sub_field( 'review_title' ); ?>
                    </h2>
                    <div class="description">
						<?php the_sub_field( 'review_descr' ); ?>
                    </div>
					<?php if ( have_rows( 'reviews_list' ) ) : ?>
                        <div class="reviews-list accordion-grid">
							<?php while ( have_rows( 'reviews_list' ) ) : the_row(); ?>
                                <div class="review-block accord-block light-block">
                                    <div class="review-name accord-title">
                            <span>
	                    <?php the_sub_field( 'review_name' ); ?>
                                  </span>
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
                                    <div class="review-descr hidden-block">
										<?php the_sub_field( 'review_descr' ); ?>
                                    </div>
                                </div>
							<?php endwhile; ?>
                        </div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
	<?php $top_image_after = get_sub_field( 'top_image_after' ); ?>
	<?php if ( $top_image_after ) : ?>
        <img class="top-three-after" src="<?php echo esc_url( $top_image_after['url'] ); ?>"
             alt="<?php echo esc_attr( $top_image_after['alt'] ); ?>"/>
	<?php endif; ?>

</section>
