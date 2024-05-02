<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starter_Theme
 */

get_header();
?>
<?php
include get_template_directory() . '/template-parts/breadcrumb.php';
?>
	<section class="o-section c-section--post">
		<?php
		while (have_posts()):
		the_post();
		?>
		<div class="o-section c-section--title">
			<div class="o-section__wrapper">
				<div class="c-post">
					<div class="c-post__main">
						<?php
						if (get_post_type() == "product") {
							get_template_part('template-parts/content-product', get_post_type());
						} else {
							get_template_part('template-parts/content', get_post_type());
						}
						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()):
							comments_template();
						endif;
						?>
					</div>
					<?php
					if (get_post_type() != "product") {
						get_sidebar();
					}
					?>
				</div>
			</div>
			<?php
			endwhile; // End of the loop.
			?>
			<?php if (get_post_type() != "product") { ?>
				<div class="o-section c-section--blog">
					<div class="c-blog">
						<?php include get_template_directory() . '/template-parts/partials/home/blog-items.php'; ?>
					</div>
				</div>
			<?php }

			else{
				include get_template_directory() . '/template-parts/partials/installment/installment-product.php';
				include get_template_directory() . '/template-parts/partials/installment/installment-desc.php';
			}
			?>
	</section>
<?php
get_footer();
