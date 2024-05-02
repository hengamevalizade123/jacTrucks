<section class="o-section c-section--products-list">
	<div class="o-section__wrapper">
		<div class="c-products-list">
<!--			<h1>محصولات آرین دیزل</h1>-->
			<div class="c-products-list__items">
				<ul>
					<?php $args = array(
						'post_type' => 'product',
						'posts_per_page' => '12',
						'paged' => $paged
					);
					$cat_query = new WP_Query($args);
					if ($cat_query->have_posts()):
						while ($cat_query->have_posts()):
							$cat_query->the_post();
							?>
							<li>
								<a href="<?php echo get_the_permalink(); ?>">
									<img src="<?php echo get_post_meta($post->ID, 'عکس محصول', true) ?>" alt="">
									<h2>
										<?php echo get_the_title() ?>
									</h2>
									<span>  اطلاعات بیشتر</span>
								</a>
							</li>

						<?php
						endwhile;
					endif;
					wp_reset_postdata();

					$big = 999999999; // need an unlikely integer  ?>
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
