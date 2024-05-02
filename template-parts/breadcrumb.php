<section class="o-section c-section--breadcrumb">
	<div class="o-section__wrapper">
		<div class="bread-crumb">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			}
			?>
		</div>
	</div>
</section>
