<?php
/* Template Name: page */
get_header(); ?>

<div class="demo-keyVisual wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
        <div class="demo-keyVisual__body">
            <p class="demo-keyVisual__bodyCopy wow fadeInDown liberation-b txtColor-wht" data-wow-duration="3.5s" data-wow-delay="2.0s">
KOTEI PAGE</p>


            <p class="demo-keyVisual__XX wow fadeInDown txtColor-wht" data-wow-duration="2.5s" data-wow-delay="3.0s" style="font-size:20px;">Coming Soon !</p>
        </div><!-- /.demo-keyVisual__body -->

</div><!-- /.demo-keyVisual -->


<!-- page.php 固定ページtemp -->
<article <?php post_class(); ?>>
                <section class="demo-frame1 bgColor" id="section01">
                        <div class="container">
	                        <div class="row">
                                        <div class="col-md-12 padding-contentsAbove">
                                          <?php if(have_posts()): while(have_posts()):
                                          the_post(); ?>
<?php the_content(); ?>

<?php endwhile; endif; ?>

                                        </div>
                                </div>
                        </div>
                </section><!-- /section01 -->
</article>

<?php get_footer(); ?>
