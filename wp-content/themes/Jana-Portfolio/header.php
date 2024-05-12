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
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap" rel="stylesheet">


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
<?php
$bg = get_field('page_background')['url'];
?>
<body <?php body_class(); ?> style="background-image:url('<?php echo $bg; ?>')">

   <!-- header -->
   <header role="banner" class="header show-me">
      <div class="header-inner site-bounds d-flex justify-content-start pt-4 pb-4">
        <nav><?php echo main_nav(); ?></nav>
      </div>
  </header>
    <!-- /header -->