<?php
/**
 * The template for displaying the cast studies
 *
 * @package SI
 */

get_header(); ?>

<article class="casestudy">      
  		<?php if ( have_posts() ) : ?>
      <?php
			// Start the Loop.
        while ( have_posts() ) : the_post(); ?>
        
        <?php $title = explode("^", get_the_title()); ?>

        <div class="container">
          <header>
            <h2><?php echo $title[0]; ?></h2>
            <h1><?php echo $title[1]; ?></h1>
          </header>
          <div class="row">
            <div class="col-md-3">
              
            </div>
            <div class="col-md-9 content">
              <?php the_content( '<p>', '</p>' ); ?>
            </div>
          </div>
        </div>

      <?php

			// End the loop.
			endwhile;

		endif;
		?>          
          
    <div class="evaluate">
      <div class="container">
        We evaluate, plan, launch, and operate technology-driven experiences that generate revenue and connect brands with customers.
      </div>
    </div>
	</article><!-- .content-area -->

<?php get_footer(); ?>


