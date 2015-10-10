<?php
/* Template Name: archive-information */
get_header(); ?>

<div class="l-keyVisual wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
        <div class="l-keyVisual-body">

            <h1 class="l-keyVisual-bodyCopy wow fadeInDown liberation-b txtColor-wht" data-wow-duration="3.5s" data-wow-delay="2.0s">
<?php the_archive_title(); ?></h1>


            <h2 class="l-keyVisual-bodySubCopy wow fadeInDown txtColor-wht" data-wow-duration="2.5s" data-wow-delay="3.0s" style="font-size:20px;">
              CREATIVITY AND CHALLENGE WILL ALWAYS KEEP ME HAPPY.</h2>
        </div><!-- /.l-keyVisual-body -->

</div><!-- /.l-keyVisual -->




<!-- archive-information temp. -->
<article <?php post_class(); ?>>
                <section class="demo-frame1 bgColor" id="section01">
                　　　　<div class="container">
	                      　　　　<div class="row">
　　　　　　　　　　　　　　　　　　　　　　　<div class="col-sm-12 l-marginTop-xs l-marginBottom-xs">
  <nav class="nav">
    <ul class="pagination">
      <li><a href="<?php echo esc_url( home_url( '/main-service/' ) );?>">ALL</a></li>
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


  <div class="media">
      <a class="pull-left" href="#">
        <img src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/img/img-xs-noimage.png" alt="<?php the_title(); ?>" class="media-object" width="64px" height="auto">

        <?php endif; ?>
        <?php　endif; ?>
      </a>
      <div class="media-body">
          <h2 class="media-heading h2"><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h2>
          <p><?php the_excerpt(); ?></p>

      </div>
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
