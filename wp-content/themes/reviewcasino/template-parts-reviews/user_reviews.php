<section class="full-content user-reviews-section">
    <div class="dark-decor-section user-review-block">
        <h2 class="middle-title">
			<?php the_sub_field( 'main_title' ); ?>
        </h2>
		<?php if ( have_rows( 'reviews_list' ) ) : ?>
            <div class="user-reviews-list">
				<?php while ( have_rows( 'reviews_list' ) ) : the_row(); ?>
                    <div class="user-review-item">
                        <svg class="user-review-ico" width="121" height="121" viewBox="0 0 121 121" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M60.5 0C27.0786 0 0 27.0786 0 60.5C0 93.9214 27.0786 121 60.5 121C93.9214 121 121 93.9214 121 60.5C121 27.0786 93.9214 0 60.5 0ZM60.5 23.4194C72.356 23.4194 81.9677 33.031 81.9677 44.8871C81.9677 56.7431 72.356 66.3548 60.5 66.3548C48.644 66.3548 39.0323 56.7431 39.0323 44.8871C39.0323 33.031 48.644 23.4194 60.5 23.4194ZM60.5 107.339C46.18 107.339 33.3482 100.85 24.7611 90.7012C29.3474 82.0653 38.3248 76.1129 48.7903 76.1129C49.3758 76.1129 49.9613 76.2105 50.5224 76.3813C53.6938 77.4059 57.0115 78.0645 60.5 78.0645C63.9885 78.0645 67.3306 77.4059 70.4776 76.3813C71.0387 76.2105 71.6242 76.1129 72.2097 76.1129C82.6752 76.1129 91.6526 82.0653 96.2389 90.7012C87.6518 100.85 74.82 107.339 60.5 107.339Z"
                                  fill="white"/>
                        </svg>

                        <div class="user-review-item-content">
                            <h5 class="review-name">
								<?php the_sub_field( 'review_name' ); ?>
                            </h5>
                            <span class="user-review-date">
	                <?php the_sub_field( 'review_date' ); ?>
</span>
                            <div class="user-review-content">
								<?php the_sub_field( 'review_content' ); ?>
                            </div>
                        </div>
                        <div class="ranks-wrap" itemprop="reviewRating" itemscope=""
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
				<?php endwhile; ?>
            </div>
		<?php endif; ?>
    </div>
	<?php $reviews_link = get_sub_field( 'reviews_link' ); ?>
	<?php if ( $reviews_link ) : ?>
        <a class="red-btn" href="<?php echo esc_url( $reviews_link['url'] ); ?>"
           target="<?php echo esc_attr( $reviews_link['target'] ); ?>"><?php echo esc_html( $reviews_link['title'] ); ?></a>
	<?php endif; ?>
</section>
