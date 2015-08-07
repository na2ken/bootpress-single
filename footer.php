<footer class="footer lay-footer space-footerAbove bgcolor-footerAbove">
       <div class="lay-footerAbove space-footerAbove bgcolor-footerAbove">
             <div class="container">
                   <div class="row">
                         <div class="col-md-4 lay-footerCol">
                         <h3 clas="">Category</h3>
<?php
// footer nav Left
wp_nav_menu( array( 'theme_location' => 'footer-left-column' ) ); ?>
                         </div>
                         <div class="col-md-4 lay-footerCol">
                         <h3 clas="">SNS link.</h3>
<?php
// footer nav Center
wp_nav_menu( array( 'theme_location' => 'footer-center-column' ) ); ?>
                         </div>
                         <div class="col-md-4 lay-footerCol">
                         <h3 clas="">footer menu</h3>
<?php
// footer nav Right
wp_nav_menu( array( 'theme_location' => 'footer-right-column' ) ); ?>
                         </div>
                    </div><!-- /.row -->
              </div><!-- /.container -->
        </div><!-- /.lay-footerAbove -->

        <div class="lay-footeBelow space-footerBelow bgcolor-footerAbove">
              <div class="container">
                      <div class="row">
                        <small>Copyright &copy; <?php bloginfo( 'name' ); ?></small>
                      </div><!-- /.row -->
              </div><!-- /.container -->
        </div><!-- /.lay-footeBelow -->
</footer><!-- /.footer -->
<?php wp_footer(); ?>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- bootstrap-autohidingnavbar -->
        <script src="http://www.google.com/jsapi/"></script>
        <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/jquery.bootstrap-autohidingnavbar.min.js"></script>

        <!-- ClockPicker script -->
        <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/bootstrap-clockpicker.js"></script>

        <!-- Slick -->
        <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/slick.js"></script>

        <!-- WOW -->
        <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/moment.min.js"></script>
        <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/daterangepicker.js"></script>
        <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/wow.js"></script>

        <!-- Drawer & Vendor js -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.1/iscroll-min.js"></script>
        <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/jquery.drawer.js"></script>

        <!-- Vague -->
        <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/Vague.js"></script>

        <!-- Original Script -->
        <script src="<?php echo home_url(); ?>/wp-content/themes/bootpress-single/bss.js"></script>
</body>
</html>
