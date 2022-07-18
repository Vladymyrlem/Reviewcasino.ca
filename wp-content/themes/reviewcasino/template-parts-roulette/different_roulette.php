<section class="different-roulette-section dark-decor-section full-content">
	<?php if ( have_rows( 'head_gambling_tips' ) ) : ?>
		<?php while ( have_rows( 'head_gambling_tips' ) ) : the_row(); ?>
            <div class="different-roulette-head-content">

                <h2 class="middle-title">
					<?php the_sub_field( 'tips_title' ); ?>
                </h2>
                <div class="different-roulette-content">

					<?php the_sub_field( 'tips_head_content' ); ?>
                </div>
            </div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if ( have_rows( 'online_slots_content' ) ) : ?>
		<?php while ( have_rows( 'online_slots_content' ) ) : the_row(); ?>
            <div class="different-roulette-content-item">
                <h3 class="different-roulette-subtitle">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.0039 17C34.0039 26.3911 26.395 34 17.0039 34C7.61278 34 0.00390625 26.3911 0.00390625 17C0.00390625 7.60887 7.61278 0 17.0039 0C26.395 0 34.0039 7.60887 34.0039 17ZM18.1692 24.8077L27.4575 15.5194C28.1019 14.875 28.1019 13.8331 27.4575 13.1956L26.2922 12.0302C25.6479 11.3859 24.6059 11.3859 23.9684 12.0302L17.0039 18.9948L10.0394 12.0302C9.39503 11.3859 8.3531 11.3859 7.7156 12.0302L6.55028 13.1956C5.90592 13.8399 5.90592 14.8819 6.55028 15.5194L15.8386 24.8077C16.4829 25.452 17.5249 25.452 18.1692 24.8077Z"
                              fill="white"/>
                    </svg>
					<?php the_sub_field( 'slots_tips_title' ); ?>
                </h3>
                <div class="different-roulette-content">
					<?php the_sub_field( 'slots_tips_content' ); ?>
                </div>
            </div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
