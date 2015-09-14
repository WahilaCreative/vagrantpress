<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package SI
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.2.js"></script>
	<?php  wp_head();  ?> 
   <title><?php wp_title(); ?></title>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
</head>
<body <?php body_class(); ?>>

<?php if ( !is_front_page() ) { ?>

<header class="header">
  <nav class="site-nav">
    <div class="container">
      <div class="col-md-4">
        <a href="/"><img class="logo" src="<?php echo get_template_directory_uri();?>/img/SensoryLogo.jpg" alt="Sensory Interative" /></a>
      </div>
      <ul class="col-md-8">
        <li><a href="#what-we-do" title="">What we do</a></li>
        <li><a href="#clients" title="">Clients</a></li>
        <li><a href="#services" title="">Services</a></li>
        <li><a href="#blog" title="">Blog</a></li>
        <li><a href="#teams" title="">Team</a></li>
        <li><a href="#contact" title="">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>

<?php } ?>

    <div id="container">
      <div id="header">
<!--         <div id="nav" class='block'>
          <img id="menu" class="shiftnav-toggle" data-shiftnav-target="shiftnav-main" src="<?php echo  get_template_directory_uri();?>/img/menu.png" alt="menu" />
          <a href=""><img id="logo" src="<?php echo get_template_directory_uri();?>/img/SensoryLogo.jpg" alt="Sensory Interative" /></a>
        </div> -->
        <div id="content" class="site-content">
