<?php

/**
 * andshop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package andshop
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}



if (!function_exists('andshop_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function andshop_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on andshop, use a find and replace
		 * to change 'andshop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('andshop', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'andshop'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'andshop_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'andshop_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function andshop_content_width()
{
	$GLOBALS['content_width'] = apply_filters('andshop_content_width', 640);
}
add_action('after_setup_theme', 'andshop_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function andshop_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'andshop'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'andshop'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'andshop_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function andshop_scripts()
{
	wp_enqueue_style('andshop-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('andshop-style', 'rtl', 'replace');

	wp_enqueue_script('andshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'andshop_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

//以下、カスタム投稿タイプ設定
// カスタム投稿を複数追加する場合は register_post_type を任意の数追加
add_action('init', 'create_custom_post_type');
function create_custom_post_type()
{
	// お客様の声
	register_post_type('voice', [ // 投稿タイプ名の定義
		'labels' => [
			'name'          => 'お客様の声', // 管理画面上で表示する投稿タイプ名
			'singular_name' => 'voice',    // カスタム投稿の識別名
		],
		'public'        => true,	// 投稿タイプをpublicにするか
		'has_archive'   => true,	// アーカイブ機能ON/OFF パーマリンク設定がデフォルト以外の場合に使用
		'menu_position' => 10,		// 管理画面上での配置場所。「投稿」の下は5、「メディア」の下は10、「固定ページ」の下は20
		'show_in_rest'  => true,	// 5系から出てきた新エディタ「Gutenberg」を有効にする
		'hierarchical' => false,		// 階層を持つか ※親記事を指定できるようになる
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes'),
		'rewrite' => array('with_front' => false),
	]);
	// カスタム分類（タクソノミー）
	register_taxonomy(
		'voice-cat', // タクソノミースラッグ
		'voice',		// 使用するカスタム投稿タイプを選択、複数の投稿タイプでタクソノミーを使い回す場合は array('aaa','bbb'), と表記
		array(
			'hierarchical' => true, //trueならカテゴリ、falseならタグ
			'update_count_callback' => '_update_post_term_count',
			'label' => 'voiceカテゴリー',
			'singular_label' => 'voiceカテゴリー',
			'public' => true,
			'show_ui' => true
		)
	);
	function voice_post_type_link($link, $post)
	{
		if ($post->post_type === 'voice') {
			return home_url('/voice/' . $post->ID);
		} else {
			return $link;
		}
	}
	add_filter('post_type_link', 'voice_post_type_link', 1, 2);

	function voice_rewrite_rules_array($rules)
	{
		$new_rewrite_rules = array(
			'voice/([0-9]+)/?$' => 'index.php?post_type=voice&p=$matches[1]',
		);
		return $new_rewrite_rules + $rules;
	}
	add_filter('rewrite_rules_array', 'voice_rewrite_rules_array');

	// 質問投稿
	register_post_type('shopfaq', [ // 投稿タイプ名の定義
		'labels' => [
			'name' => '商品質問', // 管理画面上で表示する投稿タイプ名
			'singular_name' => 'shopfaq',    // カスタム投稿の識別名
		],
		'public' => true,	// 投稿タイプをpublicにするか
		'has_archive' => true,	// アーカイブ機能ON/OFF パーマリンク設定がデフォルト以外の場合に使用
		'menu_position' => 11,		// 管理画面上での配置場所。「投稿」の下は5、「メディア」の下は10、「固定ページ」の下は20
		'show_in_rest'  => true,	// 5系から出てきた新エディタ「Gutenberg」を有効にする
		'hierarchical' => false,		// 階層を持つか ※親記事を指定できるようになる
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes'),
		'rewrite' => array('with_front' => false),
		'exclude_from_search' => false,
	]);
	// カスタム分類（タクソノミー）
	register_taxonomy(
		'shopfaq-cat', // タクソノミースラッグ
		'shopfaq',		// 使用するカスタム投稿タイプを選択、複数の投稿タイプでタクソノミーを使い回す場合は array('aaa','bbb'), と表記
		array(
			'hierarchical' => true, //trueならカテゴリ、falseならタグ
			'update_count_callback' => '_update_post_term_count',
			'label' => '商品質問カテゴリー',
			'singular_label' => 'shopfaqカテゴリー',
			'public' => true,
			'show_ui' => true
		)
	);
	function shopfaq_post_type_link($link, $post)
	{
		if ($post->post_type === 'shopfaq') {
			return home_url('/shopfaq/' . $post->ID);
		} else {
			return $link;
		}
	}
	add_filter('post_type_link', 'shopfaq_post_type_link', 1, 2);

	function shopfaq_rewrite_rules_array($rules)
	{
		$new_rewrite_rules = array(
			'shopfaq/([0-9]+)/?$' => 'index.php?post_type=shopfaq&p=$matches[1]',
		);
		return $new_rewrite_rules + $rules;
	}
	add_filter('rewrite_rules_array', 'shopfaq_rewrite_rules_array');

	// news
	register_post_type('news', [ // 投稿タイプ名の定義
		'labels' => [
			'name'          => 'ニュース', // 管理画面上で表示する投稿タイプ名
			'singular_name' => 'news',    // カスタム投稿の識別名
		],
		'public'        => true,	// 投稿タイプをpublicにするか
		'has_archive'   => false,	// アーカイブ機能ON/OFF パーマリンク設定がデフォルト以外の場合に使用
		'menu_position' => 12,		// 管理画面上での配置場所。「投稿」の下は5、「メディア」の下は10、「固定ページ」の下は20
		'show_in_rest'  => true,	// 5系から出てきた新エディタ「Gutenberg」を有効にする
		'hierarchical' => false,		// 階層を持つか ※親記事を指定できるようになる
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes'),
		'rewrite' => array('with_front' => false)
	]);
	// カスタム分類（タクソノミー）
	register_taxonomy(
		'news_cat', // タクソノミースラッグ
		'news',		// 使用するカスタム投稿タイプを選択、複数の投稿タイプでタクソノミーを使い回す場合は array('aaa','bbb'), と表記
		array(
			'hierarchical' => true, //trueならカテゴリ、falseならタグ
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリー',
			'singular_label' => 'カテゴリー',
			'public' => true,
			'show_ui' => true
		)
	);
	register_taxonomy_for_object_type('category', 'article');
	register_taxonomy_for_object_type('post_tag', 'article');
	function news_post_type_link($link, $post)
	{
		if ($post->post_type === 'news') {
			return home_url('/news/' . $post->ID);
		} else {
			return $link;
		}
	}
	add_filter('post_type_link', 'news_post_type_link', 1, 2);

	function news_rewrite_rules_array($rules)
	{
		$new_rewrite_rules = array(
			'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
		);
		return $new_rewrite_rules + $rules;
	}
	add_filter('rewrite_rules_array', 'news_rewrite_rules_array');

	// supportsの説明：ダッシュボードの編集画面で使用する項目を指定する
	// 'title' — タイトル
	// 'editor' — 本文のエディタ
	// 'author' — 作成者
	// 'thumbnail' — アイキャッチ画像
	// 'excerpt' — 抜粋
	// 'trackbacks' — トラックバック送信
	// 'custom-fields' — カスタムフィールド
	// 'comments' — ディスカッション
	// 'revisions' — リビジョン
	// 'page-attributes' — 属性（親・順序）
}
add_action('init', 'create_custom_post_type');
// カスタム投稿タイプ設定ここまで

function Change_menulabel()
{
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name . '一覧';
	$submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
	global $wp_post_types;
	$name = 'ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name . 'の新規追加';
	$labels->edit_item = $name . 'の編集';
	$labels->new_item = '新規' . $name;
	$labels->view_item = $name . 'を表示';
	$labels->search_items = $name . 'を検索';
	$labels->not_found = $name . 'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');

// produce cutmoize
add_action('init', function () {
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 15);
});

// 投稿ページのパーマリンクをカスタマイズ
function add_article_post_permalink($permalink)
{
	$permalink = '/blog' . $permalink;
	return $permalink;
}
add_filter('pre_post_link', 'add_article_post_permalink');

function add_article_post_rewrite_rules($post_rewrite)
{
	$return_rule = array();
	foreach ($post_rewrite as $regex => $rewrite) {
		$return_rule['blog/' . $regex] = $rewrite;
	}
	return $return_rule;
}
add_filter('post_rewrite_rules', 'add_article_post_rewrite_rules');

add_filter('redirect_canonical', 'disable_redirect_canonical');
function disable_redirect_canonical($redirect_url)
{
	if (is_404()) {
		return false;
	}
	return $redirect_url;
}

// ボタン追加
add_action('woocommerce_after_add_to_cart_button', function () {
	$builder_product_link = 'http://builder.alltype.com/';
?>

<ul class="unit-ProductBtns">
  <li class="unit-ProductBtns_Item">
    <a href="<?php the_field('demosite'); ?>" target="_blank" rel="noopener noreferrer">動作デモ</a>
  </li>
  <li class="unit-ProductBtns_Item">
    <a href="<?php the_field('manual'); ?>" target="_blank" rel="noopener noreferrer">機能詳細＆設定マニュアル</a>
  </li>
</ul>

<?php
});

/**
 * the_excerpt()の文字数
 */

