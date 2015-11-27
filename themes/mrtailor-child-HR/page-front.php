<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

	<div class="full-width-page">

      <div id="primary" class="content-area">

          <div id="content" class="site-content" role="main">

                  <?php while ( have_posts() ) : the_post(); ?>

                      <div class="entry-content">
                          <?php the_content(); ?>
                      </div><!-- .entry-content -->

                  <?php endwhile; // end of the loop. ?>

          </div><!-- #content -->

      </div><!-- #primary -->
		</div>

<?php get_footer(); ?>
