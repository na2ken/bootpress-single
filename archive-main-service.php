<?php
/* Template Name: archive-ain-service */
get_header(); ?>

<div class="l-coverUnit">
  <div class="l-coverUnit-body">
      <h1 class="m-coverUnit-headline txtColor-wht wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="2.0s" >
<!-- ?php the_archive_title(); ? -->サービス</h1>
  </div><!-- /.l-coverUnit-body -->
</div><!-- /.coverUnit -->

<!-- archive-main-service temp. -->
<article class="article">


  <article class="article">


           <div class="container">
               <div class="row l-paddingTop-sm l-paddingBottom-sm">

                   <?php if ( have_posts() ) : //もし、記事が1件以上あったら ?>
                   <?php while ( have_posts() ) : //記事がある間は繰り返す
                   the_post(); //次の記事のデータをセットする ?>

                   <div class="col-sm-6 col-md-4 l-paddingBottom-xs">
                       <section class="">
                           <div class="m-iCatch">
                                <?php
                                // アイキャッチ画像
                                if ( has_post_thumbnail() ) :
                                the_post_thumbnail( 'medium img-responsive');
                                else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img-noimage.png" class="img-responsive" alt="" />
                                <?php endif; ?>
                           </div><!--/.m-iCatch-->
                           <div class="entry-header l-paddingWidth-sm">
                                <h2 class="h2">
                                     <a href="<?php the_permalink(); ?>">
                                         <!-- ?php the_title(); ? -->
                                             <?php echo mb_substr(strip_tags($post-> post_title),0,14).'...'; ?>
                                     </a>
                                </h2>
                                <div class="entry-meta">
                                    <span class="date"><time class="entry-date"><?php the_time( 'Y年n月j日' ); ?></time></span>
                                    <span class="categories-links info"><a href="#" rel="category"><?php the_category( ',' ); ?></a></span>
                                </div>
                           </div><!--/.entry-header-->
                           <div class="entry-content l-paddingWidth-sm">
                                <!-- <?php if( has_post_thumbnail() ): ?>
                                <div class="thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <?php endif; ?> -->
                                <!-- ?php the_content( '&raquo;詳しく見る' ); ? -->
                                <p>
                                    <?php echo mb_substr(strip_tags($post-> post_content),0,95).'...'; ?>
                                </p>

                           </div><!--/.entry-content-->

                           <div class="entry-footer l-paddingWidth-sm">
                                ★<span class="comments-link"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
                                <?php the_tags( '<span class="tag-links">', ',', '</span>' ); ?>
                           </div><!--/.entry-footer-->

                     </section>
                   </div>
                   <?php endwhile; //投稿ループ終了 ?>
               </div><!-- /.row -->
           </div><!-- /.container -->


   </article>

<article class="article">
           <div class="container">
               <div class="row text-center">
   <?php the_posts_pagination(); ?>
   <?php else: //もし、表示すべき記事がなかったら ?>
   <p>まだ記事はありません。</p>
   <?php endif; //条件分岐終了 ?>
               </div>
           </div>
</article>


         <div class="container">
            <div class="row">
                <div class="col-sm-12 l-marginTop-xs l-marginBottom-xs">
         <nav class="nav text-center">

         </nav><!--/.nav-->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
       </div><!-- /.container -->





<?php get_footer(); ?>
