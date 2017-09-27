<?php //外部ブログカード設定に必要な定数や関数


//外部ブログカードが有効
define('OP_EXTERNAL_BLOGCARD_ENABLE', 'external_blogcard_enable');
if ( !function_exists( 'is_external_blogcard_enable' ) ):
function is_external_blogcard_enable(){
  return get_option(OP_EXTERNAL_BLOGCARD_ENABLE, 1);
}
endif;

//外部ブログカードのサムネイル設定
define('OP_EXTERNAL_BLOGCARD_THUMBNAIL_STYLE', 'external_blogcard_thumbnail_style');
if ( !function_exists( 'get_external_blogcard_thumbnail_style' ) ):
function get_external_blogcard_thumbnail_style(){
  return get_option(OP_EXTERNAL_BLOGCARD_THUMBNAIL_STYLE, 'left');
}
endif;

//外部ブログカードを新しいタブで開くか
define('OP_EXTERNAL_BLOGCARD_TARGET_BLANK', 'external_blogcard_target_blank');
if ( !function_exists( 'is_external_blogcard_target_blank' ) ):
function is_external_blogcard_target_blank(){
  return get_option(OP_EXTERNAL_BLOGCARD_TARGET_BLANK, 1);
}
endif;
