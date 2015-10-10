
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

-----
これが正解
/* カスタム投稿タイプ */
add_action( 'init', 'create_post_type' );

function create_post_type() {
  register_post_type(
    'main-service',  /* 投稿タイプのslug */
    array(
      'labels' => array(
        'name' => __( 'サービス' ),
        'singular_name' => __( 'サービス' )
        ),
      'public' => true,
      'menu_position' => 1,
      'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')  /* いろんな機能を有効化 */
    )
  );

  /* カスタムタクソノミー1 */
  register_taxonomy(
    'main-servicecat',  /* タクソノミーのslug */
    'main-service',     /* 属する投稿タイプ */
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'サービス品目',
      'singular_label' => 'サービス品目',
      'public' => true,
      'show_ui' => true
    )
  );

	/* カスタムタクソノミー2 */
  register_taxonomy(
    'main-service-seminar',  /* タクソノミーのslug */
    'main-service',     /* 属する投稿タイプ */
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'セミナー',
      'singular_label' => 'セミナー',
      'public' => true,
      'show_ui' => true
    )
  );

}

------
function add_taxonomy() {
register_taxonomy(
	'glossary',
	'post',
	Array(
		'label'=> '用語',
		'hierarchical' => true
	)
);
register_taxonomy(
	'training-detail',
	'post',
	Array(
		'label'=> '詳細',
		'hierarchical' => true
	)
);
register_taxonomy(
	'movie',
	'post',
	Array(
		'label'=> '動画',
		'hierarchical' => true
	)
);
}
add_action( 'init', 'add_taxonomy' );

function people_init() {
	// 新規分類を作成
	register_taxonomy(
		'people',
		'post',
		array(
			'label' => __( 'People' ),
			'rewrite' => array( 'slug' => 'person' ),
			'capabilities' => array(
				'assign_terms' => 'edit_guides',
				'edit_terms' => 'publish_guides'
			)
		)
	);
}
add_action( 'init', 'people_init' );

------------
function add_taxonomy() {
register_taxonomy(
	'glossary',
	'post',
	Array(
		'label'=> '用語',
		'hierarchical' => true
	)
);

register_taxonomy(
	'training',
	'post',
	Array(
		'label'=> '実習',
		'hierarchical' => true
	)
);
register_taxonomy(
	'movie',
	'post',
	Array(
		'label'=> '動画',
		'hierarchical' => true
	)
);
}
add_action( 'init', 'add_taxonomy' );



function people_init() {
	// 新規分類を作成
	register_taxonomy(
		'people',
		'post',
		array(
			'label' => __( 'People' ),
			'rewrite' => array( 'slug' => 'person' ),
			'capabilities' => array(
				'assign_terms' => 'edit_guides',
				'edit_terms' => 'publish_guides'
			)
		)
	);
}
add_action( 'init', 'people_init' );

-----------------
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

ーーーーーーーーーー

$arg = array (
    'post_status' => 'publish',
    'post_type' => 'post',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'drive',
            'field' => 'name',
            'terms' => array('MR','FR'),
            'operator' => 'IN'
        ),
        array(
            'taxonomy' => 'maker',
            'field' => 'slug',
            'terms' => 'japan',
            'include_children' => true,
        ),
        array(
            'taxonomy' => 'type',
            'field' => 'slug',
            'terms' => 'open',
        )
    )
);
$searched_posts = get_posts( $arg );





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




add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'jirei01',
        array(
        'labels' => array(
        'name' => __( '一般住宅事例' ),
        'singular_name' => __( '一般住宅事例' )
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        )
    );

    register_post_type( 'jirei02',
        array(
        'labels' => array(
        'name' => __( '事務所店舗事例' ),
        'singular_name' => __( '事務所店舗事例' )
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        )
    );
}
