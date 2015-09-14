<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package SI
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Error 404: Oh Noes, This Page Cannot Be Found!', 'SI' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
