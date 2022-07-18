<section class="dark-decor-section full-content real-banking-methods">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="banking-methods-descr">
		<?php the_sub_field( 'banking_methods_descr' ); ?>
    </div>
    <span class="banking-methods-name">
        <?php the_sub_field( 'banking_methods_list_name' ); ?>
</span>

	<?php if ( have_rows( 'banking_methods_list' ) ) : ?>
        <ul class="banking-methods-list">
			<?php while ( have_rows( 'banking_methods_list' ) ) : the_row(); ?>
                <li class="banking-methods-item">
					<?php the_sub_field( 'banking_method_name' ); ?>
                </li>
			<?php endwhile; ?>
        </ul>
	<?php endif; ?>
	<?php $banking_method_image = get_sub_field( 'banking_method_image' ); ?>
	<?php if ( $banking_method_image ) : ?>
        <img class="banking-methods-image" src="<?php echo esc_url( $banking_method_image['url'] ); ?>"
             alt="<?php echo esc_attr( $banking_method_image['alt'] ); ?>"/>
	<?php endif; ?>
</section>
