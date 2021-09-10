<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package andshop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-PS922CH');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <!-- css -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/shop-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
  <!-- font -->
  <script src="https://kit.fontawesome.com/bb358f18f2.js" crossorigin="anonymous" class="lazy-css" defer></script>

  <?php wp_head(); ?>
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script>
  $(document).ready(function() {
    var url = location.href
    // console.log(url)
    if (document.URL.match('pattern')) {
      console.log('パターン')
      $('.shop-pattern').show();
      $('.shop-defalt').hide();
      $('.shop-support').hide();
      $('.unit-ProductBtns').hide();
    } else if (document.URL.match('support')) {
      console.log('サポート')
      $('.shop-support').show();
      $('.shop-pattern').hide();
      $('.shop-defalt').hide();
      $('.unit-ProductBtns').hide();
    } else if (document.URL.match('add-on')) {
      console.log('アドワン')
      $('.shop-add-one').show();
      $('.shop-support').hide();
      $('.shop-pattern').hide();
      $('.shop-defalt').hide();
      $('.unit-ProductBtns').hide();
      $('.col-md-6').hide();
    } else {
      console.log('デフォルト')
      $('.shop-defalt').show();
      $('.shop-pattern').hide();
      $('.shop-support').hide();
    }
  });
  </script>

  <script>
  $(function() {
    $('.hamburger').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
        $('.globalMenuSp').addClass('active');
      } else {
        $('.globalMenuSp').removeClass('active');
      }
    });
  });
  </script>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS922CH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'andshop' ); ?></a>

    <header itemtype="https://schema.org/WPHeader" itemscope="itemscope" id="masthead" class="site-header ast-primary-submenu-animation-slide-down header-main-layout-1 ast-primary-menu-enabled ast-hide-custom-menu-mobile ast-menu-toggle-icon ast-mobile-header-inline" role="banner">

      <div class="main-header-bar-wrap">
        <div class="main-header-bar">
          <div class="">

            <div class="ast-flex main-header-container">

              <div class="top-header">
                <div class="site-branding left">
                  <div class="ast-site-identity" itemscope="itemscope" itemtype="https://schema.org/Organization">
                    <span class="site-logo-img"><?php the_custom_logo(); ?></span>
                  </div>
                </div>

                <?php global $current_user;
                  get_currentuserinfo();
                  'ユーザー名: ' . $current_user->user_login . "\n";
                  'メールアドレス: ' . $current_user->user_email . "\n";
                  'ユーザーレベル: ' . $current_user->user_level . "\n";
                  'ファーストネーム: ' . $current_user->user_firstname . "\n";
                  'ラストネーム: ' . $current_user->user_lastname . "\n";
                  '表示名: ' . $current_user->display_name . "\n";
                  'ユーザーID: ' . $current_user->ID . "\n";
              ?>

                <!-- pc -->
                <div class="right pc-right">
                  <ul id="primary-menu" class="main-header-menu ast-nav-menu ast-flex ast-justify-content-flex-end  submenu-with-border astra-menu-animation-slide-down " aria-expanded="false">
                    <li id="menu-item-797" class="nav-HeaderSub_Guide menu-item menu-item-type-post_type menu-item-object-page menu-item-797">

                      <i class="fas fa-question-circle"></i>
                      <a href="/guide">購入ガイド</a>
                    </li>

                    <li id="menu-item-798" class="nav-HeaderSub_Cart menu-item menu-item-type-post_type menu-item-object-page menu-item-798">

                      <i class="fas fa-shopping-cart"></i>
                      <a href="/cart/">ショッピングカート</a>
                    </li>

                    <?php if( is_user_logged_in() ) : ?>
                    <!-- ログイン中 -->
                    <li id="menu-item-800" class="nav-HeaderSub_Mypage menu-item menu-item-type-post_type menu-item-object-page menu-item-800">

                      <i class="fas fa-unlock"></i>
                      <a href="/my-account/">マイページ(<?php echo $current_user->user_login?>)</a>
                    </li>
                    <?php else: ?>
                    <li id="menu-item-800" class="nav-HeaderSub_Mypage menu-item menu-item-type-post_type menu-item-object-page menu-item-800">

                      <i class="fas fa-unlock"></i>
                      <a href="/my-account/">ログイン</a>
                    </li>
                    <?php endif; ?>
                </div>

                <!-- sp right -->
                <div class="sp-right" style="position: relative;">
                  <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>

                  <nav class="globalMenuSp">
                    <div id="header-nav-wrap" class="header-nav-wrap">
                      <?php wp_nav_menu( array(
                  'theme_location' => 'header-menu',
                  'container' => 'menu',
                  'container_class' => 'header-menu',
                  'container_id' => 'header-menu',
                  'fallback_cb' => 'header-menu',
                  'depth' => 2,

                  ) ); ?>
                    </div>
                  </nav>
                </div>

              </div>

              <!-- .site-branding -->
              <div class="ast-mobile-menu-buttons">
                <div class="ast-button-wrap">
                  <button type="button" class="menu-toggle main-header-menu-toggle ast-mobile-menu-buttons-minimal" aria-controls="primary-menu" aria-expanded="false" data-index="0">
                    <span class="screen-reader-text">メインメニュー</span>
                    <span class="menu-toggle-icon"></span>
                  </button>
                </div>
              </div>

              <div class="main-navigation">
                <!-- header-menu -->
                <div id="header-nav-wrap" class="header-nav-wrap">
                  <?php wp_nav_menu( array(
                  'theme_location' => 'header-menu',
                  'container' => 'menu',
                  'container_class' => 'header-menu',
                  'container_id' => 'header-menu',
                  'fallback_cb' => 'header-menu',
                  ) ); ?>
                </div>
              </div>

              <script>
              let elements = document.getElementsByClassName("sub-menu");
              Array.prototype.forEach.call(elements, function(element) {
                element.parentNode.classList.add("has-sub");
              });
              </script>

            </div><!-- Main Header Container -->
          </div><!-- ast-row -->
        </div> <!-- Main Header Bar -->
      </div> <!-- Main Header Bar Wrap -->

      <!-- top-bar -->

      <?php
						$cat_posts = get_posts(array(
						    'post_type' => 'news', // 投稿タイプ
						    'posts_per_page' => 5, // 表示件数
						    'orderby' => 'date', // 表示順の基準
						    'order' => 'DESC', // 昇順・降順
                'tax_query' => array(
                  array(
                      'taxonomy' => 'news_cat', //カスタムタクソノミー
                      'field' => 'slug',
                      'terms' => 'news', //タクソノミーターム
                    )
                  )
                ));
						global $post;
            // $thisCat = get_category($cat_posts);
            // echo $thisCat->count;
			    ?>

      <?php $count_custom = get_term_by('slug', 'news', 'news_cat');
$custom_posts = $count_custom->count;
// 記事数の確認
// echo '（'.$custom_posts.'）';
?>

      <!-- swiper -->

      <?php if ($cat_posts && $count_custom->count > 1):?>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php	 foreach($cat_posts as $post): setup_postdata($cat_posts);?>

          <div class="swiper-slide">
            <a href="<?php echo the_permalink(); ?>"><?php echo the_title() ?></a>
          </div>

          <?php endforeach; ?>
        </div>
      </div>

      <?php elseif($cat_posts && $count_custom->count = 1):?>
      <div class="swiper-container2">
        <div class="swiper-slide">

          <?php foreach($cat_posts as $post):?>
          <a href="<?php echo the_permalink(); ?>"><?php echo the_title() ?>
          </a>

          <?php endforeach;?>

        </div>
      </div>

      <?php else:?>
      <div style="display: noen;"></div>

      <?php endif;?>
      <?php wp_reset_postdata(); ?>


  </div>
  <!-- swiper finish -->
  <!-- topbar finish -->

  </header>

<?php get_template_part( 'inc/bread' ); ?>

<p>マスター</p>
<p>マージ</p>