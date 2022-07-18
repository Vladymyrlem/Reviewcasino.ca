<section class="other-payments full-content">
	<?php if ( have_rows( 'other_methods_group' ) ) : ?>
		<?php while ( have_rows( 'other_methods_group' ) ) : the_row(); ?>
            <h2 class="middle-title">
				<?php the_sub_field( 'main_title' ); ?>
            </h2>
			<?php $other_methods = get_sub_field( 'other_methods' ); ?>
			<?php if ( $other_methods ) : ?>
                <div class="other-methods-list">
					<?php foreach ( $other_methods as $post ) : ?>
						<?php setup_postdata( $post ); ?>
                        <div class="other-payment-item">
							<?php reviewcasino_post_thumbnail(); ?>
                            <a class="other-payment-link" href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
                                <svg width="11" height="16" viewBox="0 0 11 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.74365 8.64502L3.10303 15.2856C2.64404 15.7446 1.90186 15.7446 1.44775 15.2856L0.344238 14.1821C-0.114746 13.7231 -0.114746 12.981 0.344238 12.5269L5.05127 7.81982L0.344238 3.11279C-0.114746 2.65381 -0.114746 1.91162 0.344238 1.45752L1.44287 0.344238C1.90186 -0.114746 2.64404 -0.114746 3.09814 0.344238L9.73877 6.98486C10.2026 7.44385 10.2026 8.18604 9.74365 8.64502Z"
                                          fill="#6667AB"/>
                                    <path d="M9.74365 8.64502L3.10303 15.2856C2.64404 15.7446 1.90186 15.7446 1.44775 15.2856L0.344238 14.1821C-0.114746 13.7231 -0.114746 12.981 0.344238 12.5269L5.05127 7.81982L0.344238 3.11279C-0.114746 2.65381 -0.114746 1.91162 0.344238 1.45752L1.44287 0.344238C1.90186 -0.114746 2.64404 -0.114746 3.09814 0.344238L9.73877 6.98486C10.2026 7.44385 10.2026 8.18604 9.74365 8.64502Z"
                                          fill="url(#paint0_linear_1628_16561)" fill-opacity="0.2"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_1628_16561" x1="5.04364" y1="2.38071"
                                                        x2="5.04364" y2="14.0772" gradientUnits="userSpaceOnUse">
                                            <stop offset="0.421875" stop-color="#A119E0"/>
                                            <stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                        </div>
					<?php endforeach; ?>
                </div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
