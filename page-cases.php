<?php get_header();?>

<style>
#primary {
  margin: 4em auto;
}
h1 {
  font-weight: 400;
}
</style>

<div class="single-wrapper">
  <main id="primary" class="site-main container">

    <h1 class="page-title ast-archive-title">ご利用者の声</h1>
    <p style="text-align: center;">ANDShopをご利用されているユーザーの皆さまに、当ショップテーマを採用してよかった点や、コンテンツ作りのヒントなどをうかがいました。</p>
    <!-- カスタム投稿タイプを呼び出し -->
    <?php $args = [
    'post_type' => 'voice',
    'posts_per_page' => 6, // 表示する数
  ];
  $my_query = new WP_Query($args); ?>

    <div class="category-Cases row">

      <?php
		if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();

			get_template_part( 'template-parts/content-voice', get_post_type() );

			// the_content();

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'andshop' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'andshop' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );


			//コメント If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; endif; // End of the loop.
		?>
    </div>

  </main><!-- #main -->

  <?php
// get_sidebar();
get_footer();

?>
</div>

