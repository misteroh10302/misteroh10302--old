<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pet
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		
		<div class="getaround">



			<div class="left" style="float:left;">
				<?php previous_post_link('%link', '&#8249;', TRUE); ?>  
			</div>

			<div class="right" style="float:right;">
				<?php next_post_link('%link', '&#8250;', TRUE); ?>
			</div>

		</div>
			 
			 



		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<script>

var div = $(".single-about").height();
var win = $(window).height();

if (div > win ) {
    $(".single-about").addClass('unfix');
}


	$(window).scroll(function(){

    var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
    var  scrolltrigger = 0.95;

    // console.log('%scrolled='+(wintop/(docheight-winheight))*100);

    var percentage = (wintop/(docheight-winheight))*100;

    var roundedP = Math.round(percentage);
    console.log(roundedP);

    document.getElementById("percent").innerHTML = roundedP;

    if  ((wintop/(docheight-winheight)) > scrolltrigger) {
       console.log('scroll bottom');
       lastAddedLiveFunc();
    }
});
</script>
<?php get_footer(); ?>
