<?php
/****************************************

	archive-information.php

	カスタム投稿「information」を表示する archive.php

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
<!-- archive-information_.php カスタム投稿「information」を表示するtemp -->
<article>
                <section class="demo-frame1 bgColor" id="section01">
                       <div class="container">
                               <div class="row">
                                       <div class="col-md-12">
<div class="grid_9 push_3" id="main">
	<div class="box-top"></div>
	<div class="box-middle">
		<?php
			if ( have_posts() ) :
				// ループ開始
				while ( have_posts() ) : the_post(); ?>
					<article class="post">
						<h3><?php the_title(); ?></h3>
						<time datetime="<?php echo get_the_date( 'Y-m-j' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
						<?php the_content(); ?>
					</article>
				<?php
				// ループ終了
				endwhile;
			else : ?>
					<article class="post">
						<?php get_template_part( 'content', 'none' ); ?>
					</article>
		<?php
			// if 文終了
			endif; ?>
	</div>
	<div class="box-bottom"></div>

	<?php
	/**
	 * ページネーション
	 */
	$args = array(
		'prev_text' => '&laquo; Next',
		'next_text' => 'Prev &raquo;',
		'mid_size'	=> 1,
	);
	the_posts_pagination( $args ); ?>

</div><!-- /#main -->
<!-- / archive-information.php -->

<?php get_sidebar(); ?>

                                       </div><!--  /.col-md-12-- >
                               </div><!-- /.row -->
                       </div><!-- /.container -->
                </section><!-- /section01 -->
</article>
<?php get_footer(); ?>