function kazu_excerpt_length($length)
{
	return 60;
}
add_filter('excerpt_length', 'kazu_excerpt_length');

function twpp_change_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'twpp_change_excerpt_more');

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

function woocommerce_add_custom_text_after_product_title()
{

	$custom_text = '<span>My Custom Text</span>';
	the_title('<h3 class="product_title entry-title">', $custom_text . '</h3>');
}
add_action('woocommerce_single_product_summary', 'woocommerce_add_custom_text_after_product_title', 5);

function cw_change_product_price_display($price)
{
	$price .= ' <span style="font-size:80%;">（税込み）</span>';
	return $price;
	echo '<span>', '</span>';
}
add_filter('woocommerce_get_price_html', 'cw_change_product_price_display');
add_filter('woocommerce_cart_item_price', 'cw_change_product_price_display');

// パンくず
function get_breadcrumb()
{
	echo '<a href="/" rel="nofollow">Home</a>';
	if (is_category() || is_single()) {
		// echo '  »  ';
		// the_category (' • ');
		if (is_woocommerce()) {
			echo '  »  ';
			echo '<a href="/shop" rel="nofollow">ショップ</a>';
		}
		if (get_post_type() === 'voice') {
			echo '  »  ';
			echo '<a href="/cases" rel="nofollow">ご利用者の声</a>';
		}
		if (get_post_type() === 'post') {
			echo '  »  ';
			echo '<a href="/blog" rel="nofollow">ブログ</a>';
		}
		if (get_post_type() === 'news') {
			echo '  »  ';
			echo '<a href="/news" rel="nofollow">お知らせ</a>';
		}
		if (is_single()) {
			echo '  »  ';
			the_title();
		}
	} elseif (is_page()) {
		echo '  »  ';
		echo the_title();
	} elseif (is_search()) {
		echo '  »  ';
		echo '<em>';
		echo the_search_query();
		echo '</em>';
	}
}