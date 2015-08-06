<?php
/****************************************

	single-information.php

	カスタム投稿「information」の
	個別投稿用テンプレートファイル

*****************************************/

get_header(); ?>

        <div class="demo-keyVisual">
                <div class="demo-keyVisual__body">
                    <p class="demo-keyVisual__bodyCopy wow fadeInDown">The Other Page.</p>
                    <p class="demo-keyVisual__XX wow fadeIn" style="font-size:20px;">CREATIVITY AND CHALLENGE WILL ALWAYS KEEP ME HAPPY.</p>
                </div><!-- /.demo-keyVisual__body -->

               <div class="demo-keyVisual__hero-btn text-center">
                   <a class="demo-btn-icon-round btn-icon-round--md is-white hidden-xs" href="#section01"><i class="fa fa-angle-double-down"></i></a>
               </div><!-- /.demo-keyVisual__hero-btn -->
        </div><!-- /.demo-keyVisual -->
<!-- single-information.php カスタム投稿「information」個別投稿のtemp -->
<article>
                <section class="demo-frame1 bgColor" id="section01">
                       <div class="container">
                               <div class="row">
                                       <div class="col-md-12">
<!-- single-information.php　-->
<div class="grid_9 push_3" id="main">
	<div class="box-top"></div>
	<article class="box-middle post">
		<?php
			// ループ開始
			while ( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<time class="post-date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
				<?php the_content(); ?>
				<nav class="post-navi">
					<span id="next"><?php next_post_link( '%link','&laquo; %title' ); ?></span>
					<span id="prev"><?php previous_post_link( '%link','%title &raquo;' ); ?></span>
				</nav>
			<?php
			// ループ終了
			endwhile; ?>
	</article>
	<div class="box-bottom"></div>
</div><!-- /main -->
<!-- / single-information.php -->

<?php get_sidebar(); ?>
                                       </div><!--  /.col-md-12-- >
                               </div><!-- /.row -->
                       </div><!-- /.container -->
                </section><!-- /section01 -->
</article>
<?php get_footer(); ?>