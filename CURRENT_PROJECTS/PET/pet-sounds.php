<?php

/* 
Template Name: PET SOUNDS
*/ 

get_header(); ?>
<style>#container {position:relative; width:400px; margin-top:4%; position: fixed; top:0;}

.line {
  fill:none;
  stroke:#000000;
  stroke-miterlimit:10;
  stroke-dasharray:400;
  stroke-dashoffset:400px;
  -webkit-transition: stroke-dashoffset 1s;
  -moz-transition: stroke-dashoffset 1s;
  -o-transition: stroke-dashoffset 1s;
  transition: stroke-dashoffset 1s;
}

.tooltip {
  opacity:0;
  -webkit-transition: all .3s .2s;
  font-size:12px;
}

body {
	background-size: cover;
	background-repeat:no-repeat;
	 background-attachment: fixed;
	 background-position: center center;
}
</style>

<div id="container">
 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 230.6 52.6" style="enable-background:new 0 0 230.6 52.6;" xml:space="preserve">
<circle id="button1" cx="113.7" cy="42.7" r="9.8"/> PET
	<!-- <circle id="button2" cx="220.7" cy="42.7" r="9.8"/> -->
	<polyline id="line_1" class="line" points="115.6,42.5 84.4,13.1 13.1,13.1 0,0 "/>
	<polyline id="line_2" class="line" points="220.6,42.6 220.6,14.1 150.1,14.1 139,3 "/>

	<text id="text1" transform="matrix(1 0 0 1 16.137 10.0081)" class="tooltip">A menagerie of animals </text>
	
	</svg>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	 
	 <?php query_posts( array ( 'category_name' => 'sounds', 'posts_per_page' => 12 ) ); ?>
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>

				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


				<div class="themusic" id="post-<?php the_ID(); ?>" 

					<?php post_class(); ?>>

						<div class="entry-content img-responsive">
						<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail(); ?>
								</a>
							<?php endif; ?>

					</div>
					<header class="entry-header">
						<h2>
						<?php the_title( ); ?>
						</h2>
			

						<?php if ( 'post' == get_post_type() ) : ?>
						<div class="entry-meta">
							
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->
				
				<p class="musicinfo">
					<?php the_excerpt() ?>
				</p>
	
				</div><!-- #post-## -->

			<?php endwhile; ?>

			

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<section><text id="text2" transform="matrix(1 0 0 1 154.137 10.0081)" class="tooltip">tooltip 2</text></section>

<script>
	
	$('article').each( function(index) {
			$(this).attr('id',index);
	});



$( "article"  )
	.mouseover(function() {
			var URL = $(this).find('img').attr('src');

	   	 $( 'body' ).css( "background-image", 'url('+URL+')' );
	   	 $('article').not($(this)).css('opacity','0');
	   	 	$(this).css('opacity','1');
	  
		
	  })
	  .mouseout(function() {
  		$( 'body' ).css( "background-image", 'none' );
  		 $('article').css('opacity','1');
	   	 $(this).css('opacity','1');
	
	  	
	  });
	  
 


	$(document).ready(function() {

  $("#button1").on("mouseover", function() {
    $('#line_1').css('stroke-dashoffset', '0');
    $('#text1').css('opacity', '100');
  });
  $("#button1").on("mouseout", function() {
    $('#line_1').css('stroke-dashoffset', '400px');
    $('#text1').css('opacity', '0');
  });
  
  $("#button2").on("mouseover", function() {
    $('#line_2').css('stroke-dashoffset', '0');
    $('#text2').css('opacity', '100');
  });
  $("#button2").on("mouseout", function() {
    $('#line_2').css('stroke-dashoffset', '400px');
    $('#text2').css('opacity', '0');
  });
});
</script>
<?php get_footer(); ?>
