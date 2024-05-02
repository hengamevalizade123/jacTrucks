<section class="o-section c-section--blog-items">
    <div class="o-section__wrapper">
        <div class="c-blog-items">
            <h2>
                اخـــــبـــــــار و مـــقــــــالات</h2>
            <div class="c-blog-items__carousel"
                data-flickity='{"contain": true, "cellAlign": "right","pageDots":false,"rightToLeft": true}'>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                );
                $cat_query = new WP_Query($args);
                if ($cat_query->have_posts()):
                    while ($cat_query->have_posts()):
                        $cat_query->the_post();
                        ?>
                        <div class="c-blog-items__carousel-cell">
                            <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"
                                class="c-blog-box__item">
                                <div class="c-blog-box__item-img">
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
                                <div class="c-blog-box__item-info">
                                    <span>
                                        <?php the_date(); ?>
                                    </span>
                                    <h3>
                                        <?php echo get_the_title(); ?>
                                    </h3>
                                    <p>
                                        <?php echo the_excerpt(); ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
