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

<div class="single-wrapper faq-archive">
  <main id="primary" class="site-main container max-width container">
    <!-- カスタム投稿タイプを呼び出し -->
    <?php $args = [
      'post_type' => 'shopfaq', // カスタム投稿名が「gourmet」の場合
      'posts_per_page' => 5, // 表示する数
    ];
    $my_query = new WP_Query($args); ?>

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-9 unit-ManualBody">
          <?php
          while (have_posts()) :
            the_post();

            get_template_part('inc/content-faq', get_post_type());

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

          <p class="faq-GoBack">
            <a href="/buyfaq">商品の購入の質問一覧</a>
          </p>
        </div>
      </div>
    </div>


  </main><!-- #main -->

  <?php
  // get_sidebar();
  get_footer();

  ?>
</div>