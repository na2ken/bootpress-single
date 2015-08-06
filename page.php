<?php get_header(); ?>
        <div class="demo-keyVisual">
                <div class="demo-keyVisual__body">
<?php if(have_posts()): while(have_posts()): 
the_post(); ?>

                    <p class="demo-keyVisual__bodyCopy wow fadeInDown"><?php the_title(); ?></p>
                    <p class="demo-keyVisual__XX wow fadeIn" style="font-size:20px;">CREATIVITY AND CHALLENGE WILL ALWAYS KEEP ME HAPPY.</p>
                </div><!-- /.demo-keyVisual__body -->
        </div><!-- /.demo-keyVisual -->
<!-- page.php 固定ページtemp -->
<article <?php post_class(); ?>>
                <section class="demo-frame1 bgColor" id="section01">
                        <div class="container">
	                        <div class="row">
                                        <div class="col-md-12 padding-contentsAbove">
<?php the_content(); ?>

<?php endwhile; endif; ?>

                                        </div>
                                </div>
                        </div>
                </section><!-- /section01 -->
</article>

<?php get_footer(); ?>
