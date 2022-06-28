<section class="all-categories">
    <div class="mycontainer">
        <h2 class="middle-title">
			<?php the_sub_field( 'main_title' ); ?>
        </h2>
		<?php if ( have_rows( 'categories_list' ) ) : ?>
            <div class="all-categories-grid">
				<?php while ( have_rows( 'categories_list' ) ) : the_row(); ?>
                    <div class="category-item">
						<?php if ( have_rows( 'menu_group' ) ) : ?>
							<?php while ( have_rows( 'menu_group' ) ) : the_row(); ?>
                                <div class="parent-category">
									<?php $parent_item_image = get_sub_field( 'parent_item_image' ); ?>
									<?php if ( $parent_item_image ) : ?>
                                        <img class="category-image"
                                             src="<?php echo esc_url( $parent_item_image['url'] ); ?>"
                                             alt="<?php echo esc_attr( $parent_item_image['alt'] ); ?>"/>
									<?php endif; ?>
									<?php $parent_item = get_sub_field( 'parent_item' ); ?>
									<?php if ( $parent_item ) : ?>
                                        <a class="category-link" href="<?php echo esc_url( $parent_item['url'] ); ?>"
                                           target="<?php echo esc_attr( $parent_item['target'] ); ?>"><?php echo esc_html( $parent_item['title'] ); ?></a>
									<?php endif; ?>
                                </div>
                                <div class="sub-categories">
									<?php if ( have_rows( 'sub_categories' ) ) : ?>
										<?php while ( have_rows( 'sub_categories' ) ) : the_row(); ?>
											<?php $sub_link = get_sub_field( 'sub_link' ); ?>
											<?php if ( $sub_link ) : ?>
                                                <a class="subcategory-link"
                                                   href="<?php echo esc_url( $sub_link['url'] ); ?>"
                                                   target="<?php echo esc_attr( $sub_link['target'] ); ?>"><?php echo esc_html( $sub_link['title'] ); ?></a>
											<?php endif; ?>
										<?php endwhile; ?>
									<?php endif; ?>
                                </div>
							<?php endwhile; ?>
						<?php endif; ?>
                    </div>
				<?php endwhile; ?>
            </div>
		<?php endif; ?>
    </div>
</section>
