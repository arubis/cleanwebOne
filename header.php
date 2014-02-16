<!DOCTYPE html>

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

  <head>
    <title>
      <?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>
    </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>"><!-- some WP-fed stuff -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- <link rel="shortcut icon" href="<?php // echo get_theme_option('favicon'); ?>"> -->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>">

    <!-- IE. Need I complain more? Honestly barely even trying anymore. -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 9]>
      <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Bootstrap, jQuery, jQ UI, jQ Mobile import -->
    <!-- the main CSS is now pulled into our Sass... -->
    <!-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
    <!-- Javascript is imported in functions.php -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" type="text/css">

    <!-- get our custom CSS, including Bootstrap (via Compass and gems) -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css">

    <!-- Leaflet.js powers our map here... -->
    <link rel="stylesheet" href="//cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
    <!-- the js is imported in functions.php -->
    
    <!-- Facebook Open Graph -->
    <meta property="og:title" content="Cleanweb">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.cleanweb.co">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Cleanweb">
    <meta property="fb:admins" content="100002188895899">

    <!-- Let Wordpress get the last word in -->
    <?php wp_head(); ?>

    <!-- We <3 Typekit for friendly beautiful webfonts! -->
    <!-- external js is imported in functions.php -->
    <script type="text/javascript">
      try{Typekit.load();}catch(e){}
    </script>
  </head>

  <body <?php body_class(); ?> id="main" data-spy="scroll" data-target="#subnav" data-offset="100">
  <!-- data-offset must be height of main navbar -->
  <!-- NOTE: when you change data-offset, also change the offset value in the inline javascript above! -->

  <!-- BEGIN black+white fadeup JS -->
  <script type="text/javascript">
  $(window).load(function(){
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true, // default true
        // set the path to BnWWorker.js for a superfast implementation
        webworkerPath : false,
        // for the images with a fluid width and height 
        responsive:true,
        // to invert the hover effect
        invertHoverEffect: false,
        // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
        intensity:1,
        speed: { //this property could also be just speed: value for both fadeIn and fadeOut
            fadeIn: 200, // 200ms for fadeIn animations
            fadeOut: 800 // 800ms for fadeOut animations
        },
        onImageReady:function(img) {
          // this callback gets executed anytime an image is converted
        }
      });
    });
  </script>
  <!-- END b+w fadeup JS -->

  <header id="header">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse"><span class="sr-only">Toggle navigation</span> <!-- 'icon-bar' is one-third of the 'hamburger nav' --></button>
        <div id="logo-container">
          <a class="navbar-brand" href="/" style="padding: 0;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cleanweb-logo.png" class="logo" alt="Cleanweb Initiative logo"></a>
        </div>
      </div><!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-primary-collapse">
        <!-- Adapted from http://www.flynsarmy.com/2013/10/getting-bootstrap-3-navbar-working-with-wordpress-wp_nav_menu/ -->
        <?php wp_nav_menu(array(
          'theme_location' => 'main_nav',
          'container_class' => 'menu-header',
          'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
          'walker' => new BS3_Walker_Nav_Menu
        )); ?>
      </div><!-- /.navbar-collapse -->
    </nav>
  </header>