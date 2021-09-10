<?php get_header();?>

<div id="primary" class="content-area primary">

  <section class="ast-archive-description">
    <h1 class="page-title ast-archive-title">ご利用事例</h1>
    <p>「WordPress テーマ by Communitycom」をご利用されているユーザーの皆さまに、当ショップテーマを採用してよかった点や、コンテンツ作りのヒントなどをうかがいました。</p>
  </section>

  <!-- カスタム投稿タイプを呼び出し -->
  <?php $args = [
    'post_type' => 'voice',
    'posts_per_page' => 5,
  ];
  $my_query = new WP_Query($args); ?>

  <div class="blog-wrap container">
    <div class="home-NewsItems row">
      <?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>

      <article class="category-CasesItem col-sm-6 col-lg-4">
        <a href="<?php the_permalink(); ?>" class="category-CasesItem_Link">
          <div class="home-CasesItem_Img">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="home-CasesItem_Inner">
            <ul class="home-CasesItem_Tags">
              <li class="home-CasesItem_Tag"><?php the_field('voice_cat'); ?></li>
            </ul>
            <h3 class="home-CasesItem_Title"><?php the_field('voice_title'); ?></h3>
            <p><?php the_field('voice_text'); ?></p>
          </div>
        </a>
        <!-- /Entry -->
      </article>

      <?php endwhile; endif; ?>
    </div>
  </div>

  <div class="ast-pagination"></div>
</div>

<?php get_footer();?>