<section class="customer-support dark-decor-section">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="customer-support-content">
		<?php the_sub_field( 'support_content' ); ?>
    </div>
    <h3 class="support-title small-title">
		<?php the_sub_field( 'support_title' ); ?>
    </h3>

	<?php
	$support_list_checked_values = get_sub_field( 'support_list' );
	//if ( $support_list_checked_values ) : ?>
    <div class="support-list">
		<?php
		$mail_img     = '<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.6211 4.62292C19.7734 4.5099 20 4.61562 20 4.79427V12.25C20 13.2161 19.1602 14 18.125 14H1.875C0.839844 14 0 13.2161 0 12.25V4.79792C0 4.61563 0.222656 4.51354 0.378906 4.62656C1.25391 5.26094 2.41406 6.06667 6.39844 8.76823C7.22266 9.32969 8.61328 10.5109 10 10.5036C11.3945 10.5146 12.8125 9.30781 13.6055 8.76823C17.5898 6.06667 18.7461 5.25729 19.6211 4.62292ZM10 9.33333C10.9063 9.34792 12.2109 8.26875 12.8672 7.82396C18.0508 4.31302 18.4453 4.00677 19.6406 3.13177C19.8672 2.96771 20 2.7125 20 2.44271V1.75C20 0.783854 19.1602 0 18.125 0H1.875C0.839844 0 0 0.783854 0 1.75V2.44271C0 2.7125 0.132812 2.96406 0.359375 3.13177C1.55469 4.00312 1.94922 4.31302 7.13281 7.82396C7.78906 8.26875 9.09375 9.34792 10 9.33333Z" fill="#6667AB"/>
<path d="M19.6211 4.62292C19.7734 4.5099 20 4.61562 20 4.79427V12.25C20 13.2161 19.1602 14 18.125 14H1.875C0.839844 14 0 13.2161 0 12.25V4.79792C0 4.61563 0.222656 4.51354 0.378906 4.62656C1.25391 5.26094 2.41406 6.06667 6.39844 8.76823C7.22266 9.32969 8.61328 10.5109 10 10.5036C11.3945 10.5146 12.8125 9.30781 13.6055 8.76823C17.5898 6.06667 18.7461 5.25729 19.6211 4.62292ZM10 9.33333C10.9063 9.34792 12.2109 8.26875 12.8672 7.82396C18.0508 4.31302 18.4453 4.00677 19.6406 3.13177C19.8672 2.96771 20 2.7125 20 2.44271V1.75C20 0.783854 19.1602 0 18.125 0H1.875C0.839844 0 0 0.783854 0 1.75V2.44271C0 2.7125 0.132812 2.96406 0.359375 3.13177C1.55469 4.00312 1.94922 4.31302 7.13281 7.82396C7.78906 8.26875 9.09375 9.34792 10 9.33333Z" fill="url(#paint0_linear_644_5568)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_644_5568" x1="10" y1="2.13245" x2="10" y2="12.6093" gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>
';
		$chat_img     = '<svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.4444 5.35714C14.4444 2.39732 11.2118 0 7.22222 0C3.23264 0 0 2.39732 0 5.35714C0 6.50558 0.489583 7.56362 1.31944 8.4375C0.854167 9.44866 0.0868056 10.2522 0.0763889 10.2623C0 10.3393 -0.0208333 10.4531 0.0243056 10.5536C0.0694444 10.654 0.166667 10.7143 0.277778 10.7143C1.54861 10.7143 2.60069 10.3025 3.35764 9.87723C4.47569 10.4029 5.79861 10.7143 7.22222 10.7143C11.2118 10.7143 14.4444 8.31696 14.4444 5.35714ZM18.6806 12.7232C19.5104 11.8527 20 10.7913 20 9.64286C20 7.4029 18.1424 5.48437 15.5104 4.68415C15.5417 4.90513 15.5556 5.12946 15.5556 5.35714C15.5556 8.9029 11.816 11.7857 7.22222 11.7857C6.84722 11.7857 6.48264 11.7589 6.12153 11.7221C7.21528 13.6473 9.78472 15 12.7778 15C14.2014 15 15.5243 14.692 16.6424 14.1629C17.3993 14.5882 18.4514 15 19.7222 15C19.8333 15 19.934 14.9364 19.9757 14.8393C20.0208 14.7422 20 14.6283 19.9236 14.548C19.9132 14.5379 19.1458 13.7377 18.6806 12.7232Z" fill="#6667AB"/>
