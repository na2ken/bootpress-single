<?php
/****************************************

		single.php

		ブログの個別記事を表示するファイル

*****************************************/

get_header(); ?>

        <div class="demo-keyVisual">
                <div class="demo-keyVisual__body">
                    <p class="demo-keyVisual__bodyCopy wow fadeInDown">The Other Page.</p>
                    <p class="demo-keyVisual__XX wow fadeIn" style="font-size:20px;">CREATIVITY AND CHALLENGE WILL ALWAYS KEEP ME HAPPY.</p>
                </div><!-- /.demo-keyVisual__body -->
        </div><!-- /.demo-keyVisual -->
<!-- singe.php 単一記事投稿temp -->
<article>
                <section class="demo-frame1 bgColor" id="section01">
                       <div class="container">
                               <div class="row">
                                       <div class="col-md-12">

<!-- single.php -->
<div class="grid_9 push_3" id="main">
	<div class="box-top"></div>
	<article class="box-middle single-post post clearfix">
	<?php
		// ループ開始
		while ( have_posts() ) : the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<div class="metabox clearfix">
				<time datetime="<?php echo get_the_date( 'Y-m-j' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
				<div>
					<span>カテゴリー：</span>
					<?php the_category( '' ); ?>
				</div>
			</div>
			<p class="eyecatch">
				<?php
				// アイキャッチ画像
				if ( has_post_thumbnail() ) :
					the_post_thumbnail();
				else : ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" width="212" height="131" alt="" />
				<?php endif; ?>
			</p>

			<?php the_content(); ?>

			<?php
			/**
			 * 投稿ナビゲーション
			 */ ?>
			<nav class="post-navi">
				<span id="next"><?php next_post_link( '%link','&laquo; %title' ); ?></span>
				<span id="prev"><?php previous_post_link( '%link','%title &raquo;' ); ?></span>
			</nav>
	<?php
		// ループ終了
		endwhile; ?>
	</article>
	<div class="box-bottom"></div>
</div><!-- /#main -->
<!-- / single.php -->

<?php get_sidebar(); ?>

                                       </div><!--  /.col-md-12-- >
                               </div><!-- /.row -->
                       </div><!-- /.container -->
                </section><!-- /section01 -->
</article>
<?php get_footer(); ?>