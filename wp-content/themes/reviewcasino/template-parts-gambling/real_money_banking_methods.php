<section class="dark-decor-section rate-banking-methods full-content">
    <h2 class="banking-title middle-title">
		<?php the_sub_field( 'rate_title' ); ?>
    </h2>

	<?php if ( have_rows( 'banking_method_group' ) ) : ?>
        <div class="banking-methods-list">
			<?php while ( have_rows( 'banking_method_group' ) ) : the_row(); ?>
                <div class="banking-methods-item">
                    <h3 class="banking-method-title">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34.0039 17C34.0039 26.3911 26.395 34 17.0039 34C7.61278 34 0.00390625 26.3911 0.00390625 17C0.00390625 7.60887 7.61278 0 17.0039 0C26.395 0 34.0039 7.60887 34.0039 17ZM18.1692 24.8077L27.4575 15.5194C28.1019 14.875 28.1019 13.8331 27.4575 13.1956L26.2922 12.0302C25.6479 11.3859 24.6059 11.3859 23.9684 12.0302L17.0039 18.9948L10.0394 12.0302C9.39503 11.3859 8.3531 11.3859 7.7156 12.0302L6.55028 13.1956C5.90592 13.8399 5.90592 14.8819 6.55028 15.5194L15.8386 24.8077C16.4829 25.452 17.5249 25.452 18.1692 24.8077Z"
                                  fill="white"/>
                        </svg>

						<?php the_sub_field( 'banking_method_title' ); ?>
                    </h3>
                    <div class="banking-method-descr">
						<?php the_sub_field( 'banking_method_descr' ); ?>
                    </div>
                    <div class="banking-method-gallery">
						<?php if ( have_rows( 'banking_method_gallery' ) ) : ?>
							<?php while ( have_rows( 'banking_method_gallery' ) ) : the_row(); ?>
								<?php $no_deposit_image = get_sub_field( 'no_deposit_image' ); ?>
								<?php if ( $no_deposit_image ) : ?>
                                    <img src="<?php echo esc_url( $no_deposit_image['url'] ); ?>"
                                         alt="<?php echo esc_attr( $no_deposit_image['alt'] ); ?>"/>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
                    </div>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
	<?php if ( have_rows( 'middle_banking_method_group' ) ) : ?>
        <div class="middle-banking-methods">
			<?php while ( have_rows( 'middle_banking_method_group' ) ) : the_row(); ?>
                <h3 class="banking-method-title">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.0039 17C34.0039 26.3911 26.395 34 17.0039 34C7.61278 34 0.00390625 26.3911 0.00390625 17C0.00390625 7.60887 7.61278 0 17.0039 0C26.395 0 34.0039 7.60887 34.0039 17ZM18.1692 24.8077L27.4575 15.5194C28.1019 14.875 28.1019 13.8331 27.4575 13.1956L26.2922 12.0302C25.6479 11.3859 24.6059 11.3859 23.9684 12.0302L17.0039 18.9948L10.0394 12.0302C9.39503 11.3859 8.3531 11.3859 7.7156 12.0302L6.55028 13.1956C5.90592 13.8399 5.90592 14.8819 6.55028 15.5194L15.8386 24.8077C16.4829 25.452 17.5249 25.452 18.1692 24.8077Z"
                              fill="white"/>
                    </svg>
					<?php the_sub_field( 'method_title' ); ?>
                </h3>
                <div class="banking-method-descr">
					<?php the_sub_field( 'method_descr' ); ?>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
	<?php if ( have_rows( 'bottom_banking_method_group' ) ) : ?>
        <div class="bottom-banking-methods">
			<?php while ( have_rows( 'bottom_banking_method_group' ) ) : the_row(); ?>
                <div class="left-block">
                    <h3 class="banking-method-title">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34.0039 17C34.0039 26.3911 26.395 34 17.0039 34C7.61278 34 0.00390625 26.3911 0.00390625 17C0.00390625 7.60887 7.61278 0 17.0039 0C26.395 0 34.0039 7.60887 34.0039 17ZM18.1692 24.8077L27.4575 15.5194C28.1019 14.875 28.1019 13.8331 27.4575 13.1956L26.2922 12.0302C25.6479 11.3859 24.6059 11.3859 23.9684 12.0302L17.0039 18.9948L10.0394 12.0302C9.39503 11.3859 8.3531 11.3859 7.7156 12.0302L6.55028 13.1956C5.90592 13.8399 5.90592 14.8819 6.55028 15.5194L15.8386 24.8077C16.4829 25.452 17.5249 25.452 18.1692 24.8077Z"
                                  fill="white"/>
                        </svg>
						<?php the_sub_field( 'bank_method_title' ); ?>
                    </h3>
                    <div class="banking-method-descr">
						<?php the_sub_field( 'bank_method_descr' ); ?>
                    </div>
					<?php $bank_rating_link = get_sub_field( 'bank_rating_link' ); ?>
					<?php if ( $bank_rating_link ) : ?>
                        <a class="banking-method-link violet-btn"
                           href="<?php echo esc_url( $bank_rating_link['url'] ); ?>"
                           target="<?php echo esc_attr( $bank_rating_link['target'] ); ?>"><?php echo esc_html( $bank_rating_link['title'] ); ?></a>
					<?php endif; ?>
                    <div class="bank-rating">
            <span>
                <?php the_sub_field( 'bank_rating_value' ); ?>
        </span>
                    </div>
                </div>

			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
