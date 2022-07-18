<section class="full-content calculate-bonus-section">
    <div class="left-calculate-block">
        <h2 class="bonus-title"><?php the_sub_field( 'main_title' ); ?></h2>
		<?php if ( have_rows( 'tip_content' ) ) : ?>
            <div class="tip-block-content dark-decor-section">
				<?php while ( have_rows( 'tip_content' ) ) : the_row(); ?>
                    <h3 class="tip-title">
						<?php the_sub_field( 'tip_title' ); ?>
                    </h3>
                    <div class="tip-content">
						<?php the_sub_field( 'tip_content' ); ?>
                    </div>
				<?php endwhile; ?>
            </div>
		<?php endif; ?>

        <div class="calculate-content">
			<?php the_sub_field( 'content' ); ?>
        </div>
    </div>
    <div class="calculator dark-decor-section">
		<?php if ( have_rows( 'calculator' ) ) : ?>

			<?php while ( have_rows( 'calculator' ) ) : the_row(); ?>
                <div class="head-calculator">
                    <div class="left-head">
                        <h2 class="calculator-title middle-title">
							<?php the_sub_field( 'calculate_title' ); ?>
                        </h2>
                        <span class="calculate-subtitle">
        <?php the_sub_field( 'calculate_subtitle' ); ?>
		</span>
                    </div>
                    <div class="calculate-form">
                        <input type="number" id="bonus-val" placeholder="С$ 100" value="100">
                        <input type="submit" id="get-result" value="Calculate">
						<?php //the_sub_field( 'bonus_value' ); ?>
                    </div>
                </div>
                <div class="calculator-table">
                    <div class="tab-row">
                        <span class="logo-casino">Casino</span>
                        <div class="bonus-value" id="bonus-val-name">
                            <div class="col-content">
                                <span>Bonus</span>
                                <svg class="msg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 10C20 15.5241 15.5225 20 10 20C4.47754 20 0 15.5241 0 10C0 4.47915 4.47754 0 10 0C15.5225 0 20 4.47915 20 10ZM10.2683 3.30645C8.07089 3.30645 6.66935 4.23214 5.56879 5.87734C5.42621 6.09048 5.47391 6.37794 5.67827 6.5329L7.07742 7.59379C7.2873 7.75294 7.58633 7.71508 7.74939 7.50823C8.46972 6.5946 8.96363 6.0648 10.06 6.0648C10.8837 6.0648 11.9027 6.59496 11.9027 7.39375C11.9027 7.99762 11.4042 8.30774 10.5908 8.76375C9.64226 9.29548 8.3871 9.9573 8.3871 11.6129V11.7742C8.3871 12.0414 8.60375 12.2581 8.87097 12.2581H11.129C11.3962 12.2581 11.6129 12.0414 11.6129 11.7742V11.7204C11.6129 10.5728 14.9672 10.525 14.9672 7.41935C14.9672 5.08056 12.5412 3.30645 10.2683 3.30645ZM10 13.3065C8.97722 13.3065 8.14516 14.1385 8.14516 15.1613C8.14516 16.184 8.97722 17.0161 10 17.0161C11.0228 17.0161 11.8548 16.184 11.8548 15.1613C11.8548 14.1385 11.0228 13.3065 10 13.3065Z"
                                          fill="white"/>
                                </svg>
                                <div class="tab-msg">
                                    <div class="triangle-left"></div>
                                    <span>
                        <?php the_sub_field( 'bonus_msg' ); ?>
                    </span>
                                </div>
                            </div>


                        </div>
                        <div class="bankroll-col" id="bankroll-name">
                            <div class="col-content">
                                <span>Bankroll</span>
                                <svg class="msg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 10C20 15.5241 15.5225 20 10 20C4.47754 20 0 15.5241 0 10C0 4.47915 4.47754 0 10 0C15.5225 0 20 4.47915 20 10ZM10.2683 3.30645C8.07089 3.30645 6.66935 4.23214 5.56879 5.87734C5.42621 6.09048 5.47391 6.37794 5.67827 6.5329L7.07742 7.59379C7.2873 7.75294 7.58633 7.71508 7.74939 7.50823C8.46972 6.5946 8.96363 6.0648 10.06 6.0648C10.8837 6.0648 11.9027 6.59496 11.9027 7.39375C11.9027 7.99762 11.4042 8.30774 10.5908 8.76375C9.64226 9.29548 8.3871 9.9573 8.3871 11.6129V11.7742C8.3871 12.0414 8.60375 12.2581 8.87097 12.2581H11.129C11.3962 12.2581 11.6129 12.0414 11.6129 11.7742V11.7204C11.6129 10.5728 14.9672 10.525 14.9672 7.41935C14.9672 5.08056 12.5412 3.30645 10.2683 3.30645ZM10 13.3065C8.97722 13.3065 8.14516 14.1385 8.14516 15.1613C8.14516 16.184 8.97722 17.0161 10 17.0161C11.0228 17.0161 11.8548 16.184 11.8548 15.1613C11.8548 14.1385 11.0228 13.3065 10 13.3065Z"
                                          fill="white"/>
                                </svg>
                                <div class="tab-msg">
                                    <div class="triangle-left"></div>

                                    <span>
                                    <?php the_sub_field( 'bankroll_msg' ); ?>
                                </span>
                                </div>
                            </div>
                        </div>
                        <span class="claim-col"></span>
                    </div>
                    <div class="bonuses-group row p-0 flex-nowrap">

						<?php $bonus_review = get_sub_field( 'bonus_review' ); ?>
						<?php if ( $bonus_review ) : ?>
							<?php foreach ( $bonus_review as $post ) : ?>
								<?php setup_postdata( $post ); ?>
                                <div class="tab-row bonus-tab-col col-4 p-0">
                                    <div class="logo-casino">
                                        <a href="<?php the_permalink(); ?>">
											<?php echo get_the_post_thumbnail( $post->ID );  // The thumbnail?>
                                        </a>
                                    </div>
									<?php if ( have_rows( 'head_review_content', $post->ID ) ) : ?>
										<?php while ( have_rows( 'head_review_content', $post->ID ) ) : the_row(); ?>
											<?php if ( have_rows( 'bonuses', $post->ID ) ) : ?>
												<?php while ( have_rows( 'bonuses', $post->ID ) ) : the_row(); ?>
                                                    <div class="bonus-value bon-val">
                                                        <span></span>
                                                        <input type="hidden"
                                                               value="<?php the_sub_field( 'bonus_value_calculate' ); ?>"
                                                               class="coef">
                                                        <input type="hidden"
                                                               value="<?php the_sub_field( 'bonus_share_calculate' ); ?>"
                                                               class="maxval">
                                                    </div>
                                                    <div class="bankroll-col"><?php //the_sub_field( 'bankroll_value' ); ?>
                                                        <input type="hidden"
                                                               value="<?php the_sub_field( 'bankroll_value' ); ?>"
                                                               class="roll">
                                                        <span></span>
                                                    </div>
                                                    <!--                                                <div class="bonus-share-col" style="height: 0;display: none;">-->
                                                    <!--	                                                --><?php //the_sub_field( 'bonus_share' ); ?>
                                                    <!--                                                </div>-->
                                                    <div class="claim-col claim-bonus-value">
														<?php $claim_bonus_link = get_sub_field( 'claim_bonus_link' ); ?>
														<?php if ( $claim_bonus_link ) : ?>
                                                            <a href="<?php echo esc_url( $claim_bonus_link['url'] ); ?>"
                                                               target="_blank"><?php echo esc_html( $claim_bonus_link['title'] ); ?></a>
														<?php endif; ?>
                                                    </div>
												<?php endwhile; ?>
											<?php endif; ?>
										<?php endwhile; ?>
									<?php endif; ?>

                                </div>
							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
                    </div>

                </div>
                <div class="calculate-caption">
					<?php the_sub_field( 'calculate_caption' ); ?>
                </div>
			<?php endwhile; ?>

		<?php endif; ?>
    </div>
</section>
