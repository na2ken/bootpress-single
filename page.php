<?php
/* Template Name: page */
get_header(); ?>

<div class="l-keyVisual wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
        <div class="l-keyVisual-body">

            <h1 class="l-keyVisual-bodyCopy wow fadeInDown liberation-b txtColor-wht" data-wow-duration="3.5s" data-wow-delay="2.0s">
<?php the_title(); ?></h1>


            <h2 class="l-keyVisual-bodySubCopy wow fadeInDown txtColor-wht" data-wow-duration="2.5s" data-wow-delay="3.0s" style="font-size:20px;">Coming Soon !</h2>
        </div><!-- /.l-keyVisual-body -->

</div><!-- /.l-keyVisual -->


<!-- page.php 固定ページtemp -->
<article <?php post_class(); ?>>
                <section class="" id="section01">
                        <div class="container">
	                        <div class="row">
                                        <div class="col-md-12 l-marginTop-md l-marginBottom-md">
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
