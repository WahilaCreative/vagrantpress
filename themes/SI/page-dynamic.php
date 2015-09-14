<?php
/**
 * Template Name: dynamic
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package SI
 */

get_header(); ?>
 
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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


        if ($call[0] == 'case-studies'){
      ?>

        <div id="accordion" class="accordion block">
          <div class="header">
            <img src='<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'full' )[0]; ?>'>
              <?php	$title = explode("^", get_the_title()); ?>
              <div class="header-title">
                <h2><?php echo $title[0]; ?></h2>
                <h1><?php echo $title[1]; ?></h1>
              </div>
            </div>
            <div class="content">
            <?php the_excerpt( '<p>', '' ); ?>
            <h2 class="moreLink"><a href="<?php echo post_permalink(); ?>">MORE ></a></h2>
            </p>
          </div>
        </div>

      <?php
          }elseif ($call[0] == 'text'){
            $img = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'full' )[0];
            echo '<div class="text">';
            if ($img){
              echo '<img src=', $img, '>';
            }
            echo '<div id="description">';
            the_content('<p>', '</p>');
            echo '</div></div>';
          }elseif ($call[0] == 'divider'){
            $img = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'full' )[0];
            echo '<div class="underline">';
            if ($img){
              echo '<img src=', $img, '>';
            }
            the_content();
            echo '</div>';
          }elseif ($call[0] == 'page-divider'){
            $img = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'full' )[0];
            echo '<a href=', post_permalink(), '><div class="underline">';
            if ($img){
              echo '<img src=', $img, '>';
            }
            the_excerpt();
            echo '</div></a>';
          }elseif ($call[0] == 'team'){
          ?>
          <a href="<?php echo post_permalink(); ?>"><div class="underline team">
            <img src='<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'full' )[0]; ?>'>
              <h2><?php echo	the_title(); ?><br>
            <?php echo get_the_excerpt(); ?></h2>
          </div></a>
         <?php
          }
      wp_reset_postdata();
        }
  }
    }?>


<?php get_footer(); ?>
