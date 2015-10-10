<?php
/* Template Name: 404 */
get_header(); ?>

<div class="l-keyVisual wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
        <div class="l-keyVisual-body">

            <h1 class="l-keyVisual-bodyCopy wow fadeInDown liberation-b txtColor-wht" data-wow-duration="3.5s" data-wow-delay="2.0s">
Hmmm... the page you're looking for isn't here.</h1>

        </div><!-- /.l-keyVisual-body -->

</div><!-- /.l-keyVisual -->


<!-- 404 temp. -->
<article <?php post_class(); ?>>
                <section class="" id="section01">
                        <div class="container">
	                        <div class="row">
                                        <div class="col-md-12 l-marginTop-sm l-marginBottom-sm">
                                        <p>お探しのページは、ネットワークやシステムの関係で一時的にアクセスできない状況にあるか、
                                          内容の移動もしくは情報の期限切れのため削除させていただいた可能性があります。恐れ要りますが、トップページか上下のメニューから適切を思われるページをクリックください。
                                        </p>
<div class="l-center l-center-ex1 l-marginTop-sm">
<p>
<a class="btn btn-default" href="<?php echo home_url(); ?>">トップページへ戻る</a>
</p>
</div>

                                        </div>
                                </div>
                        </div>
                </section><!-- /section01 -->
</article>
<?php get_footer(); ?>
