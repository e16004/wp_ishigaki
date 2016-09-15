<?php
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support( 'post-thumbnails' );

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support( 'menus' );

add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields( $args ) {
  $args['author'] = ''; // 「名前」欄を削除
  $args['email'] = ''; // 「メールアドレス」欄を削除
  $args['url'] = ''; //「ウェブサイト」欄を削除
  return $args;
}


