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
      <?php wp_title( '|', true, 'right' ); ?>
    </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>"><!-- some WP-fed stuff -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php // echo get_theme_option('favicon'); ?>">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>">

    <!-- IE. Need I complain more? Honestly barely even trying anymore. -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 9]>
      <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Bootstrap and jQuery import -->
    <!-- the main CSS is now pulled into our Sass... -->
    <!-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

    <!-- get our custom CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css">

    <!-- We <3 Typekit for friendly beautiful webfonts! -->
    <script type="text/javascript" src="//use.typekit.net/cfg6qvz.js"></script>
    <script type="text/javascript">
      try{Typekit.load();}catch(e){}
    </script>

    <!-- include jQuery plugin for b&w fade effect of sponsors -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.BlackAndWhite.js"></script>
    <!-- source: http://gianlucaguarini.github.io/jQuery.BlackAndWhite/ -->

    <!-- Leaflet.js powers our map here... -->
    <link rel="stylesheet" href="//cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
    <!--[if lte IE 8]>
      <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.ie.css" />
    <![endif]-->
    <script src="//cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script>
    
    <!-- Facebook Open Graph -->
    <meta property="og:title" content="Cleanweb">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.cleanweb.co">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Cleanweb">
    <meta property="fb:admins" content="100002188895899">

    <!-- get the Right(TM) visual effect on #landing's translucent headers -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/context_blender.js" type="text/javascript" async></script>

    <!-- Let Wordpress get the last word in -->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> id="main" data-spy="scroll" data-target="#subnav" data-offset="100">
  <!-- data-offset must be height of main navbar -->
  <!-- NOTE: when you change data-offset, also change the offset value in the inline javascript above! -->

  <!-- BEGIN Facebook Open Graph -->
  <div id="fb-root"></div>
  <script type="text/javascript">
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=196524820509397";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
  </script>
  <!-- END Facebook Open Graph -->

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