<?php
/**
 * The template for displaying the page divider
 *
 * @package SI
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      
  		<?php if ( have_posts() ) : ?>
      <?php
			// Start the Loop.
        while ( have_posts() ) : the_post(); ?>
        
          <div class="accordion block">
            <div class="page-divider-header">
                <h2><?php echo get_the_title(); ?></h2>
              </div>
              <div class="page-content">
                <?php the_content( '<p>', '</p>' ); ?>
              </div>
              <div class="backLink">
                <h1><a href="<?php echo get_home_url(); ?>">< Back</a></h1>
              </div>
          </div>

      <?php

			// End the loop.
			endwhile;

		endif;
		?>          
          
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>


