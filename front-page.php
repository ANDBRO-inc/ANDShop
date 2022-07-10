<?php get_header(); ?>

<div class="ast-container container">

  <div class="home-Hero breakout">
    <div class="home-Hero_Desc">
      <p class="home-Hero_Lead">
        <span>ホームページ作りをもっと身近に・簡単に</span><br>
        <span>WordPress書籍執筆チームによる</span><br>
        <span>デザイン・機能両立のWordPressテーマ</span><br>
      </p>

      <div class="home-Hero_Text">
        <p>ANDShopは、ホームページ制作の経験が浅い方の“つまづきやすさ”を検証して生まれた“業種や目的に特化”したWordPressテーマです。</p>
        <p class="home-Hero_More"><a href="/idea">コンセプト</a></p>
      </div>
    </div>
    <!-- /Hero -->
  </div>

  <section class="home-News">
    <h2 class="sr-only">お知らせ</h2>

    <?php $args = [
      'post_type' => 'news',
      'posts_per_page' => 3, // 表示する数
    ];
    $my_query = new WP_Query($args); ?>

    <div class="blog-wrap">
      <ol class="home-NewsItems row">

        <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?> <li
          class="home-NewsItem col-lg-4">

          <a href="<?php the_permalink(); ?>" class="home-NewsItem_Link">
            <div class="home-NewsItem_Img"><?php the_post_thumbnail(); ?></div>
            <div class="home-NewsItem_Inner">
              <time class="home-NewsItem_Date"><?php the_time("Y/n/j/"); ?></time>
              <span class="home-NewsItem_Title"><?php the_title(); ?></span>
            </div>
          </a>
        </li>

        <?php endwhile;
        endif; ?>

      </ol>
    </div>

    <p class="home-News_More"><a href="/news">お知らせをもっと見る &gt;</a></p>
    <!-- /.home-News -->
  </section>

  <div class="home-Products">
    <section class="home-Featured">
      <h2 class="home-Featured_Title">WordPressテーマ</h2>

      <ul class="home-FeaturedItems row justify-content-start">
        <?php
        $args = array(
          'post_type' => 'product',
          'product_cat' => 'theme',
          'posts_per_page' => 3,
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC' // 昇順・降順

        );
        $featured_query = new WP_Query($args);
        if ($featured_query->have_posts()) :
          while ($featured_query->have_posts()) :
            $featured_query->the_post();
            $product = get_product($featured_query->post->ID);
        ?>
        <li class="home-FeaturedItem col-sm-6 col-md-4">
          <a href="<?php the_permalink(); ?>" class="home-FeaturedItem_Link">
            <?php echo get_the_post_thumbnail($post->ID, 'full'); ?><?php the_title(); ?><br><?php echo htmlspecialchars(number_format($product->regular_price)); ?>
          </a>
        </li>
        <?php
          endwhile;
        endif;
        wp_reset_query();
        ?>
      </ul>

      <!-- /Themes -->
    </section>

    <section class="home-Featured">
      <h2 class="home-Featured_Title">WordPressプラグイン</h2>

      <ul class="home-FeaturedItems row justify-content-start">
        <?php
        $args = array(
          'post_type' => 'product',
          'product_cat' => 'plugin',
          'posts_per_page' => 3,
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC' // 昇順・降順

        );
        $featured_query = new WP_Query($args);
        if ($featured_query->have_posts()) :
          while ($featured_query->have_posts()) :
            $featured_query->the_post();
            $product = get_product($featured_query->post->ID);
        ?>
        <li class="home-FeaturedItem col-sm-6 col-md-4">
          <a href="<?php the_permalink(); ?>" class="home-FeaturedItem_Link">
            <?php echo get_the_post_thumbnail($post->ID, 'full'); ?><?php the_title(); ?><br><?php echo htmlspecialchars(number_format($product->regular_price)); ?>
          </a>
        </li>
        <?php
          endwhile;
        endif;
        wp_reset_query();
        ?>
      </ul>
      <!-- /Themes -->
    </section>
    <!-- /Products -->
  </div>

  <section class="home-Cases breakout sec-content">
    <h2 class="home-Cases_Title">ご利用者の声</h2>
    <p class="home-Cases_Desc">ANDShopをご利用されているユーザーの皆さまに、<br>当ショップテーマを採用してよかった点や、コンテンツ作りのヒントなどをうかがいました。</p>

    <!-- カスタム投稿タイプを呼び出し -->
    <?php $args = [
      'post_type' => 'voice', // カスタム投稿名が「gourmet」の場合
      'posts_per_page' => 3, // 表示する数
    ];
    $my_query = new WP_Query($args); ?>
    <!-- カテゴリ -->

    <div class="blog-wrap">
      <div class="home-NewsItems row">
        <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <article class="home-CasesItem col-md-4">
          <a href="<?php the_permalink(); ?>" class="home-CasesItem_Link">
            <div class="home-CasesItem_Img">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="home-CasesItem_Inner">
              <ul class="home-CasesItem_Tags">
                <li class="home-CasesItem_Tag"><?php the_field('voice_cat'); ?>
                </li>
              </ul>
              <h3 class="home-CasesItem_Title"><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
            </div>
          </a>
          <!-- /Entry -->
        </article>

        <?php endwhile;
        endif; ?>
      </div>
    </div>


    <div class="unit-LinkBox">
      <a href="/cases" class="unit-LinkBox_Link">利用事例をもっと見る</a>
    </div>
    <!-- /TechBlog -->
  </section>

  <div class="home-Concept breakout sec-content">
    <section class="home-Intro">
      <h2 class="home-Intro_Title">ANDShopのテーマが選ばれる理由</h2>
      <div class="home-Intro_Body">
        <ol class="home-Intro_Point">
          <li>業種・用途<br>に特化</li>
          <li>初心者に<br>やさしい</li>
          <li>充実の<br>サポート体制</li>
        </ol>
        <p>世界中で利用されている<ruby>WordPress<rp>(</rp>
            <rt>ワードプレス</rt>
            <rp>)</rp>
          </ruby> では、機能もデザインもさまざまなテーマが何千、何万と存在するなかで、私たちの「<ruby>WordPress<rp>(</rp>
            <rt>ワードプレス</rt>
            <rp>)</rp>
          </ruby>テーマ by <ruby>ANDShop<rp>(</rp>
            <rt>アンドショップ</rt>
            <rp>)</rp>
          </ruby> は、業種や機能に特化した“初心者にやさしい”をコンセプトとしたテーマです。</p>
        <p>数多くのWordPress書籍を執筆した制作陣が日々のテーマ開発から得た、「WordPress でのホームページ作りをもっと身近に、もっと簡単に」という想いが込められています。
        </p>
        <p>当ショップのテーマ＆プラグインは、充実した導入マニュアルをご用意しているほか、1ヵ月無料の月額制サポートサービスでホームページが完成するまでをサポート。<br>また、WordPress
          でのホームページを作るための学習ツールやサポートサービスもご提供しています。</p>
        <p class="home-Intro_More">
          <a href="/idea" class="home-Intro_Link">コンセプト&amp;サポートを詳しく見る</a>
        </p>
      </div>
    </section>
    <!-- /Intro -->
  </div>
  <div class="home-Knowledge breakout sec-content">
    <ul class="home-Knowledge_Bnr">
      <li>
        <a href="/blog">
          <img src="<?php bloginfo('template_url'); ?>/img/wp.and-bro-brog.png" alt="中級者向け：WordPress Tips by andshop "
            class="img-responsive">
          WordPress の活用やサイト制作のノウハウ
        </a>
      </li>
    </ul>
  </div>

  <section class="home-TechBlog breakout sec-content">
    <h2 class="home-TechBlog_Title">ブログ</h2>
    <p class="home-TechBlog_Desc">ウェブサイト制作のノウハウをご紹介</p>


    <!-- カスタム投稿タイプを呼び出し -->
    <?php $args = [
      'post_type' => 'post', // カスタム投稿名が「gourmet」の場合
      'posts_per_page' => 3, // 表示する数
    ];
    $my_query = new WP_Query($args); ?>

    <div class="blog-wrap">
      <div class="home-NewsItems row">
        <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <article class="home-BlogItem col-lg-4">
          <a href="<?php the_permalink(); ?>" class="home-BlogItem_Link">
            <div class="home-BlogItem_Img">
              <?php the_post_thumbnail(); ?>
            </div>
            <h3 class="home-BlogItem_Title"><?php the_title(); ?></h3>
            <p class="home-BlogItem_Desc"><?php the_excerpt(); ?></p>
          </a>
          <!-- /Entry -->
        </article>

        <?php endwhile;
        endif; ?>
      </div>
    </div>

    <div class="unit-LinkBox">
      <a href="/blog" class="unit-LinkBox_Link">ブログをもっと見る</a>
    </div>


    <!-- /TechBlog -->
  </section>

</div>

<?php get_footer(); ?>