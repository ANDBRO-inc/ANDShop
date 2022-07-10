<?php get_header(); ?>

<div id="primary" class="content-area primary">
  <main id="main" class="site-main">
    <div class="ast-woocommerce-container container">

      <div id="product-1319"
        class="ast-article-single ast-woo-product-no-review product type-product post-1319 status-publish first instock product_cat-theme-ownedmedia product_cat-theme has-post-thumbnail featured downloadable virtual sold-individually taxable purchasable product-type-simple">

        <?php if (have_posts()) : the_post(); ?>
        <?php echo the_post_thumbnail(); ?>
        <h1 class="post-title aligncenter"><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <?php endif; ?>

        <div class="woocommerce-tabs wc-tabs-wrapper">

          <!-- <ul class="tabs wc-tabs" role="tablist">
            <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
              <a href="#tab-description">
                説明 </a>
            </li>
          </ul> -->

          <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content "
            id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">

            <div class="row mb-5 justify-content-center first-img">
              <div class="col-md-6">
                <a href="/voice">
                  <img src="https://wp.and-bro.com/wp-content/uploads/2021/08/お客様の声-2.png"
                    alt="採用して正解だった！ご利用事例集 ANDShopのWordPressテーマユーザーに聞きました！" width="630" height="204"
                    class="alignnone size-full wp-image-17116" sizes="(max-width: 718px) 100vw, 718px">
                </a>
              </div>
            </div>

            <!-- 画像 -->
            <img class="first-img" loading="lazy" src="<?php the_field('shop_img'); ?>" width="1280" height="630"
              style="margin-bottom: 1.5em;">
            <!-- 説明 -->
            <p><?php the_field('shop_text'); ?></p>


            <ul class="unit-ProductBtns">
              <li class="unit-ProductBtns_Item"><a href="<?php the_field('demosite'); ?>" target="_blank"
                  rel="noopener noreferrer">動作デモ</a></li>
              <li class="unit-ProductBtns_Item"><a href="<?php the_field('manual'); ?>" target="_blank"
                  rel="noopener noreferrer">機能詳細＆設定マニュアル</a></li>
            </ul>

            <!-- パターンオーダー -->
            <div class="shop-pattern">
              <div class="unit-ProductFeat">
                <h2 class="unit-ProductFeat_Title">WordPressでのホームページ制作を、プロにお任せ</h2>
                <p class="unit-ProductFeat_Desc">ANDShopのまるごとおまかせパックは、めんどうな初期設定をあなたに代わってプロの制作チームが行います。<br>
                  安く・簡単に始めたいなら、まるごとおまかせパックにおまかせください！</p>
                <div class="container-fluid">
                  <div class="row">
                    <section class="col-sm-12 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title">まるごとおまかせパックの内容</h3>
                      <p>ANDShopのまるごとおまかせパックには以下の内容が含まれています。</p>
                      <ul>
                        <li>WordPressのインストール</li>
                        <li>ANDShopで販売しているテーマのインストール（有料テーマをご利用の方は、有料テーマを別途お買い求めください）</li>
                        <li>初期プラグインのインストール<br>
                          WordPressの利用にあたって、弊社おすすめのプラグインをインストールいたします。</li>
                        <li>タイトルロゴの作成（1枚）</li>
                        <li>メインビジュアルの作成（3枚）</li>
                        <li>お問い合わせフォームの作成（1つ）</li>
                        <li>ライターによるコンテンツの修正・チェック</li>
                      </ul>
                    </section>

                    <section class="col-sm-12 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title">お打ち合わせ・ご相談</h3>
                      <p>ご依頼前に弊社オフィスもしくはお電話にて事前のお打ち合わせも可能です。</p>
                      <h3 class="unit-ProductFeatItem_Title">ステップ1：ご注文〜制作フォームのご送信</h3>
                      <p>まるごとおまかせパックのページから、ご注文と決済をお願いいたします。</p>
                      <h4>分割でのお支払いについて</h4>
                      <p>まるごとおまかせパックをご注文のお客様に限り、以下の3つの方法からお支払方法をお選びいただけます。</p>
                      <ol>
                        <li>通常のクレジットカード決済（前払い）</li>
                        <li>通常の銀行振込（前払い）</li>
                        <li><a href="https://paid.jp/v/contents/pre/buyer/">Paid</a>（株式会社ラクーンフィナンシャル）の分割払い</li>
                      </ol>
                      <p>Paidでのお支払いをご希望の方は<strong>決済画面で銀行振込を選択し、備考欄に「分割払い希望」と入力</strong>してください。追って弊社からご案内のメールをお送りいたします。
                      </p>
                      <p>※「Paid」のご利用には審査がございます。審査によってはご利用いただけない場合もございますので、あらかじめご了承ください。</p>
                      <h4>ドメイン・サーバーについて</h4>
                      <p>お客様でご用意をお願いいたします</p>

                      <h4>原稿・素材のご準備について</h4>
                      <table>
                        <thead>
                          <tr>
                            <th>項目</th>
                            <th>詳細</th>
                            <th>備考</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <th>メニュー</th>
                            <td>固定ページ数＋2つまで</td>
                            <td></td>
                          </tr>
                          <tr>
                            <th>入稿形式</th>
                            <td>Word<br>
                              PowerPoint<br>
                              テキスト</td>
                            <td>※手書き、画像や写真、pdf形式など、こちらでテキストの入力が必要となる形式ではご入稿いただけません。
                              <p></p>
                              <p><a href="#">雛形のWordファイルをダウンロードする</a></p>
                            </td>
                          </tr>
                          <tr>
                            <th>入稿締め切り</th>
                            <td>決済完了日より30日以内</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                      <h4>制作フォームの送信</h4>
                      <p>サイト制作にあたってのご要望や情報を専用のフォームよりお送りください。</p>
                    </section>
                    <section class="col-sm-12 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title">STEP2：デザイン制作・ライティング</h3>
                      <p>パックに含まれるメインビジュアルやタイトルロゴなどの制作、配色設定などを弊社デザイナーが行います。<br>
                        修正は2回まで承ります。</p>
                    </section>
                    <section class="col-sm-12 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title">STEP3：サイト制作</h3>
                      <p>お客様の原稿を元に、サイト制作作業を行います。<br>
                        修正は2回まで承ります。</p>
                    </section>
                    <section class="col-sm-12 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title">STEP4：納品</h3>
                      <p>サイト制作が完了しましたら公開いたします。<br>
                        その後、WordPressのアカウント／パスワードお渡しすることで納品完了となります。</p>
                    </section>
                  </div>
                </div>
              </div>
            </div>

            <!-- 月額制サポート -->
            <div class="shop-support product product_cat-support woocommerce-tabs wc-tabs-wrapper">
              <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content"
                id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">


                <h2>月額制サポートサービス（法人）内容</h2>
                <table>
                  <tbody>
                    <tr>
                      <th>対象</th>
                      <td><?php the_field('shop_title1'); ?><br>
                        当ショップでテーマ、プラグイン、有料アドオンをご購入されたご本人様</td>
                    </tr>
                    <tr>
                      <th>料金</th>
                      <td><?php the_field('shop_title2'); ?><br>
                        ※お支払いはクレジットカードのみ可</td>
                    </tr>
                    <tr>
                      <th>解約</th>
                      <td><a href="https://wp.and-bro.com/my-account">マイページ</a>の「現在のご契約」からご自身でご解約</td>
                    </tr>
                    <tr>
                      <th>サポート範囲</th>
                      <td>当ショップのテーマ、プラグインの操作・設定方法<br>
                        <a href="#support">サポート範囲の詳細</a>
                      </td>
                    </tr>
                    <tr>
                      <th>フォーラム質問</th>
                      <td>〇</td>
                    </tr>
                    <tr>
                      <th>個別質問</th>
                      <td>〇（1ヵ月につき4課題まで）</td>
                    </tr>
                    <tr>
                      <th>個別質問ツール</th>
                      <td>メール, Chatwork</td>
                    </tr>
                  </tbody>
                </table>
                <h3 id="support">サポートの【対象】となるもの</h3>
                <ul>
                  <li>当ショップで販売・提供する商品の操作、設定方法</li>
                  <li>当ショップで販売・提供する商品そのものの不具合</li>
                  <li>有料テーマに関連する無料アドオンの操作、設定方法</li>
                </ul>
                <h3>サポートの【対象外】となるもの</h3>
                <ul>
                  <li>動作保証環境以外でのご利用</li>
                  <li>当ショップの商品を用いたカスタマイズ方法（デザインや機能変更・追加など）</li>
                  <li>お客様がご自身でカスタマイズした場合の不具合</li>
                  <li>WordPress そのものや、他社プラグインのインストール方法、利用方法</li>
                  <li>当ショップで販売のテーマ、プラグイン以外が起因の不具合</li>
                  <li>ドメインやサーバーの契約、移転、FTPの操作などのご質問</li>
                  <li>集客、デザイン、原稿の作成など、操作方法とは関連がないご質問</li>
                </ul>

                <ol>
                  <li>月額制サポートお申し込み</li>
                  <li>即日：個別サポートご利用開始</li>
                  <li>2〜3営業日：メールでアカウント送付</li>
                  <li>フォーラムご利用開始</li>
                  <li><strong>1ヵ月の無料期間で終了する場合：</strong><br>
                    マイページに表示される<mark>「次の支払日」前日まで</mark>に、マイページよりご自身でご解約<br>
                    例）2020年1月10日にお申し込みの場合、2020年2月10日までにご解約</li>
                  <li><strong>継続サポートを利用する場合：</strong><br>
                    2ヵ月目以降、マイページに表示される「次の支払日」に11,000円(税込)をお支払い</li>
                </ol>
                <h2>留意事項</h2>
                <ul>
                  <li>当サポートサービスは、複数の商品をお買い上げでもお客様1人につき1契約となります。</li>
                  <li>サポートフォーラムでのご質問に関しては、3営業日中を目処にご返信いたします。内容によってはご回答までにお時間がかかる場合がありますが、あらかじめその旨をご連絡いたします。</li>
                  <li>お客様のご要望によっては、テーマのカスタマイズが必要になる場合があります。その場合は、有料カスタマイズをご提案をすることもあります。</li>
                  <li>フォーラムは他の利用者も閲覧するため、個人情報やログイン情報などの書き込みはできません。</li>
                </ul>
              </div>
            </div>

            <!-- add-one -->
            <div class="shop-add-one" style="display:none;"></div>

            <!-- デフォルト -->
            <div class="shop-defalt">

              <div class="unit-ProductFeat">
                <h2 class="unit-ProductFeat_Title">カンタン、だけど高機能</h2>
                <p class="unit-ProductFeat_Desc">ANDShopのテーマは、「カンタン、だけど高機能」。<br>
                  自分でオウンドメディアを作りたいけど、あまり時間も手間もかけられない方に、オウンドメディア運用に必要な機能をコンパクトにまとめました。<br>
                  「機能が多すぎてよく分からない！」はありません。</p>

                <div class="container-fluid">
                  <div class="row">

                    <!-- s1 -->
                    <?php
                    $ss1 = 'shop_title1';
                    $s1 = get_post_meta(get_the_ID(), $s1, true);
                    ?>

                    <?php if ($s1  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-6 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title1'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img1'); ?>" alt="" width="" height="380"></figure>
                      <p><?php the_field('shop_text1'); ?></p>
                    </section>
                    <?php endif; ?>

                    <!-- s2 -->
                    <?php
                    $ss2 = 'shop_title2';
                    $s2 = get_post_meta(get_the_ID(), $s1, true);
                    ?>
                    <?php if ($s2  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-6 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title2'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img2'); ?>" alt="" width="608" height="380"></figure>
                      <p><?php the_field('shop_text2'); ?></p>
                    </section>
                    <?php endif; ?>

                    <!-- s3 -->
                    <?php
                    $ss3 = 'shop_title3';
                    $s3 = get_post_meta(get_the_ID(), $s1, true);
                    ?>
                    <?php if ($s3  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-6 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title3'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img3'); ?>" alt="" width="608" height="380"></figure>
                      <p><?php the_field('shop_text3'); ?></p>
                    </section>
                    <?php endif; ?>

                    <!-- s4 -->
                    <?php
                    $ss4 = 'shop_title4';
                    $s4 = get_post_meta(get_the_ID(), $s1, true);
                    ?>
                    <?php if ($s4  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-6 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title4'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img4'); ?>" alt="" width="608" height="380"></figure>
                      <p><?php the_field('shop_text4'); ?></p>
                    </section>
                    <?php endif; ?>

                    <!-- s5 -->
                    <?php
                    $ss5 = 'shop_title5';
                    $s5 = get_post_meta(get_the_ID(), $s1, true);
                    ?>
                    <?php if ($s5  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-6 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title5'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img5'); ?>" alt="" width="608" height="380"></figure>
                      <p><?php the_field('shop_text5'); ?></p>
                    </section>
                    <?php endif; ?>

                    <!-- s6 -->
                    <?php
                    $ss6 = 'shop_title6';
                    $s6 = get_post_meta(get_the_ID(), $s1, true);
                    ?>
                    <?php if ($s6  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-6 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title6'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img6'); ?>" alt="" width="608" height="380"></figure>
                      <p><?php the_field('shop_text6'); ?></p>
                    </section>
                    <?php endif; ?>

                    <!-- s7 -->
                    <?php
                    $ss7 = 'shop_title7';
                    $s7 = get_post_meta(get_the_ID(), $s1, true);
                    ?>
                    <?php if ($s7  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-7 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title7'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img7'); ?>" alt="" width="608" height="380"></figure>
                      <p><?php the_field('shop_text7'); ?></p>
                    </section>
                    <?php endif; ?>

                    <!-- s8 -->
                    <?php
                    $ss8 = 'shop_title8';
                    $s8 = get_post_meta(get_the_ID(), $s1, true);
                    ?>
                    <?php if ($s8  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-8 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title8'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img8'); ?>" alt="" width="608" height="380"></figure>
                      <p><?php the_field('shop_text8'); ?></p>
                    </section>
                    <?php endif; ?>

                    <!-- s9 -->
                    <?php
                    $ss9 = 'shop_title9';
                    $s9 = get_post_meta(get_the_ID(), $s1, true);
                    ?>
                    <?php if ($s9  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-9 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title9'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img9'); ?>" alt="" width="608" height="380"></figure>
                      <p><?php the_field('shop_text9'); ?></p>
                    </section>
                    <?php endif; ?>

                    <!-- s10 -->
                    <?php
                    $ss10 = 'shop_title10';
                    $s10 = get_post_meta(get_the_ID(), $s1, true);
                    ?>
                    <?php if ($s10  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-10 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title10'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img10'); ?>" alt="" width="608" height="380"></figure>
                      <p><?php the_field('shop_text10'); ?></p>
                    </section>
                    <?php endif; ?>

                    <!-- s11 -->
                    <?php
                    $ss11 = 'shop_title11';
                    $s11 = get_post_meta(get_the_ID(), $s1, true);
                    ?>
                    <?php if ($s11  == "") : ?>
                    <section style="display:none;"></section>

                    <?php else : ?>
                    <section class="col-sm-11 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title"><?php the_field('shop_title11'); ?></h3>
                      <figure class="unit-ProductFeatItem_Img"><img loading="lazy"
                          src="<?php the_field('shop_img11'); ?>" alt="" width="608" height="380"></figure>
                      <p><?php the_field('shop_text11'); ?></p>
                    </section>
                    <?php endif; ?>

                    <section class="col-sm-6 unit-ProductFeatItem">
                      <h3 class="unit-ProductFeatItem_Title">月額制サポートサービスが1ヵ月間無料！</h3>
                      <figure class="unit-ProductFeatItem_Img">
                        <img loading="lazy"
                          src="https://wp.and-bro.com/wp-content/uploads/2021/08/fig_monthly-support.jpg" width="800"
                          height="500" class="alignnone size-full wp-image-15899"><br>
                      </figure>
                      <p>ご購入後、サポートが必要な場合は、お申し込みから1ヵ月間無料の月額制サポートサービスをご利用ください。<br>
                        サポートが不要になったらいつでも解約でき、有料テーマ・プラグインお買い上げ後でもお申し込みいただけます。</p>
                      <p>詳しくは<a href="/monthly-support/">月額制サポートサービス</a>をご覧ください。<br>
                      </p>

                    </section>
                  </div>
                </div>


                <!-- <h2 class="unit-ProductFeat_Title">レイアウトパターン</h2>
              <ul class="wp-block-gallery columns-5 is-cropped">
                <li class="blocks-gallery-item">
                  <figure>
                    <a href="<?php the_field('shop_pt1'); ?>">
                      <img loading="lazy" width="1000" height="901" src="<?php the_field('shop_pt1'); ?>" sizes="(max-width: 1000px) 100vw, 1000px" data-recalc-dims="1">
                    </a>
                    <figcaption>新着記事：カード表示</figcaption>
                  </figure>
                </li>

                <li class="blocks-gallery-item">
                  <figure><a href="<?php the_field('shop_pt2'); ?>"><img loading="lazy" width="1000" height="604" src="<?php the_field('shop_pt2'); ?>" sizes="(max-width: 1000px) 100vw, 1000px" data-recalc-dims="1"></a>
                    <figcaption>新着記事：リスト表示</figcaption>
                  </figure>
                </li>

                <li class="blocks-gallery-item">
                  <figure><a href="<?php the_field('shop_pt3'); ?>"><img loading="lazy" width="1000" height="475" src="<?php the_field('shop_pt3'); ?>" sizes="(max-width: 1000px) 100vw, 1000px" data-recalc-dims="1"></a>
                    <figcaption>おすすめ記事：カード表示</figcaption>
                  </figure>
                </li>

                <li class="blocks-gallery-item">
                  <figure><a href="<?php the_field('shop_pt4'); ?>"><img loading="lazy" width="1000" height="478" src="<?php the_field('shop_pt4'); ?>" sizes="(max-width: 1000px) 100vw, 1000px" data-recalc-dims="1"></a>
                    <figcaption>おすすめ記事：リスト表示</figcaption>
                  </figure>
                </li>

                <li class="blocks-gallery-item">
                  <figure><a href="<?php the_field('shop_pt5'); ?>"><img loading="lazy" width="1000" height="664" src="<?php the_field('shop_pt5'); ?>" sizes="(max-width: 1000px) 100vw, 1000px" data-recalc-dims="1"></a>
                    <figcaption>おすすめ記事：カード表示（モバイル）</figcaption>
                  </figure>
                </li>

                <li class="blocks-gallery-item">
                  <figure><a href="<?php the_field('shop_pt6'); ?>"><img loading="lazy" width="1000" height="438" src="<?php the_field('shop_pt6'); ?>" sizes="(max-width: 1000px) 100vw, 1000px" data-recalc-dims="1"></a>
                    <figcaption>アーカイブ：カード表示</figcaption>
                  </figure>
                </li>

                <li class="blocks-gallery-item">
                  <figure><a href="<?php the_field('shop_pt7'); ?>"><img loading="lazy" width="1000" height="406" src="<?php the_field('shop_pt7'); ?>" sizes="(max-width: 1000px) 100vw, 1000px" data-recalc-dims="1"></a>
                    <figcaption>アーカイブ：リスト表示</figcaption>
                  </figure>
                </li>

                <li class="blocks-gallery-item">
                  <figure><a href="<?php the_field('shop_pt8'); ?>"><img loading="lazy" width="873" height="1130" src="<?php the_field('shop_pt8'); ?>" sizes="(max-width: 873px) 100vw, 873px" data-recalc-dims="1"></a>
                    <figcaption>サイドバー：表示なし</figcaption>
                  </figure>
                </li>

                <li class="blocks-gallery-item">
                  <figure><a href="<?php the_field('shop_pt9'); ?>"><img loading="lazy" width="915" height="1130" src="<?php the_field('shop_pt9'); ?>" sizes="(max-width: 915px) 100vw, 915px" data-recalc-dims="1"></a>
                    <figcaption>サイドバー：表示あり</figcaption>
                  </figure>
                </li>

                <li class="blocks-gallery-item">
                  <figure><a href="<?php the_field('shop_pt10'); ?>"><img loading="lazy" width="1000" height="1118" src="<?php the_field('shop_pt10'); ?>" sizes="(max-width: 1000px) 100vw, 1000px" data-recalc-dims="1"></a>
                    <figcaption>おすすめ記事の表示位置</figcaption>
                  </figure>
                </li>

              </ul> -->

              </div>

              <ul id="product-notes">
                <li><small>デモサイトはあくまでホームページの完成イメージです。当テーマのインストールだけではデモサイトは作成できません。</small></li>
                <li><small>ホームページに使用する文章や画像はお客様ご自身でご用意ください。</small></li>
              </ul>

              <ul class="unit-ProductBtns">
                <li class="unit-ProductBtns_Item"><a href="<?php the_field('demosite'); ?>" target="_blank"
                    rel="noopener noreferrer">動作デモ</a></li>
                <li class="unit-ProductBtns_Item"><a href="<?php the_field('manual'); ?>" target="_blank"
                    rel="noopener noreferrer">機能詳細＆設定マニュアル</a></li>
              </ul>

              <!-- defalut -->
            </div>
          </div>

        </div>
        <!-- woocommerce-tabs -->

      </div>

    </div>

  </main>
</div>

<?php get_footer(); ?>