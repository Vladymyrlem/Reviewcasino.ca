<section class="text-content questions-content" itemscope="" itemtype="https://schema.org/FAQPage">
    <div class="container">
        <h2 class="questions-title" id="questions-title"
            itemprop="headline">            <?php the_sub_field( 'faq_title' ); ?>
        </h2>
        <div class="faqs-descr">
			<?php the_sub_field( 'faq_caption' ); ?>
        </div>
        <div class="questions-list">

			<?php $questions = get_sub_field( 'questions' ); ?>
			<?php if ( $questions ) : ?>
				<?php foreach ( $questions as $post ) : ?>
					<?php setup_postdata( $post ); ?>
                    <div class="question" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="question-name">
                            <h4 class="question-name-value" itemprop="name">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <span>
                            <button class="open-faq" type="button">
<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683418 0.292893 0.292893C0.653377 -0.0675906 1.22061 -0.0953205 1.6129 0.209704L1.70711 0.292893L11 9.585L20.2929 0.292893C20.6534 -0.0675906 21.2206 -0.0953205 21.6129 0.209704L21.7071 0.292893C22.0676 0.653377 22.0953 1.22061 21.7903 1.6129L21.7071 1.70711L11.7071 11.7071C11.3466 12.0676 10.7794 12.0953 10.3871 11.7903L10.2929 11.7071L0.292893 1.70711Z"
      fill="white"/>
</svg>
</button>
                            </span>
                        </div>
                        <div class="answer-block" itemscope itemprop="acceptedAnswer"
                             itemtype="https://schema.org/Answer">
                            <div class="answer-text" itemprop="text">
								<?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </div>
		<?php $all_questions = get_sub_field( 'all_questions' ); ?>
		<?php if ( $all_questions ) : ?>
            <a class="red-btn" href="<?php echo esc_url( $all_questions['url'] ); ?>"
               target="<?php echo esc_attr( $all_questions['target'] ); ?>"><?php echo esc_html( $all_questions['title'] ); ?></a>
		<?php endif; ?>
    </div>
</section>
