<?php
if ( function_exists('ob_gzhandler') ) ob_start("ob_gzhandler");
if( function_exists("ob_gzhandler_no_errors") ) ob_start();
$GLOBALS['src'] = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php if (is_404()) {echo 'class="overflow"';} ?>>
<head>
  <title><?php wp_title( ' ', true, 'right' ); ?></title> 
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="google-site-verification" content="qSju0wRQSRXEcU38opD28csN1jssG-Iti5Msy-hX6x8" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo  $GLOBALS['src']; ?>/style.css?v=1.02">

  <!--[if lte IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
  <![endif]-->

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo  $GLOBALS['src'] ?>/dist/img/favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  

       <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ontouchstart>

<header class="header">
<div class="container header-container">
  <div class="logo-container">
    <a class="logo" href="<?php echo home_url('/'); ?>" title="<?php _e('Logo Rallio', 'rallio'); ?>">
      <!-- <img class="header__logo" src="<?php echo $GLOBALS['src']; ?>/dist/img/branding/rallio-logo.svg" alt="<?php _e('Logo Rallio', 'rallio'); ?>"> -->
      <?php get_template_part('dist/img/branding/rallio-logo.svg'); ?>
    </a>
    <div class="menu-toggler">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
  </div>
  <ul class="header-menu">
    <?php wp_nav_menu( array( 
      'theme_location' => 'main_menu', 
      'menu_class' => '',
      'items_wrap' => '%3$s',
      'container' => '',
      "container_class" => ''
    ) ); ?>
  </ul>
</div>
</header>