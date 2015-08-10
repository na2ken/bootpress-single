<?php
/* Template Name: front-page */
get_header(); ?>

        <div class="l-keyVisual wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
                <div class="l-keyVisual-body">
                    <h1 class="l-keyVisual-bodyCopy wow fadeInDown liberation-b txtColor-wht" data-wow-duration="3.5s" data-wow-delay="2.0s">

<?php bloginfo( 'name' ); ?><?php wp_title(); ?>
                    </h1>
                    <h2 class="l-keyVisual-bodySubCopy wow fadeInDown txtColor-wht" data-wow-duration="2.5s" data-wow-delay="3.0s" style="font-size:20px;">Coming Soon !</h2>
                </div><!-- /.l-keyVisual-body -->

               <div class="l-keyVisual__hero-btn text-center">

        <a class="mod-btn-icn-round btn-icn-round--lg is-white hidden-xs wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="4.0s" href="#section01">
<i class="fa fa-angle-double-down fa-2x wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="4.0s"></i></a>

               </div><!-- /.l-keyVisual__hero-btn -->
        </div><!-- /.l-keyVisual -->

<!-- top.php -->
       <article>

<section id="section01">
        <div class="container">
           <div class="row">
                <div class="col-sm-12 l-marginTop-md l-marginBottom-mdtext-center">

<h1 class="h1"><?php bloginfo( 'name' ); ?><?php wp_title(); ?></h1><p>　　</p>
                </div><!-- col-sm-12 -->
           </div><!-- /.row -->
        </div><!-- /.container -->
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
