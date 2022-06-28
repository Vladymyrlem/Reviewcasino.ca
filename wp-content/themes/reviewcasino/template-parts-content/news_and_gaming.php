<section class="news-and-gaming">
    <div class="mycontainer">
        <h2 class="news-title">
			<?php the_sub_field( 'news_title' ); ?>
        </h2>
        <div class="news-descr">
			<?php the_sub_field( 'news_caption' ); ?>
        </div>
		<?php $news_list = get_sub_field( 'news_list' ); ?>
		<?php if ( $news_list ) : ?>
            <div class="news-grid">
				<?php foreach ( $news_list as $post ) : ?>
                    <div class="news-item">
						<?php setup_postdata( $post ); ?>

						<?php get_the_post_thumbnail( $post->ID );
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( "thumbnail" );
						}
						?>
                        <span class="news-date">
	<?php echo get_the_date( 'd M Y' ); ?>
    </span>
                        <a class="news-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                        <div class="news-excerpt">
							<?php the_excerpt(); ?>
                        </div>
                    </div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
            </div>
		<?php endif; ?>
		<?php $all_news_link = get_sub_field( 'all_news_link' ); ?>
		<?php if ( $all_news_link ) : ?>
            <a class="red-btn" href="<?php echo esc_url( $all_news_link['url'] ); ?>"
               target="<?php echo esc_attr( $all_news_link['target'] ); ?>"><?php echo esc_html( $all_news_link['title'] ); ?></a>
		<?php endif; ?>
    </div>
</section>
