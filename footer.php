<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package andshop
 */

?>

<footer class="footer-Wrap">

  <div class=" footer-Top">
    <div class="container-fluid  container">
      <div class="row">
        <div class="col-6 col-md-3">
          <dl class="footer-Links">
            <dt class="footer-Links_Label">取扱商品</dt>
            <dd class="footer-Links_Detail">
              <ul class="footer_LinksItems">
                <li><a href="/shop">ショップ</a></li>
                <!-- <li><a href="#">プラグイン</a></li> -->
                <!-- <li><a href="#">アドオン</a></li> -->
                <!-- <li><a href="#">オプション</a></li> -->
                <!-- <li><a href="#">書籍</a></li> -->
              </ul>
            </dd>
          </dl>
        </div>
        <div class="col-6 col-md-3">
          <dl class="footer-Links">
            <dt class="footer-Links_Label">コンテンツ</dt>
            <dd class="footer-Links_Detail">
              <ul class="footer_LinksItems">
                <li><a href="/news">新着情報</a></li>
                <li><a href="/blog">ブログ</a></li>
                <!-- <li><a href="#">WordPress 超入門</a></li> -->
                <li><a href="/voice">ご利用事例</a></li>
                <!-- <li><a href="/case-report">事例掲載募集</a></li> -->
              </ul>
            </dd>
          </dl>
        </div>
        <div class="col-6 col-md-3">
          <dl class="footer-Links">
            <dt class="footer-Links_Label">サポート</dt>
            <dd class="footer-Links_Detail">
              <ul class="footer_LinksItems">
                <li><a href="/help">ヘルプセンター</a></li>
                <li><a href="/my-account">マイページ</a></li>
                <li><a href="/guide">ご購入ガイド</a></li>
                <li><a href="/terms">利用規約</a></li>
                <li><a href="/contact">お問い合わせ</a></li>
                <!-- <li><a href="">アフィリエイトプログラム</a></li> -->
              </ul>
            </dd>
          </dl>
        </div>
        <div class="col-6 col-md-3">
          <dl class="footer-Links">
            <dt class="footer-Links_Label">運営会社</dt>
            <dd class="footer-Links_Detail">
              <ul class="footer_LinksItems">
                <li><a href="/idea">コンセプト</a></li>
                <li><a href="https://and-bro.com/" target=" blank">会社概要</a></li>
                <li><a href="/privacy">プライバシーポリシー</a></li>
                <li><a href="/law">特定商取引法に基づく表示</a></li>
              </ul>
            </dd>
          </dl>
        </div>

      </div>
    </div>
  </div>

  <div class="footer-Middle">
    <div class="container-fluid">
      <div class="row justify-content-md-between align-items-md-center">
        <div class="footer-Logo col-md-6 col-lg-5">
          <p><?php the_custom_logo(); ?></p>
        </div>
        <div class="footer-Sns col-md-4 col-lg-4">
          <ul class="footer-SnsItems">
            <li><a href="https://twitter.com/ANDBRO_Inc" target="blank"><img src="<?php bloginfo('template_url'); ?>/img/twitter-3-xxl.png" alt="Twitter" style="width:50px;"></a></li>
            <li><a href="https://www.facebook.com/ANDBRO.official" target="blank"><img src="<?php bloginfo('template_url'); ?>/img/facebook-3-xxl.png" alt="Facebook" style="width:50px;"></a></li>
          </ul>
        </div>
      </div>
      <p class="footer-Copyright">© ANDBRO inc.</p>
    </div>
  </div>

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 'auto',
  spaceBetween: 30,
  speed: 1000,
  loop: true,
  centeredSlides: true,
  pagination: '.swiper-pagination',
  autoplay: 5000,
  disableOnInteraction: false,
});
</script>



</body>
</html>