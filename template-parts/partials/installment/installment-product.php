<section class="o-section c-section--installment-product">
	<div class="o-section__wrapper">
		<div class="c-installment-product">
			<h2>
				محصولات شرکت آرین دیزل
			</h2>
			<div class="c-installment-product__carousel"
				 data-flickity='{"contain": true, "cellAlign": "right","autoPlay": 2000,"pageDots":false}'>
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
						<div class="c-installment-product__carousel-cell">

							<img src="<?php echo get_post_meta($post->ID, 'عکس محصول', true) ?>" alt="">
							<h3>
								<?php echo get_the_title() ?>
							</h3>
							<p>
								 برای اطلاع از شرایط فروش اقساطی
								<?php echo get_the_title() ?>
								با کارشناسان فروش تماس بگیرید.
							</p>
							<a class="hover-btn" href="<?php echo get_the_permalink(); ?>">
							مشخصات فنی
							</a>
						</div>

					<?php
					endwhile;
				endif;
				wp_reset_postdata();

				$big = 999999999; // need an unlikely integer  ?>
			</div>
		</div>
	</div>
</section>
