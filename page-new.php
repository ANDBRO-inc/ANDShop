<?php get_header(); ?>

<div class="single-wrapper container">
  <main id="primary" class="site-main container">

    <h1 class="entry-title" itemprop="headline">お知らせ</h1>

    <!-- カスタム投稿タイプを呼び出し -->
    <?php $args = [
    'post_type' => 'news',
    'posts_per_page' => 99,
  ];
  $my_query = new WP_Query($args); ?>

    <div class="row justify-content-center" style="margin-bottom: 60px;">
      <div class="col-lg-10">
        <ol class="category-NewsItems">
          <?php
				if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();


			get_template_part( 'template-parts/content-news', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'andshop' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'andshop' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

		endwhile; endif; // End of the loop.
		?>
        </ol>
      </div>
    </div>

    <!-- navi -->
    <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $the_query)); ?>
    <?php wp_reset_query(); ?>
</div>
<?php get_template_part( 'template-parts/infinite-scroll' ); ?>
<!-- navi -->

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

?>
</div>