<?php
/* Template Name: Home Page */
get_header();
include get_template_directory() . '/template-parts/partials/home/main-slider.php';
include get_template_directory() . '/template-parts/partials/home/home-tabs.php';
include get_template_directory() . '/template-parts/partials/home/home-products.php';
include get_template_directory() . '/template-parts/partials/home/logo-items.php';
include get_template_directory() . '/template-parts/partials/home/home-video.php';
include get_template_directory() . '/template-parts/partials/home/blog-items.php';

get_footer();