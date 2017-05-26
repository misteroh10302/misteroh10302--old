<article <?php post_class(); ?>>
<div class="post<?php the_category_unlinked(' '); ?>">
  <header>
    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
    <?php the_post_thumbnail('large'); ?>
  </header>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
    
  </div>
 </div>
</article>
