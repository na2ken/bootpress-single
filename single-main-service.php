<?php
/* Template Name: single-main-service */
get_header(); ?>

<div class="l-keyVisual wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
        <div class="l-keyVisual-body">
          <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ):
              the_post(); ?>
            <h1 class="l-keyVisual-bodyCopy wow fadeInDown liberation-b txtColor-wht" data-wow-duration="3.5s" data-wow-delay="2.0s">
<?php the_title(); ?></h1>


            <h2 class="l-keyVisual-bodySubCopy wow fadeInDown txtColor-wht" data-wow-duration="2.5s" data-wow-delay="3.0s" style="font-size:20px;">
サブタイトル：サービスの説明アジェンダ。</h2>
        </div><!-- /.l-keyVisual-body -->

</div><!-- /.l-keyVisual -->

<!-- page.php 固定ページtemp -->
<article <?php post_class(); ?>>
                <section class="demo-frame1 bgColor" id="section01">
                　　　　<div class="container">
	                      　　　　<div class="row">
　　　　　　　　　　　　　　　　　　　　　　　<div class="col-sm-12 l-marginTop-xs l-marginBottom-xs">
<div class="col-sm-6">
  <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'medium' ); ?>
  <?php else : //アイキャッチ画像がないとき ?>
<p>
  <img src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/img/img-noimage.png" alt="<?php the_title(); ?>" class="img-responsive">
</p>
  <?php endif; ?>
</div>
<div class="col-sm-6">
<P>
  <?php the_content(); ?>
</p>
<?php endwhile; ?>
<?php endif; ?>
</div>
　　　　　　　　　　　　　　　　　　　　　　　</div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                        </div><!-- /.container -->
                </section><!-- /section01 -->
</article>

<?php get_footer(); ?>
