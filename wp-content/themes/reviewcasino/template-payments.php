<?php
/**
 * Template Name: Payment Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reviewcasino
 */

get_header();
?>
    <main id="primary" class="site-main">

        <div class="mycontainer ">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if ( function_exists( 'bcn_display' ) ) {
					bcn_display();
				} ?>
            </div>
        </div>


        <div class="mycontainer ">
            <div class="main-content">
				<?php
				get_sidebar(); ?>
                <section class="top-block left-content">
					<?php if ( have_rows( 'top_block' ) ) : ?>
						<?php while ( have_rows( 'top_block' ) ) : the_row(); ?>
                            <h1 class="main-title">
								<?php the_sub_field( 'main_title' ); ?></h1>
                            <div class="top-content dark-decor-block">
								<?php the_sub_field( 'top_description' ); ?>
                            </div>
						<?php endwhile; ?>
					<?php endif; ?>
                    <button class="open-filter red-btn">
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.4369 0H0.563154C0.0635131 0 -0.188604 0.62615 0.165419 0.991803L4.5 5.46945V10.4576C4.5 10.6472 4.58955 10.8248 4.73993 10.9336L6.61493 12.2887C6.98484 12.5562 7.5 12.2851 7.5 11.8128V5.46945L11.8347 0.991803C12.188 0.626876 11.9376 0 11.4369 0Z"
                                  fill="white"/>
                        </svg>
                        Filter Casinos
                    </button>
                </section>
                <section class="payments left-content">
					<?php
					$taxonomyName = "payments_cat"; // Set your custom taxonomy here.

					// Alternate method for retrieving a term ID. Source: http://codex.wordpress.org/Function_Reference/wp_get_post_terms#Examples
					$term_list = wp_get_post_terms( $post->ID, $taxonomyName, array( "fields" => "ids" ) );

					// Source: http://codex.wordpress.org/Function_Reference/get_term_children#A_Basic_Example

					$term_parent_ID = $term_list[0]; // Pulls the parent term ID from the call above.

					// Use the following get_terms in order to have them sort by name. Source: http://wordpress.stackexchange.com/a/17148
					$term_children = get_terms( $taxonomyName, array(
						'child_of' => $term_parent_ID,
						'orderby'  => 'term_group',
						'order'    => 'ASC',
					) );

					$j = 1;
					foreach ( $term_children

					as $term_child ) {

					$term_args = array(
						'post_type'      => 'payments',
						'tax_query'      => array(
							array(
								'taxonomy' => $taxonomyName,
								'field'    => 'slug',
								'terms'    => $term_child->slug, // Calling the single child term here.
							),
						),
						'post_status'    => 'publish',
						'posts_per_page' => - 1,
						'orderby'        => 'date',
						'order'          => 'ASC',
					); // END $term_args

					$term_query = null;
					$term_query = new WP_Query( $term_args );

					if ( $term_query->have_posts() ) { ?>

                    <div id="payments-cat-<?php echo $term_child->term_id; ?>" class="payments-cat-item">
						<?php
						echo '<a class="payments-cat-link" href="' . get_term_link( $term_child->term_id, $taxonomyName ) . '"><h2>' . $term_child->name . '</h2></a>'; // Placed the term name here so it won't display if it doesn't have any posts.
						if ( $term_child->term_id == 17 ):
							echo '<ul class="payments-cat-list">';
							while ( $term_query->have_posts() ) : $term_query->the_post(); ?>
                                <li>
                                    <div class="top-payment">
										<?php reviewcasino_post_thumbnail(); ?>

                                    </div>
                                    <div class="payment-content">
                                        <h3 class="payments-cat-title">
											<?php the_title(); ?>
                                        </h3>
                                        <div class="payments-cat-descr">
											<?php the_excerpt(); ?>
                                        </div>
                                        <a class="red-btn payments-post-link"
                                           href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                </li>
							<?php
							endwhile; // END while have_posts
							echo '</ul>';
						else:
							echo '<ul class="payments-cat-list">';
							while ( $term_query->have_posts() ) : $term_query->the_post(); ?>
                                <li>
                                    <div class="top-payment">
										<?php reviewcasino_post_thumbnail(); ?>

                                    </div>
                                    <div class="payment-content">
                                        <h3 class="payments-cat-title">
											<?php the_title(); ?>
                                        </h3>
                                        <div class="payments-cat-descr">
											<?php the_excerpt(); ?>
                                        </div>
                                        <a class="red-btn payments-post-link" href="<?php echo get_the_permalink(); ?>">Learn
                                            more</a>
                                    </div>
                                </li>
							<?php
							endwhile; // END while have_posts
							echo '</ul>';
						endif;

						echo '</div>';
						} // END if have_posts
						wp_reset_postdata();
						} // END foreach
						?>
                    </div>
                </section>
                <section class="bonus-content-section bonus-content dark-decor-section full-content">
					<?php if ( have_rows( 'text_content' ) ) : ?>
						<?php while ( have_rows( 'text_content' ) ) : the_row(); ?>
                            <h2 class="middle-title"><?php the_sub_field( 'main_title' ); ?></h2>
                            <div class="bonus-text-content">
								<?php the_sub_field( 'bonus_content' ); ?>
                            </div>
						<?php endwhile; ?>
					<?php endif; ?>
                </section>

                <section class="text-content questions-content full-content" itemscope=""
                         itemtype="https://schema.org/FAQPage">
					<?php if ( have_rows( 'faqs' ) ) : ?>
						<?php while ( have_rows( 'faqs' ) ) : the_row(); ?>
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
                                        <div class="question" itemscope itemprop="mainEntity"
                                             itemtype="https://schema.org/Question">
                                            <div class="question-name">
                                                <h3 class="question-name-value" itemprop="name">
													<?php the_title(); ?>
                                                </h3>
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
													<?php the_content(); ?>
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
						<?php endwhile; ?>
					<?php endif; ?>
                </section>
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
                                                        <linearGradient id="paint0_linear_1628_16561" x1="5.04364"
                                                                        y1="2.38071" x2="5.04364" y2="14.0772"
                                                                        gradientUnits="userSpaceOnUse">
                                                            <stop offset="0.421875" stop-color="#A119E0"/>
                                                            <stop offset="0.869792" stop-color="#A119E0"
                                                                  stop-opacity="0.92"/>
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
            </div>
        </div>
    </main><!-- #main -->

<?php
get_footer();
