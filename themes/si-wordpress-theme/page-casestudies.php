<?php
/**
 * Template Name: casestudies
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package SI
 */

get_header(); ?>

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
</header><!-- /header -->
<article class="container">
  <div class="col-md-12">
    <h1>Team</h1>
  </div>
  
</article>
<div class="container">

<ul class="team-list">
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
      $specifier = explode(';' ,get_the_content());
    endwhile;

    foreach ($specifier as $value) {
      $call = explode(':', $value);
      $args = array(
              'name'      => $call[1],
              'post_type' => $call[0]
                    );
      if($call[0] == 'back'){ 
              echo '<div class="backLink">
                <h1><a href="', get_home_url() ,'">< Back</a></h1>
              </div>';
      }
      $query = new WP_Query($args);
      if ( $query->have_posts() ) {
    // Start looping over the query results.
        while ( $query->have_posts() ) {
        $query->the_post();

?>
  <li>

  <a href="<?php echo post_permalink(); ?>"><div class="underline team">
    <img src='<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'full' )[0]; ?>'>
    <h2><?php echo  the_title(); ?></h2>
    <h3><?php echo get_the_excerpt(); ?></h3>
  </div></a>

  </li>

  <?php }

        wp_reset_postdata();
      }

    }
 ?>

 </ul>

</div>

<?php get_footer(); ?>