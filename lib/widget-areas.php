<?php //ウイジェットエリア用の関数

/////////////////////////////////////
// ウィジェットエリアの指定
/////////////////////////////////////
if ( !function_exists( 'register_sidebar_widget_area' ) ):
function register_sidebar_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( 'サイドバー', THEME_NAME ),
    'id' => 'sidebar',
    'description' => __( 'サイドバーのウィジットエリアです。', THEME_NAME ),
    'before_widget' => '<aside id="%1$s" class="widget widget-sidebar %2$s">',
    'after_widget' => '</aside>',
    'before_title'  => '<h3 class="widget-sidebar-title widget-title">',
    'after_title'   => '</h3>',
  ));
}
endif;
register_sidebar_widget_area();

if ( !function_exists( 'register_sidebar_scroll_widget_area' ) ):
function register_sidebar_scroll_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( 'サイドバースクロール追従', THEME_NAME ),
    'id' => 'sidebar-scroll',
    'description' => __( 'サイドバーで下にスクロールすると追いかけてくるエリアです。※モバイルでは表示されません。（ここにGoogle AdSenseを貼るのはポリシー違反です。）', THEME_NAME ),
    'before_widget' => '<aside id="%1$s" class="widget widget-sidebar-scroll %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-sidebar-scroll-title widget-title">',
    'after_title' => '</h3>',
  ));
}
endif;
register_sidebar_scroll_widget_area();

if ( !function_exists( 'register_main_scroll_widget_area' ) ):
function register_main_scroll_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( 'メンインカラムスクロール追従', THEME_NAME ),
    'id' => 'main-scroll',
    'description' => __( 'メインカラムで下にスクロールすると追いかけてくるエリアです。サイドバーの方が長い場合に追従してきます。※モバイルでは表示されません。（ここにGoogle AdSenseを貼るのはポリシー違反です。）', THEME_NAME ),
    'before_widget' => '<aside id="%1$s" class="widget widget-main-scroll %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="widget-main-scroll-title main-widget-label">',
    'after_title' => '</h2>',
  ));
}
endif;
register_main_scroll_widget_area();

// if ( !function_exists( 'register_above_single_breadcrubs_widget_area' ) ):
// function register_above_single_breadcrubs_widget_area(){
//   register_sidebars(1,
//     array(
//     'name' => __( '投稿パンくずリスト上', THEME_NAME ),
//     'id' => 'above-single-breadcrumbs',
//     'description' => __( '投稿のパンくずリスト上に表示されるウイジェット。設定しないと表示されません。', THEME_NAME ),
//     'before_widget' => '<div id="%1$s" class="widget widget-above-single-breadcrumbs %2$s">',
//     'after_widget' => '</div>',
//     'before_title' => '<div class="widget-above-single-breadcrumbs-title main-widget-label">',
//     'after_title' => '</div>',
//   ));
// }
// endif;
// register_above_single_breadcrubs_widget_area();

