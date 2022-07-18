<section class="left-content bonuses-promotions dark-decor-section">
    <div class="top-promotions-block">
        <h2 class="middle-title"><?php the_sub_field( 'main_title' ); ?></h2>
        <div class="promotions-descr">
			<?php the_sub_field( 'promotions_descr' ); ?>
        </div>
    </div>
	<?php if ( have_rows( 'promotions_grid' ) ) : ?>
        <div class="promotions-list">
			<?php while ( have_rows( 'promotions_grid' ) ) : the_row(); ?>
                <div class="promotion-item">
                    <div class="left-promotions-part">
                        <h3 class="promotions-title">
							<?php the_sub_field( 'promotion_title' ); ?>
                        </h3>
                        <div class="promotions-subtitle">
							<?php the_sub_field( 'promotion_subtitle' ); ?>
                        </div>

						<?php if ( have_rows( 'promotions_list' ) ) : ?>
                        <ul class="bonus-decor-list">
							<?php while ( have_rows( 'promotions_list' ) ) : the_row(); ?>
                                <li class="promotion-list-item">
									<?php the_sub_field( 'promotion_value' ); ?>
                                </li>
							<?php endwhile; ?>
							<?php endif; ?>
                        </ul>
						<?php $promotions_link = get_sub_field( 'promotions_link' ); ?>
						<?php if ( $promotions_link ) : ?>
                            <a class="promotion-link" href="<?php echo esc_url( $promotions_link['url'] ); ?>"
                               target="<?php echo esc_attr( $promotions_link['target'] ); ?>"><?php echo esc_html( $promotions_link['title'] ); ?></a>
						<?php else: ?>
							<?php echo ''; ?>
						<?php endif; ?>
                    </div>
					<?php $promotion_image = get_sub_field( 'promotion_image' ); ?>
					<?php if ( $promotion_image ) : ?>
                        <img class="right-promotions-image" src="<?php echo esc_url( $promotion_image['url'] ); ?>"
                             alt="<?php echo esc_attr( $promotion_image['alt'] ); ?>"/>
					<?php endif; ?>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
	<?php if ( have_rows( 'game_specific_bonuses' ) ) : ?>
        <div class="promotion-item game-bonuses specific-bonuses">
			<?php while ( have_rows( 'game_specific_bonuses' ) ) : the_row(); ?>
                <div class="left-promotions-part">

                    <h3 class="promotions-title">
						<?php the_sub_field( 'specific_title' ); ?>
                    </h3>
                    <div class="promotions-subtitle">

						<?php the_sub_field( 'specific_subtitle' ); ?>
                    </div>
					<?php if ( have_rows( 'specific_list' ) ) : ?>
                        <ul class="bonus-decor-list">
							<?php while ( have_rows( 'specific_list' ) ) : the_row(); ?>
                                <li class="specific-list-item">
									<?php the_sub_field( 'specific_value' ); ?>
                                </li>
							<?php endwhile; ?>
                        </ul>
					<?php endif; ?>
					<?php $specific_link = get_sub_field( 'specific_link' ); ?>
					<?php if ( $specific_link ) : ?>
                        <a class="promotion-link" href="<?php echo esc_url( $specific_link['url'] ); ?>"
                           target="_blank"><?php echo esc_html( $specific_link['title'] ); ?></a>
					<?php endif; ?>
                </div>

                <div class="specific-games games-type-list">
					<?php $specific_games = get_sub_field( 'specific_games' ); ?>
					<?php if ( $specific_games ) : ?>
						<?php foreach ( $specific_games as $term ) : ?>
							<?php
							$images_raw          = get_option( 'taxonomy_image_plugin' ); // получаем все изображения в виде массива
							$term_taxonomy_id    = $term->term_taxonomy_id; // узнаем ID категории
							$term_taxonomy_image = wp_get_attachment_image( $images_raw[ $term_taxonomy_id ], 'full' );    // получаем прикрепленное изображение
							?>
                            <a class="game-item" href="<?php echo esc_url( get_term_link( $term ) ); ?>">
								<?php
								echo '<div class="thumbnail">' . $term_taxonomy_image . '</div>';
								echo '<span class="term-name">' . esc_html( $term->name ) . '</span>'; ?></a>
						<?php endforeach; ?>
					<?php endif; ?>
                </div>

			<?php endwhile; ?>
        </div>
	<?php endif; ?>
	<?php if ( have_rows( 'devices_specific_bonuses' ) ) : ?>
        <div class="promotion-item device-bonuses specific-bonuses">
			<?php while ( have_rows( 'devices_specific_bonuses' ) ) : the_row(); ?>
                <div class="left-promotions-part">
                    <h3 class="promotions-title">
						<?php the_sub_field( 'specific_title' ); ?>
                    </h3>
                    <div class="promotions-subtitle">
						<?php the_sub_field( 'specific_subtitle' ); ?>
                    </div>
					<?php if ( have_rows( 'specific_list' ) ) : ?>
                        <ul class="bonus-decor-list">
							<?php while ( have_rows( 'specific_list' ) ) : the_row(); ?>
                                <li class="specific-list-item">
									<?php the_sub_field( 'specific_value' ); ?>
                                </li>
							<?php endwhile; ?>
                        </ul>
					<?php endif; ?>
					<?php $specific_link = get_sub_field( 'specific_link' ); ?>
					<?php if ( $specific_link ) : ?>
                        <a class="promotion-link" href="<?php echo esc_url( $specific_link['url'] ); ?>"
                           target="_blank"><?php echo esc_html( $specific_link['title'] ); ?></a>
					<?php endif; ?>
                    <ul class="devices-list">
						<?php
						$android_img = '<svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.8125 8.42631V14.0806C2.8125 14.8326 2.22168 15.4331 1.46973 15.4331C0.722656 15.4331 0 14.8277 0 14.0806V8.42631C0 7.689 0.722656 7.08353 1.46973 7.08353C2.20703 7.08353 2.8125 7.689 2.8125 8.42631ZM3.33984 16.0923C3.33984 16.8931 3.98438 17.5376 4.78516 17.5376H5.75684L5.77148 20.521C5.77148 22.3228 8.4668 22.3081 8.4668 20.521V17.5376H10.2832V20.521C10.2832 22.313 12.9932 22.3179 12.9932 20.521V17.5376H13.9795C14.7705 17.5376 15.415 16.8931 15.415 16.0923V7.33256H3.33984V16.0923V16.0923ZM15.4492 6.85892H3.28613C3.28613 4.76908 4.53613 2.95268 6.3916 2.00541L5.45898 0.281777C5.32227 0.0425192 5.66895 -0.108848 5.78613 0.0962301L6.7334 1.83451C8.4375 1.07768 10.3955 1.11674 12.0215 1.83451L12.9639 0.101113C13.0859 -0.108848 13.4277 0.0474019 13.291 0.28666L12.3584 2.00541C14.1992 2.95268 15.4492 4.76908 15.4492 6.85892V6.85892ZM7.11426 4.14896C7.11426 3.87064 6.88965 3.63627 6.60156 3.63627C6.32324 3.63627 6.10352 3.87064 6.10352 4.14896C6.10352 4.42728 6.32812 4.66166 6.60156 4.66166C6.88965 4.66166 7.11426 4.42728 7.11426 4.14896ZM12.6514 4.14896C12.6514 3.87064 12.4268 3.63627 12.1533 3.63627C11.8652 3.63627 11.6406 3.87064 11.6406 4.14896C11.6406 4.42728 11.8652 4.66166 12.1533 4.66166C12.4268 4.66166 12.6514 4.42728 12.6514 4.14896ZM17.2803 7.08353C16.543 7.08353 15.9375 7.67435 15.9375 8.42631V14.0806C15.9375 14.8326 16.543 15.4331 17.2803 15.4331C18.0322 15.4331 18.75 14.8277 18.75 14.0806V8.42631C18.75 7.67435 18.0273 7.08353 17.2803 7.08353Z" fill="#6667AB"/>
