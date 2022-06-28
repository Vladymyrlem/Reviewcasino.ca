<section class="how-much full-content  dark-decor-section">
    <h2 class="bonus-title"><?php the_sub_field( 'main_title' ); ?></h2>
    <div class="how-much-content">
		<?php the_sub_field( 'how_descr' ); ?>
		<?php $how_much_link = get_sub_field( 'how_much_link' ); ?>
		<?php if ( $how_much_link ) : ?>
            <a href="<?php echo esc_url( $how_much_link['url'] ); ?>"
               target="_blank"><?php echo esc_html( $how_much_link['title'] ); ?></a>
		<?php endif; ?>
    </div>
</section>
