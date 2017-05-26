<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pet
 */

get_header(); ?>

<style>

article {
	    padding: 4vh 0vh;
    border-bottom: 1px solid #ececec;
}

.entry-header {
    text-align: left;
    left: 0;
    position: fixed;
    max-width: 70%;
}

.posts-navigation {
	    padding: 5vh 0vh;
    text-align: center;
    width: 100%;
    border-top: 1px solid lightgray;
}


</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php $posts = query_posts($query_string . '&orderby=rand'); ?>
		<?php if ( have_posts() ) : ?>

			<header class="page-header">

				<?php the_content(); ?>
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

				<?php the_content(); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<script>
		$(window).scroll(function(){

    var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
    var  scrolltrigger = 0.95;

    // console.log('%scrolled='+(wintop/(docheight-winheight))*100);

    var percentage = (wintop/(docheight-winheight))*100;

    var roundedP = Math.round(percentage);
   

    document.getElementById("percent").innerHTML = roundedP;

    if  ((wintop/(docheight-winheight)) > scrolltrigger) {
       console.log('scroll bottom');
       lastAddedLiveFunc();
    }
});

if($('body').hasClass('tag-nicole-van-straatum')) {
	$('main').find('article').find('.entry-title').each(function(){
		var theTitle = $(this)[0].innerText;

		// console.log(theTitle);

		if(theTitle === 'SURINAME JOURNAL') {

			$.each(theTitle),function(index,value) {
				var num = index;
				$(value).attr('id',num);
			};
			$(this).parent().parent().addClass('remove-post-title');
		 	$(this).parent().parent().next('.images').addClass('remove-post-images');
		 	$(this).parent().parent().next('.images').next('.single-about').addClass('remove-post-about');
		}


});

	

}
		

</script>







