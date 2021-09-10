<?php get_header();?>

<div class="container-fluid">
  <header class="entry-header">
    <h1 class="entry-title" itemprop="headline">お知らせ</h1>
  </header>

  <div class="blog-wrap">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <hr>
    <dl>
      <a href="<?php the_permalink(); ?>">
        <dt><?php the_time("Y/n/j/"); ?></dt>
        <dd>
          <?php the_title(); ?>
        </dd>
      </a>
    </dl>
    <?php endwhile; endif; ?>
    <hr>
  </div>

</div>

<?php get_footer();?>