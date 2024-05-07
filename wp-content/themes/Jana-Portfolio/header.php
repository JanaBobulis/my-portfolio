<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?>
  </title>

  <link rel="dns-prefetch" href="//diffuser-cdn.app-us1.com">

  <link rel="stylesheet" href="https://use.typekit.net/wyx0yep.css">

  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/safari-pinned-tab.svg"
    content="#163216">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>"
    href="<?php bloginfo( 'rss2_url' ); ?>" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">


  <link rel="stylesheet" href="https://use.typekit.net/dsx2kdh.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->
  <!-- Rob added to defer -->
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet"
    media="print" onload="this.media='all'">

  <?php wp_head(); ?>

  <!-- Bootstrap Style -->
  <link rel='stylesheet' id='bootstrapStyle'
    href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' media="print"
    onload="this.media='all'" />

  <!-- Custom Style -->
  <link rel='stylesheet' id='customStyle' href='<?php echo get_template_directory_uri(); ?>/style.css' media=" print"
    onload="this.media='all'" />

    <!-- <link rel="stylesheet" href="./dist/style.css"> -->

  <!-- <?php include (TEMPLATEPATH . '/criticalCSS.php'); ?> -->


  <!-- PRELOADS -->

<body <?php body_class(); ?>>

   <!-- header -->
   <header role="banner" class="header show-me">
      <div class="header-inner site-bounds">
        <nav><?php echo main_nav(); ?></nav>
      </div>
  </header>
    <!-- /header -->