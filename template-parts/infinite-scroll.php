  <?php

// 現在のページ数
global $paged;
if ( empty( $paged ) ) $paged = 1;
    
// 総ページ数
global $wp_query;
$pages = $wp_query -> max_num_pages;
if ( ! $pages ) {
  $pages = 1;
}

// ページが1ページしかない場合は出力しない・最後のページでも出力しない
if ( $pages != 1 && $paged < $pages ) {
  echo '
  <button id="more-button" type="button">もっと見る</button>
  <div class="scroller-status">
    <div class="infinite-scroll-request"></div>
    <p class="infinite-scroll-last">これ以上は記事がありません</p>
    <p class="infinite-scroll-error">読み込むページがありません</p>
  </div>
  ';
}
?>



<style type="text/css">

.wp-pagenavi {display: none;}

.scroller-status {
  display: none;
  margin-top: 40px;
}

.infinite-scroll-request {
  animation: scroll-request 1.1s infinite linear;
  border: 4px solid #00b8d4;
  border-left: 4px solid #fff;
  border-radius: 50%;
  height: 48px;
  margin: auto;
  width: 48px;
}

@keyframes scroll-request {
  0% {
    transform: rotate(0deg);
  }
  
  100% {
    transform: rotate(360deg);
  }
}

.infinite-scroll-last,
.infinite-scroll-error {
  color: #757575;
  text-align: center;
}
</style>
<!-- 無限スクロール -->
  <script src="<?php bloginfo('template_url'); ?>/assets/js/infinite-scroll/infinite-scroll.pkgd.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/infinite-scroll/setting.js"></script>
  
<style type="text/css">
#more-button {
    background: rgba(255,255,255,0);
    height: auto;
    /*margin: 77px auto 0;*/
    margin: 60px auto 80px;
    width: 100%;
    max-width: 190px;
    border: solid 1px #595757;
    box-shadow: none;
    border-radius: 2em;
    color: #595757;
    position: relative;
    font-size: 18px;
    padding: 0 0px;
    line-height: 2.25;
    min-height: unset;
    display: block;
}
#more-button::after {
    position: absolute;
    top: calc(50% - 2px);
    right: 8px;
    content: "";
    display: block;
    height: 0;
    width: 0;
    border-style: solid;
    border-color: #595757 transparent transparent;
    border-width: 5px;
}
#more-button:hover {
    opacity: .5;
}
*[class^="category-"] ul#infinite-scroll {
    /*margin-bottom: 40px;*/
}

@media screen and (max-width: 680px){
.events_archives {
    margin-bottom: 0;
}
#more-button {
    margin: 8rem auto 3rem;
    /*margin: 0 auto 3rem;*/
    font-size: 14px;
    line-height: 2.5;
}
}
</style>