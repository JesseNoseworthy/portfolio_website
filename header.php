<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=Lato:100, 400,300,700,900' rel='stylesheet' type='text/css'>
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
</head>

<section id="navigation" class="hide-nav">
  <!-- Navigation Container -->
  <div class="nav-container">

    <!-- Site Logo -->
    <div class="nav-title">
      <a href="#home" class="site-logo scroll">Jesse</a>
    </div>
    <!-- Navigation Menu -->
    <div class="nav-menu">
      <ul class="nav">
        <li><a href="#home" class="scroll link">Home</a></li>
        <li><a href="#about" class="scroll link">About</a></li>
        <li><a href="#portfolio" class="scroll link">Portfolio</a></li>
        <li><a href="#contact" class="scroll link">Contact</a></li>
      </ul>
    </div><!-- end nav menu -->
  </div><!-- end nav container -->
</section><!-- end navigation section -->

<body <?php body_class(); ?>>

<header>
  <div class="container">
  </div> <!-- /.container -->
</header><!--/.header-->

