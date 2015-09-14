<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package SI
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.2.js"></script>
	<?php  wp_head();  ?> 
   <title><?php wp_title(); ?></title>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
</head>
<body <?php body_class(); ?>>
    <div id="container">
      <div id="header">
        <div id="nav" class='block'>
          <img id="menu" class="shiftnav-toggle" data-shiftnav-target="shiftnav-main" src="<?php echo  get_template_directory_uri();?>/img/menu.png" alt="menu" />
          <a href=""><img id="logo" src="<?php echo get_template_directory_uri();?>/img/SensoryLogo.jpg" alt="Sensory Interative" /></a>
        </div>
        <div id="content" class="site-content">
