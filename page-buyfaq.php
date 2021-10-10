<?php get_header(); ?>

<div class="single-wrapper shopfaq111">

  <h1 class="page-title ast-archive-title">商品の購入</h1>

  <main id="primary" class="site-main container">
    <!-- カスタム投稿タイプを呼び出し -->
    <?php $args = [
      'post_type' => 'shopfaq',
      'posts_per_page' => 99,
      'tax_query' => array(
        array(
          'taxonomy' => 'shopfaq-cat',
          'field' => 'slug',
          'terms' => array('shop-faq')
        ),
      ),
    ];
    $my_query = new WP_Query($args); ?>

    <div class="category-Cases row">

      <div class="tax-ManualCat row justify-content-center">
        <div class="col-lg-10">
          <ol class="category-NewsItems">
            <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <?php
                get_template_part('template-parts/content-shop-faq', get_post_type());
                ?>

            <?php endwhile;
            endif;
            wp_reset_postdata() ?>
          </ol>
        </div>
      </div>

    </div>

  </main><!-- #main -->

  <?php get_footer(); ?>

</div>