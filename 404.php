<?php
/****************************************

	404.php

	404 Not Found 表示用の
	テンプレートファイル

*****************************************/

get_header(); ?>

        <div class="demo-keyVisual">
                <div class="demo-keyVisual__body">
                    <p class="demo-keyVisual__bodyCopy wow fadeInDown">すいませんが、お探しのページは存在しません。</p>
                    <p class="demo-keyVisual__XX wow fadeIn" style="font-size:20px;">もう一度確認くださるか、下記のリンクからアクセスをし直してください。</p>
                </div><!-- /.demo-keyVisual__body -->

               <div class="demo-keyVisual__hero-btn text-center">
                   <a class="demo-btn-icon-round btn-icon-round--md is-white hidden-xs" href="#section01"><i class="fa fa-angle-double-down"></i></a>
               </div><!-- /.demo-keyVisual__hero-btn -->
        </div><!-- /.demo-keyVisual -->

<article>
                <section class="demo-frame1 bgColor" id="section01">
                       <div class="container">
                               <div class="row">
                                       <div class="col-md-12">
<!-- 404.php -->
<div class="grid_9 push_3" id="main">
	<div class="box-top"></div>
	<div class="box-middle single-post post clearfix">
		<?php get_template_part( 'content', 'none' ); ?>
	</div>
	<div class="box-bottom"></div>
</div><!-- /#main -->
<!-- / 404.php -->

<?php get_sidebar(); ?>
                                       </div><!--  /.col-md-12-- >
                               </div><!-- /.row -->
                       </div><!-- /.container -->
                </section><!-- /section01 -->
</article>
<?php get_footer(); ?>
