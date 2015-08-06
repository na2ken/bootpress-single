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


