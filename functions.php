<?php


function my_script_init() {

    wp_enqueue_style("animate", get_template_directory_uri() . "/css/animate.css", array(), filemtime(get_theme_file_path("/css/animate.css")), "all");

    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array("animate"), filemtime(get_theme_file_path("css/style.css")), "all");

    wp_enqueue_script("wow", get_template_directory_uri() . "/js/wow.min.js", array("jquery"), filemtime(get_theme_file_path("/js/wow.min.js")), true);


    wp_enqueue_script("js", get_template_directory_uri() . "/js/script.js", array("wow"), filemtime(get_theme_file_path("/js/script.js")), true);
}

add_action("wp_enqueue_scripts", "my_script_init");

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type) {
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'news'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

if (!function_exists('bj_register_sidebars')) {

    function bj_register_sidebars() {

        register_sidebar(array(
            'id'            => 'sidebar_1', //ウィジェットのID
            'name'          => 'サイドバー1', //ウィジェットの名前
            'description'   => 'ウィジェットをドラッグして編集してください。', //ウィジェットの説明文
            'before_widget' => '<div>', //ウィジェットを囲う開始タグ
            'after_widget'  => '</div>', //ウィジェットを囲う終了タグ
            'before_title'  => '<h4>', //タイトルを囲う開始タグ
            'after_title'   => '</h4>', //タイトルを囲う終了タグ
        ));

        register_sidebar(array(
            'id'            => 'sidebar_2', //ウィジェットのID
            'name'          => 'サイドバー2', //ウィジェットの名前
            'description'   => 'ウィジェットをドラッグして編集してください。', //ウィジェットの説明文
            'before_widget' => '<div>', //ウィジェットを囲う開始タグ
            'after_widget'  => '</div>', //ウィジェットを囲う終了タグ
            'before_title'  => '<h4>', //タイトルを囲う開始タグ
            'after_title'   => '</h4>', //タイトルを囲う終了タグ
        ));
    }

    add_action('widgets_init', 'bj_register_sidebars');
}

//ナビゲーション
function sampletheme_setup() {
    register_nav_menus(
        [
            'global' => 'ヘッダー'
        ]
    );
}
add_action('after_setup_theme', 'sampletheme_setup');

add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);
function description_in_nav_menu($item_output, $item) {
    return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<span>{$item->attr_title}</span><", $item_output);
}

function remove_menu_id($id) {
    return $id = array();
}
add_filter('nav_menu_item_id', 'remove_menu_id', 10);


function remove_menu_class($classes) {
    return $classes = array();
}
add_filter('nav_menu_css_class', 'remove_menu_class', 10, 2);


function remove_menu_aria_current($atts, $item, $args) {
    unset($atts['aria-current']);
    return $atts;
}
add_filter('nav_menu_link_attributes', 'remove_menu_aria_current', 11, 5);


//パンくず

// Breacrumb navXT のトップページの表記を書き換える
add_filter('bcn_breadcrumb_title', 'nskw_bcn_breadcrumb_title_filter', 10, 2);
function nskw_bcn_breadcrumb_title_filter($title, $type = null) {

    if ('home' === $type[0]) {
        $title = 'HOME';
    }

    return $title;
}

function bcn_add($bcnObj) {

    // デフォルト投稿のアーカイブかどうか
    if (is_post_type_archive('post')) {
        // 新規のtrailオブジェクトを末尾に追加する
        $bcnObj->add(new bcn_breadcrumb('お知らせ', null, array('archive', 'post-clumn-archive', 'current-item')));
        // trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
        $trail_tmp = clone $bcnObj->trail[1];
        $bcnObj->trail[1] = clone $bcnObj->trail[0];
        $bcnObj->trail[0] = $trail_tmp;
    }

    return $bcnObj;
}

add_action('bcn_after_fill', 'bcn_add');

/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title) {

    if (is_category()) { // カテゴリーアーカイブの場合
        $title = single_cat_title('', false);
    } elseif (is_tag()) { // タグアーカイブの場合
        $title = single_tag_title('', false);
    } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) { // タームアーカイブの場合
        $title = single_term_title('', false);
    } elseif (is_author()) { // 作者アーカイブの場合
        $title = get_the_author();
    } elseif (is_date()) { // 日付アーカイブの場合
        $title = '';
        if (get_query_var('year')) {
            $title .= get_query_var('year') . '年';
        }
        if (get_query_var('monthnum')) {
            $title .= get_query_var('monthnum') . '月';
        }
        if (get_query_var('day')) {
            $title .= get_query_var('day') . '日';
        }
    }
    return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');



/**
 * テーマ初期設定
 *
 * テーマサポートの読み込み
 * カスタムメニューの設定
 */
function wpro_setup() {

    // アイキャッチの利用
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1568, 9999);

    // カスタムロゴの設定
    $logo_width  = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );
}
add_action('after_setup_theme', 'wpro_setup');
