<?php
/* Template Name: taxonomy-servicecat */
get_header(); ?>

<div class="l-keyVisual wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
        <div class="l-keyVisual-body">

            <h1 class="l-keyVisual-bodyCopy wow fadeInDown liberation-b txtColor-wht" data-wow-duration="3.5s" data-wow-delay="2.0s">
<?php the_archive_title(); ?></h1>


            <h2 class="l-keyVisual-bodySubCopy wow fadeInDown txtColor-wht" data-wow-duration="2.5s" data-wow-delay="3.0s" style="font-size:20px;"></h2>
        </div><!-- /.l-keyVisual-body -->

</div><!-- /.l-keyVisual -->




<!-- taxonomy-servicecat temp. -->
<article <?php post_class(); ?>>
                <section class="demo-frame1 bgColor" id="section01">
                　　　　<div class="container">
	                      　　　　<div class="row">
　　　　　　　　　　　　　　　　　　　　　　　<div class="col-sm-12 l-marginTop-xs l-marginBottom-xs">
  <nav class="nav">
    <ul class="pagination">
      <li><a href="<?php echo esc_url( home_url( '/service/' ) );?>">ALL</a></li>
      <?php
        // メニューカテゴリーのリストを出力
        $args = array(
          'taxonomy' => 'main-servicecat', //menucatタクソノミーを指定
          'title_li' => '', //リストの見出しは出力しない
        );
        wp_list_categories( $args );
      ?>
    </ul>
  </nav><!--/.nav-->


<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) :
the_post(); ?>

<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php else: //アイキャッチ画像がない時　 ?>
<div class="col-sm-4">
<img src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/img/img-noimage.png" alt="" class="img-responsive">
<?php endif; ?>
<?php　endif; ?>

<h2 class="menu-title"><?php the_title(); ?></h2>
<div class="menu-desc"><?php the_excerpt(); ?></div>
<p class="menu-more"><a href="<?php the_permalink(); ?>" class="btn btn-more">詳細を見る</a></p>
</div>
<?php endwhile; ?>

<?php the_posts_pagination(); ?>

<?php else : ?>

<p>このカテゴリーのメニューはありません。</p>

<?php endif; ?>


　　　　　　　　　　　　　　　　　　　　　　　</div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                        </div><!-- /.container -->
                </section><!-- /section01 -->
</article>

<?php get_footer(); ?>
