<?php

//ウィジェット
register_sidebar();


//RSSフィード
add_theme_support( 'automatic-feed-links' );


//カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );


//カスタムヘッダー
add_theme_support( 'custom-header', array(
	'width' => 1500,
	'height' => 250,
	'default-image' => '%s/header-1500x250.jpg',
	'header-text' => false
) );


//概要（抜粋）の文字数
function my_length($length) {
	return 70;
}
add_filter('excerpt_mblength','my_length');


//概要（抜粋）の省略記号
function my_more($more) {
	return '…';
}
add_filter('excerpt_more', 'my_more');


//アイキャッチ画像
add_theme_support( 'post-thumbnails' );

/****************************************

	カスタムメニュー

*****************************************/

add_theme_support( 'menus' );


/**
 * メニューの「テーマの場所」を定義
 */

register_nav_menu( 'header-navi', 'メインナビゲーション' );
register_nav_menu( 'header-sub-navi', 'サブナビゲーション' );
register_nav_menu( 'footer-navi', 'フッターナビゲーション' );
register_nav_menu( 'footer-left-column', 'フッター左カラム' );
register_nav_menu( 'footer-center-column', 'フッターセンターカラム' );
register_nav_menu( 'footer-right-column', 'フッター右カラム' );

/****************************************

	カスタム投稿タイプ

*****************************************/

function custom_register_post_type() {
	$args = array(
		'label' => 'オンライン教材',
		'hierarchical' => false, //投稿と同じように
		'public' => true, // 公開する
		'has_archive' => true, // アーカイブページをもたせる
		'supports' => array(
			'title', 'editor', 'thumbnail', 'custom-fields' // 投稿作成時に表示するフィールド
		),
		'rewrite' => array(
			'with_front' => false, // http://localhost/wordpress/menus/ というパーマリンクに
		),
	);
	// main-service というスラッグ名でカスタム投稿タイプを登録
	register_post_type( 'main-service', $args );
}
add_action( 'init', 'custom_register_post_type' );

/****************************************

	カスタムタクソノミー
	カスタム投稿にカテゴリー、タグなどの分類・階層構造を追加

*****************************************/

function custom_register_taxonomy() {
	$args = array(
		'hierarchical' => true, // 階層を利用する
		'label' => 'テーマ', // ラベルを指定
		'rewrite' => array(
			'with_front' => false, // パーマリンクの形式を指定
		),
	);
	// main-service 投稿タイプに main-servicecat というスラッグ名でタクソノミー(カテゴリー)を登録
	register_taxonomy( 'main-servicecat', 'main-service', $args );
}
add_action( 'init', 'custom_register_taxonomy' );


/****************************************

	カスタム投稿タイプにMarkdown（JetPack）を適用させる

*****************************************/

/**
 * Jetpack markdown for custom post type
 * via. http://kopepasah.com/tutorial/add-jetpack-markdown-support-to-custom-post-types/
 */
add_action( 'init', 'amimoto_custom_jetpack_markdown_support' );
function amimoto_custom_jetpack_markdown_support() {

	$args = array(
		'public'   => true,
		'_builtin' => false
	);
	$output = 'names'; // names or objects, note names is the default
	$operator = 'and'; // 'and' or 'or'

	$post_types = get_post_types( $args, $output, $operator );

	foreach ( $post_types  as $post_type ) {
		add_post_type_support( $post_type, 'wpcom-markdown' );
	}
}
