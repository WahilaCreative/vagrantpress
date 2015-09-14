<?php
/**
 * The template for displaying the cast studies
 *
 * @package SI
 */

get_header(); ?>

<article>

  <div class="container">
    <h1 class="heading">Team</h1>
  </div>

  <?php if ( have_posts() ) : ?>
  <?php
  // Start the Loop.
    while ( have_posts() ) : the_post(); ?>

    <div class="image-clip">
      <img class="person-image" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>">
    </div>

    <div class="team-display container">
      <div class="row">
        <div class="col-sm-3 team-display-context">
          <?php $title = explode("^", get_the_title()); ?>
          <h1 class="name"><?php echo $title[0]; ?></h1>
          <h2 class="title"><?php echo the_excerpt(); ?></h2>
        </div>
        <div class="col-sm-9 content">
          <?php the_content( '<p>', '</p>' ); ?>
        </div>
      </div>
    </div>

  <?php
  endwhile;
  endif;
  ?>

</article>

<?php get_footer(); ?>


