<footer class="footer l-footer l-paddingTop-sm l-paddingBottom-sm clearfix">
       <div class="l-footerAbove">
             <div class="container">
                   <div class="row">
                         <div class="col-md-4 l-footerCol">
                              <h3 class="tXtColor-wht">Social link</h3>
                              <ul class="list-inline">
                                <li> <a href="https://www.facebook.com/na2ken" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook fa-2x"></i></a> </li>
                                <li> <a href="https://plus.google.com/u/0/b/102875214712897017331/+Na2ken5150/videos" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus fa-2x"></i></a> </li>
                                <li> <a href="https://twitter.com/natsuken1" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter fa-2x"></i></a> </li>
                              </ul>
                         </div>
                         <div class="col-md-4 l-footerCol">
                             <h3 class="tXtColor-wht">Category is....</h3>
                              <?php
                             // footer nav Center
                             wp_nav_menu( array( 'theme_location' => 'footer-center-column' ) ); ?>
                         </div>
                         <div class="col-md-4 l-footerCol">
                           <h3 class="tXtColor-wht">Utilities</h3>
                           <?php
                           // footer nav Right
                           wp_nav_menu( array( 'theme_location' => 'footer-right-column' ) ); ?>
                         </div>
                    </div><!-- /.row -->
              </div><!-- /.container -->
        </div><!-- /.l-footerAbove -->

        <div class="l-footeBelow">
              <div class="container">
                      <div class="row">
                          <small>Copyright &copy; <?php bloginfo( 'name' ); ?></small>
                      </div><!-- /.row -->
              </div><!-- /.container -->
        </div><!-- /.lay-footeBelow -->
</footer><!-- /.footer -->
<?php wp_footer(); ?>

    <!-- Bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- WOW -->
    <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/wow.js"></script>

    <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/jquery.bootstrap-autohidingnavbar.js"></script>
    <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/bps.js"></script>

    <script>
      wow = new WOW(
        {
          animateClass: 'animated',
          offset:       100,
          callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
          }
        }
      );
      wow.init();
      document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
      };
    </script>

</script>
</body>
</html>