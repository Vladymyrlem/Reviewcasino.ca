<section class="top-games-section full-content dark-decor-section">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
	<?php
	$enable_img  = '<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.2188 12.1094C24.2188 18.7972 18.7972 24.2188 12.1094 24.2188C5.42153 24.2188 0 18.7972 0 12.1094C0 5.42153 5.42153 0 12.1094 0C18.7972 0 24.2188 5.42153 24.2188 12.1094ZM10.7087 18.5212L19.6931 9.53682C19.9981 9.23174 19.9981 8.73706 19.6931 8.43198L18.5882 7.32715C18.2832 7.02202 17.7885 7.02202 17.4833 7.32715L10.1562 14.6542L6.7354 11.2333C6.43032 10.9283 5.93564 10.9283 5.63052 11.2333L4.52568 12.3382C4.22061 12.6433 4.22061 13.1379 4.52568 13.443L9.60381 18.5211C9.90894 18.8263 10.4036 18.8263 10.7087 18.5212Z" fill="#00DD09" fill-opacity="0.76"/>
</svg>
';
	$disable_img = '<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM18.0469 15.2881C18.2764 15.5176 18.2764 15.8887 18.0469 16.1182L16.1133 18.0469C15.8838 18.2764 15.5127 18.2764 15.2832 18.0469L12.1094 14.8438L8.93066 18.0469C8.70117 18.2764 8.33008 18.2764 8.10059 18.0469L6.17187 16.1133C5.94238 15.8838 5.94238 15.5127 6.17187 15.2832L9.375 12.1094L6.17187 8.93066C5.94238 8.70117 5.94238 8.33008 6.17187 8.10059L8.10547 6.16699C8.33496 5.9375 8.70605 5.9375 8.93555 6.16699L12.1094 9.375L15.2881 6.17187C15.5176 5.94238 15.8887 5.94238 16.1182 6.17187L18.0518 8.10547C18.2812 8.33496 18.2812 8.70605 18.0518 8.93555L14.8438 12.1094L18.0469 15.2881Z" fill="#7C00DD" fill-opacity="0.2"/>
<path d="M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM18.0469 15.2881C18.2764 15.5176 18.2764 15.8887 18.0469 16.1182L16.1133 18.0469C15.8838 18.2764 15.5127 18.2764 15.2832 18.0469L12.1094 14.8438L8.93066 18.0469C8.70117 18.2764 8.33008 18.2764 8.10059 18.0469L6.17187 16.1133C5.94238 15.8838 5.94238 15.5127 6.17187 15.2832L9.375 12.1094L6.17187 8.93066C5.94238 8.70117 5.94238 8.33008 6.17187 8.10059L8.10547 6.16699C8.33496 5.9375 8.70605 5.9375 8.93555 6.16699L12.1094 9.375L15.2881 6.17187C15.5176 5.94238 15.8887 5.94238 16.1182 6.17187L18.0518 8.10547C18.2812 8.33496 18.2812 8.70605 18.0518 8.93555L14.8438 12.1094L18.0469 15.2881Z" fill="#EA0000" fill-opacity="0.5"/>
</svg>
';
	?>
    <div class="table-wrapper">
        <table class="top-games-table">
            <thead>
            <tr>
                <th>Game</th>
                <th>Rating</th>
                <th>Free Games</th>
                <th>Real money</th>
                <th>Mobile</th>
                <th>Find out more</th>
            </tr>
            </thead>
			<?php if ( have_rows( 'top_game_table' ) ) : ?>
                <tbody>
				<?php while ( have_rows( 'top_game_table' ) ) : the_row(); ?>
                    <tr>
                        <td class="game-name">
							<?php the_sub_field( 'game_name' ); ?>
                        </td>

                        <td class="rating-col">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.03439 0.62615L5.83739 5.28026L0.921884 6.029C0.0403898 6.16257 -0.312881 7.29798 0.326371 7.94829L3.88263 11.5689L3.04151 16.6835C2.8901 17.608 3.82207 18.3005 4.60263 17.8682L9 15.4532L13.3974 17.8682C14.1779 18.297 15.1099 17.608 14.9585 16.6835L14.1174 11.5689L17.6736 7.94829C18.3129 7.29798 17.9596 6.16257 17.0781 6.029L12.1626 5.28026L9.96561 0.62615C9.57196 -0.203435 8.4314 -0.213981 8.03439 0.62615Z"
                                      fill="#FFE600"/>
                            </svg>
							<?php the_sub_field( 'rating_value' ); ?>/5
                        </td>
                        <td class="free-col">
							<?php $free_games = get_sub_field( 'free_games' ); ?>
							<?php if ( $free_games == "enable: Enable" ) {
								echo '<span>' . $enable_img . '</span>';
							} else {
								echo '<span>' . $disable_img . '</span>';
							} ?>
                        </td>
                        <td class="real-col">
							<?php $real_money = get_sub_field( 'real_money_col' ); ?>

							<?php if ( $real_money == "enable: Enable" ) {
								echo '<span>' . $enable_img . '</span>';
							} else {
								echo '<span>' . $disable_img . '</span>';
							} ?>

                        </td>
                        <td class="mobile-col">
							<?php ?>
							<?php $mobile_col = get_sub_field( 'mobile_col' ); ?>

							<?php if ( $mobile_col == "enable: Enable" ) {
								echo '<span>' . $enable_img . '</span>';
							} else {
								echo '<span>' . $disable_img . '</span>';
							} ?>
                        </td>
                        <td class="more-link-col">
							<?php $find_more = get_sub_field( 'find_more' ); ?>
							<?php if ( $find_more ) : ?>
                                <a class="find-more" href="<?php echo esc_url( $find_more['url'] ); ?>"
                                   target="<?php echo esc_attr( $find_more['target'] ); ?>"><?php echo esc_html( $find_more['title'] ); ?></a>
							<?php endif; ?>
                        </td>
                    </tr>
				<?php endwhile; ?>
                </tbody>
			<?php endif; ?>
        </table>
    </div>
</section>
