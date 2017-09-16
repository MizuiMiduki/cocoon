<article id="post-<?php the_ID(); ?>" <?php post_class('article') ?> role="article" itemscope="" itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();?>

      <?php //タイトル上の広告表示
      if (is_ad_pos_above_title_visible()){
        //レスポンシブ広告のフォーマットにhorizontalを指定する
        get_template_part_with_ad_format(DATA_AD_FORMAT_HORIZONTAL, 'ad-above-title');
      }; ?>

      <header class="article-header entry-header">
        <h1 class="entry-title" itemprop="headline" rel="bookmark"><?php the_title() ?></h1>

      <?php //タイトル下の広告表示
      if (is_ad_pos_below_title_visible()){
        //レスポンシブ広告のフォーマットにhorizontalを指定する
        get_template_part_with_ad_format(DATA_AD_FORMAT_HORIZONTAL, 'ad-above-title');
      }; ?>

        <?php get_template_part('tmp/eye-catch');//アイキャッチ挿入機能?>

        <?php //SNSシェアボタン
        if (is_sns_share_buttons_visible())
          get_template_part_with_option('tmp/sns-share-buttons', 'ss-top'); ?>


         <?php //本文上の広告表示
        if (is_ad_pos_content_top_visible()){
          //レスポンシブ広告のフォーマットにhorizontalを指定する
          get_template_part_with_ad_format(DATA_AD_FORMAT_HORIZONTAL, 'ad-content-top');
        }; ?>
      </header>



      <div class="entry-content cf" itemprop="articleBody">
      <?php //記事本文の表示
        the_content(); ?>
      </div>

      <?php //マルチページ用のページャーリンク
      get_template_part('tmp/pager-page-links'); ?>

      <footer class="article-footer entry-footer">

        <?php //本文下の広告表示
        if (is_ad_pos_content_bottom_visible()){
          //レスポンシブ広告のフォーマットにrectangleを指定する
          get_template_part_with_ad_format(DATA_AD_FORMAT_RECTANGLE, 'ad-content-bottom');
        }; ?>

        <div class="entry-categories-tags">
          <?php the_category_links(); //カテゴリの出力
                the_tag_links(); //タグの出力?>
        </div>

        <?php //SNSシェアボタン上の広告表示
        if (is_ad_pos_above_sns_buttons_visible()){
          //レスポンシブ広告のフォーマットにrectangleを指定する
          get_template_part_with_ad_format(DATA_AD_FORMAT_RECTANGLE, 'ad-above-sns-buttons');
        }; ?>

        <?php //SNSシェアボタン
        if (is_sns_share_buttons_visible())
          get_template_part_with_option('tmp/sns-share-buttons', 'ss-bottom'); ?>

        <?php //SNSフォローボタン
        if (is_sns_follow_buttons_visible())
          get_template_part('tmp/sns-follow-buttons'); ?>

        <?php //SNSシェアボタン上の広告表示
        if (is_ad_pos_below_sns_buttons_visible()){
          //レスポンシブ広告のフォーマットにrectangleを指定する
          get_template_part_with_ad_format(DATA_AD_FORMAT_RECTANGLE, 'ad-below-sns-buttons');
        }; ?>

      </footer>

    <?php
    } // end while
  } //have_posts end if?>
</article>
