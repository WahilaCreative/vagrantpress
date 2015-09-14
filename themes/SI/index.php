<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 * blog page
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
        
          <div class="underline block">
            <div class="header">
                <?php	$title = get_the_title(); ?>
                <div class="header-title">
                  <h1><?php echo $title; ?></h1>
                </div>
              </div>
              <div class="content">
                <?php the_content( '<p>', '</p>' ); ?>
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


