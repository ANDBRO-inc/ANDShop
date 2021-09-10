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

<div class="single-wrapper shopfaq111">
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

      <?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>

      <div class="tax-ManualCat row justify-content-center">
        <div class="col-lg-10">
          <ol class="category-NewsItems">
            <?php
            get_template_part( 'template-parts/content-shop-faq', get_post_type() );
            ?>
          </ol>
        </div>
      </div>

      <?php endwhile; endif; wp_reset_postdata()?>

    </div>

  </main><!-- #main -->

  <?php get_footer(); ?>

</div>