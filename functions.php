<?php
/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**************************************************
  登録関数　v1.1
***************************************************/
// 検索結果を投稿タイプとカスタム投稿タイプだけにする
function search_filter($query) {
  if (!$query -> is_admin && $query -> is_search) {
    $query -> set('post_type', array('post', 'wordpress', 'bootstrap'));
  }
  return $query;
}
add_filter('pre_get_posts', 'search_filter');


//ウィジェットエリアを追加する
register_sidebar();

//RSSフィードを追加する
add_theme_support( 'automatic-feed-links' );

//概要（抜粋）の文字数を統一する
function my_length($length) {
	return 70;
}
add_filter('excerpt_mblength','my_length');

//概要（抜粋）の省略記号を設定する
function my_more($more) {
	return '…';
}
add_filter('excerpt_more', 'my_more');

//アイキャッチ画像を表示する
add_theme_support( 'post-thumbnails' );

//トップページにカスタム投稿タイプの記事を表示する
function chample_latest_posts( $wp_query ) {
    if ( is_home() && ! isset( $wp_query->query_vars['suppress_filters'] ) ) {
        $wp_query->query_vars['post_type'] = array( 'bootpress','wordpress');
    }
}
add_action( 'parse_query', 'chample_latest_posts' );

/**************************************************
  meta keywordsとdescription個別変更　v1.0
***************************************************/
add_action('admin_menu', 'add_custom_fields');
add_action('save_post', 'save_custom_fields');
 
// 記事ページと固定ページでカスタムフィールドを表示
function add_custom_fields() {
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'post');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'page');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'wordpress');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'bootstrap');
}
 
function my_custom_fields() {
  global $post;
  $keywords = get_post_meta($post->ID,'keywords',true);
  $description = get_post_meta($post->ID,'description',true);
   
  echo '<p>キーワード（半角カンマ区切り）<br>';
  echo '<input type="text" name="keywords" value="'.esc_html($keywords).'" size="60" /></p>';
   
  echo '<p>ページの説明（description）160文字以内<br>';
  echo '<input type="text" style="width: 600px;height: 40px;" name="description" value="'.esc_html($description).'" maxlength="160" /></p>';
}
 
// カスタムフィールドの値を保存
function save_custom_fields( $post_id ) {
  if(!empty($_POST['keywords']))
    update_post_meta($post_id, 'keywords', $_POST['keywords'] );
  else delete_post_meta($post_id, 'keywords');
 
  if(!empty($_POST['description']))
    update_post_meta($post_id, 'description', $_POST['description'] );
  else delete_post_meta($post_id, 'description');
}
 
function my_description() {
 
// カスタムフィールドの値を読み込む
$custom = get_post_custom();
if(!empty( $custom['keywords'][0])) {
  $keywords = $custom['keywords'][0];
}
if(!empty( $custom['description'][0])) {
  $description = $custom['description'][0];
}
?>
<?php if(is_home()): // トップページ ?>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="wordpressテーマ,Bootstrapテンプレート">
<meta name="description" content="wordpressテーマとBootstrapテンプレートに関するチュートリアルです。" />
<?php elseif(is_single()): // 記事ページ ?>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">
<?php elseif(is_page()): // 固定ページ ?>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">
<?php elseif (is_category()): // カテゴリーページ ?>
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php single_cat_title(); ?>の記事一覧" />
<?php elseif (is_tag()): // タグページ ?>
<meta name="robots" content="noindex, follow" />
<meta name="description" content="<?php single_tag_title("", true); ?>の記事一覧" />
<?php elseif(is_404()): // 404ページ ?>
<meta name="robots" content="noindex, follow" />
<title><?php echo 'お探しのページが見つかりませんでした'; ?></title>
<?php else: // その他ページ ?>
<meta name="robots" content="noindex, follow" />
<?php endif; ?>
<?php
}

/**************************************************
  カスタムメニュー　v1.0
***************************************************/
//カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );

add_theme_support( 'menus' );

/*
 * 「メニュー」の「テーマの場所」を定義
 */

register_nav_menu( 'header-navi', 'メインナビゲーション' );
register_nav_menu( 'header-sub-navi', 'サブナビゲーション' );
register_nav_menu( 'footer-navi', 'フッターナビゲーション' );
register_nav_menu( 'footer-left-column', 'フッター左カラム' );
register_nav_menu( 'footer-center-column', 'フッターセンターカラム' );
register_nav_menu( 'footer-right-column', 'フッター右カラム' );

/**************************************************
  カスタム投稿タイプを登録する　v2.0
***************************************************/
/* 1つ目 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'wordpress',  //変更箇所１：スラッグ名
        array(
        'labels' => array(
        'name' => __( 'WordPress' ), //変更箇所２：管理画面に表示されるラベル名
        'singular_name' => __( 'WordPress' ) //変更箇所３：このカスタム投稿の識別名
        ),
        'public' => true,
        'has_archive' => true,
	'hierarchical' => false, //投稿と同じように
        'supports' => array(
        'title', 'editor', 'thumbnail', 'custom-fields'
        ),
        'menu_position' => 5,
        )
    );

/* 2つ目以降 */
    register_post_type( 'bootstrap',  //変更箇所１：スラッグ名
        array(
        'labels' => array(
        'name' => __( 'Bootstrap' ), //変更箇所２：管理画面に表示されるラベル名
        'singular_name' => __( 'Bootstrap' ) //変更箇所３：このカスタム投稿の識別名
        ),
        'public' => true,
        'has_archive' => true,
	'hierarchical' => false, //投稿と同じように
        'supports' => array(
        'title', 'editor', 'thumbnail', 'custom-fields'
        ),
        'menu_position' => 5,
        )
    );
/* 一番最後の閉じ括弧 */
}
/**************************************************
  カスタムタクソノミーを登録する v2.0
***************************************************/
/* 1つ目 */
add_action( 'init', 'custom_register_taxonomy' );
function custom_register_taxonomy() {
    register_taxonomy(
        'wordpress-cat',  //変更箇所１：スラッグ名
        'wordpress',  //変更箇所１：カスタム投稿タイプ名
        array(
            'labels' => array(
            'name' => __( 'WPカテゴリー' ), //変更箇所３：管理画面に表示されるラベル名
            'singular_name' => __( 'WPカテゴリー' ) //変更箇所４：このカスタムタクソノミーの識別名
            ),
            'public' => true,
            'rewrite' => true,
        )
    );

/* 2つ目 */
    register_taxonomy(
        'bootstrap-cat',  //変更箇所１：スラッグ名
        'bootstrap',  //変更箇所２：カスタム投稿タイプ名
        array(
            'labels' => array(
            'name' => __( 'BSカテゴリー' ), //変更箇所３：管理画面に表示されるラベル名
            'singular_name' => __( 'BSカテゴリー' ) //変更箇所４：このカスタムタクソノミーの識別名
            ),
            'public' => true,
            'rewrite' => true,
        )
    );
/* 一番最後の閉じ括弧 */
}