<path d="M2.8125 8.42631V14.0806C2.8125 14.8326 2.22168 15.4331 1.46973 15.4331C0.722656 15.4331 0 14.8277 0 14.0806V8.42631C0 7.689 0.722656 7.08353 1.46973 7.08353C2.20703 7.08353 2.8125 7.689 2.8125 8.42631ZM3.33984 16.0923C3.33984 16.8931 3.98438 17.5376 4.78516 17.5376H5.75684L5.77148 20.521C5.77148 22.3228 8.4668 22.3081 8.4668 20.521V17.5376H10.2832V20.521C10.2832 22.313 12.9932 22.3179 12.9932 20.521V17.5376H13.9795C14.7705 17.5376 15.415 16.8931 15.415 16.0923V7.33256H3.33984V16.0923V16.0923ZM15.4492 6.85892H3.28613C3.28613 4.76908 4.53613 2.95268 6.3916 2.00541L5.45898 0.281777C5.32227 0.0425192 5.66895 -0.108848 5.78613 0.0962301L6.7334 1.83451C8.4375 1.07768 10.3955 1.11674 12.0215 1.83451L12.9639 0.101113C13.0859 -0.108848 13.4277 0.0474019 13.291 0.28666L12.3584 2.00541C14.1992 2.95268 15.4492 4.76908 15.4492 6.85892V6.85892ZM7.11426 4.14896C7.11426 3.87064 6.88965 3.63627 6.60156 3.63627C6.32324 3.63627 6.10352 3.87064 6.10352 4.14896C6.10352 4.42728 6.32812 4.66166 6.60156 4.66166C6.88965 4.66166 7.11426 4.42728 7.11426 4.14896ZM12.6514 4.14896C12.6514 3.87064 12.4268 3.63627 12.1533 3.63627C11.8652 3.63627 11.6406 3.87064 11.6406 4.14896C11.6406 4.42728 11.8652 4.66166 12.1533 4.66166C12.4268 4.66166 12.6514 4.42728 12.6514 4.14896ZM17.2803 7.08353C16.543 7.08353 15.9375 7.67435 15.9375 8.42631V14.0806C15.9375 14.8326 16.543 15.4331 17.2803 15.4331C18.0322 15.4331 18.75 14.8277 18.75 14.0806V8.42631C18.75 7.67435 18.0273 7.08353 17.2803 7.08353Z" fill="url(#paint0_linear_318_25)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_318_25" x1="9.375" y1="3.33071" x2="9.375" y2="19.6947" gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>
';
						$apple_img   = '<svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.3662 11.5576C15.3564 9.76563 16.167 8.41309 17.8076 7.41699C16.8896 6.10352 15.5029 5.38086 13.6719 5.23926C11.9385 5.10254 10.0439 6.25 9.35059 6.25C8.61816 6.25 6.93848 5.28809 5.62012 5.28809C2.89551 5.33203 0 7.46094 0 11.792C0 13.0713 0.234375 14.3929 0.703125 15.7568C1.32812 17.5488 3.58398 21.9434 5.9375 21.8701C7.16797 21.8408 8.03711 20.9961 9.63867 20.9961C11.1914 20.9961 11.9971 21.8701 13.3691 21.8701C15.7422 21.8359 17.7832 17.8418 18.3789 16.0449C15.1953 14.5459 15.3662 11.6504 15.3662 11.5576ZM12.6025 3.54004C13.9355 1.95801 13.8135 0.517578 13.7744 0C12.5977 0.0683594 11.2354 0.800781 10.459 1.7041C9.60449 2.6709 9.10156 3.86719 9.20898 5.21484C10.4834 5.3125 11.6455 4.6582 12.6025 3.54004Z" fill="#6667AB"/>
