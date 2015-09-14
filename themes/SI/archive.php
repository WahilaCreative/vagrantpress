<?php
/**
 * The template for displaying the cast studies
 *
 * @package SI
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="block">
        <h1 id="title">BLOG</h1>
      </div>
      
  		<?php if ( have_posts() ) : ?>
      <?php
			// Start the Loop.
        while ( have_posts() ) : the_post(); ?>
        
          <div class="accordion block">
            <div class="header">
              <img src='<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>'>
                <?php	$title = explode("^", get_the_title()); ?>
                <div class="header-title">
                  <h2><?php echo $title[0]; ?></h2>
                  <h1><?php echo $title[1]; ?></h1>
                </div>
              </div>
              <div class="content">
                <?php the_content( '<p>', '</p>' ); ?>
              </div>
              <div class="backLink">
                <h1><a href="<?php echo get_home_url(); ?>">< Back</a></h1>
              </div>
          </div>

      <?php

			// End the loop.
			endwhile;
      
      the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'SI' ),
				'next_text'          => __( 'Next page', 'SI' ),
				'before_page_number' => '<span>' . __( 'Page', 'SI' ) . ' </span>',
			) );

		endif;
		?>          
          
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>


