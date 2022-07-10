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

    <main id="primary" class="site-main">
      <!-- カスタム投稿タイプを呼び出し -->
      <?php $args = [
				'post_type' => 'voice', // カスタム投稿名が「gourmet」の場合
				'posts_per_page' => 5, // 表示する数
			];
			$my_query = new WP_Query($args); ?>
      <?php
			while (have_posts()) :
				the_post();

				get_template_part('inc/content-voice', get_post_type());

				// the_content();

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'andshop') . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'andshop') . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
      <?php get_sidebar(); ?>
    </main><!-- #main -->

  </div>

  <?php get_footer();
	?>
</div>