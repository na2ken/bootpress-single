<?php
/* Template Name: page */
get_header(); ?>

<div class="l-coverUnit">
  <div class="l-coverUnit-body">
      <h1 class="m-coverUnit-headline txtColor-wht wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="1.5s" >
          <?php the_title(); ?>
      </h1>
  </div><!-- /.l-coverUnit-body -->
</div><!-- /.coverUnit -->

<!-- page temp. -->
<!-- start The Content -->
    <article>

        <section id="service-info" class="l-paddingTop-sm l-paddingBottom-sm clearfix">
            <div class="container2">
                <div class="row2 no-gutter">
                    <div class="container">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_content(); ?>

<?php endwhile; endif; ?>
                    </div><!-- /.container -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.section -->

    </article>
<!-- end The Content -->
<?php get_footer(); ?>