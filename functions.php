<?php
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support( 'post-thumbnails' );

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support( 'menus' );


/**
 * コメント投稿フォームの「名前」「メールアドレス」「ウェブサイト」の項目を削除する
 */
add_filter(
  'comment_form_default_fields',
  'my_comment_form_default_fields'
);
function my_comment_form_default_fields( $args ) {
  $args['author'] = ''; // 「名前」欄を削除
  $args['email'] = ''; // 「メールアドレス」欄を削除
  $args['url'] = ''; //「ウェブサイト」欄を削除
  return $args;
}

//フィードの表示
add_theme_support( 'automatic-feed-links' );
add_filter('excerpt_mblength', 'my_excerpt_mblength');
function my_excerpt_mblength( $length ) {
  return 50; //抜粋に出力する文字数
}
function my_excerpt_more( $more ) {
  return '...<a href="'. get_permalink( get_the_ID() ) . '">続きを読む→</a>';
}

//RSSにアイキャッチ画像を追加
add_filter( 'the_excerpt_rss',  'rss_post_thumbnail');
add_filter( 'the_content_feed', 'rss_post_thumbnail');
function rss_post_thumbnail( $content) {
  global $post;
  if (has_post_thumbnail( $post->ID)) {
    $content = '<p>' . get_the_post_thumbnail($post->ID) .'</p>' . $content;
  }
  return $content;
}

//RSS停止  RSS 2.0
// remove_action('do_feed_rss2', 'do_feed_rss2', 10, 1);