<path d="M14.4444 5.35714C14.4444 2.39732 11.2118 0 7.22222 0C3.23264 0 0 2.39732 0 5.35714C0 6.50558 0.489583 7.56362 1.31944 8.4375C0.854167 9.44866 0.0868056 10.2522 0.0763889 10.2623C0 10.3393 -0.0208333 10.4531 0.0243056 10.5536C0.0694444 10.654 0.166667 10.7143 0.277778 10.7143C1.54861 10.7143 2.60069 10.3025 3.35764 9.87723C4.47569 10.4029 5.79861 10.7143 7.22222 10.7143C11.2118 10.7143 14.4444 8.31696 14.4444 5.35714ZM18.6806 12.7232C19.5104 11.8527 20 10.7913 20 9.64286C20 7.4029 18.1424 5.48437 15.5104 4.68415C15.5417 4.90513 15.5556 5.12946 15.5556 5.35714C15.5556 8.9029 11.816 11.7857 7.22222 11.7857C6.84722 11.7857 6.48264 11.7589 6.12153 11.7221C7.21528 13.6473 9.78472 15 12.7778 15C14.2014 15 15.5243 14.692 16.6424 14.1629C17.3993 14.5882 18.4514 15 19.7222 15C19.8333 15 19.934 14.9364 19.9757 14.8393C20.0208 14.7422 20 14.6283 19.9236 14.548C19.9132 14.5379 19.1458 13.7377 18.6806 12.7232Z" fill="url(#paint0_linear_644_5564)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_644_5564" x1="10" y1="2.28477" x2="10" y2="13.5099" gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>
';
		$phone_img    = '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5437 11.3062L12.0436 9.80614C11.8941 9.74242 11.728 9.72899 11.5701 9.76788C11.4123 9.80677 11.2714 9.89587 11.1686 10.0218L9.6186 11.9156C7.18598 10.7686 5.22828 8.81089 4.08132 6.37827L5.9751 4.82824C6.10125 4.72564 6.19054 4.58473 6.22945 4.42684C6.26836 4.26896 6.25477 4.10269 6.19073 3.95322L4.69071 0.453162C4.62043 0.292037 4.49613 0.160484 4.33925 0.0811864C4.18236 0.00188915 4.00273 -0.0201818 3.83132 0.0187795L0.58126 0.768793C0.415998 0.806955 0.26855 0.900007 0.162983 1.03276C0.0574151 1.16552 -3.80697e-05 1.33013 1.8926e-08 1.49974C1.8926e-08 9.51551 6.49699 16 14.5003 16C14.6699 16.0001 14.8346 15.9427 14.9674 15.8371C15.1002 15.7315 15.1933 15.5841 15.2315 15.4187L15.9815 12.1687C16.0202 11.9964 15.9977 11.8161 15.9178 11.6587C15.8379 11.5012 15.7056 11.3766 15.5437 11.3062Z" fill="#6667AB"/>
