<?php
 /* Template Name: MINDHOUSE Template */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php query_posts('category_name=podcast&showposts=-1'); ?>
            <?php if (!have_posts()) : ?>
                  <div class="alert alert-warning">
            <?php _e('Sorry, no results were found.', 'roots'); ?>
                  </div>
            <?php get_search_form(); ?>
            <?php endif; ?>
            <?php while (have_posts()) : the_post(); ?>
        <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