<path d="M15.3662 11.5576C15.3564 9.76563 16.167 8.41309 17.8076 7.41699C16.8896 6.10352 15.5029 5.38086 13.6719 5.23926C11.9385 5.10254 10.0439 6.25 9.35059 6.25C8.61816 6.25 6.93848 5.28809 5.62012 5.28809C2.89551 5.33203 0 7.46094 0 11.792C0 13.0713 0.234375 14.3929 0.703125 15.7568C1.32812 17.5488 3.58398 21.9434 5.9375 21.8701C7.16797 21.8408 8.03711 20.9961 9.63867 20.9961C11.1914 20.9961 11.9971 21.8701 13.3691 21.8701C15.7422 21.8359 17.7832 17.8418 18.3789 16.0449C15.1953 14.5459 15.3662 11.6504 15.3662 11.5576ZM12.6025 3.54004C13.9355 1.95801 13.8135 0.517578 13.7744 0C12.5977 0.0683594 11.2354 0.800781 10.459 1.7041C9.60449 2.6709 9.10156 3.86719 9.20898 5.21484C10.4834 5.3125 11.6455 4.6582 12.6025 3.54004Z" fill="url(#paint0_linear_755_6950)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_755_6950" x1="9.18945" y1="3.33135" x2="9.18945" y2="19.6984" gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>
'; ?>
						<?php $devices_list_checked_values = get_sub_field( 'devices_list' ); ?>
						<?php
						if ( $devices_list_checked_values && in_array( "Android", $devices_list_checked_values ) ) {
							echo '<li class="devices-item" id="android">' . $android_img . '&nbsp;<span> Android</span></li>';
						} else {
							echo '';
						}
						if ( $devices_list_checked_values && in_array( "Apple", $devices_list_checked_values ) ) {
							echo '<li class="devices-item" id="apple">' . $apple_img . '&nbsp;<span>Apple</span></li>';
						} else {
							echo '';
						}
						//endif; ?>
                        <!--	            --><?php //if ( $devices_list_checked_values ) : ?>
                        <!--		            --><?php //foreach ( $devices_list_checked_values as $devices_list_value ): ?>
                        <!--			            --><?php //echo esc_html( $devices_list_value ); ?>
                        <!--		            --><?php //endforeach; ?>
                        <!--	            --><?php //endif; ?>
                    </ul>
                </div>
				<?php $specific_image = get_sub_field( 'specific_image' ); ?>
				<?php if ( $specific_image ) : ?>
                    <img class="right-promotions-image" src="<?php echo esc_url( $specific_image['url'] ); ?>"
                         alt="<?php echo esc_attr( $specific_image['alt'] ); ?>"/>
				<?php endif; ?>

			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
