<?php

/* 
Template Name: PET HOME
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

article {
	cursor: pointer;
}

article img{
	cursor: pointer;
}

article h2 {
	font-family: Adobe;
	text-transform: initial;
	font-style: italic;

}

body {
	background-size: cover;
	background-repeat:no-repeat;
	 background-attachment: fixed;
	 background-position: center center;
	  -webkit-transition: background 300ms ease-in 200ms; /* property duration timing-function delay */
    -moz-transition: background 300ms ease-in 200ms;
    -o-transition: background 300ms ease-in 200ms;
    transition: background 300ms ease-in 200ms;

}

#dia {
	    position: fixed;
    bottom: 5rem;
    right: 15%;
    max-width: 50px;
}

#PET {

}

#mix-header {
	    font-family: percu;
    font-weight: bolder;
    color: black;
}

.middlepet {
	position: absolute;
	top:45%;
	margin: 0 auto;
	    position: fixed;
    top: 45%;
    left: 0;
    right: 0;
    margin: 0 auto;
    text-align: center;
    display: inline-block;
}


#PET {
	font-size: 20em;
    position: fixed;
    left: 0;
    right: 0;
    margin: 0 auto;
    margin-top: 0px;
    z-index: 100000000;
    text-align: center;
    color: white;
    font-family: 'Francois One', sans-serif;
 /*   margin-top: 12%;*/
    display: inline-block;
    max-width: 1500px;
    text-shadow: 0px 0px 300px #DADADA;
        position: fixed;
    pointer-events: none;
    top: 50%;
    -webkit-transform: translate3d(0, -50%, 0);
    -moz-transform: translate3d(0, -50%, 0);
    -ms-transform: translate3d(0, -50%, 0);
    -o-transform: translate3d(0, -50%, 0);
    transform: translate3d(0, -50%, 0);
}

.home article:nth-child(6) {
	margin-top: -2%;
	width: 550px;
}

.tag-web {
	      box-shadow: 10px 10px 100px #9e9797;
}
 img {
 	transition: 1s;
 }

.cover {
	background-size: cover;
	background-repeat:no-repeat;
	 background-attachment: fixed;
	 background-position: center center;
	 	z-index: 0;
	 opacity: 0;
   transition: opacity .25s ease-in-out;
   -moz-transition: opacity .25s ease-in-out;
   -webkit-transition: opacity .25s ease-in-out;
 position: fixed;
   height: 100vh;
   width: 100vw;
   top:0;
left:0;

}

</style>

<span id="PET">
	<img src="http://pet.cool/wp-content/uploads/2016/08/PET_pet7.png" alt="">

</span>

<div class="cover"></div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
	 
	 		<?php query_posts( array ( 'category_name' => 'pet_home', 'posts_per_page' => -1 ,'orderby'=>'rand') ); ?>
	 	
	 			<?php if ( have_posts() ) : ?>
	 	
	 	
	 				<?php if ( is_home() && ! is_front_page() ) : ?>
	 	
	 					<header>
	 						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
	 					</header>
	 				<?php endif; ?>
	 	
	 				<?php /* Start the Loop */ ?>
	 				<?php while ( have_posts() ) : the_post(); ?>
	 					<article  id="post-<?php the_ID(); ?>" 
	 						<?php post_class(); ?>>
	 						<div class="entry-content img-responsive">
	 						<?php if ( has_post_thumbnail() ) : ?>
	 									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	 										<?php  
	 											$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail-size' ); 
	 											$url = $thumb['0']; 
	 											the_post_thumbnail('post_thumbnail', array( 'class' => 'lazy','data-original'=>$url)); 
	 										?>
	 									</a>
	 						<?php endif; ?>
	 	
	 						<?php $category_name = 'Mix';
	 							if(in_category($category_name)) {
	 						?><img id="sound-image"src="http://pet.cool/wp-content/uploads/2016/08/unnamed.png" alt="pet-mix">
	 									
	 							
	 							<header class="entry-header">
	 								<span id="mix-header">
	 									<?php the_title(); ?> | MIX
	 								</span>
	 							</header><!-- .entry-header -->
	 	
	 						<?php
	 							}
	 						?>
	 	
	 	
	 						<?php $category_name = 'Video';
	 							if(in_category($category_name)) {
	 						?>
	 							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

	 								<header class="entry-header">
	 							
	 								<div class="content-video-hp">
	 									<?php the_content(); ?>
	 	
	 								</div>
	 							</header><!-- .entry-header -->
	 							</a>
	 	
	 						<?php
	 							}
	 						?>
	 	
	 						</div><!-- .entry-content -->
	 						<header class="entry-header">
	 							<h2 >
	 							<?php the_title( ); ?>
	 							</h2> 
	 							<?php if ( 'post' == get_post_type() ) : ?>
	 							<div class="entry-meta">
	 								
	 							</div><!-- .entry-meta -->
	 							<?php endif; ?>
	 						</header><!-- .entry-header -->
	 						
	 					</article><!-- #post-## -->
	 	
	 				<?php endwhile; ?>
	 	
	 				
	 	
	 			<?php else : ?>
	 	
	 				<?php get_template_part( 'template-parts/content', 'none' ); ?>
	 	
	 			<?php endif; ?>
	 	
		</main><!-- #main -->
	</div><!-- #primary --><div id="dia"><a href="mailtop:contact@pet.cool">Contact</a></div>
	<section><text id="text2" transform="matrix(1 0 0 1 154.137 10.0081)" class="tooltip">tooltip 2</text></section>

