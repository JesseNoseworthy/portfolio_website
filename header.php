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


<body <?php body_class(); ?>>

<header>
  <div class="container">
  </div> <!-- /.container -->
</header><!--/.header-->

