<section class="dark-decor-section full-content different-types-section">
    <h2 class="middle-title">
		<?php the_sub_field( 'different_title' ); ?>
    </h2>
    <div class="dif-type-description">
		<?php the_sub_field( 'different_descr' ); ?>
    </div>
	<?php if ( have_rows( 'different_list' ) ) : ?>
        <div class="different-types accordion-grid">
			<?php while ( have_rows( 'different_list' ) ) : the_row(); ?>
                <div class="dif-type-block accord-block light-block">
                    <div class="different-type-name accord-title">
                            <span class="dif-type-name accord-name">
		<?php the_sub_field( 'different_list_title' ); ?>
                            </span>
                        <span>
                            <button class="open-block" type="button">

<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.653377 -0.0675907 1.22061 -0.0953207 1.6129 0.209704L1.70711 0.292893L11 9.585L20.2929 0.292893C20.6534 -0.0675907 21.2206 -0.0953207 21.6129 0.209704L21.7071 0.292893C22.0676 0.653378 22.0953 1.22061 21.7903 1.6129L21.7071 1.70711L11.7071 11.7071C11.3466 12.0676 10.7794 12.0953 10.3871 11.7903L10.2929 11.7071L0.292893 1.70711Z"
      fill="url(#paint0_linear_2335_9308)"/>
<defs>
<linearGradient id="paint0_linear_2335_9308" x1="0" y1="12" x2="22" y2="12" gradientUnits="userSpaceOnUse">
<stop offset="0.00169362" stop-color="#A300FF"/>
<stop offset="1" stop-color="#2C00FF"/>
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
