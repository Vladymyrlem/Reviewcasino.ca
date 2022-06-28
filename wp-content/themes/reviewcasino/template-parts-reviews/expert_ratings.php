<section class="expert-ratings full-content ">
    <div class="dark-decor-section expert-container">
        <h2 class="middle-title">
			<?php the_sub_field( 'main_title' ); ?>
        </h2>
        <div class="rating-descr">
			<?php the_sub_field( 'ratings_descr' ); ?>
        </div>
        <div class="bottom-rating-block">
			<?php $left_image = get_sub_field( 'left_image' ); ?>
			<?php if ( $left_image ) : ?>
                <img class="right-decor-image" src="<?php echo esc_url( $left_image['url'] ); ?>"
                     alt="<?php echo esc_attr( $left_image['alt'] ); ?>"/>
			<?php endif; ?>
            <div class="right-part">
                <div class="ranks-wrap" itemprop="reviewRating" itemscope="" itemtype="https://schema.org/Game">
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
                    <div class="ranks-value" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <meta itemprop="worstRating" content="75">
                        <meta itemprop="ratingValue" content="<?php echo $rating; ?>">
                        <meta itemprop="bestRating" content="5">
                        <span class="rank-name" itemprop="name"></span>
                        <span itemprop="bestRating" content="100"></span>

                        <span class="rank-name"><?php the_sub_field( 'rank_name' ); ?></span>
                        <div class="rank-value" itemprop="ratingValue"
                             content="<?php echo $rating; ?>"></div>
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
				<?php if ( have_rows( 'ratings_list' ) ) : ?>
                    <ul class="expert-rating-list">
						<?php while ( have_rows( 'ratings_list' ) ) : the_row(); ?>
                            <li class="expert-rating-item">
								<?php the_sub_field( 'expert_rating_value' ); ?>
                            </li>
						<?php endwhile; ?>
                    </ul>
				<?php endif; ?>
            </div>
        </div>
    </div>
	<?php $read_more_link = get_sub_field( 'read_more_link' ); ?>
	<?php if ( $read_more_link ) : ?>
        <a class="red-btn" href="<?php echo esc_url( $read_more_link['url'] ); ?>"
           target="_blank"><?php echo esc_html( $read_more_link['title'] ); ?></a>
	<?php endif; ?>
</section>