if ( !function_exists( 'register_above_single_content_title_widget_area' ) ):
function register_above_single_content_title_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( '投稿タイトル上', THEME_NAME ),
    'id' => 'above-single-content-title',
    'description' => __( '投稿タイトル上に表示されるウイジェット。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-above-single-content %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-above-single-content-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_above_single_content_title_widget_area();

if ( !function_exists( 'register_single_content_top_widget_area' ) ):
function register_single_content_top_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( '投稿本文上', THEME_NAME ),
    'id' => 'single-content-top',
    'description' => __( '投稿本文上に表示されるウイジェット。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-single-content-top %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-single-content-top-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_single_content_top_widget_area();

if ( !function_exists( 'register_single_content_middle_widget_area' ) ):
function register_single_content_middle_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( '投稿本文中', THEME_NAME ),
    'id' => 'single-content-middle',
    'description' => __( '投稿本文中に表示されるウイジェット。文中最初のH2タグの手前に表示されます。広告が表示されている場合は、広告の下に表示されます。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-single-content-middle %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-single-content-middle-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_single_content_middle_widget_area();

if ( !function_exists( 'register_single_content_bottom_widget_area' ) ):
function register_single_content_bottom_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( '投稿本文下', THEME_NAME ),
    'id' => 'single-content-bottom',
    'description' => __( '投稿本文下に表示されるウイジェット。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-single-content-bottom %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-single-content-bottom-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_single_content_bottom_widget_area();

if ( !function_exists( 'register_abobe_single_sns_buttons_widget_area' ) ):
function register_abobe_single_sns_buttons_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( '投稿SNSボタン上', THEME_NAME ),
    'id' => 'above-single-sns-buttons',
    'description' => __( '投稿のメインカラムの一番下となるSNSボタンの上に表示されるウイジェット。広告を表示している場合は、広告の下になります。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-above-single-sns-buttons %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-above-single-sns-buttons-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_abobe_single_sns_buttons_widget_area();

if ( !function_exists( 'register_below_single_sns_buttons_widget_area' ) ):
function register_below_single_sns_buttons_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( '投稿SNSボタン下', THEME_NAME ),
    'id' => 'below-sns-buttons',
    'description' => __( '投稿のメインカラムの一番下となるSNSボタンの下に表示されるウイジェット。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-below-sns-buttons %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-below-sns-buttons-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_below_single_sns_buttons_widget_area();

if ( !function_exists( 'register_below_single_related_entries_widget_area' ) ):
function register_below_single_related_entries_widget_area(){
register_sidebars(1,
  array(
  'name' => __( '投稿関連記事下', THEME_NAME ),
  'id' => 'below-related-entries',
  'description' => __( '関連記事の下（広告を表示している場合はその下）に表示されるウイジェット。設定しないと表示されません。', THEME_NAME ),
  'before_widget' => '<div id="%1$s" class="widget widget-below-related-entries %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h2 class="widget-below-related-entries-title main-widget-label">',
  'after_title' => '</h2>',
));
}
endif;
register_below_single_related_entries_widget_area();

if ( !function_exists( 'register_page_content_top_widget_area' ) ):
function register_page_content_top_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( '固定ページ本文上', THEME_NAME ),
    'id' => 'page-content-top',
    'description' => __( '固定ページ本文上に表示されるウイジェット。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-page-content-top %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-page-content-top-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_page_content_top_widget_area();

if ( !function_exists( 'register_page_content_middle_widget_area' ) ):
function register_page_content_middle_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( '固定ページ本文中', THEME_NAME ),
    'id' => 'page-content-middle',
    'description' => __( '固定ページ本文中に表示されるウイジェット。文中最初のH2タグの手前に表示されます。広告が表示されている場合は、広告の下に表示されます。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-page-content-middle %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-page-content-middle-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_page_content_middle_widget_area();

if ( !function_exists( 'register_page_content_bottom_widget_area' ) ):
function register_page_content_bottom_widget_area(){
register_sidebars(1,
  array(
  'name' => __( '固定ページ本文下', THEME_NAME ),
  'id' => 'page-content-bottom',
  'description' => __( '固定ページ本文下に表示されるウイジェット。設定しないと表示されません。', THEME_NAME ),
  'before_widget' => '<div id="%1$s" class="widget widget-page-content-bottom %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-page-content-bottom-title main-widget-label">',
  'after_title' => '</div>',
));
}
endif;
register_page_content_bottom_widget_area();


if ( !function_exists( 'register_above_page_sns_buttonwidget_area' ) ):
function register_above_page_sns_buttonwidget_area(){
  register_sidebars(1,
    array(
    'name' => __( '固定ページSNSボタン上', THEME_NAME ),
    'id' => 'above-page-sns-buttons',
    'description' => __( '固定ページのメインカラムの一番下となるSNSボタンの上に表示されるウイジェット。広告を表示している場合は、広告の下になります。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-above-page-sns-buttons %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-above-page-sns-buttons-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_above_page_sns_buttonwidget_area();

if ( !function_exists( 'register_below_page_sns_buttons_widget_area' ) ):
function register_below_page_sns_buttons_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( '固定ページSNSボタン下', THEME_NAME ),
    'id' => 'below-page-sns-buttons',
    'description' => __( '固定ページのメインカラムの一番下となるSNSボタンの下に表示されるウイジェット。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-below-page-sns-buttons %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-below-page-sns-buttons-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_below_page_sns_buttons_widget_area();

if ( !function_exists( 'register_index_top_widget_area' ) ):
function register_index_top_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( 'インデックスリストトップ', THEME_NAME ),
    'id' => 'index-top',
    'description' => __( 'インデックスリストのトップに表示されるウイジェット。広告が表示されているときは広告の下に表示されます。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<aside id="%1$s" class="widget widget-index-top %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="widget-index-top-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_index_top_widget_area();

if ( !function_exists( 'register_index_middle_widget_area' ) ):
function register_index_middle_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( 'インデックスリストミドル', THEME_NAME ),
    'id' => 'index-middle',
    'description' => __( 'インデックスリストの3つ目下に表示されるウイジェット。「一覧リストのスタイル」が「サムネイルカード」の時のみの機能です。広告が表示されているときは広告の下に表示されます。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<aside id="%1$s" class="widget widget-index-middle %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="widget-index-middle-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_index_middle_widget_area();

if ( !function_exists( 'register_index_bottom_widget_area' ) ):
function register_index_bottom_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( 'インデックスリストボトム', THEME_NAME ),
    'id' => 'index-bottom',
    'description' => __( 'インデックスリストのボトムに表示されるウイジェット。広告が表示されているときは広告の下に表示されます。設定しないと表示されません。', THEME_NAME ),
    'before_widget' => '<aside id="%1$s" class="widget widget-index-bottom %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="widget-index-bottom-title main-widget-label">',
    'after_title' => '</div>',
  ));
}
endif;
register_index_bottom_widget_area();

if ( !function_exists( 'register_footer_left_widget_area' ) ):
function register_footer_left_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( 'フッター左', THEME_NAME ),
    'id' => 'footer-left',
    'description' => __( 'フッター左側のウィジットエリアです。', THEME_NAME ),
    'before_widget' => '<aside id="%1$s" class="widget widget-footer-left %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-footer-left-title footer-title">',
    'after_title' => '</h3>',
  ));
}
endif;
register_footer_left_widget_area();

if ( !function_exists( 'register_footer_center_widget_area' ) ):
function register_footer_center_widget_area(){
register_sidebars(1,
  array(
  'id' => 'footer-center',
  'name' => __( 'フッター中', THEME_NAME ),
  'description' => __( 'フッター中間のウィジットエリアです。', THEME_NAME ),
  'before_widget' => '<aside id="%1$s" class="widget widget-footer-center %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widget-footer-center-title footer-title">',
  'after_title' => '</h3>',
));
}
endif;
register_footer_center_widget_area();

if ( !function_exists( 'register_footer_right_widget_area' ) ):
function register_footer_right_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( 'フッター右', THEME_NAME ),
    'id' => 'footer-right',
    'description' => __( 'フッター右側フッター中のウィジットエリアです。', THEME_NAME ),
    'before_widget' => '<aside id="%1$s" class="widget widget-footer-right %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-footer-right-title footer-title">',
    'after_title' => '</h3>',
  ));

}
endif;
register_footer_right_widget_area();

if ( !function_exists( 'register_404_page_widget_area' ) ):
function register_404_page_widget_area(){
  register_sidebars(1,
    array(
    'name' => __( '404ページ', THEME_NAME ),
    'id' => '404-page',
    'description' => __( '404ページをカスタマイズするためのウィジットエリアです。', THEME_NAME ),
    'before_widget' => '<div id="%1$s" class="widget widget-404-page %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-404-page-title">',
    'after_title' => '</div>',
  ));
}
endif;
register_404_page_widget_area();



