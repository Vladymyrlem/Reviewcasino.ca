<section class="dark-decor-section no-deposit-mobile full-content">
    <h2 class="middle-title">
		<?php the_sub_field( 'main_title' ); ?>
    </h2>
    <div class="no-deposit-mobile-descr">
		<?php the_sub_field( 'no_deposit_descr' ); ?>
    </div>
    <h3 class="no-deposit-subtitle">
		<?php the_sub_field( 'no_deposit_subtitle' ); ?>
    </h3>
    <div class="no-deposit-caption">
		<?php the_sub_field( 'no_deposit_caption' ); ?>
    </div>

	<?php if ( have_rows( 'different_list' ) ) : ?>
        <div class="different-types accordion-grid">
			<?php while ( have_rows( 'different_list' ) ) : the_row(); ?>
                <div class="dif-type-block accord-block light-block">
                    <div class="different-type-name accord-title">
                        <h4 class="dif-type-name accord-name">
							<?php the_sub_field( 'different_list_title' ); ?>
                        </h4>
                        <span>
                            <button class="open-block" type="button">

<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.7071 10.2929C22.0976 10.6834 22.0976 11.3166 21.7071 11.7071C21.3466 12.0676 20.7794 12.0953 20.3871 11.7903L20.2929 11.7071L11 2.415L1.70711 11.7071C1.34662 12.0676 0.779391 12.0953 0.3871 11.7903L0.292892 11.7071C-0.0675915 11.3466 -0.0953195 10.7794 0.209705 10.3871L0.292892 10.2929L10.2929 0.292893C10.6534 -0.0675907 11.2206 -0.0953203 11.6129 0.209705L11.7071 0.292893L21.7071 10.2929Z"
      fill="#6667AB"/>
<path d="M21.7071 10.2929C22.0976 10.6834 22.0976 11.3166 21.7071 11.7071C21.3466 12.0676 20.7794 12.0953 20.3871 11.7903L20.2929 11.7071L11 2.415L1.70711 11.7071C1.34662 12.0676 0.779391 12.0953 0.3871 11.7903L0.292892 11.7071C-0.0675915 11.3466 -0.0953195 10.7794 0.209705 10.3871L0.292892 10.2929L10.2929 0.292893C10.6534 -0.0675907 11.2206 -0.0953203 11.6129 0.209705L11.7071 0.292893L21.7071 10.2929Z"
      fill="url(#paint0_linear_3667_15156)" fill-opacity="0.2"/>
<defs>
<linearGradient id="paint0_linear_3667_15156" x1="18.649" y1="6" x2="2.18543" y2="6" gradientUnits="userSpaceOnUse">
<stop offset="0.421875" stop-color="#A119E0"/>
<stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/>
</linearGradient>
</defs>
</svg>
</button>
                            </span>
                    </div>
                    <div class="dif-type-descr hidden-block">
						<?php the_sub_field( 'different_list_descr' ); ?>
                    </div>
                </div>
			<?php endwhile; ?>
        </div>
	<?php endif; ?>
</section>
