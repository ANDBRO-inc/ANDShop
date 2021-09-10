<?php get_header();?>

<main id="main" class="site-main container">

  <article class="post-17 page type-page status-publish ast-article-single" itemtype="https://schema.org/CreativeWork" itemscope="itemscope" id="post-17">

    <header class="entry-header ast-no-thumbnail ast-no-meta">
      <h1 class="entry-title" itemprop="headline">マイページ</h1>
    </header><!-- .entry-header -->

    <div class="entry-content clear">
      <div class="u-columns col2-set" id="customer_login">
        <?php if( is_user_logged_in() ) : ?>
        <div>
          <?php echo do_shortcode('[swpm_login_form]');?>
        </div>
        <?php else: ?>
        <!-- ログイン -->
        <div class="u-column1 col-1">
          <h2>ログイン</h2>
          <?php echo do_shortcode('[swpm_login_form]');?>
        </div>
        <!-- 登録 -->
        <div class="u-column2 col-2">
          <h2>登録</h2>
          <?php echo do_shortcode('[swpm_registration_form]');?>
        </div>
        <?php endif; ?>
      </div>
    </div>

  </article><!-- #post-## -->

</main>

<?php get_footer();?>