<path d="M15.5437 11.3062L12.0436 9.80614C11.8941 9.74242 11.728 9.72899 11.5701 9.76788C11.4123 9.80677 11.2714 9.89587 11.1686 10.0218L9.6186 11.9156C7.18598 10.7686 5.22828 8.81089 4.08132 6.37827L5.9751 4.82824C6.10125 4.72564 6.19054 4.58473 6.22945 4.42684C6.26836 4.26896 6.25477 4.10269 6.19073 3.95322L4.69071 0.453162C4.62043 0.292037 4.49613 0.160484 4.33925 0.0811864C4.18236 0.00188915 4.00273 -0.0201818 3.83132 0.0187795L0.58126 0.768793C0.415998 0.806955 0.26855 0.900007 0.162983 1.03276C0.0574151 1.16552 -3.80697e-05 1.33013 1.8926e-08 1.49974C1.8926e-08 9.51551 6.49699 16 14.5003 16C14.6699 16.0001 14.8346 15.9427 14.9674 15.8371C15.1002 15.7315 15.1933 15.5841 15.2315 15.4187L15.9815 12.1687C16.0202 11.9964 15.9977 11.8161 15.9178 11.6587C15.8379 11.5012 15.7056 11.3766 15.5437 11.3062Z" fill="url(#paint0_linear_644_5575)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_644_5575" x1="8" y1="2.43709" x2="8" y2="14.4106" gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>
';
		$feedback_img = '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8 0C3.58125 0 0 3.325 0 7.42857C0 9.2 0.66875 10.8214 1.78125 12.0964C1.39062 13.8964 0.084375 15.5 0.06875 15.5179C0 15.6 -0.01875 15.7214 0.021875 15.8286C0.0625 15.9357 0.15 16 0.25 16C2.32188 16 3.875 14.8643 4.64375 14.1643C5.66563 14.6036 6.8 14.8571 8 14.8571C12.4187 14.8571 16 11.5321 16 7.42857C16 3.325 12.4187 0 8 0ZM4 8.57143C3.44687 8.57143 3 8.06071 3 7.42857C3 6.79643 3.44687 6.28571 4 6.28571C4.55313 6.28571 5 6.79643 5 7.42857C5 8.06071 4.55313 8.57143 4 8.57143ZM8 8.57143C7.44687 8.57143 7 8.06071 7 7.42857C7 6.79643 7.44687 6.28571 8 6.28571C8.55313 6.28571 9 6.79643 9 7.42857C9 8.06071 8.55313 8.57143 8 8.57143ZM12 8.57143C11.4469 8.57143 11 8.06071 11 7.42857C11 6.79643 11.4469 6.28571 12 6.28571C12.5531 6.28571 13 6.79643 13 7.42857C13 8.06071 12.5531 8.57143 12 8.57143Z" fill="#7257B6"/>
</svg>
';
		?>
		<?php
		// if ( $support_list_checked_values ) :

		if ( $support_list_checked_values && in_array( "email: Email", $support_list_checked_values ) ) {
			echo '    <div class="support-item" id="email">' . $mail_img . '&nbsp;<span>Email</span></div>';
		} else {
			echo '';
		}
		if ( $support_list_checked_values && in_array( "livechat: Chat", $support_list_checked_values ) ) {
			echo '<div class="support-item" id="live-chat">' . $chat_img . '&nbsp;<span>Live Chat</span></div>';
		} else {
			echo '';
		}
		if ( $support_list_checked_values && in_array( "phone: Phone", $support_list_checked_values ) ) {
			echo '<div class="support-item" id="phone">' . $phone_img . '&nbsp;<span>Phone</span></div>';
		} else {
			echo '';
		}
		if ( $support_list_checked_values && in_array( "feedback: feedback", $support_list_checked_values ) ) {
			echo '<div class="support-item" id="feedback">' . $feedback_img . '&nbsp;<span>feedback form</span></div>';
		} else {
			echo '';
		}
		//  endif;
		?>
    </div>
	<?php //endif; ?>
    <h3 class="languages-title small-title">            <?php the_sub_field( 'lang_title' ); ?>
    </h3>
    <div class="languages-list gallery">
		<?php $languages_images_images = get_sub_field( 'languages_images' ); ?>
		<?php if ( $languages_images_images ) : ?>
			<?php foreach ( $languages_images_images as $languages_images_image ): ?>
                <!--                <a href="--><?php //echo esc_url( $languages_images_image['url'] ); ?><!--">-->
                <img class="flag-image" src="<?php echo esc_url( $languages_images_image['sizes']['thumbnail'] ); ?>"
                     alt="<?php echo esc_attr( $languages_images_image['alt'] ); ?>"/>
                <!--                </a>-->
                <!--                <p>--><?php //echo esc_html( $languages_images_image['caption'] ); ?><!--</p>-->
			<?php endforeach; ?>
		<?php endif; ?>
    </div>
	<?php $support_image_after = get_sub_field( 'support_image_after' ); ?>
	<?php if ( $support_image_after ) : ?>
        <img class="custom-support-image-after" src="<?php echo esc_url( $support_image_after['url'] ); ?>"
             alt="<?php echo esc_attr( $support_image_after['alt'] ); ?>"/>
	<?php endif; ?>
</section>
