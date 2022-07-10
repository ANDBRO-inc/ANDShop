<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package andshop
 */

get_header();
?>

<div class="single-wrapper">
  <div class="container">
    <main id="primary" class="site-main container">

      <?php
			while (have_posts()) :
				the_post();
				get_template_part('template-parts/content', get_post_type());

				// the_content();

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'andshop') . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'andshop') . '</span> <span class="nav-title">%title</span>',
					)
				);
			endwhile; // End of the loop.
			?>

      <?php get_sidebar(); ?>
    </main><!-- #main -->

  </div><!-- container -->

  <?php
	get_footer();

	?>
</div>