<script>

$(document).ready(function() {
	
	$("img.lazy.wp-post-image").lazyload({
	    effect : "fadeIn",
	    threshold : 100
	});


	$('article').each( function(index) {
		$(this).attr('id',index);
	
		if ($(this).id%2 == 0) {
		
		} else {
		
		}

		var thenum = Math.floor((Math.random() * 5) + 1);

	});

	$( "article" ).draggable({
	  addClasses: false
	});

	$('img').load(function(){
		$(this).css('opacity','1');
	});


	 var isDesktop = (function() {
	  return !('ontouchstart' in window) // works on most browsers 
	  || !('onmsgesturechange' in window); // works on ie10
	 })();
	 //edit, if you want to use this variable outside of this closure, or later use this:
	 window.isDesktop = isDesktop;
	 if( isDesktop ){ 


 			$(".site-main" ).on('mouseover','img',function(e) {
				var URL = $(this).attr('src');
				$('.cover').css({'opacity':'1',"background-image":'url('+URL+')','transition': 'opacity .25s ease-in-out',
	   			'-moz-transition': 'opacity .25s ease-in-out',
	  			 '-webkit-transition':' opacity .25s ease-in-out'} );
	
			   	 $('article').not($(this)).css({'opacity':'0'},{'-webkit-filter':'blur(10px)'});
			   	 $('article img').css('-webkit-filter', 'blur(0px)');
		   	 	$(this).offsetParent().css('opacity','1');
		   	 	$(this).offsetParent().find('h2').css({'-webkit-filter':'blur(0px)','color':'black','opacity':'1','font-size':'42px','position':'fixed',"top":'32px','z-index':'500000000','left':'24px','margin':'0 auto','text-align':'left','display':'inline-block','width':'auto'});
		  }).mouseout(function() {
	  		$( '.cover' ).css( {'opacity':'0','transition': 'opacity .25s ease-in-out','-moz-transition': 'opacity .25s ease-in-out','-webkit-transition':' opacity .25s ease-in-out'} );
	  		
	  		 $('article').css('opacity','1');
	 		$('article img').css('-webkit-filter', 'blur(0px)');
		   	 $(this).offsetParent().css('opacity','1');
		   	 $(this).offsetParent().find('h2').css({'font-size':'initial','position':'initial','top':'auto',"left":'auto','opacity':'0'});
		  	
		  });
  }
});


	//capture scroll any percentage
$(window).scroll(function(){
    var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
    var  scrolltrigger = 0.95;
    var percentage = (wintop/(docheight-winheight))*100;

    var roundedP = Math.round(percentage);

    document.getElementById("percent").innerHTML = roundedP;

    if  ((wintop/(docheight-winheight)) > scrolltrigger) {

    }
});


</script>
<?php get_footer(); ?>
