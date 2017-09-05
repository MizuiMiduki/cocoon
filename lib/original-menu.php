<?php //オリジナルテーマ設定

//Wordpress管理画面にオリジナルメニューを追加する
function add_original_menu_in_admin_page() {
    //トップレベルメニューを追加する
    add_menu_page(__(SETTING_NAME_TOP, THEME_NAME), __(SETTING_NAME_TOP, THEME_NAME), 'manage_options', 'theme-settings', 'add_theme_settings_page' );
}
add_action('admin_menu', 'add_original_menu_in_admin_page');

//テーマ用のセッティングページメニューのページコンテンツを表示
function add_theme_settings_page() {
  //以下のテンプレートファイルで設定ページを作成する
  require_once 'original-page.php';
}

?>