<section class="comments">
<?php
$comment_form_args = array(
  'title_reply' => 'コメント投稿フォーム',
  'comment_notes_after' => '',
);
comment_form( $comment_form_args );
if ( have_comments() ) :
?>
  <!-- comment_numberのパラメータ1つ目は条件分岐で呼ばれることは無いので空白 -->
  <p><?php comments_number('', 'コメントが
  １件あります', 'コメントが%件あります'); ?></p>
  <ol class="commentlist">
      <?php
      $wp_list_comments_args = array(
        'avatar_size' => '50'
      );
      wp_list_comments( $wp_list_comments_args ); ?>
  </ol>
<?php
$paginate_comments_links_args = array(
  'prev_text' => '←前のコメントページ',
  'next_text' => '次のコメントページ→',
);
paginate_comments_links( $paginate_comments_links_args
  );
endif;
?>
</section><!-- /.comments -->