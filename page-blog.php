<?php get_header();?>

<div id="primary" class="content-area primary container">

  <div class="ast-archive-description">
    <h1 class="entry-title ast-archive-title" itemprop="headline">
    <img src="<?php bloginfo('template_url');?>/img/wp.and-bro-brog.png" alt="WordPress Tips" class="img-responsive">
    </h1>
    <p>WordPress の Tips やウェブサイト制作のノウハウをご紹介します</p>
  </div>
  <!-- カスタム投稿タイプを呼び出し -->
  <?php $args = [
    'post_type' => 'post', // カスタム投稿名が「gourmet」の場合
    'posts_per_page' => 9, // 表示する数
  ];
  $my_query = new WP_Query($args); ?>

  <div class="blog-wrap">
    <div class="home-NewsItems row">
      <?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>

      <article class="category-BlogItem col-sm-6 col-md-4">
        <a href="<?php the_permalink();?>" class="category-BlogItem_Link">
          <div class="category-BlogItem_Img">
            <?php the_post_thumbnail(); ?>
          </div>
          <h3 class="category-BlogItem_Title"><?php the_title(); ?></h3>
          <ul class="category-BlogItem_Meta">
            <li><time><?php the_time('Y/m/d');?></time></li>
          </ul>
        </a>
        <!-- /Entry -->
      </article>

      <?php endwhile; endif; ?>
    </div>
  </div>

</div>

<?php get_footer();?>