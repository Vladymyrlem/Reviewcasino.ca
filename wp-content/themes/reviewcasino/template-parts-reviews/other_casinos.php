<section class="full-list-casinos full-content dark-decor-section">
    <h2 class="middle-title">Browse our full list of casino reviews</h2>
    <form action="get" id="search-all-reviews">
        <input type="search" class="search-reviews search-field" placeholder="Search ...">
    </form>
	<?php
	//global $post;
	?>
	<?php
	$all_reviews_args = array(
		'post_type'      => 'reviews',
		'order'          => 'DESC',
		'order_by'       => 'date',
		'posts_per_page' => - 1,
	);

	$custom_loop = new WP_Query( $all_reviews_args );
	?>
    <ul class="all-reviews-list">
		<?php

		while ( $custom_loop->have_posts() ) : $custom_loop->the_post(); ?>
            <li class="review-post">
                <a href="<?php get_the_permalink() ?>">
					<?php the_title();
					?>
                </a>
            </li>
			<?php wp_reset_postdata();
		endwhile;
		?>
    </ul>
    <ul class="codyshop-ajax-search"></ul>
    <a class="red-btn" id="view-all-casinos">View all casinos + <?php
		$count_posts     = wp_count_posts( 'reviews' );
		$published_posts = $count_posts->publish;
		echo $published_posts ?></a>

</section>

<section class="other-online-casinos dark-decor-section full-content">
    <h2 class="middle-title">Other Online Casinos you May Like</h2>
    <div class="other-casinos-grid">
		<?php $other_casinos = get_sub_field( 'other_casinos' ); ?>
		<?php if ( $other_casinos ) : ?>
			<?php foreach ( $other_casinos as $post_ids ) : ?>
				<?php setup_postdata( $post_ids ); ?>
				<?php $permalink = get_permalink( $post_ids->ID ); ?>
                <div class="other-casino-item" id="<?php echo $post_ids->ID; ?>">
					<?php
					$thumb_id = $post_ids->ID;
					echo get_the_post_thumbnail( $thumb_id );
					//reviewcasino_post_thumbnail();
					?>
                    <a class="other-casino-link" href="<?php echo $permalink; ?>">
                        Read Review
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.37764 1.00469L7.12086 0.242157C7.43555 -0.080719 7.94443 -0.080719 8.25578 0.242157L14.764 6.91608C15.0787 7.23895 15.0787 7.76105 14.764 8.08049L8.25578 14.7578C7.94108 15.0807 7.43221 15.0807 7.12086 14.7578L6.37764 13.9953C6.05959 13.669 6.06629 13.1366 6.39103 12.8172L10.4252 8.87394H0.803482C0.358219 8.87394 0 8.50641 0 8.04958V6.95042C0 6.49359 0.358219 6.12606 0.803482 6.12606H10.4252L6.39103 2.18285C6.06294 1.86341 6.05624 1.33101 6.37764 1.00469Z"
                                  fill="black"/>
                        </svg>
                    </a>

                </div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
    </div>
</section>
