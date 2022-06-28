<section class="mobile-app-section dark-decor-section">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="top-block">
        <div class="content">
			<?php the_sub_field( 'content' ); ?>
        </div>
		<?php if ( have_rows( 'steps_guide' ) ) : ?>
            <ul class="steps-guide-list">
				<?php while ( have_rows( 'steps_guide' ) ) : the_row(); ?>
                    <li class="seps-guide-item">
						<?php the_sub_field( 'step_guid_item' ); ?>
                    </li>
				<?php endwhile; ?>
            </ul>
		<?php endif; ?>
		<?php $mobile_after = get_sub_field( 'mobile_after' ); ?>
		<?php if ( $mobile_after ) : ?>
            <img class="mobs-apps-after-image" src="<?php echo esc_url( $mobile_after['url'] ); ?>"
                 alt="<?php echo esc_attr( $mobile_after['alt'] ); ?>"/>
		<?php endif; ?>
    </div>
    <div class="devices-grid">
        <ul class="devices-list">

			<?php
			$windows_img                 = '<svg width="19" height="31" viewBox="0 0 19 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.15 0H2.85C1.27656 0 0 1.30176 0 2.90625V28.0938C0 29.6982 1.27656 31 2.85 31H16.15C17.7234 31 19 29.6982 19 28.0938V2.90625C19 1.30176 17.7234 0 16.15 0ZM9.5 29.0625C8.44906 29.0625 7.6 28.1967 7.6 27.125C7.6 26.0533 8.44906 25.1875 9.5 25.1875C10.5509 25.1875 11.4 26.0533 11.4 27.125C11.4 28.1967 10.5509 29.0625 9.5 29.0625ZM16.15 22.5234C16.15 22.923 15.8294 23.25 15.4375 23.25H3.5625C3.17062 23.25 2.85 22.923 2.85 22.5234V3.63281C2.85 3.2332 3.17062 2.90625 3.5625 2.90625H15.4375C15.8294 2.90625 16.15 3.2332 16.15 3.63281V22.5234Z" fill="#7058B4"/>
</svg>
';
			$android_img                 = '<svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
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
			$apple_img                   = '<svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.3662 11.5576C15.3564 9.76563 16.167 8.41309 17.8076 7.41699C16.8896 6.10352 15.5029 5.38086 13.6719 5.23926C11.9385 5.10254 10.0439 6.25 9.35059 6.25C8.61816 6.25 6.93848 5.28809 5.62012 5.28809C2.89551 5.33203 0 7.46094 0 11.792C0 13.0713 0.234375 14.3929 0.703125 15.7568C1.32812 17.5488 3.58398 21.9434 5.9375 21.8701C7.16797 21.8408 8.03711 20.9961 9.63867 20.9961C11.1914 20.9961 11.9971 21.8701 13.3691 21.8701C15.7422 21.8359 17.7832 17.8418 18.3789 16.0449C15.1953 14.5459 15.3662 11.6504 15.3662 11.5576ZM12.6025 3.54004C13.9355 1.95801 13.8135 0.517578 13.7744 0C12.5977 0.0683594 11.2354 0.800781 10.459 1.7041C9.60449 2.6709 9.10156 3.86719 9.20898 5.21484C10.4834 5.3125 11.6455 4.6582 12.6025 3.54004Z" fill="#6667AB"/>
<path d="M15.3662 11.5576C15.3564 9.76563 16.167 8.41309 17.8076 7.41699C16.8896 6.10352 15.5029 5.38086 13.6719 5.23926C11.9385 5.10254 10.0439 6.25 9.35059 6.25C8.61816 6.25 6.93848 5.28809 5.62012 5.28809C2.89551 5.33203 0 7.46094 0 11.792C0 13.0713 0.234375 14.3929 0.703125 15.7568C1.32812 17.5488 3.58398 21.9434 5.9375 21.8701C7.16797 21.8408 8.03711 20.9961 9.63867 20.9961C11.1914 20.9961 11.9971 21.8701 13.3691 21.8701C15.7422 21.8359 17.7832 17.8418 18.3789 16.0449C15.1953 14.5459 15.3662 11.6504 15.3662 11.5576ZM12.6025 3.54004C13.9355 1.95801 13.8135 0.517578 13.7744 0C12.5977 0.0683594 11.2354 0.800781 10.459 1.7041C9.60449 2.6709 9.10156 3.86719 9.20898 5.21484C10.4834 5.3125 11.6455 4.6582 12.6025 3.54004Z" fill="url(#paint0_linear_755_6950)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_755_6950" x1="9.18945" y1="3.33135" x2="9.18945" y2="19.6984" gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>
';
			$tablet_img                  = '<svg width="16" height="25" viewBox="0 0 16 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.2812 0H2.34375C1.0498 0 0 1.0498 0 2.34375V22.6562C0 23.9502 1.0498 25 2.34375 25H13.2812C14.5752 25 15.625 23.9502 15.625 22.6562V2.34375C15.625 1.0498 14.5752 0 13.2812 0ZM7.8125 23.4375C6.94824 23.4375 6.25 22.7393 6.25 21.875C6.25 21.0107 6.94824 20.3125 7.8125 20.3125C8.67676 20.3125 9.375 21.0107 9.375 21.875C9.375 22.7393 8.67676 23.4375 7.8125 23.4375Z" fill="#6667AB"/>
