<section class="dark-decor-section full-content real-free-section">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="real-subtitle">
		<?php the_sub_field( 'real_free_subtitle' ); ?>
    </div>
    <div class="free-game-table">

		<?php
		$enable_img  = '<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M25 12.5C25 19.4052 19.4052 25 12.5 25C5.59476 25 0 19.4052 0 12.5C0 5.59476 5.59476 0 12.5 0C19.4052 0 25 5.59476 25 12.5ZM13.3569 18.2409L20.1865 11.4113C20.6603 10.9375 20.6603 10.1714 20.1865 9.70262L19.3296 8.84577C18.8558 8.37198 18.0897 8.37198 17.621 8.84577L12.5 13.9667L7.37903 8.84577C6.90524 8.37198 6.13911 8.37198 5.67036 8.84577L4.81351 9.70262C4.33972 10.1764 4.33972 10.9425 4.81351 11.4113L11.6431 18.2409C12.1169 18.7147 12.8831 18.7147 13.3569 18.2409Z" fill="white"/>
</svg>
';
		$disable_img = '<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.1094 0C5.42158 0 0 5.42153 0 12.1094C0 18.7972 5.42158 24.2188 12.1094 24.2188C18.7972 24.2188 24.2188 18.7972 24.2188 12.1094C24.2188 5.42158 18.7972 0 12.1094 0ZM18.4623 5.75645C21.658 8.95215 21.8803 13.8366 19.4719 17.2622L6.95654 4.74688C10.3845 2.33691 15.2684 2.56255 18.4623 5.75645ZM5.75645 18.4623C2.56074 15.2666 2.33848 10.3822 4.74683 6.95659L17.2622 19.4719C13.8343 21.8818 8.95039 21.6562 5.75645 18.4623Z" fill="white"/>
</svg>
';
		?>
		<?php if ( have_rows( 'real_free_table' ) ) : ?>
			<?php while ( have_rows( 'real_free_table' ) ) : the_row(); ?>
				<?php if ( have_rows( 'real_free_slots' ) ) : ?>
                    <ul class="real-games-list  free-slots-list">
                        <li class="head-item">Why Users Play for Real Money</li>
                        <li class="head-item">Why Users Play Free Games</li>

						<?php while ( have_rows( 'real_free_slots' ) ) : the_row(); ?>

							<?php
							//echo '<li>' . $enable_img.'<span class="left-col-value">'.get_sub_field( 'real_free_col' ).'</span></li>';

							$field = get_sub_field( 'enabled' );
							?>
							<?php if ( $field == "enable: Enable" ) {
								echo '<li>' . $enable_img . '<span class="left-col-value">' . get_sub_field( 'real_free_col' ) . '</span></li>';
							} else {
								echo '<li>' . $disable_img . '<span class="left-col-value">' . get_sub_field( 'real_free_col' ) . '</span></li>';
							} ?>

                            <!--    --><?php //$field = get_sub_field('enabled');?>
                            <!--	    --><?php //if ( $field == "enable: Enable" ) {
//	echo '<li>' . $enable_img.'<span class="left-col-value">'.get_sub_field( 'free_games_col' ).'</span></li>';
//} else {
//					echo '<li>' . $disable_img.'<span class="left-col-value">'.get_sub_field( 'free_games_col' ).'</span></li>';
//}?>

						<?php endwhile; ?>

                    </ul>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
    <div class="real-free-links-group">
		<?php $real_link = get_sub_field( 'real_link' ); ?>
		<?php if ( $real_link ) : ?>
            <a class="real-link" href="<?php echo esc_url( $real_link['url'] ); ?>"
               target="<?php echo esc_attr( $real_link['target'] ); ?>"><?php echo esc_html( $real_link['title'] ); ?>
                <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.6997 9.33057L4.05908 15.9712C3.6001 16.4302 2.85791 16.4302 2.40381 15.9712L1.30029 14.8677C0.841309 14.4087 0.841309 13.6665 1.30029 13.2124L6.00732 8.50537L1.30029 3.79834C0.841309 3.33936 0.841309 2.59717 1.30029 2.14307L2.39893 1.02979C2.85791 0.570801 3.6001 0.570801 4.0542 1.02979L10.6948 7.67041C11.1587 8.12939 11.1587 8.87158 10.6997 9.33057Z"
                          fill="white"/>
                </svg>
            </a>
		<?php endif; ?>
		<?php $free_link = get_sub_field( 'free_link' ); ?>
		<?php if ( $free_link ) : ?>
            <a class="free-link" href="<?php echo esc_url( $free_link['url'] ); ?>"
               target="<?php echo esc_attr( $free_link['target'] ); ?>"><?php echo esc_html( $free_link['title'] ); ?>
                <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.6997 9.33057L4.05908 15.9712C3.6001 16.4302 2.85791 16.4302 2.40381 15.9712L1.30029 14.8677C0.841309 14.4087 0.841309 13.6665 1.30029 13.2124L6.00732 8.50537L1.30029 3.79834C0.841309 3.33936 0.841309 2.59717 1.30029 2.14307L2.39893 1.02979C2.85791 0.570801 3.6001 0.570801 4.0542 1.02979L10.6948 7.67041C11.1587 8.12939 11.1587 8.87158 10.6997 9.33057Z"
                          fill="white"/>
                </svg>
            </a>
		<?php endif; ?>
    </div>
</section>
