<section class="o-section c-section--blog-lists">

    <div class="o-section__wrapper">
        <div class="c-blog-lists">
            <ul>
                <?php
                // $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '8',
                    'paged' => $paged
                );
                $cat_query = new WP_Query($args);
                if ($cat_query->have_posts()):
                    while ($cat_query->have_posts()):
                        $cat_query->the_post();
                        ?>
                        <li>
                            <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
                                <div class="c-blog-lists__img">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
									<div class="overlayer">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/log-new-1.png">
										<span>
                                            مشاهده بیشتر
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
												 xmlns="http://www.w3.org/2000/svg">
                                                <path
													d="M6.40169 11.4582L1.77539 6.49983M1.77539 6.49983L6.40169 1.5415M1.77539 6.49983H12.8785"
													stroke="white" stroke-width="1.7" stroke-linecap="round"
													stroke-linejoin="round" />
                                            </svg>
                                        </span>
									</div>
                                </div>
                                <div class="c-blog-lists__info">

                                    <h2>
                                        <?php echo get_the_title(); ?>
                                    </h2>

                                    <p>
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
									<div class="c-blog-lists__info__detail">
                                        <span>
                                            <svg width="15" height="15" viewBox="0 0 20 20" fill="none"
												 xmlns="http://www.w3.org/2000/svg">
                                                <path
													d="M15.8333 3.33334H4.16667C3.24619 3.33334 2.5 4.07954 2.5 5.00001V16.6667C2.5 17.5872 3.24619 18.3333 4.16667 18.3333H15.8333C16.7538 18.3333 17.5 17.5872 17.5 16.6667V5.00001C17.5 4.07954 16.7538 3.33334 15.8333 3.33334Z"
													stroke="#424242" stroke-opacity="0.8" stroke-width="2"
													stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.3333 1.66666V4.99999" stroke="#424242" stroke-opacity="0.8"
													  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.66666 1.66666V4.99999" stroke="#424242" stroke-opacity="0.8"
													  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.5 8.33334H17.5" stroke="#424242" stroke-opacity="0.8"
													  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <?php the_date(); ?>
                                        </span>
										<span class="persian-number">
                                            <svg width="15" height="15" viewBox="0 0 20 20" fill="none"
												 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
													  d="M9.98004 0C15.4919 0 19.9601 4.46821 19.9601 9.98004C19.9601 15.4919 15.4919 19.9601 9.98004 19.9601C4.46821 19.9601 0 15.4919 0 9.98004C0 4.46821 4.46821 0 9.98004 0ZM9.98004 1.99601C5.57058 1.99601 1.99601 5.57058 1.99601 9.98004C1.99601 14.3895 5.57058 17.9641 9.98004 17.9641C14.3895 17.9641 17.9641 14.3895 17.9641 9.98004C17.9641 5.57058 14.3895 1.99601 9.98004 1.99601ZM9.98004 3.99202C10.4919 3.99202 10.9137 4.37728 10.9713 4.87363L10.978 4.99001V9.56666L12.6817 11.2703C13.0715 11.6601 13.0715 12.292 12.6817 12.6817C12.322 13.0415 11.7559 13.0692 11.3644 12.7648L11.2703 12.6817L9.27435 10.6857C9.11836 10.5298 9.01935 10.3275 8.9907 10.1112L8.98205 9.98004V4.99001C8.98205 4.43884 9.42887 3.99202 9.98004 3.99202Z"
													  fill="#424242" fill-opacity="0.7" />
                                            </svg>
                                            زمان مطالعه:

                                            <?php echo reading_time() ?>
                                        </span>
									</div>
                                </div>
                            </a>
                        </li>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();

                $big = 999999999; // need an unlikely integer   ?>
            </ul>
            <div class="paginaton">
                <?php echo paginate_links(
                    array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $cat_query->max_num_pages,
                        'prev_text' => __('« قبلی'),
                        'next_text' => __('بعدی »'),
                    )
                );
                ?>
            </div>
        </div>
    </div>

</section>