<path d="M13.2812 0H2.34375C1.0498 0 0 1.0498 0 2.34375V22.6562C0 23.9502 1.0498 25 2.34375 25H13.2812C14.5752 25 15.625 23.9502 15.625 22.6562V2.34375C15.625 1.0498 14.5752 0 13.2812 0ZM7.8125 23.4375C6.94824 23.4375 6.25 22.7393 6.25 21.875C6.25 21.0107 6.94824 20.3125 7.8125 20.3125C8.67676 20.3125 9.375 21.0107 9.375 21.875C9.375 22.7393 8.67676 23.4375 7.8125 23.4375Z" fill="url(#paint0_linear_318_27)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_318_27" x1="7.8125" y1="3.80795" x2="7.8125" y2="22.5166" gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>
';
			$pc_img                      = '<svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.375 16.25H14.9039C14.875 17.0238 14.3293 17.5 13.625 17.5H11.25C10.5199 17.5 9.96016 16.8176 9.96992 16.25H0.625C0.28125 16.25 0 16.5312 0 16.875V17.5C0 18.875 1.125 20 2.5 20H22.5C23.875 20 25 18.875 25 17.5V16.875C25 16.5312 24.7188 16.25 24.375 16.25ZM22.5 1.875C22.5 0.84375 21.6562 0 20.625 0H4.375C3.34375 0 2.5 0.84375 2.5 1.875V15H22.5V1.875ZM20 12.5H5V2.5H20V12.5Z" fill="#6667AB"/>
<path d="M24.375 16.25H14.9039C14.875 17.0238 14.3293 17.5 13.625 17.5H11.25C10.5199 17.5 9.96016 16.8176 9.96992 16.25H0.625C0.28125 16.25 0 16.5312 0 16.875V17.5C0 18.875 1.125 20 2.5 20H22.5C23.875 20 25 18.875 25 17.5V16.875C25 16.5312 24.7188 16.25 24.375 16.25ZM22.5 1.875C22.5 0.84375 21.6562 0 20.625 0H4.375C3.34375 0 2.5 0.84375 2.5 1.875V15H22.5V1.875ZM20 12.5H5V2.5H20V12.5Z" fill="url(#paint0_linear_755_6958)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_755_6958" x1="12.5" y1="3.04636" x2="12.5" y2="18.0132" gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>
';
			$devices_list_checked_values = get_sub_field( 'devices_list' ); ?>
            <!--		--><?php //foreach ( $devices_list_checked_values as $devices_list_value ): ?>
            <!--            --><?php
			//    echo $devices_list_value;
			//            ?>
            <!--		--><?php //endforeach; ?>
			<?php
			if ( $devices_list_checked_values && in_array( "Windows", $devices_list_checked_values ) ) {
				echo '<li class="devices-item" id="windows">' . $windows_img . '&nbsp;<span>Windows</span></li>';
			} else {
				echo '';
			}
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
			if ( $devices_list_checked_values && in_array( "Tablet", $devices_list_checked_values ) ) {
				echo '<li class="devices-item" id="tablet">' . $tablet_img . '&nbsp;<span>Tablet</span></li>';
			} else {
				echo '';
			}
			if ( $devices_list_checked_values && in_array( "Mac/PC", $devices_list_checked_values ) ) {
				echo '<li class="devices-item" id="pc">' . $pc_img . '&nbsp;<span>Mac/PC</span></li>';
			} else {
				echo '';
			}
			//endif; ?>
        </ul>
    </div>

</section>
