<section class="pros-cons-section left-content">
    <div class="advantages-grid">
		<?php if ( have_rows( 'advantages_disadvantages' ) ) : ?>
			<?php while ( have_rows( 'advantages_disadvantages' ) ) :
				the_row(); ?>
                <!--                <h2 class="middle-title">-->
                <!--					--><?php //the_sub_field( 'main_title' );
				?>
                <!--                </h2>-->
                <div class="advantages-section">
                    <div class="advantages-block">
						<?php if ( have_rows( 'advantages' ) ) : ?>
                            <h2 class="advantages-title">Pros +</h2>
                            <ul class="advantages-list">
								<?php while ( have_rows( 'advantages' ) ) : the_row(); ?>
                                    <li class="advantages-item">
						<span class="advantages-value">
                        <?php the_sub_field( 'advantage' ); ?>
                </span>
                                    </li>
								<?php endwhile; ?>
                            </ul>
						<?php endif; ?>
                    </div>

                    <div class="disadvantages-block">
						<?php if ( have_rows( 'disadvantages' ) ) : ?>
                            <h2 class="disadvantages-title">Cons -</h2>
                            <ul class="disadvantages-list">
								<?php while ( have_rows( 'disadvantages' ) ) : the_row(); ?>
                                    <li class="disadvantages-item">
						<span class="advantages-value">
                        <?php the_sub_field( 'disadvantage' ); ?>
                    </span>
                                    </li>
								<?php endwhile; ?>
                            </ul>
						<?php endif; ?>
                    </div>
                </div>

			<?php endwhile; ?>
		<?php endif; ?>
    </div>
</section>
