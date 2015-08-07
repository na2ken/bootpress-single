<?php
/* Template Name: Top */

get_header(); ?>

        <div class="demo-keyVisual wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
                <div class="demo-keyVisual__body">
                    <p class="demo-keyVisual__bodyCopy wow fadeInDown liberation-b txtColor-wht" data-wow-duration="3.5s" data-wow-delay="2.0s">

<?php bloginfo( 'name' ); ?><?php wp_title(); ?>

                    <p class="demo-keyVisual__XX wow fadeInDown txtColor-wht" data-wow-duration="2.5s" data-wow-delay="3.0s"  style="font-size:20px;">Coming Soon !</p>
                </div><!-- /.demo-keyVisual__body -->

               <div class="demo-keyVisual__hero-btn text-center">

        <a class="demo-btn-icon-round btn-icon-round--lg is-white hidden-xs wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="4.0s" href="#section01">
<i class="fa fa-angle-double-down fa-2x wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="4.0s"></i></a>

               </div><!-- /.demo-keyVisual__hero-btn -->
        </div><!-- /.demo-keyVisual -->

<!-- top.php -->
        <article>

<section id="section01">
        <div class="container">
           <div class="row">
<div class="col-sm-12 text-center">
<div class="lay-marginTop-lg lay-marginBottom-lg">
<h1 class="h1"><?php bloginfo( 'name' ); ?><?php wp_title(); ?></h1>


</div><!-- lay-marginTop-lg -->
</div>
           </div><!-- /.row2 -->
        </div><!-- /.container2 -->
</section><!-- /.section01 -->

<?php
$args = array( 'post_type' => 'seminar001', 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) : setup_postdata( $post ); ?>
<section class="" id="<?php post_class(); ?>">
        <div class="container-fluid" style="background:">
           <div class="row no-gutter" style="background:">
<div class="col-sm-12 text-center" style="background: transparent;">
<h2 class="h3"><?php the_title(); ?></h2>
</div>
<?php the_content(); ?>

           </div><!-- /.row2 -->
        </div><!-- /.container2 -->
</section><!-- /.section01 -->

<?php
endforeach;
wp_reset_postdata();
?>




        </article>
<!-- / top.php -->
<?php get_footer(); ?>
