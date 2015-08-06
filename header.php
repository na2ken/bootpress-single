<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="">
    <title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
     <!-- WOW -->
     <link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/original_theme-master/animate.css">

    <!-- Drawer -->
    <link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/original_theme-master/drawer.css">

    <!-- Original CSS -->
    <link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/original_theme-master/ptn_pj.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39499473-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="<?php echo attribute_escape( $post->post_name ); ?>Page">
  <header id="header" class="demo-header navbar navbar-default navbar-fixed-top" role="banner">
      <div class="container">
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <h1 class="navbar-header">
              <a href="<?php echo home_url(); ?>" class="navbar-brand"><img src="<?php echo home_url(); ?>/wp-content/themes/original_theme-master/img/vi.png" height="auto" width="60" alt="pj-imgVi-gry"></a>
          </h1><!-- /.navbar-header -->
          <nav class="navbar-collapse collapse" id="navigation" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'header-navi', 'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>' ) ); ?>
          </nav><!-- /.navbar-collapse -->
      </div><!-- /.container -->
  </header><!-- /.navbar -->
