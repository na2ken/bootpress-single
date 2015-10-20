<?php
/* Template Name: front-page */
get_header(); ?>
<!-- front-page-temp -->

<div class="l-coverUnit">
  <div class="l-coverUnit-body">
      <p class="m-coverUnit-shoulder text-center　txtColor-wht wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="1.5s" style="color: #f6f6f6;">
        <?php bloginfo('name'); ?>
      </p>
      <h1 class="m-coverUnit-copy txtColor-wht wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="2.0s" >WordPress X Bootstrap</h1>
      <h2 class="m-coverUnit-subCopy txtColor-wht wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="2.5s" >1分で作る応用自在のプロトタイプ！</h2>
      <div class="row">
          <div class="m-coverUnit-heroBtn col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8">
             <a class="btn btn-lg btn-block m-btn-yellow wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="2.5s" href="#" role="button">ダウンロードする</a>
          </div>
      </div><!-- /.row -->
  </div><!-- /.l-coverUnit-body -->

  <div class="l-coverUnit-footer text-center">
          <a href="#firstSection" class="m-scrollDown-icn-round m-scrollDown-icn-round-md is-wht hidden-xs page-scroll txtColor-wht wow pulse fadeInDown" data-wow-delay="3.5s" data-wow-iteration="infinite" data-wow-duration="2000ms">
              <i class="fa fa-angle-double-down fa-2x"></i>
          </a>
  </div>
</div><!-- /.coverUnit -->

<article>
    <section id="firstSection" class="l-paddingTop-sm l-paddingBottom-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                         <h1 class="m-section-copy text-center">速報！Bootstrap4ついにリリース！</h1>
                         <h2 class="m-csection-subCopy text-center">Bootstrap4の全貌はこちらで解説</h2>
                </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->

    <section id="service-info" class="l-paddingTop-sm l-paddingBottom-0 bgColorTone clearfix">
        <div class="container2">
            <div class="row2 no-gutter">
                <div class="col-sm-5">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/img/fig001.png" class="img-responsive" alt="fig">
                </div>
                <div class="col-sm-7">
                    <div class="m-paddingBox">
                         <h1 class="m-section-copy">WordPressはあなたにとって必須技術。</h1>
                         <h2 class="m-section-subCopy">これからのWebデザイナーは、WordPressは絶対できないと困ります。</h2>
                         <p class="">どれだけかかるかわからない、と思っていませんか？ある方法を使えば、WordPressの完全マスターをわずか6時間でOK。
                         </p>
                   </div>
                </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->

    <section id="service-detail" class="l-paddingTop-sm l-paddingBottom-0 clearfix">
        <div class="container2">
            <div class="row2 no-gutter">
                <div class="col-sm-5 col-sm-push-7">
                       <img src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/img/fig002.png" class="img-responsive" alt="fig." >
                </div>
                <div class="col-sm-7 col-sm-pull-5">
                    <div class="m-paddingBox">
                         <h1 class="m-section-copy">Bootstrap3をマスターチャンス！</h1>
                         <h2 class="m-section-subCopy">もう”カンテツ”は、やめませんか？</h2>
                         <p class="">CSSフレームワークを使えば、作業時間が半分以上に縮まります。「知りたいけど、学ぶ場所と時間がない！」そんなあなたに耳寄りな情報をご提供します。
                         </p>
                   </div>
                </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
</article>

<?php get_footer(); ?>
